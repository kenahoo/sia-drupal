<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Mailing/Event/Delivered.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5791e88cffd626e36daaddcccbc687a0)
 */

/**
 * Database access object for the Delivered entity.
 */
class CRM_Mailing_Event_DAO_Delivered extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing_event_delivered';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * @var int
   */
  public $id;

  /**
   * FK to EventQueue
   *
   * @var int
   */
  public $event_queue_id;

  /**
   * When this delivery event occurred.
   *
   * @var timestamp
   */
  public $time_stamp;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_event_delivered';
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
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'event_queue_id', 'civicrm_mailing_event_queue', 'id');
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
          'title' => ts('Delivered ID'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_event_delivered.id',
          'table_name' => 'civicrm_mailing_event_delivered',
          'entity' => 'Delivered',
          'bao' => 'CRM_Mailing_Event_BAO_Delivered',
          'localizable' => 0,
        ],
        'event_queue_id' => [
          'name' => 'event_queue_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Event Queue'),
          'description' => ts('FK to EventQueue'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_event_delivered.event_queue_id',
          'table_name' => 'civicrm_mailing_event_delivered',
          'entity' => 'Delivered',
          'bao' => 'CRM_Mailing_Event_BAO_Delivered',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_Event_DAO_Queue',
        ],
        'time_stamp' => [
          'name' => 'time_stamp',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Timestamp'),
          'description' => ts('When this delivery event occurred.'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_event_delivered.time_stamp',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_mailing_event_delivered',
          'entity' => 'Delivered',
          'bao' => 'CRM_Mailing_Event_BAO_Delivered',
          'localizable' => 0,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_event_delivered', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_event_delivered', $prefix, []);
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
