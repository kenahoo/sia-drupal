<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Contact/SavedSearch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:4b183aa40bb90cc7c715034178104a11)
 */

/**
 * Database access object for the SavedSearch entity.
 */
class CRM_Contact_DAO_SavedSearch extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_saved_search';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = FALSE;

  /**
   * Saved Search ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Submitted form values for this search
   *
   * @var text
   */
  public $form_values;

  /**
   * Foreign key to civicrm_mapping used for saved search-builder searches.
   *
   * @var int unsigned
   */
  public $mapping_id;

  /**
   * Foreign key to civicrm_option value table used for saved custom searches.
   *
   * @var int unsigned
   */
  public $search_custom_id;

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
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_saved_search';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'mapping_id', 'civicrm_mapping', 'id');
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
          'title' => ts('Saved Search ID'),
          'description' => 'Saved Search ID',
          'required' => TRUE,
          'table_name' => 'civicrm_saved_search',
          'entity' => 'SavedSearch',
          'bao' => 'CRM_Contact_BAO_SavedSearch',
          'localizable' => 0,
        ],
        'form_values' => [
          'name' => 'form_values',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Submitted Form Values'),
          'description' => 'Submitted form values for this search',
          'import' => TRUE,
          'where' => 'civicrm_saved_search.form_values',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_saved_search',
          'entity' => 'SavedSearch',
          'bao' => 'CRM_Contact_BAO_SavedSearch',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_PHP,
        ],
        'mapping_id' => [
          'name' => 'mapping_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mapping ID'),
          'description' => 'Foreign key to civicrm_mapping used for saved search-builder searches.',
          'table_name' => 'civicrm_saved_search',
          'entity' => 'SavedSearch',
          'bao' => 'CRM_Contact_BAO_SavedSearch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Mapping',
        ],
        'search_custom_id' => [
          'name' => 'search_custom_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Value ID'),
          'description' => 'Foreign key to civicrm_option value table used for saved custom searches.',
          'table_name' => 'civicrm_saved_search',
          'entity' => 'SavedSearch',
          'bao' => 'CRM_Contact_BAO_SavedSearch',
          'localizable' => 0,
        ],
        'where_clause' => [
          'name' => 'where_clause',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Where Clause'),
          'description' => 'the sql where clause if a saved search acl',
          'table_name' => 'civicrm_saved_search',
          'entity' => 'SavedSearch',
          'bao' => 'CRM_Contact_BAO_SavedSearch',
          'localizable' => 0,
        ],
        'select_tables' => [
          'name' => 'select_tables',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Select Tables'),
          'description' => 'the tables to be included in a select data',
          'table_name' => 'civicrm_saved_search',
          'entity' => 'SavedSearch',
          'bao' => 'CRM_Contact_BAO_SavedSearch',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_PHP,
        ],
        'where_tables' => [
          'name' => 'where_tables',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Where Tables'),
          'description' => 'the tables to be included in the count statement',
          'table_name' => 'civicrm_saved_search',
          'entity' => 'SavedSearch',
          'bao' => 'CRM_Contact_BAO_SavedSearch',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_PHP,
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
    return self::$_tableName;
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'saved_search', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'saved_search', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
