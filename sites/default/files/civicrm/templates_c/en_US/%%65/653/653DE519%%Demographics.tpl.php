<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/Inline/Demographics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/Inline/Demographics.tpl', 30, false),array('modifier', 'crmDate', 'CRM/Contact/Page/Inline/Demographics.tpl', 41, false),array('function', 'crmURL', 'CRM/Contact/Page/Inline/Demographics.tpl', 81, false),)), $this); ?>
<div class="crm-table2div-layout" id="crm-demographic-content">
    <div class="crm-clear"> <!-- start of main -->
      <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
        <div class="crm-config-option">
          <a id="edit-demographic" class="hiddenElement crm-link-action" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add or edit demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
          <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add or edit demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </a>
        </div>
      <?php endif; ?>

      <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Gender<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <div class="crm-content crm-contact-gender_display"><?php echo $this->_tpl_vars['gender_display']; ?>
</div>
      <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date of birth<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <div class="crm-content crm-contact-birth_date_display">
          <?php if ($this->_tpl_vars['birthDateViewFormat']): ?>	 
              <?php echo ((is_array($_tmp=$this->_tpl_vars['birth_date_display'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['birthDateViewFormat']) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['birthDateViewFormat'])); ?>

          <?php else: ?>
              <?php echo ((is_array($_tmp=$this->_tpl_vars['birth_date_display'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

          <?php endif; ?>
          &nbsp;
      </div>
      <?php if ($this->_tpl_vars['is_deceased'] == 1): ?>
         <?php if ($this->_tpl_vars['deceased_date']): ?>
          <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date Deceased<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <div class="crm-content crm-contact-deceased_date_display">
           <?php if ($this->_tpl_vars['birthDateViewFormat']): ?>          
            <?php echo ((is_array($_tmp=$this->_tpl_vars['deceased_date_display'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['birthDateViewFormat']) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['birthDateViewFormat'])); ?>

           <?php else: ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['deceased_date_display'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

           <?php endif; ?>
         </div>
         <?php else: ?>
          <div class="crm-label"></div>
          <div class="crm-content crm-contact-deceased_message"><span class="font-red upper"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact is Deceased<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></div>
         <?php endif; ?>
       <?php else: ?>
          <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Age<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <div class="crm-content crm-contact-age_display"><?php if ($this->_tpl_vars['age']['y']): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['y'],'plural' => '%count years')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count year<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php elseif ($this->_tpl_vars['age']['m']): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['m'],'plural' => '%count months')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count month<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></div>
       <?php endif; ?>
    </div> <!-- end of main -->
  </div>

<?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
<?php echo '
<script type="text/javascript">
cj(function(){
    cj(\'#demographic-block\').mouseenter( function() {
      cj(this).addClass(\'crm-inline-edit-hover\');
      cj(\'#edit-demographic\').show();
    }).mouseleave( function() {
      cj(this).removeClass(\'crm-inline-edit-hover\');
      cj(\'#edit-demographic\').hide();
    });

    cj(\'#edit-demographic\').click( function() {
        var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/inline','h' => 0,'q' => 'snippet=5&reset=1&cid='), $this);?>
<?php echo $this->_tpl_vars['contactId']; ?>
"<?php echo '; 
        
        addCiviOverlay(\'.crm-summary-demographic-block\');
        cj.ajax({
          data: { \'class_name\':\'CRM_Contact_Form_Inline_Demographics\' },
          url: dataUrl,
          async: false
        }).done( function(response) {
          cj(\'#demographic-block\').html( response );
        });
        
        removeCiviOverlay(\'.crm-summary-demographic-block\');
    });
});
</script>
'; ?>

<?php endif; ?>