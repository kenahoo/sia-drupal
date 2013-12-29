<?php /* Smarty version 2.6.26, created on 2013-08-27 09:26:55
         compiled from CRM/Contribute/Form/Search/Common.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Form/Search/Common.tpl', 27, false),array('modifier', 'crmReplace', 'CRM/Contribute/Form/Search/Common.tpl', 61, false),)), $this); ?>
<tr>	
	<tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Dates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td></tr>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/DateRange.tpl", 'smarty_include_vars' => array('fieldName' => 'contribution_date','from' => '_low','to' => '_high')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</tr>
<tr>
	<td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Amounts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <br />
	<?php echo $this->_tpl_vars['form']['contribution_amount_low']['label']; ?>

	<?php echo $this->_tpl_vars['form']['contribution_amount_low']['html']; ?>
 &nbsp;&nbsp;
	<?php echo $this->_tpl_vars['form']['contribution_amount_high']['label']; ?>

	<?php echo $this->_tpl_vars['form']['contribution_amount_high']['html']; ?>
 </td>
	<td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <br />
	<?php echo $this->_tpl_vars['form']['contribution_status_id']['html']; ?>
 </td>
</tr>
<tr>
	<td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Paid By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $this->_tpl_vars['form']['contribution_check_number']['label']; ?>
 <br />
	<?php echo $this->_tpl_vars['form']['contribution_payment_instrument_id']['html']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $this->_tpl_vars['form']['contribution_check_number']['html']; ?>

	</td>
	<td><?php echo $this->_tpl_vars['form']['contribution_transaction_id']['label']; ?>
 <br />
	<?php echo $this->_tpl_vars['form']['contribution_transaction_id']['html']; ?>
</td>
</tr>
<tr>
	<td>
	<?php echo $this->_tpl_vars['form']['contribution_receipt_date_isnull']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['contribution_receipt_date_isnull']['label']; ?>
<br />
	<?php echo $this->_tpl_vars['form']['contribution_thankyou_date_isnull']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['contribution_thankyou_date_isnull']['label']; ?>

	</td>
	<td>
	<?php echo $this->_tpl_vars['form']['contribution_pay_later']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['contribution_pay_later']['label']; ?>
<br />
	<?php echo $this->_tpl_vars['form']['contribution_recurring']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['contribution_recurring']['label']; ?>
<br />
        <?php echo $this->_tpl_vars['form']['contribution_recurring_isnull']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['contribution_recurring_isnull']['label']; ?>
<br />
	<?php echo $this->_tpl_vars['form']['contribution_test']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['contribution_test']['label']; ?>
</td>
</tr>
<tr>
	<td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <br />
	<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['contribution_type_id']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'twenty') : smarty_modifier_crmReplace($_tmp, 'class', 'twenty')); ?>
</td>
	<td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <br />
	<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['contribution_page_id']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'twenty') : smarty_modifier_crmReplace($_tmp, 'class', 'twenty')); ?>
</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['form']['contribution_in_honor_of']['label']; ?>
 <br />
	<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['contribution_in_honor_of']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'twenty') : smarty_modifier_crmReplace($_tmp, 'class', 'twenty')); ?>
</td>
	<td><?php echo $this->_tpl_vars['form']['contribution_source']['label']; ?>
 <br />
	<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['contribution_source']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'twenty') : smarty_modifier_crmReplace($_tmp, 'class', 'twenty')); ?>
</td>
</tr>
<tr>
	<td><?php echo $this->_tpl_vars['form']['contribution_pcp_made_through_id']['label']; ?>
 <br />
	<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['contribution_pcp_made_through_id']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'twenty') : smarty_modifier_crmReplace($_tmp, 'class', 'twenty')); ?>
</td>
	<td><?php echo $this->_tpl_vars['form']['contribution_pcp_display_in_roll']['label']; ?>

	<?php echo $this->_tpl_vars['form']['contribution_pcp_display_in_roll']['html']; ?>
<span class="crm-clear-link">(<a href="javascript:unselectRadio('contribution_pcp_display_in_roll','<?php echo $this->_tpl_vars['form']['formName']; ?>
')"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>clear<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>)</span></td>
</tr>

<tr>
	<td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Currency<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <br />
	<?php echo $this->_tpl_vars['form']['contribution_currency_type']['html']; ?>
</td>
  <?php if ($this->_tpl_vars['form']['contribution_batch_id']['html']): ?>
	  <td><?php echo $this->_tpl_vars['form']['contribution_batch_id']['label']; ?>
 <br />
	  <?php echo $this->_tpl_vars['form']['contribution_batch_id']['html']; ?>
</td>
  <?php endif; ?>
</tr>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignContext' => 'componentSearch','campaignTrClass' => '','campaignTdClass' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['contributeGroupTree']): ?>
<tr>
	<td colspan="2">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Search.tpl", 'smarty_include_vars' => array('groupTree' => $this->_tpl_vars['contributeGroupTree'],'showHideLinks' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
</tr>
<?php endif; ?>