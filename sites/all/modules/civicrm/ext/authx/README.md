# AuthX

The AuthX extension provides support for additional authentication protocols on CiviCRM pages.
This is useful for automated testing and developing multi-modal pageflows (eg email => HTTP).

## Overview

There are two general flows of authentication, each with a few variations:

* __Ephemeral / Stateless__: The client submits a singlular request (such as an API call) which includes credentials. The request is authenticated and processed, but then it is abandoned.
  There are a couple flavors of stateless authentication:
    * __Parameter (`param`)__: The credential is submitted with an HTTP GET or POST parameter (`?_authx=<credential>`)
    * __Common Header (`header`)__: The credential is submitted with an HTTP (`Authorization:`). Depending on the credential, this will use either `Basic` or `Bearer`.
      The standard header is easier to integrate with external applications; however, other features or plugins in the CMS may interfere with correct operation.
    * __X-Header (`xheader`)__: The credential is again submitted with an HTTP header (`X-Civi-Auth:`). The header behaves the same as the common header. The
      differing name means that clients must specifically support it, but it also reduces the odsd of interference.
* __Persistent / Stateful__: The client makes a request for a persistent session, attaching the contact ID and/or user ID. These will be used in subsequent requests.
    * __End-point session (`login`)__: The client submits an explicit authentication request (`POST /civicrm/authx/login?_authx=<credential>`) which creates a session and cookie.
      The authenticated session endures until one logs out (`/civicrm/authx/logout`).
    * __Auto session (`auto`)__: The clients submits a GET request for any page (`?_authx=<credential>&_authxSes=1`). The session is initialized. The user redirects
      to original page.

Each flow may (configurably) accept any of these credentials:

* __JSON Web Tokens (`jwt`)__: These tokens must be generated by Civi using a cryptographic signing key and expiration time.
  The client submits the token as its sole credential.
* __API Key (`api_key`)__: The user configures a value for `civicrm_contact.api_key`. The client submits
  the token as its sole credential.
* __Username/Password (`pass`)__: The client submits the username and password for a CMS user.

CiviCRM `Contact` records are often linked to CMS `User` records -- but not always. There are different ways to approach this matching:

* __Ignore__: Ignore any related `User` accounts. From a CMS perspective, the user is anonymous.
* __Optional__:  If there is a correlated CMS `User`, then load it. If there isn't, leave the CMS user as anonymous.
* __Require__: Only allow authentication if proceed if there is a correlated user account.

## Configuration

For each authentication flow, one may toggle support for different credentials and user-links. Here is the default configuration:

* Ephemeral: Parameter flow
    * Accepted credentials (`authx_param_cred`): `['jwt']`
    * User link (`authx_param_user`): `'optional'`
* Ephemeral: Common header flow
    * Accepted credentials (`authx_header_cred`): `['jwt']`
    * User link (`authx_header_user`): `'optional'`
* Ephemeral: X header flow
    * Accepted credentials (`authx_xheader_cred`): `['jwt']`
    * User link (`authx_xheader_user`): `'optional'`
* Persistent: End-point session flow
    * Accepted credentials (`authx_login_cred`): `['jwt']`
    * User link (`authx_login_user`): `require`
* Persistent: Auto session flow
    * Accepted credentials (`authx_auto_cred`): `['paramalogin']` for Joomla, and `[]` for all others
    * User link (`authx_auto_user`): `require`

## Quirks and Compatibility

Some modes may not be supported in some environments. For example:

* __Joomla, WordPress__: Creates extraneous sessions (e.g. even if the request is for stateless authentication).
* __WordPress__: The default `.htaccess` in WordPress may obscure the common  `Authorization:` header. Fix this by adding:
    ```
    SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
    ```

## Examples

### JSON Web Token

By default, JSON Web Tokens are accepted for authentication in all flows.

To use JWT authentication, you must first prepare a token on the server:

```php
$token = Civi::service('crypto.jwt')->encode([
  'exp' => time() + 5*60,       // Expires in 5 minutes
  'sub' => 'cid:203',           // Subject (contact ID)
  'scope' => 'authx',           // Allow general authentication
]);
```

This `$token` should be given to some other agent (e.g.  web browser, custom script, or email client).

For example, here's a custom script which uses the `$token` to call APIv3 (`Contact.get`).  The token is based with the common HTTP authorization header:

```php
$options = ['http' => [
  'method'  => 'GET',
  'header' => "Authorization: Bearer $token",
]];
$url = 'https://example.org/civicrm/ajax/rest?entity=Contact&action=get&json='
  . urlencode(json_encode(["id" => "user_contact_id"]));
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
```

Alternatively, if you needed to send an email with a sign-in link, the JWT could be passed as an `?_authx` parameter.

```php
$url = CRM_Utils_System::url('civicrm/dashboard', [
  '_authx' => "Bearer $token",
  '_authxSes' => 1,
], TRUE, NULL, FALSE);
$html = sprintf('<body>Here is your login link: <a href="%s">%s</a></body>',
  htmlentities($url), htmlentities($url));
CRM_Utils_Mail::send([...'html' => $html...]);
```

### Username and Password

By default, username/password authentication is not enabled.

```
$ curl 'https://demouser:demopass@example.org/civicrm/authx/id'
HTTP 401 Password authentication is not supported
```

However, if you activate it, then it will work with standard HTTP clients:

```
$ cv ev 'Civi::settings()->set("authx_header_cred", ["pass","jwt"]);'

$ curl 'https://demouser:demopass@example.org/civicrm/authx/id'
{"contact_id":203,"user_id":"2"}
```

The "AuthX: Authenticate to services with password" CiviCRM permission must
also be granted for the role associated to the user.
