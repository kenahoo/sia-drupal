<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
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
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Financial/PaymentProcessorType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Financial_DAO_PaymentProcessorType extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_payment_processor_type';
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
  static $_log = false;
  /**
   * Payment Processor Type ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Payment Processor Name.
   *
   * @var string
   */
  public $name;
  /**
   * Payment Processor Name.
   *
   * @var string
   */
  public $title;
  /**
   * Payment Processor Description.
   *
   * @var string
   */
  public $description;
  /**
   * Is this processor active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Is this processor the default?
   *
   * @var boolean
   */
  public $is_default;
  /**
   *
   * @var string
   */
  public $user_name_label;
  /**
   *
   * @var string
   */
  public $password_label;
  /**
   *
   * @var string
   */
  public $signature_label;
  /**
   *
   * @var string
   */
  public $subject_label;
  /**
   *
   * @var string
   */
  public $class_name;
  /**
   *
   * @var string
   */
  public $url_site_default;
  /**
   *
   * @var string
   */
  public $url_api_default;
  /**
   *
   * @var string
   */
  public $url_recur_default;
  /**
   *
   * @var string
   */
  public $url_button_default;
  /**
   *
   * @var string
   */
  public $url_site_test_default;
  /**
   *
   * @var string
   */
  public $url_api_test_default;
  /**
   *
   * @var string
   */
  public $url_recur_test_default;
  /**
   *
   * @var string
   */
  public $url_button_test_default;
  /**
   * Billing Mode (deprecated)
   *
   * @var int unsigned
   */
  public $billing_mode;
  /**
   * Can process recurring contributions
   *
   * @var boolean
   */
  public $is_recur;
  /**
   * Payment Type: Credit or Debit (deprecated)
   *
   * @var int unsigned
   */
  public $payment_type;
  /**
   * Payment Instrument ID
   *
   * @var int unsigned
   */
  public $payment_instrument_id;
  /**
   * class constructor
   *
   * @return civicrm_payment_processor_type
   */
  function __construct()
  {
    $this->__table = 'civicrm_payment_processor_type';
    parent::__construct();
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
          'title' => ts('Payment Processor Type ID') ,
          'description' => 'Payment Processor Type ID',
          'required' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Payment Processor variable name to be used in code') ,
          'description' => 'Payment Processor Name.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Payment Processor Title') ,
          'description' => 'Payment Processor Name.',
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Processor Type Description') ,
          'description' => 'Payment Processor Description.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Processor Type Is Active?') ,
          'description' => 'Is this processor active?',
        ) ,
        'is_default' => array(
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Processor Type is Default?') ,
          'description' => 'Is this processor the default?',
        ) ,
        'user_name_label' => array(
          'name' => 'user_name_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label for User Name if used') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'password_label' => array(
          'name' => 'password_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label for password') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'signature_label' => array(
          'name' => 'signature_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label for Signature') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'subject_label' => array(
          'name' => 'subject_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label for Subject') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'class_name' => array(
          'name' => 'class_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Suffix for PHP class name implementation') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_site_default' => array(
          'name' => 'url_site_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default Live Site URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_api_default' => array(
          'name' => 'url_api_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default API Site URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_recur_default' => array(
          'name' => 'url_recur_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default Live Recurring Payments URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_button_default' => array(
          'name' => 'url_button_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default Live Button URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_site_test_default' => array(
          'name' => 'url_site_test_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default Test Site URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_api_test_default' => array(
          'name' => 'url_api_test_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default Test API URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_recur_test_default' => array(
          'name' => 'url_recur_test_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default Test Recurring Payment URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'url_button_test_default' => array(
          'name' => 'url_button_test_default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Default Test Button URL') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'billing_mode' => array(
          'name' => 'billing_mode',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Billing Mode') ,
          'description' => 'Billing Mode (deprecated)',
          'required' => true,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::billingMode',
          )
        ) ,
        'is_recur' => array(
          'name' => 'is_recur',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Processor Type Supports Recurring?') ,
          'description' => 'Can process recurring contributions',
        ) ,
        'payment_type' => array(
          'name' => 'payment_type',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Processor Type Payment Type') ,
          'description' => 'Payment Type: Credit or Debit (deprecated)',
          'default' => '1',
        ) ,
        'payment_instrument_id' => array(
          'name' => 'payment_instrument_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Payment Method') ,
          'description' => 'Payment Instrument ID',
          'default' => '1',
          'pseudoconstant' => array(
            'optionGroupName' => 'payment_instrument',
            'optionEditPath' => 'civicrm/admin/options/payment_instrument',
          )
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
        'name' => 'name',
        'title' => 'title',
        'description' => 'description',
        'is_active' => 'is_active',
        'is_default' => 'is_default',
        'user_name_label' => 'user_name_label',
        'password_label' => 'password_label',
        'signature_label' => 'signature_label',
        'subject_label' => 'subject_label',
        'class_name' => 'class_name',
        'url_site_default' => 'url_site_default',
        'url_api_default' => 'url_api_default',
        'url_recur_default' => 'url_recur_default',
        'url_button_default' => 'url_button_default',
        'url_site_test_default' => 'url_site_test_default',
        'url_api_test_default' => 'url_api_test_default',
        'url_recur_test_default' => 'url_recur_test_default',
        'url_button_test_default' => 'url_button_test_default',
        'billing_mode' => 'billing_mode',
        'is_recur' => 'is_recur',
        'payment_type' => 'payment_type',
        'payment_instrument_id' => 'payment_instrument_id',
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
            self::$_import['payment_processor_type'] = & $fields[$name];
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
            self::$_export['payment_processor_type'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
