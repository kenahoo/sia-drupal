<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/Inline/Email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/Inline/Email.tpl', 32, false),array('modifier', 'nl2br', 'CRM/Contact/Page/Inline/Email.tpl', 56, false),array('function', 'crmURL', 'CRM/Contact/Page/Inline/Email.tpl', 79, false),)), $this); ?>
<div class="crm-table2div-layout" id="crm-email-content">
  <div class="crm-clear"> <!-- start of main -->
     <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
       <?php if ($this->_tpl_vars['email']): ?>
       <div class="crm-config-option">
        <a id="edit-email" class="hiddenElement crm-link-action" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add or edit email addresses<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
          <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add or edit email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </a>
      </div>
      <?php else: ?>
        <div>
          <a id="edit-email" class="crm-link-action empty-email" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add email address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
            <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </a>
        </div>
      <?php endif; ?>
     <?php endif; ?>
  <?php $_from = $this->_tpl_vars['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blockId'] => $this->_tpl_vars['item']):
?>
    <?php if ($this->_tpl_vars['item']['email']): ?>
      <div class="crm-label"><?php echo $this->_tpl_vars['item']['location_type']; ?>
&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <div class="crm-content crm-contact_email <?php if ($this->_tpl_vars['item']['is_primary'] == 1): ?>primary<?php endif; ?>"> <!-- start of content -->
        <span class=<?php if ($this->_tpl_vars['privacy']['do_not_email']): ?>"do-not-email" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Privacy flag: Do Not Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" <?php elseif ($this->_tpl_vars['item']['on_hold']): ?>"email-hold" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email on hold - generally due to bouncing.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" <?php elseif ($this->_tpl_vars['item']['is_primary'] == 1): ?>"primary"<?php endif; ?>><a href="mailto:<?php echo $this->_tpl_vars['item']['email']; ?>
"><?php echo $this->_tpl_vars['item']['email']; ?>
</a><?php if ($this->_tpl_vars['item']['on_hold'] == 2): ?>&nbsp;(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>On Hold - Opt Out<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php elseif ($this->_tpl_vars['item']['on_hold']): ?>&nbsp;(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>On Hold<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?><?php if ($this->_tpl_vars['item']['is_bulkmail']): ?>&nbsp;(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Bulk<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?></span>
        <?php if ($this->_tpl_vars['item']['signature_text'] || $this->_tpl_vars['item']['signature_html']): ?>
        <span class="signature-link description">
            <a href="#" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Signature<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onClick="showHideSignature( '<?php echo $this->_tpl_vars['blockId']; ?>
' ); return false;"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(signature)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </span>
        <?php endif; ?>
        <div id="Email_Block_<?php echo $this->_tpl_vars['blockId']; ?>
_signature" class="hiddenElement">
          <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Signature HTML<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><br /><?php echo $this->_tpl_vars['item']['signature_html']; ?>
<br /><br />
        <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Signature Text<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><br /><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['signature_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
      </div> <!-- end of content -->
    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
  </div> <!-- end of main -->
</div>

<?php echo '
<script type="text/javascript">

'; ?>
<?php if ($this->_tpl_vars['permission'] == 'edit'): ?><?php echo '
cj(function(){
  cj(\'#email-block\').mouseenter( function() {
      cj(this).addClass(\'crm-inline-edit-hover\');
      cj(\'#edit-email\').show();
    }).mouseleave( function() {
      cj(this).removeClass(\'crm-inline-edit-hover\');
      if ( !cj(\'#edit-email\').hasClass(\'empty-email\') ) { 
        cj(\'#edit-email\').hide();
      }
    });

    cj(\'#edit-email\').click( function() {
        var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/inline','h' => 0,'q' => 'snippet=5&reset=1&cid='), $this);?>
<?php echo $this->_tpl_vars['contactId']; ?>
"<?php echo ';

        addCiviOverlay(\'.crm-summary-email-block\');
        cj.ajax({ 
          data: { \'class_name\':\'CRM_Contact_Form_Inline_Email\' },
          url: dataUrl,
          async: false
        }).done( function(response) {
          cj(\'#email-block\').html( response );
        });

        removeCiviOverlay(\'.crm-summary-email-block\');
    });
});
'; ?>
<?php endif; ?><?php echo '
function showHideSignature( blockId ) {
  cj("#Email_Block_" + blockId + "_signature").show( );   

  cj("#Email_Block_" + blockId + "_signature").dialog({
      title: "Signature",
      modal: true,
      bgiframe: true,
      width: 900,
      height: 500,
      overlay: { 
          opacity: 0.5, 
          background: "black"
      },

      beforeclose: function(event, ui) {
        cj(this).dialog("destroy");
      },
      open:function() {
      },

      buttons: { 
        "Done": function() { 
                  cj(this).dialog("destroy"); 
                } 
      } 
  });
}
</script>
'; ?>
