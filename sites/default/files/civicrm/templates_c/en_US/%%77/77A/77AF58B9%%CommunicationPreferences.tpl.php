<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/Inline/CommunicationPreferences.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/Inline/CommunicationPreferences.tpl', 31, false),array('function', 'crmURL', 'CRM/Contact/Page/Inline/CommunicationPreferences.tpl', 107, false),)), $this); ?>
<div class="crm-table2div-layout" id="crm-communication-pref-content">
  <div class="crm-clear"><!-- start of main -->
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
      <div class="crm-config-option">
        <a id="edit-communication-pref" class="hiddenElement crm-link-action" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add or edit communication preferences<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
        <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add or edit communication preferences<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </a>
      </div>
    <?php endif; ?>
    <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Privacy<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <div class="crm-content crm-contact-privacy_values font-red upper">
      <?php $_from = $this->_tpl_vars['privacy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['priv']):
?>
        <?php if ($this->_tpl_vars['priv']): ?><?php echo $this->_tpl_vars['privacy_values'][$this->_tpl_vars['index']]; ?>
<br/><?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
      <?php if ($this->_tpl_vars['is_opt_out']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Bulk Emails (User Opt Out)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
    </div>
    <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preferred Method(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <div class="crm-content crm-contact-preferred_communication_method_display">
      <?php echo $this->_tpl_vars['preferred_communication_method_display']; ?>

    </div>
    <?php if ($this->_tpl_vars['preferred_language']): ?>
    <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preferred Language<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <div class="crm-content crm-contact-preferred_language">
      <?php echo $this->_tpl_vars['preferred_language']; ?>

    </div>
    <?php endif; ?>
    <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Format<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <div class="crm-content crm-contact-preferred_mail_format">
      <?php echo $this->_tpl_vars['preferred_mail_format']; ?>

    </div>
    <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Greeting<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <div class="crm-content crm-contact-email_greeting_display">
      <?php echo $this->_tpl_vars['email_greeting_display']; ?>

      <?php if (! empty ( $this->_tpl_vars['email_greeting_custom'] )): ?><span class="crm-custom-greeting">(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Customized<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span><?php endif; ?>
    </div>
    <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Postal Greeting<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <div class="crm-content crm-contact-postal_greeting_display">
      <?php echo $this->_tpl_vars['postal_greeting_display']; ?>

      <?php if (! empty ( $this->_tpl_vars['postal_greeting_custom'] )): ?><span class="crm-custom-greeting" >(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Customized<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span><?php endif; ?>
    </div>
    <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Addressee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <div class="crm-content crm-contact-addressee_display">
      <?php echo $this->_tpl_vars['addressee_display']; ?>

      <?php if (! empty ( $this->_tpl_vars['addressee_custom'] )): ?><span class="crm-custom-greeting">(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Customized<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span><?php endif; ?>
    </div>
  </div> <!-- end of main -->
</div> <!-- end of table layout -->
 
<?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
<?php echo '
<script type="text/javascript">
cj(function(){
    cj(\'#communication-pref-block\').mouseenter( function() {
      cj(this).addClass(\'crm-inline-edit-hover\');
      cj(\'#edit-communication-pref\').show();
    }).mouseleave( function() {
      cj(this).removeClass(\'crm-inline-edit-hover\');
      cj(\'#edit-communication-pref\').hide();
    });

    // update email and phone block based on privacy settings
    var doNotEmail = '; ?>
<?php echo $this->_tpl_vars['do_not_email']; ?>
<?php echo ';
    
    if (doNotEmail) {
      cj(\'.crm-contact_email span\').addClass(\'do-not-email\');
    }
    else {
      cj(\'.crm-contact_email span\').removeClass(\'do-not-email\');
    }

    var doNotPhone = '; ?>
<?php echo $this->_tpl_vars['do_not_phone']; ?>
<?php echo ';
    
    if (doNotPhone) {
      cj(\'.crm-contact_phone span\').addClass(\'do-not-phone\');
    }
    else {
      cj(\'.crm-contact_phone span\').removeClass(\'do-not-phone\');
    }

    cj(\'#edit-communication-pref\').click( function() {
      var dataUrl  = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/inline','h' => 0,'q' => 'snippet=5&reset=1&cid='), $this);?>
<?php echo $this->_tpl_vars['contactId']; ?>
"<?php echo '; 
      
      addCiviOverlay(\'.crm-summary-comm-pref-block\');
      cj.ajax({
        data: { \'class_name\':\'CRM_Contact_Form_Inline_CommunicationPreferences\' },
        url: dataUrl,
        async: false
      }).done( function(response) {
        cj( \'#communication-pref-block\' ).html( response );
      });

      removeCiviOverlay(\'.crm-summary-comm-pref-block\');
    });
});
</script>
'; ?>

<?php endif; ?>