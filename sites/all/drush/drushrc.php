<?php 


$options['sites'] = array (
  0 => 'jubinofski-dms.jmaconsulting.ca',
  1 => 'wellnesed-dms.jmaconsulting.ca',
  2 => 'mike7-dms.jmaconsulting.ca',
  3 => 'pcftest-dms.canadahelps.org',
  4 => 'mike14-dms.jmaconsulting.ca',
  5 => 'aegirtest4.jmaconsulting.biz',
  6 => 'jubinopizz-dms.jmaconsulting.ca',
  7 => 'aegirtest3.jmaconsulting.biz',
  8 => 'mike8-dms.jmaconsulting.ca',
  9 => 'aegirtest.jmaconsulting.biz',
  10 => 'mifflin-dms.jmaconsulting.ca',
  11 => 'mikes17-dms.jmaconsulting.ca',
  12 => 'aegirchtes-dms-dms.canadahelps.org',
  13 => 'eltest-dms.jmaconsulting.ca',
  14 => 'mike24-dms.jmaconsulting.ca',
  15 => 'mike12-dms.jmaconsulting.ca',
  16 => 'aaa1212-dms.canadahelps.org',
  17 => 'mike51-dms.jmaconsulting.ca',
  18 => 'mike50-dms.jmaconsulting.ca',
  19 => 'scranton-dms.jmaconsulting.ca',
  20 => 'barrych-dms.jmaconsulting.ca',
  21 => 'tryingagai-dms.jmaconsulting.ca',
  22 => 'mike56-dms.jmaconsulting.ca',
  23 => 'aegirtest2.jmaconsulting.biz',
  24 => 'test3-dms.canadahelps.org',
  25 => 'mike20-dms.jmaconsulting.ca',
  26 => 'mike15-dms.jmaconsulting.ca',
  27 => 'mike16-dms.canadahelps.org',
  28 => 'aegirtest6.jmaconsulting.biz',
  29 => 'bugtesting-dms.jmaconsulting.ca',
  30 => 'doonder-dms.jmaconsulting.ca',
  31 => 'mike13-dms.canadahelps.org',
  32 => 'mike9-dms.jmaconsulting.ca',
  33 => 'juliedch-dms.canadahelps.org',
  34 => 'aegirtest8.jmaconsulting.biz',
  35 => 'b2test-dms.canadahelps.org',
  36 => 'moose-dms.jmaconsulting.ca',
  37 => 'aegirtest5.jmaconsulting.biz',
  38 => 'mike23-dms.jmaconsulting.ca',
  39 => 'mike58-dms.jmaconsulting.ca',
  40 => 'aaa1-dms.canadahelps.org',
  41 => 'emailpwd-dms.jmaconsulting.ca',
  42 => 'aegirtest7.jmaconsulting.biz',
  43 => 'mike13-dms.jmaconsulting.ca',
  44 => 'elopez-dms.jmaconsulting.ca',
  45 => 'smallpotat-dms.jmaconsulting.ca',
  46 => 'wallyjulie-dms.jmaconsulting.ca',
  47 => 'b2test3-dms.canadahelps.org',
  48 => 'mike26-dms.jmaconsulting.ca',
  49 => 'mike11-dms.jmaconsulting.ca',
  50 => 'mike30-dms.jmaconsulting.ca',
  51 => 'slee-dms.jmaconsulting.ca',
  52 => 'dunder-dms.jmaconsulting.ca',
  53 => 'mike60-dms.jmaconsulting.ca',
  54 => 'mike67-dms.jmaconsulting.ca',
  55 => 'rya-dms.jmaconsulting.ca',
  56 => 'wallyb-dms.jmaconsulting.ca',
);
$options['profiles'] = array (
  0 => 'standard',
  1 => 'minimal',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.82',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7016',
        'version' => '7.82',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.82',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7019',
        'version' => '7.82',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.82',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.82',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.82',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.82',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.82',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.82',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.82',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.82',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.82',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'version' => '7.82',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.82',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.82',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.82',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.82',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'version' => '7.82',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7084',
        'version' => '7.82',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.82',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.82',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.82',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.82',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.82',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.82',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/boot.test',
            6 => 'tests/bootstrap.test',
            7 => 'tests/cache.test',
            8 => 'tests/common.test',
            9 => 'tests/database_test.test',
            10 => 'tests/entity_crud.test',
            11 => 'tests/entity_crud_hook_test.test',
            12 => 'tests/entity_query.test',
            13 => 'tests/error.test',
            14 => 'tests/file.test',
            15 => 'tests/filetransfer.test',
            16 => 'tests/form.test',
            17 => 'tests/graph.test',
            18 => 'tests/image.test',
            19 => 'tests/lock.test',
            20 => 'tests/mail.test',
            21 => 'tests/menu.test',
            22 => 'tests/module.test',
            23 => 'tests/pager.test',
            24 => 'tests/password.test',
            25 => 'tests/path.test',
            26 => 'tests/registry.test',
            27 => 'tests/request_sanitizer.test',
            28 => 'tests/schema.test',
            29 => 'tests/session.test',
            30 => 'tests/tablesort.test',
            31 => 'tests/theme.test',
            32 => 'tests/unicode.test',
            33 => 'tests/update.test',
            34 => 'tests/xmlrpc.test',
            35 => 'tests/upgrade/upgrade.test',
            36 => 'tests/upgrade/upgrade.comment.test',
            37 => 'tests/upgrade/upgrade.filter.test',
            38 => 'tests/upgrade/upgrade.forum.test',
            39 => 'tests/upgrade/upgrade.locale.test',
            40 => 'tests/upgrade/upgrade.menu.test',
            41 => 'tests/upgrade/upgrade.node.test',
            42 => 'tests/upgrade/upgrade.taxonomy.test',
            43 => 'tests/upgrade/upgrade.trigger.test',
            44 => 'tests/upgrade/upgrade.translatable.test',
            45 => 'tests/upgrade/upgrade.upload.test',
            46 => 'tests/upgrade/upgrade.user.test',
            47 => 'tests/upgrade/update.aggregator.test',
            48 => 'tests/upgrade/update.trigger.test',
            49 => 'tests/upgrade/update.field.test',
            50 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.82',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.82',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.82',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'version' => '7.82',
      ),
      'civicrm_engage' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_engage/civicrm_engage.module',
        'basename' => 'civicrm_engage.module',
        'name' => 'civicrm_engage',
        'info' => 
        array (
          'name' => 'CiviEngage',
          'description' => 'DEPRECATED Walklist and Phone-banking support for CiviCRM. This module will not be ported to Drupal 8. Please see: https://civicrm.org/blog/jamie/civicrmengage-is-dead-long-live-civicrmengage',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'files' => 
          array (
            0 => 'civicrm_engage.module',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.82',
      ),
      'civicrm_group_roles' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_group_roles/civicrm_group_roles.module',
        'basename' => 'civicrm_group_roles.module',
        'name' => 'civicrm_group_roles',
        'info' => 
        array (
          'name' => 'CiviGroup Roles Sync',
          'description' => 'Sync Drupal Roles to CiviCRM Groups.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'configure' => 'admin/config/civicrm/civicrm_group_roles',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'files' => 
          array (
            0 => 'civicrm_group_roles.module',
            1 => 'civicrm_group_roles.install',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7400',
        'version' => '7.82',
      ),
      'civicrm_rules' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_rules/civicrm_rules.module',
        'basename' => 'civicrm_rules.module',
        'name' => 'civicrm_rules',
        'info' => 
        array (
          'name' => 'CiviCRM Rules Integration',
          'description' => 'Integrate CiviCRM and Drupal Rules Module. Expose Contact, Contribution and other Objects along with Form / Page Operations.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
            1 => 'rules',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrm_member_roles' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_member_roles/civicrm_member_roles.module',
        'basename' => 'civicrm_member_roles.module',
        'name' => 'civicrm_member_roles',
        'info' => 
        array (
          'name' => 'CiviMember Roles Sync',
          'description' => 'Synchronize CiviCRM Contacts with Membership Status to a specified Drupal Role both automatically and manually.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'configure' => 'admin/config/civicrm/civicrm_member_roles',
          'files' => 
          array (
            0 => 'civicrm_member_roles.module',
            1 => 'civicrm_member_roles.install',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7400',
        'version' => '7.82',
      ),
      'civicrm_contact_ref' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_contact_ref/civicrm_contact_ref.module',
        'basename' => 'civicrm_contact_ref.module',
        'name' => 'civicrm_contact_ref',
        'info' => 
        array (
          'name' => 'CiviCRM Contact Reference Field',
          'description' => 'Makes a CiviCRM Contact Reference Field.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
            1 => 'text',
            2 => 'list',
          ),
          'files' => 
          array (
            0 => 'civicrm_contact_ref.install',
            1 => 'civicrm_contact_ref.module',
            2 => 'civicrm_contact_ref.feeds.inc',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrmtheme' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrmtheme/civicrmtheme.module',
        'basename' => 'civicrmtheme.module',
        'name' => 'civicrmtheme',
        'info' => 
        array (
          'name' => 'CiviCRM Theme',
          'description' => 'Define alternate themes for CiviCRM.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'files' => 
          array (
            0 => 'civicrmtheme.module',
            1 => 'civicrmtheme.install',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrm_og_sync' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_og_sync/civicrm_og_sync.module',
        'basename' => 'civicrm_og_sync.module',
        'name' => 'civicrm_og_sync',
        'info' => 
        array (
          'name' => 'CiviCRM OG Sync',
          'description' => 'Synchronize Organic Groups and CiviCRM Groups and ACL\'s. More information at: https://docs.civicrm.org/sysadmin/en/latest/integration/drupal/#civicrm-organic-groups-sync',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
            1 => 'og',
          ),
          'files' => 
          array (
            0 => 'civicrm_og_sync.module',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrm' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/civicrm.module',
        'basename' => 'civicrm.module',
        'name' => 'civicrm',
        'info' => 
        array (
          'name' => 'CiviCRM',
          'description' => 'Constituent relationship management system. Allows sites to manage contacts, relationships and groups, and track contact activities, contributions, memberships and events. See the <a href="https://civicrm.org/">CiviCRM website</a> for more information.',
          'version' => '7.x-5.39.0',
          'package' => 'CiviCRM',
          'core' => '7.x',
          'project' => 'civicrm',
          'php' => '7.2',
          'files' => 
          array (
            0 => 'civicrm.module',
            1 => 'civicrm.install',
            2 => 'civicrm_user.inc',
            3 => 'modules/views/civicrm.views.inc',
            4 => 'modules/views/civicrm.views_default.inc',
            5 => 'modules/views/civicrm/civicrm_handler_field.inc',
            6 => 'modules/views/civicrm/civicrm_handler_field_pseudo_constant.inc',
            7 => 'modules/views/civicrm/civicrm_handler_field_address.inc',
            8 => 'modules/views/civicrm/civicrm_handler_field_component.inc',
            9 => 'modules/views/civicrm/civicrm_handler_field_contact_link.inc',
            10 => 'modules/views/civicrm/civicrm_handler_field_county.inc',
            11 => 'modules/views/civicrm/civicrm_handler_field_country.inc',
            12 => 'modules/views/civicrm/civicrm_handler_field_custom.inc',
            13 => 'modules/views/civicrm/civicrm_handler_field_datetime.inc',
            14 => 'modules/views/civicrm/civicrm_handler_field_drupalid.inc',
            15 => 'modules/views/civicrm/civicrm_handler_field_email.inc',
            16 => 'modules/views/civicrm/civicrm_handler_field_encounter_medium.inc',
            17 => 'modules/views/civicrm/civicrm_handler_field_event.inc',
            18 => 'modules/views/civicrm/civicrm_handler_field_event_link.inc',
            19 => 'modules/views/civicrm/civicrm_handler_field_file.inc',
            20 => 'modules/views/civicrm/civicrm_handler_field_link.inc',
            21 => 'modules/views/civicrm/civicrm_handler_field_link_activity.inc',
            22 => 'modules/views/civicrm/civicrm_handler_field_link_contact.inc',
            23 => 'modules/views/civicrm/civicrm_handler_field_link_contribution.inc',
            24 => 'modules/views/civicrm/civicrm_handler_field_link_delete.inc',
            25 => 'modules/views/civicrm/civicrm_handler_field_link_edit.inc',
            26 => 'modules/views/civicrm/civicrm_handler_field_link_event.inc',
            27 => 'modules/views/civicrm/civicrm_handler_field_link_participant.inc',
            28 => 'modules/views/civicrm/civicrm_handler_field_link_pcp.inc',
            29 => 'modules/views/civicrm/civicrm_handler_field_link_relationship.inc',
            30 => 'modules/views/civicrm/civicrm_handler_field_location.inc',
            31 => 'modules/views/civicrm/civicrm_handler_field_mail.inc',
            32 => 'modules/views/civicrm/civicrm_handler_field_markup.inc',
            33 => 'modules/views/civicrm/civicrm_handler_field_money.inc',
            34 => 'modules/views/civicrm/civicrm_handler_field_option.inc',
            35 => 'modules/views/civicrm/civicrm_handler_field_pcp_raised_amount.inc',
            36 => 'modules/views/civicrm/civicrm_handler_field_phone.inc',
            37 => 'modules/views/civicrm/civicrm_handler_field_im.inc',
            38 => 'modules/views/civicrm/civicrm_handler_field_website.inc',
            39 => 'modules/views/civicrm/civicrm_handler_field_relationship_type.inc',
            40 => 'modules/views/civicrm/civicrm_handler_field_state.inc',
            41 => 'modules/views/civicrm/civicrm_handler_field_custom_file.inc',
            42 => 'modules/views/civicrm/civicrm_handler_field_contact_image.inc',
            43 => 'modules/views/civicrm/civicrm_handler_filter_pseudo_constant.inc',
            44 => 'modules/views/civicrm/civicrm_handler_filter_custom_option.inc',
            45 => 'modules/views/civicrm/civicrm_handler_filter_datetime.inc',
            46 => 'modules/views/civicrm/civicrm_handler_filter_encounter_medium.inc',
            47 => 'modules/views/civicrm/civicrm_handler_filter_group_status.inc',
            48 => 'modules/views/civicrm/civicrm_handler_filter_group_name.inc',
            49 => 'modules/views/civicrm/civicrm_handler_filter_custom_option.inc',
            50 => 'modules/views/civicrm/civicrm_handler_filter_custom_single_option.inc',
            51 => 'modules/views/civicrm/civicrm_handler_filter_relationship_type.inc',
            52 => 'modules/views/civicrm/civicrm_handler_filter_country_multi.inc',
            53 => 'modules/views/civicrm/civicrm_handler_filter_state_multi.inc',
            54 => 'modules/views/civicrm/civicrm_handler_filter_domain.inc',
            55 => 'modules/views/civicrm/civicrm_handler_filter_contact_ref.inc',
            56 => 'modules/views/civicrm/civicrm_handler_field_activity.inc',
            57 => 'modules/views/civicrm/civicrm_handler_sort_date.inc',
            58 => 'modules/views/civicrm/civicrm_handler_sort_pcp_raised_amount.inc',
            59 => 'modules/views/civicrm/civicrm_handler_sort_address_pseudoconstant.inc',
            60 => 'modules/views/civicrm/civicrm_plugin_argument_default.inc',
            61 => 'modules/views/civicrm/views_handler_argument_civicrm_day.inc',
            62 => 'modules/views/civicrm/views_handler_argument_civicrm_fulldate.inc',
            63 => 'modules/views/civicrm/views_handler_argument_civicrm_month.inc',
            64 => 'modules/views/civicrm/views_handler_argument_civicrm_week.inc',
            65 => 'modules/views/civicrm/views_handler_argument_civicrm_year.inc',
            66 => 'modules/views/civicrm/views_handler_argument_civicrm_year_month.inc',
            67 => 'modules/views/civicrm/civicrm_handler_relationship.inc',
            68 => 'modules/views/civicrm/civicrm_handler_relationship_relationship.inc',
            69 => 'modules/views/civicrm/civicrm_handler_relationship_contact2users.inc',
            70 => 'modules/views/civicrm/civicrm_handler_relationship_memberships_contributions.inc',
            71 => 'modules/views/civicrm/civicrm_handler_relationship_location.inc',
            72 => 'modules/views/civicrm/civicrm_handler_relationship_mail.inc',
            73 => 'modules/views/civicrm/civicrm_handler_relationship_phone.inc',
            74 => 'modules/views/civicrm/civicrm_handler_relationship_im.inc',
            75 => 'modules/views/civicrm/civicrm_handler_relationship_website.inc',
            76 => 'modules/views/civicrm/civicrm_handler_relationship_address.inc',
            77 => 'modules/views/civicrm/civicrm_handler_relationship_participant.inc',
            78 => 'modules/views/civicrm/civicrm_handler_relationship_group.inc',
            79 => 'modules/views/civicrm/civicrm_handler_relationship_standard_group.inc',
            80 => 'modules/views/civicrm/civicrm_handler_relationship_standard_group_contact.inc',
            81 => 'modules/views/plugins/calendar_plugin_row_civicrm.inc',
            82 => 'modules/views/plugins/calendar_plugin_row_civicrm_event.inc',
            83 => 'modules/views/plugins/civicrm_plugin_argument_default_civicrm_id.inc',
          ),
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7401',
        'version' => '7.82',
      ),
    ),
    'themes' => 
    array (
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
        ),
        'version' => '7.82',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
        ),
        'version' => '7.82',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
        ),
        'version' => '7.82',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.82',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
        ),
        'version' => '7.82',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.82',
        'description' => 'This platform is running Drupal 7.82',
      ),
    ),
    'profiles' => 
    array (
      'standard' => 
      array (
        'name' => 'standard',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'filename' => './profiles/standard/standard.info',
        'version' => '7.82',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.82',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1626883669',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'standard',
        ),
        'filename' => './profiles/minimal/minimal.info',
        'version' => '7.82',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'civicrm_engage' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_engage/civicrm_engage.module',
        'basename' => 'civicrm_engage.module',
        'name' => 'civicrm_engage',
        'info' => 
        array (
          'name' => 'CiviEngage',
          'description' => 'DEPRECATED Walklist and Phone-banking support for CiviCRM. This module will not be ported to Drupal 8. Please see: https://civicrm.org/blog/jamie/civicrmengage-is-dead-long-live-civicrmengage',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'files' => 
          array (
            0 => 'civicrm_engage.module',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.82',
      ),
      'civicrm_group_roles' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_group_roles/civicrm_group_roles.module',
        'basename' => 'civicrm_group_roles.module',
        'name' => 'civicrm_group_roles',
        'info' => 
        array (
          'name' => 'CiviGroup Roles Sync',
          'description' => 'Sync Drupal Roles to CiviCRM Groups.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'configure' => 'admin/config/civicrm/civicrm_group_roles',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'files' => 
          array (
            0 => 'civicrm_group_roles.module',
            1 => 'civicrm_group_roles.install',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7400',
        'version' => '7.82',
      ),
      'civicrm_rules' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_rules/civicrm_rules.module',
        'basename' => 'civicrm_rules.module',
        'name' => 'civicrm_rules',
        'info' => 
        array (
          'name' => 'CiviCRM Rules Integration',
          'description' => 'Integrate CiviCRM and Drupal Rules Module. Expose Contact, Contribution and other Objects along with Form / Page Operations.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
            1 => 'rules',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrm_member_roles' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_member_roles/civicrm_member_roles.module',
        'basename' => 'civicrm_member_roles.module',
        'name' => 'civicrm_member_roles',
        'info' => 
        array (
          'name' => 'CiviMember Roles Sync',
          'description' => 'Synchronize CiviCRM Contacts with Membership Status to a specified Drupal Role both automatically and manually.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'configure' => 'admin/config/civicrm/civicrm_member_roles',
          'files' => 
          array (
            0 => 'civicrm_member_roles.module',
            1 => 'civicrm_member_roles.install',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7400',
        'version' => '7.82',
      ),
      'civicrm_contact_ref' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_contact_ref/civicrm_contact_ref.module',
        'basename' => 'civicrm_contact_ref.module',
        'name' => 'civicrm_contact_ref',
        'info' => 
        array (
          'name' => 'CiviCRM Contact Reference Field',
          'description' => 'Makes a CiviCRM Contact Reference Field.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
            1 => 'text',
            2 => 'list',
          ),
          'files' => 
          array (
            0 => 'civicrm_contact_ref.install',
            1 => 'civicrm_contact_ref.module',
            2 => 'civicrm_contact_ref.feeds.inc',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrmtheme' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrmtheme/civicrmtheme.module',
        'basename' => 'civicrmtheme.module',
        'name' => 'civicrmtheme',
        'info' => 
        array (
          'name' => 'CiviCRM Theme',
          'description' => 'Define alternate themes for CiviCRM.',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
          ),
          'files' => 
          array (
            0 => 'civicrmtheme.module',
            1 => 'civicrmtheme.install',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrm_og_sync' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/modules/civicrm_og_sync/civicrm_og_sync.module',
        'basename' => 'civicrm_og_sync.module',
        'name' => 'civicrm_og_sync',
        'info' => 
        array (
          'name' => 'CiviCRM OG Sync',
          'description' => 'Synchronize Organic Groups and CiviCRM Groups and ACL\'s. More information at: https://docs.civicrm.org/sysadmin/en/latest/integration/drupal/#civicrm-organic-groups-sync',
          'version' => '7.x-5.39.0',
          'core' => '7.x',
          'package' => 'CiviCRM',
          'project' => 'civicrm',
          'dependencies' => 
          array (
            0 => 'civicrm',
            1 => 'og',
          ),
          'files' => 
          array (
            0 => 'civicrm_og_sync.module',
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.82',
      ),
      'civicrm' => 
      array (
        'filename' => '/var/aegir/platforms/testplatform/sites/all/modules/civicrm/drupal/civicrm.module',
        'basename' => 'civicrm.module',
        'name' => 'civicrm',
        'info' => 
        array (
          'name' => 'CiviCRM',
          'description' => 'Constituent relationship management system. Allows sites to manage contacts, relationships and groups, and track contact activities, contributions, memberships and events. See the <a href="https://civicrm.org/">CiviCRM website</a> for more information.',
          'version' => '7.x-5.39.0',
          'package' => 'CiviCRM',
          'core' => '7.x',
          'project' => 'civicrm',
          'php' => '7.2',
          'files' => 
          array (
            0 => 'civicrm.module',
            1 => 'civicrm.install',
            2 => 'civicrm_user.inc',
            3 => 'modules/views/civicrm.views.inc',
            4 => 'modules/views/civicrm.views_default.inc',
            5 => 'modules/views/civicrm/civicrm_handler_field.inc',
            6 => 'modules/views/civicrm/civicrm_handler_field_pseudo_constant.inc',
            7 => 'modules/views/civicrm/civicrm_handler_field_address.inc',
            8 => 'modules/views/civicrm/civicrm_handler_field_component.inc',
            9 => 'modules/views/civicrm/civicrm_handler_field_contact_link.inc',
            10 => 'modules/views/civicrm/civicrm_handler_field_county.inc',
            11 => 'modules/views/civicrm/civicrm_handler_field_country.inc',
            12 => 'modules/views/civicrm/civicrm_handler_field_custom.inc',
            13 => 'modules/views/civicrm/civicrm_handler_field_datetime.inc',
            14 => 'modules/views/civicrm/civicrm_handler_field_drupalid.inc',
            15 => 'modules/views/civicrm/civicrm_handler_field_email.inc',
            16 => 'modules/views/civicrm/civicrm_handler_field_encounter_medium.inc',
            17 => 'modules/views/civicrm/civicrm_handler_field_event.inc',
            18 => 'modules/views/civicrm/civicrm_handler_field_event_link.inc',
            19 => 'modules/views/civicrm/civicrm_handler_field_file.inc',
            20 => 'modules/views/civicrm/civicrm_handler_field_link.inc',
            21 => 'modules/views/civicrm/civicrm_handler_field_link_activity.inc',
            22 => 'modules/views/civicrm/civicrm_handler_field_link_contact.inc',
            23 => 'modules/views/civicrm/civicrm_handler_field_link_contribution.inc',
            24 => 'modules/views/civicrm/civicrm_handler_field_link_delete.inc',
            25 => 'modules/views/civicrm/civicrm_handler_field_link_edit.inc',
            26 => 'modules/views/civicrm/civicrm_handler_field_link_event.inc',
            27 => 'modules/views/civicrm/civicrm_handler_field_link_participant.inc',
            28 => 'modules/views/civicrm/civicrm_handler_field_link_pcp.inc',
            29 => 'modules/views/civicrm/civicrm_handler_field_link_relationship.inc',
            30 => 'modules/views/civicrm/civicrm_handler_field_location.inc',
            31 => 'modules/views/civicrm/civicrm_handler_field_mail.inc',
            32 => 'modules/views/civicrm/civicrm_handler_field_markup.inc',
            33 => 'modules/views/civicrm/civicrm_handler_field_money.inc',
            34 => 'modules/views/civicrm/civicrm_handler_field_option.inc',
            35 => 'modules/views/civicrm/civicrm_handler_field_pcp_raised_amount.inc',
            36 => 'modules/views/civicrm/civicrm_handler_field_phone.inc',
            37 => 'modules/views/civicrm/civicrm_handler_field_im.inc',
            38 => 'modules/views/civicrm/civicrm_handler_field_website.inc',
            39 => 'modules/views/civicrm/civicrm_handler_field_relationship_type.inc',
            40 => 'modules/views/civicrm/civicrm_handler_field_state.inc',
            41 => 'modules/views/civicrm/civicrm_handler_field_custom_file.inc',
            42 => 'modules/views/civicrm/civicrm_handler_field_contact_image.inc',
            43 => 'modules/views/civicrm/civicrm_handler_filter_pseudo_constant.inc',
            44 => 'modules/views/civicrm/civicrm_handler_filter_custom_option.inc',
            45 => 'modules/views/civicrm/civicrm_handler_filter_datetime.inc',
            46 => 'modules/views/civicrm/civicrm_handler_filter_encounter_medium.inc',
            47 => 'modules/views/civicrm/civicrm_handler_filter_group_status.inc',
            48 => 'modules/views/civicrm/civicrm_handler_filter_group_name.inc',
            49 => 'modules/views/civicrm/civicrm_handler_filter_custom_option.inc',
            50 => 'modules/views/civicrm/civicrm_handler_filter_custom_single_option.inc',
            51 => 'modules/views/civicrm/civicrm_handler_filter_relationship_type.inc',
            52 => 'modules/views/civicrm/civicrm_handler_filter_country_multi.inc',
            53 => 'modules/views/civicrm/civicrm_handler_filter_state_multi.inc',
            54 => 'modules/views/civicrm/civicrm_handler_filter_domain.inc',
            55 => 'modules/views/civicrm/civicrm_handler_filter_contact_ref.inc',
            56 => 'modules/views/civicrm/civicrm_handler_field_activity.inc',
            57 => 'modules/views/civicrm/civicrm_handler_sort_date.inc',
            58 => 'modules/views/civicrm/civicrm_handler_sort_pcp_raised_amount.inc',
            59 => 'modules/views/civicrm/civicrm_handler_sort_address_pseudoconstant.inc',
            60 => 'modules/views/civicrm/civicrm_plugin_argument_default.inc',
            61 => 'modules/views/civicrm/views_handler_argument_civicrm_day.inc',
            62 => 'modules/views/civicrm/views_handler_argument_civicrm_fulldate.inc',
            63 => 'modules/views/civicrm/views_handler_argument_civicrm_month.inc',
            64 => 'modules/views/civicrm/views_handler_argument_civicrm_week.inc',
            65 => 'modules/views/civicrm/views_handler_argument_civicrm_year.inc',
            66 => 'modules/views/civicrm/views_handler_argument_civicrm_year_month.inc',
            67 => 'modules/views/civicrm/civicrm_handler_relationship.inc',
            68 => 'modules/views/civicrm/civicrm_handler_relationship_relationship.inc',
            69 => 'modules/views/civicrm/civicrm_handler_relationship_contact2users.inc',
            70 => 'modules/views/civicrm/civicrm_handler_relationship_memberships_contributions.inc',
            71 => 'modules/views/civicrm/civicrm_handler_relationship_location.inc',
            72 => 'modules/views/civicrm/civicrm_handler_relationship_mail.inc',
            73 => 'modules/views/civicrm/civicrm_handler_relationship_phone.inc',
            74 => 'modules/views/civicrm/civicrm_handler_relationship_im.inc',
            75 => 'modules/views/civicrm/civicrm_handler_relationship_website.inc',
            76 => 'modules/views/civicrm/civicrm_handler_relationship_address.inc',
            77 => 'modules/views/civicrm/civicrm_handler_relationship_participant.inc',
            78 => 'modules/views/civicrm/civicrm_handler_relationship_group.inc',
            79 => 'modules/views/civicrm/civicrm_handler_relationship_standard_group.inc',
            80 => 'modules/views/civicrm/civicrm_handler_relationship_standard_group_contact.inc',
            81 => 'modules/views/plugins/calendar_plugin_row_civicrm.inc',
            82 => 'modules/views/plugins/calendar_plugin_row_civicrm_event.inc',
            83 => 'modules/views/plugins/civicrm_plugin_argument_default_civicrm_id.inc',
          ),
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7401',
        'version' => '7.82',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);