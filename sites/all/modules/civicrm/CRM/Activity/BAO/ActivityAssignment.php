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

/**
 * This class is for activity assignment functions.
 */
class CRM_Activity_BAO_ActivityAssignment extends CRM_Activity_DAO_ActivityContact {

  /**
   * Add activity assignment.
   *
   * @param array $params
   *   (reference ) an assoc array of name/value pairs.
   *
   * @return object
   *   activity type of object that is added
   */
  public static function create(&$params) {
    $assignment = new CRM_Activity_BAO_ActivityContact();
    $activityContacts = CRM_Activity_BAO_ActivityContact::buildOptions('record_type_id', 'validate');
    $assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);

    $assignment->copyValues($params);
    $assignment->record_type_id = $assigneeID;

    return $assignment->save();
  }

  /**
   * Retrieve assignee_id by activity_id.
   *
   * @param int $activity_id
   *
   * @return array
   */
  public static function retrieveAssigneeIdsByActivityId($activity_id) {
    $assigneeArray = [];
    if (!CRM_Utils_Rule::positiveInteger($activity_id)) {
      return $assigneeArray;
    }

    $activityContacts = CRM_Activity_BAO_ActivityContact::buildOptions('record_type_id', 'validate');
    $assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);

    $sql = "
SELECT     contact_id
FROM       civicrm_activity_contact
INNER JOIN civicrm_contact ON contact_id = civicrm_contact.id
WHERE      activity_id = %1
AND        record_type_id = $assigneeID
AND        civicrm_contact.is_deleted = 0
";
    $assignment = CRM_Core_DAO::executeQuery($sql, [
      1 => [
        $activity_id,
        'Integer',
      ],
    ]);
    while ($assignment->fetch()) {
      $assigneeArray[] = $assignment->contact_id;
    }

    return $assigneeArray;
  }

  /**
   * Retrieve assignee names by activity_id.
   *
   * @param array $activityIDs
   *   IDs of the activities.
   * @param bool $isDisplayName
   *   If set returns display names of assignees.
   * @param bool $skipDetails
   *   If false returns all details of assignee contact.
   *
   * @return array
   */
  public static function getAssigneeNames($activityIDs, $isDisplayName = FALSE, $skipDetails = TRUE) {
    $assigneeNames = [];
    if (empty($activityIDs)) {
      return $assigneeNames;
    }
    $activityContacts = CRM_Activity_BAO_ActivityContact::buildOptions('record_type_id', 'validate');
    $assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);

    $whereClause = "";
    if (!$skipDetails) {
      $whereClause = "  AND ce.is_primary= 1";
    }
    $inClause = implode(",", $activityIDs);

    $query = "
SELECT     contact_a.id, contact_a.sort_name, contact_a.display_name, ce.email,
           civicrm_activity_contact.activity_id
FROM       civicrm_contact contact_a
INNER JOIN civicrm_activity_contact ON civicrm_activity_contact.contact_id = contact_a.id
LEFT JOIN  civicrm_email ce ON ce.contact_id = contact_a.id
WHERE      civicrm_activity_contact.activity_id IN ( $inClause )
AND        contact_a.is_deleted = 0
AND        civicrm_activity_contact.record_type_id = $assigneeID
           {$whereClause}
";

    $dao = CRM_Core_DAO::executeQuery($query);
    while ($dao->fetch()) {
      if (!$isDisplayName) {
        $assigneeNames[$dao->id] = $dao->sort_name;
      }
      else {
        if ($skipDetails) {
          $assigneeNames[$dao->id] = $dao->display_name;
        }
        else {
          $assigneeNames[$dao->id]['contact_id'] = $dao->id;
          $assigneeNames[$dao->id]['display_name'] = $dao->display_name;
          $assigneeNames[$dao->id]['sort_name'] = $dao->sort_name;
          $assigneeNames[$dao->id]['email'] = $dao->email;
          $assigneeNames[$dao->id]['role'] = ts('Activity Assignee');
          $assigneeNames[$dao->id]['activity_id'] = $dao->activity_id;
        }
      }
    }
    return $assigneeNames;
  }

}
