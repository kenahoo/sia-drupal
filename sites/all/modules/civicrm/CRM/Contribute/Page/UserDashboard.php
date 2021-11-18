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
class CRM_Contribute_Page_UserDashboard extends CRM_Contact_Page_View_UserDashBoard {

  /**
   * called when action is browse.
   */
  public function listContribution() {
    $rows = civicrm_api3('Contribution', 'get', [
      'options' => [
        'limit' => 12,
        'sort' => 'receive_date DESC',
      ],
      'sequential' => 1,
      'contact_id' => $this->_contactId,
      'return' => [
        'total_amount',
        'contribution_recur_id',
        'financial_type',
        'receive_date',
        'receipt_date',
        'contribution_status',
        'currency',
        'amount_level',
        'contact_id,',
        'contribution_source',
      ],
    ])['values'];

    // We want oldest first, just among the most recent contributions
    $rows = array_reverse($rows);

    foreach ($rows as $index => &$row) {
      // This is required for tpl logic. We should move away from hard-code this to adding an array of actions to the row
      // which the tpl can iterate through - this should allow us to cope with competing attempts to add new buttons
      // and allow extensions to assign new ones through the pageRun hook
      $row['balance_amount'] = CRM_Contribute_BAO_Contribution::getContributionBalance($row['contribution_id']);
      $contributionStatus = CRM_Core_PseudoConstant::getName('CRM_Contribute_BAO_Contribution', 'contribution_status_id', $row['contribution_status_id']);

      if (in_array($contributionStatus, ['Pending', 'Partially paid'])) {
        $row['buttons']['pay'] = [
          'class' => 'button',
          'label' => ts('Pay Now'),
          'url' => CRM_Utils_System::url('civicrm/contribute/transact', [
            'reset' => 1,
            'id' => Civi::settings()->get('default_invoice_page'),
            'ccid' => $row['contribution_id'],
            'cs' => $this->getUserChecksum(),
            'cid' => $row['contact_id'],
          ]),
        ];
      }
    }

    $this->assign('contribute_rows', $rows);
    $this->assign('contributionSummary', ['total_amount' => civicrm_api3('Contribution', 'getcount', ['contact_id' => $this->_contactId])]);

    //add honor block
    $params = CRM_Contribute_BAO_Contribution::getHonorContacts($this->_contactId);

    if (!empty($params)) {
      // assign vars to templates
      $this->assign('honorRows', $params);
      $this->assign('honor', TRUE);
    }

    $recur = new CRM_Contribute_DAO_ContributionRecur();
    $recur->contact_id = $this->_contactId;
    $recur->is_test = 0;
    $recur->find();

    $recurStatus = CRM_Contribute_PseudoConstant::contributionStatus(NULL, 'label');

    $recurRow = [];
    $recurIDs = [];
    while ($recur->fetch()) {
      if (empty($recur->payment_processor_id)) {
        // it's not clear why we continue here as any without a processor id would likely
        // be imported from another system & still seem valid.
        continue;
      }

      require_once 'api/v3/utils.php';
      //@todo calling api functions directly is not supported
      _civicrm_api3_object_to_array($recur, $values);

      $values['recur_status'] = $recurStatus[$values['contribution_status_id']];
      $recurRow[$values['id']] = $values;

      $action = array_sum(array_keys(CRM_Contribute_Page_Tab::dashboardRecurLinks((int) $recur->id, (int) $recur->contact_id)));

      $details = CRM_Contribute_BAO_ContributionRecur::getSubscriptionDetails($recur->id, 'recur');
      $hideUpdate = $details->membership_id & $details->auto_renew;

      if ($hideUpdate) {
        $action -= CRM_Core_Action::UPDATE;
      }

      $recurRow[$values['id']]['action'] = CRM_Core_Action::formLink(CRM_Contribute_Page_Tab::dashboardRecurLinks((int) $recur->id, (int) $this->_contactId),
        $action, [
          'cid' => $this->_contactId,
          'crid' => $values['id'],
          'cxt' => 'contribution',
        ],
        ts('more'),
        FALSE,
        'contribution.dashboard.recurring',
        'Contribution',
        $values['id']
      );

      $recurIDs[] = $values['id'];
    }
    if (is_array($recurIDs) && !empty($recurIDs)) {
      $getCount = CRM_Contribute_BAO_ContributionRecur::getCount($recurIDs);
      foreach ($getCount as $key => $val) {
        $recurRow[$key]['completed'] = $val;
        $recurRow[$key]['link'] = CRM_Utils_System::url('civicrm/contribute/search',
          "reset=1&force=1&recur=$key"
        );
      }
    }

    $this->assign('recurRows', $recurRow);
    if (!empty($recurRow)) {
      $this->assign('recur', TRUE);
    }
    else {
      $this->assign('recur', FALSE);
    }
  }

  /**
   * Should invoice links be displayed on the template.
   *
   * @todo This should be moved to a hook-like structure on the invoicing class
   * (currently CRM_Utils_Invoicing) with a view to possible removal from core.
   */
  public function isIncludeInvoiceLinks() {
    if (!CRM_Invoicing_Utils::isInvoicingEnabled()) {
      return FALSE;
    }
    $dashboardOptions = CRM_Core_BAO_Setting::valueOptions(CRM_Core_BAO_Setting::SYSTEM_PREFERENCES_NAME,
      'user_dashboard_options'
    );
    return $dashboardOptions['Invoices / Credit Notes'];
  }

  /**
   * the main function that is called when the page
   * loads, it decides the which action has to be taken for the page.
   */
  public function run() {
    $this->assign('isIncludeInvoiceLinks', $this->isIncludeInvoiceLinks());
    parent::preProcess();
    $this->listContribution();
  }

}
