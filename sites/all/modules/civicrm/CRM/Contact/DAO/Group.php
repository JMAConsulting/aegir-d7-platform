<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Contact/Group.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:a1580f6293c41ecbf8aa0bc2f6246d36)
 */

/**
 * Database access object for the Group entity.
 */
class CRM_Contact_DAO_Group extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_group';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-users';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'title';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Paths for accessing this entity in the UI.
   *
   * @var string[]
   */
  protected static $_paths = [
    'add' => 'civicrm/group/add?reset=1',
  ];

  /**
   * Group ID
   *
   * @var int
   */
  public $id;

  /**
   * Internal name of Group.
   *
   * @var string
   */
  public $name;

  /**
   * Name of Group.
   *
   * @var string
   */
  public $title;

  /**
   * Optional verbose description of the group.
   *
   * @var text
   */
  public $description;

  /**
   * Module or process which created this group.
   *
   * @var string
   */
  public $source;

  /**
   * FK to saved search table.
   *
   * @var int
   */
  public $saved_search_id;

  /**
   * Is this entry active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * In what context(s) is this field visible.
   *
   * @var string
   */
  public $visibility;

  /**
   * the sql where clause if a saved search acl
   *
   * @var text
   */
  public $where_clause;

  /**
   * the tables to be included in a select data
   *
   * @var text
   */
  public $select_tables;

  /**
   * the tables to be included in the count statement
   *
   * @var text
   */
  public $where_tables;

  /**
   * FK to group type
   *
   * @var string
   */
  public $group_type;

  /**
   * Date when we created the cache for a smart group
   *
   * @var timestamp
   */
  public $cache_date;

  /**
   * Date and time when we need to refresh the cache next.
   *
   * @var timestamp
   */
  public $refresh_date;

  /**
   * IDs of the parent(s)
   *
   * @var text
   */
  public $parents;

  /**
   * IDs of the child(ren)
   *
   * @var text
   */
  public $children;

  /**
   * Is this group hidden?
   *
   * @var bool
   */
  public $is_hidden;

  /**
   * @var bool
   */
  public $is_reserved;

  /**
   * FK to contact table.
   *
   * @var int
   */
  public $created_id;

  /**
   * FK to contact table.
   *
   * @var int
   */
  public $modified_id;

  /**
   * Alternative public title for this Group.
   *
   * @var string
   */
  public $frontend_title;

  /**
   * Alternative public description of the group.
   *
   * @var text
   */
  public $frontend_description;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_group';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Groups') : ts('Group');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'saved_search_id', 'civicrm_saved_search', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'modified_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group ID'),
          'description' => ts('Group ID'),
          'required' => TRUE,
          'where' => 'civicrm_group.id',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.1',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Name'),
          'description' => ts('Internal name of Group.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_group.name',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'title' => [
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Title'),
          'description' => ts('Name of Group.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_group.title',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 1,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.1',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Description'),
          'description' => ts('Optional verbose description of the group.'),
          'rows' => 2,
          'cols' => 60,
          'where' => 'civicrm_group.description',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.1',
        ],
        'source' => [
          'name' => 'source',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Source'),
          'description' => ts('Module or process which created this group.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_group.source',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'saved_search_id' => [
          'name' => 'saved_search_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Saved Search ID'),
          'description' => ts('FK to saved search table.'),
          'where' => 'civicrm_group.saved_search_id',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_SavedSearch',
          'html' => [
            'label' => ts("Saved Search"),
          ],
          'add' => '1.1',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Group Enabled'),
          'description' => ts('Is this entry active?'),
          'where' => 'civicrm_group.is_active',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'visibility' => [
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Visibility Setting'),
          'description' => ts('In what context(s) is this field visible.'),
          'maxlength' => 24,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_group.visibility',
          'default' => 'User and User Admin Only',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::groupVisibility',
          ],
          'add' => '1.2',
        ],
        'where_clause' => [
          'name' => 'where_clause',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Where Clause'),
          'description' => ts('the sql where clause if a saved search acl'),
          'where' => 'civicrm_group.where_clause',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => '1.6',
        ],
        'select_tables' => [
          'name' => 'select_tables',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Tables For Select Clause'),
          'description' => ts('the tables to be included in a select data'),
          'where' => 'civicrm_group.select_tables',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_PHP,
          'readonly' => TRUE,
          'add' => '1.6',
        ],
        'where_tables' => [
          'name' => 'where_tables',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Tables For Where Clause'),
          'description' => ts('the tables to be included in the count statement'),
          'where' => 'civicrm_group.where_tables',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_PHP,
          'readonly' => TRUE,
          'add' => '1.6',
        ],
        'group_type' => [
          'name' => 'group_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Group Type'),
          'description' => ts('FK to group type'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_group.group_type',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_BOOKEND,
          'pseudoconstant' => [
            'optionGroupName' => 'group_type',
            'optionEditPath' => 'civicrm/admin/options/group_type',
          ],
          'add' => '1.9',
        ],
        'cache_date' => [
          'name' => 'cache_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Group Cache Date'),
          'description' => ts('Date when we created the cache for a smart group'),
          'required' => FALSE,
          'where' => 'civicrm_group.cache_date',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => '2.1',
        ],
        'refresh_date' => [
          'name' => 'refresh_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Next Group Refresh Time'),
          'description' => ts('Date and time when we need to refresh the cache next.'),
          'required' => FALSE,
          'where' => 'civicrm_group.refresh_date',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => '4.3',
        ],
        'parents' => [
          'name' => 'parents',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Parents'),
          'description' => ts('IDs of the parent(s)'),
          'where' => 'civicrm_group.parents',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_COMMA,
          'pseudoconstant' => [
            'callback' => 'CRM_Core_PseudoConstant::allGroup',
          ],
          'add' => '2.1',
        ],
        'children' => [
          'name' => 'children',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Group Children'),
          'description' => ts('IDs of the child(ren)'),
          'where' => 'civicrm_group.children',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'is_hidden' => [
          'name' => 'is_hidden',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Group is Hidden'),
          'description' => ts('Is this group hidden?'),
          'where' => 'civicrm_group.is_hidden',
          'default' => '0',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Group is Reserved'),
          'where' => 'civicrm_group.is_reserved',
          'default' => '0',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'add' => '4.2',
        ],
        'created_id' => [
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Created By Contact ID'),
          'description' => ts('FK to contact table.'),
          'where' => 'civicrm_group.created_id',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'label' => ts("Created By"),
          ],
          'add' => '4.3',
        ],
        'modified_id' => [
          'name' => 'modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Modified By Contact ID'),
          'description' => ts('FK to contact table.'),
          'where' => 'civicrm_group.modified_id',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'label' => ts("Modified By"),
          ],
          'readonly' => TRUE,
          'add' => '4.5',
        ],
        'frontend_title' => [
          'name' => 'frontend_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Public Group Title'),
          'description' => ts('Alternative public title for this Group.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_group.frontend_title',
          'default' => 'NULL',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 1,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.31',
        ],
        'frontend_description' => [
          'name' => 'frontend_description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Public Group Description'),
          'description' => ts('Alternative public description of the group.'),
          'rows' => 2,
          'cols' => 60,
          'where' => 'civicrm_group.frontend_description',
          'default' => 'NULL',
          'table_name' => 'civicrm_group',
          'entity' => 'Group',
          'bao' => 'CRM_Contact_BAO_Group',
          'localizable' => 1,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '5.31',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'group', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'group', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_cache_date' => [
        'name' => 'UI_cache_date',
        'field' => [
          0 => 'cache_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_group::0::cache_date',
      ],
      'index_group_type' => [
        'name' => 'index_group_type',
        'field' => [
          0 => 'group_type',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_group::0::group_type',
      ],
      'UI_title' => [
        'name' => 'UI_title',
        'field' => [
          0 => 'title',
        ],
        'localizable' => TRUE,
        'unique' => TRUE,
        'sig' => 'civicrm_group::1::title',
      ],
      'UI_name' => [
        'name' => 'UI_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_group::1::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
