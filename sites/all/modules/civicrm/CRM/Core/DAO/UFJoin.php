<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2016                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2016
 *
 * Generated from xml/schema/CRM/Core/UFJoin.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_UFJoin extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_uf_join';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique table ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Is this join currently active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Module which owns this uf_join instance, e.g. User Registration, CiviDonate, etc.
   *
   * @var string
   */
  public $module;
  /**
   * Name of table where item being referenced is stored. Modules which only need a single collection of uf_join instances may choose not to populate entity_table and entity_id.
   *
   * @var string
   */
  public $entity_table;
  /**
   * Foreign key to the referenced item.
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   * Controls display order when multiple user framework groups are setup for concurrent display.
   *
   * @var int
   */
  public $weight;
  /**
   * Which form does this field belong to.
   *
   * @var int unsigned
   */
  public $uf_group_id;
  /**
   * Json serialized array of data used by the ufjoin.module
   *
   * @var longtext
   */
  public $module_data;
  /**
   * class constructor
   *
   * @return civicrm_uf_join
   */
  function __construct()
  {
    $this->__table = 'civicrm_uf_join';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'uf_group_id', 'civicrm_uf_group', 'id');
      self::$_links[] = new CRM_Core_Reference_Dynamic(self::getTableName() , 'entity_id', NULL, 'id', 'entity_table');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('UF Join ID') ,
          'description' => 'Unique table ID',
          'required' => true,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Use is active') ,
          'description' => 'Is this join currently active?',
          'default' => '1',
        ) ,
        'module' => array(
          'name' => 'module',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Module') ,
          'description' => 'Module which owns this uf_join instance, e.g. User Registration, CiviDonate, etc.',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'entity_table' => array(
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Entity Table') ,
          'description' => 'Name of table where item being referenced is stored. Modules which only need a single collection of uf_join instances may choose not to populate entity_table and entity_id.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_BAO_UFJoin::entityTables',
          )
        ) ,
        'entity_id' => array(
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile Entity ID') ,
          'description' => 'Foreign key to the referenced item.',
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'description' => 'Controls display order when multiple user framework groups are setup for concurrent display.',
          'required' => true,
          'default' => '1',
        ) ,
        'uf_group_id' => array(
          'name' => 'uf_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile ID') ,
          'description' => 'Which form does this field belong to.',
          'required' => true,
          'FKClassName' => 'CRM_Core_DAO_UFGroup',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_uf_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'module_data' => array(
          'name' => 'module_data',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Profile Use Data') ,
          'description' => 'Json serialized array of data used by the ufjoin.module',
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'is_active' => 'is_active',
        'module' => 'module',
        'entity_table' => 'entity_table',
        'entity_id' => 'entity_id',
        'weight' => 'weight',
        'uf_group_id' => 'uf_group_id',
        'module_data' => 'module_data',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['uf_join'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['uf_join'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
