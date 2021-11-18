<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 */

require_once 'HTML/QuickForm/Rule/Email.php';

/**
 * Class CRM_Utils_Rule
 */
class CRM_Utils_Rule {

  /**
   * @param $str
   * @param int $maxLength
   *
   * @return bool
   */
  public static function title($str, $maxLength = 127) {

    // check length etc
    if (empty($str) || strlen($str) > $maxLength) {
      return FALSE;
    }

    // Make sure it include valid characters, alpha numeric and underscores
    if (!preg_match('/^\w[\w\s\'\&\,\$\#\-\.\"\?\!]+$/i', $str)) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * @param $str
   *
   * @return bool
   */
  public static function longTitle($str) {
    return self::title($str, 255);
  }

  /**
   * @param $str
   *
   * @return bool
   */
  public static function variable($str) {
    // check length etc
    if (empty($str) || strlen($str) > 31) {
      return FALSE;
    }

    // make sure it includes valid characters, alpha numeric and underscores
    if (!preg_match('/^[\w]+$/i', $str)) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * Validate that a string is a valid MySQL column name or alias.
   *
   * @param $str
   *
   * @return bool
   */
  public static function mysqlColumnNameOrAlias($str) {
    // Check not empty.
    if (empty($str)) {
      return FALSE;
    }

    // Ensure $str conforms to expected format. Not a complete expression of
    // what MySQL permits; this should permit the formats CiviCRM generates.
    //
    // * Table name prefix is optional.
    // * Table & column names & aliases:
    //   * Composed of alphanumeric chars, underscore and hyphens.
    //   * Maximum length of 64 chars.
    //   * Optionally surrounded by backticks, in which case spaces also OK.
    if (!preg_match('/^((`[-\w ]{1,64}`|[-\w]{1,64})\.)?(`[-\w ]{1,64}`|[-\w]{1,64})$/i', $str)) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * Validate that a string is ASC or DESC.
   *
   * Empty string should be treated as invalid and ignored => default = ASC.
   *
   * @param $str
   * @return bool
   */
  public static function mysqlOrderByDirection($str) {
    if (!preg_match('/^(asc|desc)$/i', $str)) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * Validate that a string is valid order by clause.
   *
   * @param $str
   * @return bool
   */
  public static function mysqlOrderBy($str) {
    $matches = [];
    // Using the field function in order by is valid.
    // Look for a string like field(contribution_status_id,3,4,6).
    // or field(civicrm_contribution.contribution_status_id,3,4,6)
    if (preg_match('/field\([a-z_.]+,[0-9,]+\)/', $str, $matches)) {
      // We have checked these. Remove them as they will fail the next lot.
      // Our check currently only permits numbers & no back ticks. If we get a
      // need for strings or backticks we can add.
      $str = str_replace($matches, '', $str);
    }
    $str = trim($str);
    if (!empty($matches) && empty($str)) {
      // nothing left to check after the field check.
      return TRUE;
    }
    // Making a regex for a comma separated list is quite hard and not readable
    // at all, so we split and loop over.
    $parts = explode(',', $str);
    foreach ($parts as $part) {
      if (!preg_match('/^((`[\w-]{1,64}`|[\w-]{1,64})\.)*(`[\w-]{1,64}`|[\w-]{1,64})( (asc|desc))?$/i', trim($part))) {
        return FALSE;
      }
    }

    return TRUE;
  }

  /**
   * @param $str
   *
   * @return bool
   */
  public static function qfVariable($str) {
    // check length etc
    //if ( empty( $str ) || strlen( $str ) > 31 ) {
    if (strlen(trim($str)) == 0 || strlen($str) > 31) {
      return FALSE;
    }

    // make sure it includes valid characters, alpha numeric and underscores
    // added (. and ,) option (CRM-1336)
    if (!preg_match('/^[\w\s\.\,]+$/i', $str)) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * @param $phone
   *
   * @return bool
   */
  public static function phone($phone) {
    // check length etc
    if (empty($phone) || strlen($phone) > 16) {
      return FALSE;
    }

    // make sure it includes valid characters, (, \s and numeric
    if (preg_match('/^[\d\(\)\-\.\s]+$/', $phone)) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * @param $query
   *
   * @return bool
   */
  public static function query($query) {
    // check length etc
    if (empty($query) || strlen($query) < 3 || strlen($query) > 127) {
      return FALSE;
    }

    // make sure it includes valid characters, alpha numeric and underscores
    if (!preg_match('/^[\w\s\%\'\&\,\$\#]+$/i', $query)) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * @param $url
   *
   * @return bool
   */
  public static function url($url) {
    if (!$url) {
      // If this is required then that should be checked elsewhere - here we are not assuming it is required.
      return TRUE;
    }
    if (preg_match('/^\//', $url)) {
      // allow relative URL's (CRM-15598)
      $url = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    }
    return (bool) filter_var($url, FILTER_VALIDATE_URL);
  }

  /**
   * @param $url
   *
   * @return bool
   */
  public static function urlish($url) {
    if (empty($url)) {
      return TRUE;
    }
    $url = Civi::paths()->getUrl($url, 'absolute');
    return (bool) filter_var($url, FILTER_VALIDATE_URL);
  }

  /**
   * @param $string
   *
   * @return bool
   */
  public static function wikiURL($string) {
    $items = explode(' ', trim($string), 2);
    return self::url($items[0]);
  }

  /**
   * @param $domain
   *
   * @return bool
   */
  public static function domain($domain) {
    // not perfect, but better than the previous one; see CRM-1502
    if (!preg_match('/^[A-Za-z0-9]([A-Za-z0-9\.\-]*[A-Za-z0-9])?$/', $domain)) {
      return FALSE;
    }
    return TRUE;
  }

  /**
   * @param $value
   * @param null $default
   *
   * @return null
   */
  public static function date($value, $default = NULL) {
    if (is_string($value) &&
      preg_match('/^\d\d\d\d-?\d\d-?\d\d$/', $value)
    ) {
      return $value;
    }
    return $default;
  }

  /**
   * @param $value
   * @param null $default
   *
   * @return null|string
   */
  public static function dateTime($value, $default = NULL) {
    $result = $default;
    if (is_string($value) &&
      preg_match('/^\d\d\d\d-?\d\d-?\d\d(\s\d\d:\d\d(:\d\d)?|\d\d\d\d(\d\d)?)?$/', $value)
    ) {
      $result = $value;
    }

    return $result;
  }

  /**
   * Check the validity of the date (in qf format)
   * note that only a year is valid, or a mon-year is
   * also valid in addition to day-mon-year. The date
   * specified has to be beyond today. (i.e today or later)
   *
   * @param array $date
   * @param bool $monthRequired
   *   Check whether month is mandatory.
   *
   * @return bool
   *   true if valid date
   */
  public static function currentDate($date, $monthRequired = TRUE) {
    $config = CRM_Core_Config::singleton();

    $d = $date['d'] ?? NULL;
    $m = $date['M'] ?? NULL;
    $y = $date['Y'] ?? NULL;

    if (!$d && !$m && !$y) {
      return TRUE;
    }

    // CRM-9017 CiviContribute/CiviMember form with expiration date format 'm Y'
    if (!$m && !empty($date['m'])) {
      $m = $date['m'] ?? NULL;
    }

    $day = $mon = 1;
    $year = 0;
    if ($d) {
      $day = $d;
    }
    if ($m) {
      $mon = $m;
    }
    if ($y) {
      $year = $y;
    }

    // if we have day we need mon, and if we have mon we need year
    if (($d && !$m) ||
      ($d && !$y) ||
      ($m && !$y)
    ) {
      return FALSE;
    }

    $result = FALSE;
    if (!empty($day) || !empty($mon) || !empty($year)) {
      $result = checkdate($mon, $day, $year);
    }

    if (!$result) {
      return FALSE;
    }

    // ensure we have month if required
    if ($monthRequired && !$m) {
      return FALSE;
    }

    // now make sure this date is greater that today
    $currentDate = getdate();
    if ($year > $currentDate['year']) {
      return TRUE;
    }
    elseif ($year < $currentDate['year']) {
      return FALSE;
    }

    if ($m) {
      if ($mon > $currentDate['mon']) {
        return TRUE;
      }
      elseif ($mon < $currentDate['mon']) {
        return FALSE;
      }
    }

    if ($d) {
      if ($day > $currentDate['mday']) {
        return TRUE;
      }
      elseif ($day < $currentDate['mday']) {
        return FALSE;
      }
    }

    return TRUE;
  }

  /**
   * Check the validity of a date or datetime (timestamp)
   * value which is in YYYYMMDD or YYYYMMDDHHMMSS format
   *
   * Uses PHP checkdate() - params are ( int $month, int $day, int $year )
   *
   * @param string $date
   *
   * @return bool
   *   true if valid date
   */
  public static function mysqlDate($date) {
    // allow date to be null
    if ($date == NULL) {
      return TRUE;
    }

    if (checkdate(substr($date, 4, 2), substr($date, 6, 2), substr($date, 0, 4))) {
      return TRUE;
    }

    return FALSE;
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function integer($value) {
    if (is_int($value)) {
      return TRUE;
    }

    // CRM-13460
    // ensure number passed is always a string numeral
    if (!is_numeric($value)) {
      return FALSE;
    }

    // note that is_int matches only integer type
    // and not strings which are only integers
    // hence we do this here
    if (preg_match('/^\d+$/', $value)) {
      return TRUE;
    }

    if ($value < 0) {
      $negValue = -1 * $value;
      if (is_int($negValue)) {
        return TRUE;
      }
    }

    return FALSE;
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function positiveInteger($value) {
    if (is_int($value)) {
      return !($value < 0);
    }

    // CRM-13460
    // ensure number passed is always a string numeral
    if (!is_numeric($value)) {
      return FALSE;
    }

    return (bool) preg_match('/^\d+$/', $value);
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function commaSeparatedIntegers($value) {
    foreach (explode(',', $value) as $val) {
      // Remove any Whitespace around the key.
      $val = trim($val);
      if (!self::positiveInteger($val)) {
        return FALSE;
      }
    }
    return TRUE;
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function numeric($value) {
    // lets use a php gatekeeper to ensure this is numeric
    if (!is_numeric($value)) {
      return FALSE;
    }

    return (bool) preg_match('/(^-?\d\d*\.\d*$)|(^-?\d\d*$)|(^-?\.\d\d*$)/', $value);
  }

  /**
   * Test whether $value is alphanumeric.
   *
   * Underscores and dashes are also allowed!
   *
   * This is the type of string you could expect to see in URL parameters
   * like `?mode=live` vs `?mode=test`. This function exists so that we can be
   * strict about what we accept for such values, thus mitigating against
   * potential security issues.
   *
   * @see \CRM_Utils_RuleTest::alphanumericData
   *   for examples of vales that give TRUE/FALSE here
   *
   * @param $value
   *
   * @return bool
   */
  public static function alphanumeric($value) {
    return (bool) preg_match('/^[a-zA-Z0-9_-]*$/', $value);
  }

  /**
   * @param $value
   * @param $noOfDigit
   *
   * @return bool
   */
  public static function numberOfDigit($value, $noOfDigit) {
    return (bool) preg_match('/^\d{' . $noOfDigit . '}$/', $value);
  }

  /**
   * Strict validation of 6-digit hex color notation per html5 <input type="color">
   *
   * @param $value
   * @return bool
   */
  public static function color($value) {
    return (bool) preg_match('/^#([\da-fA-F]{6})$/', $value);
  }

  /**
   * Strip thousand separator from a money string.
   *
   * Note that this should be done at the form layer. Once we are processing
   * money at the BAO or processor layer we should be working with something that
   * is already in a normalised format.
   *
   * @param string $value
   *
   * @return string
   */
  public static function cleanMoney($value) {
    // first remove all white space
    $value = str_replace([' ', "\t", "\n"], '', $value);

    $config = CRM_Core_Config::singleton();

    //CRM-14868
    $currencySymbols = CRM_Core_PseudoConstant::get(
      'CRM_Contribute_DAO_Contribution',
      'currency', [
        'keyColumn' => 'name',
        'labelColumn' => 'symbol',
      ]
    );
    $value = str_replace($currencySymbols, '', $value);

    if ($config->monetaryThousandSeparator) {
      $mon_thousands_sep = $config->monetaryThousandSeparator;
    }
    else {
      $mon_thousands_sep = ',';
    }

    // ugly fix for CRM-6391: do not drop the thousand separator if
    // it looks like it’s separating decimal part (because a given
    // value undergoes a second cleanMoney() call, for example)
    // CRM-15835 - in case the amount/value contains 0 after decimal
    // eg 150.5 the following if condition will pass
    if ($mon_thousands_sep != '.' or (substr($value, -3, 1) != '.' && substr($value, -2, 1) != '.')) {
      $value = str_replace($mon_thousands_sep, '', $value);
    }

    if ($config->monetaryDecimalPoint) {
      $mon_decimal_point = $config->monetaryDecimalPoint;
    }
    else {
      $mon_decimal_point = '.';
    }
    $value = str_replace($mon_decimal_point, '.', $value);

    return $value;
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function money($value) {
    $value = self::cleanMoney($value);

    if (self::integer($value)) {
      return TRUE;
    }

    // Allow values such as -0, 1.024555, -.1
    // We need to support multiple decimal places here, not just the number allowed by locale
    //  otherwise tax calculations break when you want the inclusive amount to be a round number (eg. £10 inc. VAT requires 8.333333333 here).
    return (bool) preg_match('/(^-?\d+\.?\d*$)|(^-?\.\d+$)/', $value);
  }

  /**
   * @param $value
   * @param int $maxLength
   *
   * @return bool
   */
  public static function string($value, $maxLength = 0) {
    if (is_string($value) &&
      ($maxLength === 0 || strlen($value) <= $maxLength)
    ) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function boolean($value) {
    if ($value === TRUE || $value === FALSE) {
      return TRUE;
    }
    // This is intentionally not using === comparison - but will fail on FALSE.
    return preg_match(
      '/(^(1|0)$)|(^(Y(es)?|N(o)?)$)|(^(T(rue)?|F(alse)?)$)/i', $value
    ) ? TRUE : FALSE;
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function email($value): bool {
    if (function_exists('idn_to_ascii')) {
      $parts = explode('@', $value);
      foreach ($parts as &$part) {
        // if the function returns FALSE then let filter_var have at it.
        $part = self::idnToAsci($part) ?: $part;
        if ($part === 'localhost') {
          // if we are in a dev environment add .com to trick it into accepting localhost.
          // this is a bit best-effort - ie we don't really care that it's in a bigger if.
          $part .= '.com';
        }
      }
      $value = implode('@', $parts);
    }
    return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
  }

  /**
   * Convert domain string to ascii.
   *
   * See https://lab.civicrm.org/dev/core/-/issues/2769
   * and also discussion over in guzzle land
   * https://github.com/guzzle/guzzle/pull/2454
   *
   * @param string $string
   *
   * @return string|false
   */
  private static function idnToAsci(string $string) {
    if (!\extension_loaded('intl')) {
      return $string;
    }
    if (defined('INTL_IDNA_VARIANT_UTS46')) {
      return idn_to_ascii($string, 0, INTL_IDNA_VARIANT_UTS46);
    }
    return idn_to_ascii($string);
  }

  /**
   * @param string $list
   *
   * @return bool
   */
  public static function emailList($list) {
    $emails = explode(',', $list);
    foreach ($emails as $email) {
      $email = trim($email);
      if (!self::email($email)) {
        return FALSE;
      }
    }
    return TRUE;
  }

  /**
   * allow between 4-6 digits as postal code since india needs 6 and US needs 5 (or
   * if u disregard the first 0, 4 (thanx excel!)
   * FIXME: we need to figure out how to localize such rules
   * @param $value
   *
   * @return bool
   */
  public static function postalCode($value) {
    if (preg_match('/^\d{4,6}(-\d{4})?$/', $value)) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * See how file rules are written in HTML/QuickForm/file.php
   * Checks to make sure the uploaded file is ascii
   *
   * @param string $elementValue
   *
   * @return bool
   *   True if file has been uploaded, false otherwise
   */
  public static function asciiFile($elementValue) {
    if ((isset($elementValue['error']) && $elementValue['error'] == 0) ||
      (!empty($elementValue['tmp_name']) && $elementValue['tmp_name'] != 'none')
    ) {
      return CRM_Utils_File::isAscii($elementValue['tmp_name']);
    }
    return FALSE;
  }

  /**
   * Checks to make sure the uploaded file is in UTF-8, recodes if it's not
   *
   * @param array $elementValue
   *
   * @return bool
   *   Whether file has been uploaded properly and is now in UTF-8.
   */
  public static function utf8File($elementValue) {
    $success = FALSE;

    if ((isset($elementValue['error']) && $elementValue['error'] == 0) ||
      (!empty($elementValue['tmp_name']) && $elementValue['tmp_name'] != 'none')
    ) {

      $success = CRM_Utils_File::isAscii($elementValue['tmp_name']);

      // if it's a file, but not UTF-8, let's try and recode it
      // and then make sure it's an UTF-8 file in the end
      if (!$success) {
        $success = CRM_Utils_File::toUtf8($elementValue['tmp_name']);
        if ($success) {
          $success = CRM_Utils_File::isAscii($elementValue['tmp_name']);
        }
      }
    }
    return $success;
  }

  /**
   * See how file rules are written in HTML/QuickForm/file.php
   * Checks to make sure the uploaded file is html
   *
   * @param array $elementValue
   *
   * @return bool
   *   True if file has been uploaded, false otherwise
   */
  public static function htmlFile($elementValue) {
    if ((isset($elementValue['error']) && $elementValue['error'] == 0) ||
      (!empty($elementValue['tmp_name']) && $elementValue['tmp_name'] != 'none')
    ) {
      return CRM_Utils_File::isHtmlFile($elementValue['tmp_name']);
    }
    return FALSE;
  }

  /**
   * Check if there is a record with the same name in the db.
   *
   * @param string $value
   *   The value of the field we are checking.
   * @param array $options
   *   The daoName, fieldName (optional) and DomainID (optional).
   *
   * @return bool
   *   true if object exists
   */
  public static function objectExists($value, $options) {
    $name = 'name';
    if (isset($options[2])) {
      $name = $options[2];
    }

    return CRM_Core_DAO::objectExists($value, CRM_Utils_Array::value(0, $options), CRM_Utils_Array::value(1, $options), CRM_Utils_Array::value(2, $options, $name), CRM_Utils_Array::value(3, $options));
  }

  /**
   * @param $value
   * @param $options
   *
   * @return bool
   */
  public static function optionExists($value, $options) {
    return CRM_Core_OptionValue::optionExists($value, $options[0], $options[1], $options[2], CRM_Utils_Array::value(3, $options, 'name'), CRM_Utils_Array::value(4, $options, FALSE));
  }

  /**
   * @param $value
   * @param $type
   *
   * @return bool
   */
  public static function creditCardNumber($value, $type) {
    return Validate_Finance_CreditCard::number($value, $type);
  }

  /**
   * @param $value
   * @param $type
   *
   * @return bool
   */
  public static function cvv($value, $type) {
    return Validate_Finance_CreditCard::cvv($value, $type);
  }

  /**
   * @param $value
   *
   * @return bool
   */
  public static function currencyCode($value) {
    static $currencyCodes = NULL;
    if (!$currencyCodes) {
      $currencyCodes = CRM_Core_PseudoConstant::currencyCode();
    }
    if (in_array($value, $currencyCodes)) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * Validate json string for xss
   *
   * @param string $value
   *
   * @return bool
   *   False if invalid, true if valid / safe.
   */
  public static function json($value) {
    $array = json_decode($value, TRUE);
    if (!$array || !is_array($array)) {
      return FALSE;
    }
    return self::arrayValue($array);
  }

  /**
   * @param $path
   *
   * @return bool
   */
  public static function fileExists($path) {
    return file_exists($path);
  }

  /**
   * Determine whether the value contains a valid reference to a directory.
   *
   * Paths stored in the setting system may be absolute -- or may be
   * relative to the default data directory.
   *
   * @param string $path
   * @return bool
   */
  public static function settingPath($path) {
    return is_dir(Civi::paths()->getPath($path));
  }

  /**
   * @param $value
   * @param null $actualElementValue
   *
   * @return bool
   */
  public static function validContact($value, $actualElementValue = NULL) {
    if ($actualElementValue) {
      $value = $actualElementValue;
    }

    return CRM_Utils_Rule::positiveInteger($value);
  }

  /**
   * Check the validity of the date (in qf format)
   * note that only a year is valid, or a mon-year is
   * also valid in addition to day-mon-year
   *
   * @param array $date
   *
   * @return bool
   *   true if valid date
   */
  public static function qfDate($date) {
    $config = CRM_Core_Config::singleton();

    $d = $date['d'] ?? NULL;
    $m = $date['M'] ?? NULL;
    $y = $date['Y'] ?? NULL;
    if (isset($date['h']) ||
      isset($date['g'])
    ) {
      $m = $date['M'] ?? NULL;
    }

    if (!$d && !$m && !$y) {
      return TRUE;
    }

    $day = $mon = 1;
    $year = 0;
    if ($d) {
      $day = $d;
    }
    if ($m) {
      $mon = $m;
    }
    if ($y) {
      $year = $y;
    }

    // if we have day we need mon, and if we have mon we need year
    if (($d && !$m) ||
      ($d && !$y) ||
      ($m && !$y)
    ) {
      return FALSE;
    }

    if (!empty($day) || !empty($mon) || !empty($year)) {
      return checkdate($mon, $day, $year);
    }
    return FALSE;
  }

  /**
   * @param $key
   *
   * @return bool
   */
  public static function qfKey($key) {
    return ($key) ? CRM_Core_Key::valid($key) : FALSE;
  }

  /**
   * Check if the values in the date range are in correct chronological order.
   *
   * @param array $fields
   *  Fields of the form.
   * @param $fieldName
   *  Name of date range field.
   * @param $errors
   *  The error array.
   * @param $title
   *  Title of the date range to be displayed in the error message.
   */
  public static function validDateRange($fields, $fieldName, &$errors, $title) {
    $lowDate = strtotime($fields[$fieldName . '_low']);
    $highDate = strtotime($fields[$fieldName . '_high']);

    if ($lowDate > $highDate) {
      $errors[$fieldName . '_range_error'] = ts('%1: Please check that your date range is in correct chronological order.', [1 => $title]);
    }
  }

  /**
   * @param string $key Extension Key to check
   * @return bool
   */
  public static function checkExtensionKeyIsValid($key = NULL) {
    if (!empty($key) && !preg_match('/^[0-9a-zA-Z._-]+$/', $key)) {
      return FALSE;
    }
    return TRUE;
  }

  /**
   * Validate array recursively checking keys and  values.
   *
   * @param array $array
   * @return bool
   */
  protected static function arrayValue($array) {
    foreach ($array as $key => $item) {
      if (is_array($item)) {
        if (!self::arrayValue($item)) {
          return FALSE;
        }
      }
    }
    return TRUE;
  }

}
