{*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
*}
{* CiviCampaign DashBoard (launch page) *}


{if $subPageType}
  {* load campaign/survey/petition tab *}
  {include file="CRM/Campaign/Form/Search/$subPageType.tpl"}
{else}
  {include file="CRM/common/TabHeader.tpl"}
  <div class="clear"></div>
{/if}




