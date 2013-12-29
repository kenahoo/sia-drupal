<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/Inline/Phone.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/Inline/Phone.tpl', 32, false),array('function', 'crmURL', 'CRM/Contact/Page/Inline/Phone.tpl', 72, false),)), $this); ?>
<div class="crm-table2div-layout" id="crm-phone-content">
  <div class="crm-clear"> <!-- start of main -->
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
      <?php if ($this->_tpl_vars['phone']): ?>
       <div class="crm-config-option">
        <a id="edit-phone" class="hiddenElement crm-link-action" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add or edit phone numbers<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
          <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add or edit phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </a>
      </div>
      <?php else: ?>
        <div>
          <a id="edit-phone" class="crm-link-action empty-phone" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add a phone number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
            <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </a>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php $_from = $this->_tpl_vars['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
      <?php if ($this->_tpl_vars['item']['phone'] || $this->_tpl_vars['item']['phone_ext']): ?>
        <div class="crm-label"><?php echo $this->_tpl_vars['item']['location_type']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['phone_type']; ?>
</div>
        <div class="crm-content crm-contact_phone <?php if ($this->_tpl_vars['item']['is_primary'] == 1): ?>primary<?php endif; ?>">
          <span <?php if ($this->_tpl_vars['privacy']['do_not_phone']): ?> class="do-not-phone" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Privacy flag: Do Not Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php endif; ?>>
    <?php echo $this->_tpl_vars['item']['phone']; ?>
<?php if ($this->_tpl_vars['item']['phone_ext']): ?>&nbsp;&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['item']['phone_ext']; ?>
<?php endif; ?>
          </span>
        </div>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
   </div> <!-- end of main -->
</div>

<?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
<?php echo '
<script type="text/javascript">
cj(function(){
    cj(\'#phone-block\').mouseenter( function() {
      cj(this).addClass(\'crm-inline-edit-hover\');
      cj(\'#edit-phone\').show();
    }).mouseleave( function() {
      cj(this).removeClass(\'crm-inline-edit-hover\');
      if ( !cj(\'#edit-phone\').hasClass(\'empty-phone\') ) { 
        cj(\'#edit-phone\').hide();
      }
    });

    cj(\'#edit-phone\').click( function() {
        var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/inline','h' => 0,'q' => 'snippet=5&reset=1&cid='), $this);?>
<?php echo $this->_tpl_vars['contactId']; ?>
"<?php echo '; 
        
        addCiviOverlay(\'.crm-summary-phone-block\');
        cj.ajax({ 
          data: { \'class_name\':\'CRM_Contact_Form_Inline_Phone\' },
          url: dataUrl,
          async: false
        }).done( function(response) {
          cj(\'#phone-block\').html( response );
        });
        
        removeCiviOverlay(\'.crm-summary-phone-block\');
    });
});
</script>
'; ?>

<?php endif; ?>