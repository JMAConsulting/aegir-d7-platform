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
 * Class CRM_Event_Import_Field
 */
class CRM_Event_Import_Field {

  /**
   * #@+
   * @var string
   */

  /**
   * Name of the field
   * @var string
   */
  public $_name;

  /**
   * Title of the field to be used in display
   * @var string
   */
  public $_title;

  /**
   * Type of field
   * @var int
   */
  public $_type;

  /**
   * Regexp to match the CSV header of this column/field
   * @var string
   */
  public $_headerPattern;

  /**
   * Regexp to match the pattern of data from various column/fields
   * @var string
   */
  public $_dataPattern;

  /**
   * Value of this field
   * @var string|null
   */
  public $_value;

  /**
   * @param string $name
   * @param string $title
   * @param int $type
   * @param string $headerPattern
   * @param string $dataPattern
   */
  public function __construct($name, $title, $type = CRM_Utils_Type::T_INT, $headerPattern = '//', $dataPattern = '//') {
    $this->_name = $name;
    $this->_title = $title;
    $this->_type = $type;
    $this->_headerPattern = $headerPattern;
    $this->_dataPattern = $dataPattern;

    $this->_value = NULL;
  }

  public function resetValue() {
    $this->_value = NULL;
  }

  /**
   * Convert the value to the type of this field and set the field value with the appropriate type.
   *
   * @param string $value
   */
  public function setValue($value) {
    $this->_value = $value;
  }

  /**
   * @return bool
   */
  public function validate() {
    if (CRM_Utils_System::isNull($this->_value)) {
      return TRUE;
    }

    switch ($this->_name) {
      case 'contact_id':
        // note: we validate existence of the contact in API, upon
        // insert (it would be too costly to do a db call here)
        return CRM_Utils_Rule::integer($this->_value);

      case 'register_date':
        return CRM_Utils_Rule::date($this->_value);

      /* @codingStandardsIgnoreStart
        case 'event_id':
            static $events = null;
            if (!$events) {
                $events = CRM_Event_PseudoConstant::event();
            }
            if (in_array($this->_value, $events)) {
                return true;
            }
            else {
                return false;
            }
            break;
      @codingStandardsIgnoreEnd */

      default:
        break;
    }

    // check whether that's a valid custom field id
    // and if so, check the contents' validity
    if ($customFieldID = CRM_Core_BAO_CustomField::getKeyID($this->_name)) {
      static $customFields = NULL;
      if (!$customFields) {
        $customFields = CRM_Core_BAO_CustomField::getFields('Participant');
      }
      if (!array_key_exists($customFieldID, $customFields)) {
        return FALSE;
      }
      return CRM_Core_BAO_CustomValue::typecheck($customFields[$customFieldID]['data_type'], $this->_value);
    }
    return TRUE;
  }

}
