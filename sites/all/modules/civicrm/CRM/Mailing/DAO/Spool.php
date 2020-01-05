<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Mailing/Spool.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5b1d2a1cce94c7b2c330b62f3b76e2e1)
 */

/**
 * Database access object for the Spool entity.
 */
class CRM_Mailing_DAO_Spool extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing_spool';

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
   * The ID of the Job .
   *
   * @var int
   */
  public $job_id;

  /**
   * The email of the receipients this mail is to be sent.
   *
   * @var text
   */
  public $recipient_email;

  /**
   * The header information of this mailing .
   *
   * @var text
   */
  public $headers;

  /**
   * The body of this mailing.
   *
   * @var text
   */
  public $body;

  /**
   * date on which this job was added.
   *
   * @var timestamp
   */
  public $added_at;

  /**
   * date on which this job was removed.
   *
   * @var timestamp
   */
  public $removed_at;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_spool';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'job_id', 'civicrm_mailing_job', 'id');
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
          'title' => ts('Spool ID'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_spool.id',
          'table_name' => 'civicrm_mailing_spool',
          'entity' => 'Spool',
          'bao' => 'CRM_Mailing_BAO_Spool',
          'localizable' => 0,
        ],
        'job_id' => [
          'name' => 'job_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Job'),
          'description' => ts('The ID of the Job .'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_spool.job_id',
          'table_name' => 'civicrm_mailing_spool',
          'entity' => 'Spool',
          'bao' => 'CRM_Mailing_BAO_Spool',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_MailingJob',
        ],
        'recipient_email' => [
          'name' => 'recipient_email',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Recipient Email'),
          'description' => ts('The email of the receipients this mail is to be sent.'),
          'where' => 'civicrm_mailing_spool.recipient_email',
          'table_name' => 'civicrm_mailing_spool',
          'entity' => 'Spool',
          'bao' => 'CRM_Mailing_BAO_Spool',
          'localizable' => 0,
        ],
        'headers' => [
          'name' => 'headers',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Headers'),
          'description' => ts('The header information of this mailing .'),
          'where' => 'civicrm_mailing_spool.headers',
          'table_name' => 'civicrm_mailing_spool',
          'entity' => 'Spool',
          'bao' => 'CRM_Mailing_BAO_Spool',
          'localizable' => 0,
        ],
        'body' => [
          'name' => 'body',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Body'),
          'description' => ts('The body of this mailing.'),
          'where' => 'civicrm_mailing_spool.body',
          'table_name' => 'civicrm_mailing_spool',
          'entity' => 'Spool',
          'bao' => 'CRM_Mailing_BAO_Spool',
          'localizable' => 0,
        ],
        'added_at' => [
          'name' => 'added_at',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Added'),
          'description' => ts('date on which this job was added.'),
          'required' => FALSE,
          'where' => 'civicrm_mailing_spool.added_at',
          'default' => 'NULL',
          'table_name' => 'civicrm_mailing_spool',
          'entity' => 'Spool',
          'bao' => 'CRM_Mailing_BAO_Spool',
          'localizable' => 0,
        ],
        'removed_at' => [
          'name' => 'removed_at',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Removed'),
          'description' => ts('date on which this job was removed.'),
          'required' => FALSE,
          'where' => 'civicrm_mailing_spool.removed_at',
          'default' => 'NULL',
          'table_name' => 'civicrm_mailing_spool',
          'entity' => 'Spool',
          'bao' => 'CRM_Mailing_BAO_Spool',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_spool', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_spool', $prefix, []);
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
