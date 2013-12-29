<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/View/CustomDataFieldView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/View/CustomDataFieldView.tpl', 29, false),array('function', 'crmURL', 'CRM/Contact/Page/View/CustomDataFieldView.tpl', 54, false),)), $this); ?>
<div class="crm-table2div-layout" id="custom-set-content-<?php echo $this->_tpl_vars['customGroupId']; ?>
">
  <div class="crm-clear">
    <div class="crm-config-option">
      <a id="edit-custom-set-block-<?php echo $this->_tpl_vars['customGroupId']; ?>
" class="hiddenElement crm-link-action" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add or edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" cgId="<?php echo $this->_tpl_vars['customGroupId']; ?>
">
      <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add or edit custom set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </a>
    </div>
  
  <?php $_from = $this->_tpl_vars['cd_edit']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['element']):
?>
    <?php if ($this->_tpl_vars['element']['options_per_line'] != 0): ?>
      <div class="crm-label"><?php echo $this->_tpl_vars['element']['field_title']; ?>
</div>
      <div class="crm-content crm-custom_data">
                    <?php $_from = $this->_tpl_vars['element']['field_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
              <?php echo $this->_tpl_vars['val']; ?>

          <?php endforeach; endif; unset($_from); ?>
      </div>
    <?php else: ?>
      <div class="crm-label"><?php echo $this->_tpl_vars['element']['field_title']; ?>
</div>
      <?php if ($this->_tpl_vars['element']['field_type'] == 'File'): ?>
          <?php if ($this->_tpl_vars['element']['field_value']['displayURL']): ?>
              <div class="crm-content crm-custom_data crm-displayURL"><a href="javascript:imagePopUp('<?php echo $this->_tpl_vars['element']['field_value']['imageURL']; ?>
')" ><img src="<?php echo $this->_tpl_vars['element']['field_value']['displayURL']; ?>
" height = "<?php echo $this->_tpl_vars['element']['field_value']['imageThumbHeight']; ?>
" width="<?php echo $this->_tpl_vars['element']['field_value']['imageThumbWidth']; ?>
"></a></div>
          <?php else: ?>
              <div class="crm-content html-adjust crm-custom_data crm-fileURL"><a href="<?php echo $this->_tpl_vars['element']['field_value']['fileURL']; ?>
"><?php echo $this->_tpl_vars['element']['field_value']['fileName']; ?>
</a></div>
          <?php endif; ?>
      <?php elseif ($this->_tpl_vars['element']['field_data_type'] == 'ContactReference' && $this->_tpl_vars['element']['contact_ref_id']): ?>
                    <div class="crm-content html-adjust crm-custom-data crm-contact-reference">
              <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['element']['contact_ref_id'])), $this);?>
" title="view contact"><?php echo $this->_tpl_vars['element']['field_value']; ?>
</a>
          </div>
      <?php else: ?>
          <div class="crm-content html-adjust crm-custom-data"><?php echo $this->_tpl_vars['element']['field_value']; ?>
</div>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
  </div>
</div>