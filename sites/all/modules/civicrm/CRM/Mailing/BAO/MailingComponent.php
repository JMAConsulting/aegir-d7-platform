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
class CRM_Mailing_BAO_MailingComponent extends CRM_Mailing_DAO_MailingComponent {

  /**
   * Retrieve DB object and copy to defaults array.
   *
   * @param array $params
   *   Array of criteria values.
   * @param array $defaults
   *   Array to be populated with found values.
   *
   * @return self|null
   *   The DAO object, if found.
   *
   * @deprecated
   */
  public static function retrieve($params, &$defaults) {
    return self::commonRetrieve(self::class, $params, $defaults);
  }

  /**
   * Update the is_active flag in the db.
   *
   * @param int $id
   *   Id of the database record.
   * @param bool $is_active
   *   Value we want to set the is_active field.
   *
   * @return bool
   *   true if we found and updated the object, else false
   */
  public static function setIsActive($id, $is_active) {
    return CRM_Core_DAO::setFieldValue('CRM_Mailing_DAO_MailingComponent', $id, 'is_active', $is_active);
  }

  /**
   * Create and Update mailing component.
   *
   * @param array $params
   *   (reference ) an assoc array of name/value pairs.
   * @param array $ids
   *   (deprecated) the array that holds all the db ids.
   *
   * @return CRM_Mailing_BAO_MailingComponent
   */
  public static function add(&$params, $ids = []) {
    $id = $params['id'] ?? $ids['id'] ?? NULL;
    $component = new CRM_Mailing_BAO_MailingComponent();
    if ($id) {
      $component->id = $id;
      $component->find(TRUE);
    }

    $component->copyValues($params);
    if (empty($id) && empty($params['body_text'])) {
      $component->body_text = CRM_Utils_String::htmlToText(CRM_Utils_Array::value('body_html', $params));
    }

    if ($component->is_default) {
      if (!empty($id)) {
        $sql = 'UPDATE civicrm_mailing_component SET is_default = 0 WHERE component_type = %1 AND id <> %2';
        $sqlParams = [
          1 => [$component->component_type, 'String'],
          2 => [$id, 'Positive'],
        ];
      }
      else {
        $sql = 'UPDATE civicrm_mailing_component SET is_default = 0 WHERE component_type = %1';
        $sqlParams = [
          1 => [$component->component_type, 'String'],
        ];
      }
      CRM_Core_DAO::executeQuery($sql, $sqlParams);
    }

    $component->save();
    return $component;
  }

}
