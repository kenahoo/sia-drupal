<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/Inline/Address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/Inline/Address.tpl', 30, false),array('function', 'crmURL', 'CRM/Contact/Page/Inline/Address.tpl', 41, false),array('modifier', 'nl2br', 'CRM/Contact/Page/Inline/Address.tpl', 48, false),)), $this); ?>
<?php if ($this->_tpl_vars['add']): ?>
  <div class="crm-table2div-layout">
    <div class="crm-clear"> <!-- start of main -->
      <div class="crm-config-option">
        <a id="edit-address-block-<?php echo $this->_tpl_vars['locationIndex']; ?>
" class="hiddenElement crm-link-action" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to edit address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" locno="<?php echo $this->_tpl_vars['locationIndex']; ?>
" aid="<?php echo $this->_tpl_vars['add']['id']; ?>
">
        <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </a>
      </div>
      <div class="crm-label">
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['add']['location_type'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1&nbsp;Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php if ($this->_tpl_vars['config']->mapProvider && ! empty ( $this->_tpl_vars['add']['geo_code_1'] ) && is_numeric ( $this->_tpl_vars['add']['geo_code_1'] ) && ! empty ( $this->_tpl_vars['add']['geo_code_2'] ) && is_numeric ( $this->_tpl_vars['add']['geo_code_2'] )): ?>
        <br /><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/map','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])."&lid=".($this->_tpl_vars['add']['location_type_id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array('1' => ($this->_tpl_vars['add']['location_type']))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map %1 Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><span class="geotag"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
        <?php endif; ?>
      </div>
      <div class="crm-content">
        <?php if (! empty ( $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['locationIndex']]['shared_address_display']['name'] )): ?>
          <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['sharedAddresses'][$this->_tpl_vars['locationIndex']]['shared_address_display']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Address belongs to %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><br />
        <?php endif; ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['add']['display'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

      </div>
    </div>
  </div>

  <!-- add custom data -->
  <?php $_from = $this->_tpl_vars['add']['custom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cgId'] => $this->_tpl_vars['customGroup']):
?>     <?php $this->assign('isAddressCustomPresent', 1); ?>
    <?php $_from = $this->_tpl_vars['customGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cvId'] => $this->_tpl_vars['customValue']):
?>
    <div id="address_custom_<?php echo $this->_tpl_vars['cgId']; ?>
_<?php echo $this->_tpl_vars['locationIndex']; ?>
" 
    class="crm-accordion-wrapper crm-address-custom-<?php echo $this->_tpl_vars['cgId']; ?>
-<?php echo $this->_tpl_vars['locationIndex']; ?>
-accordion 
    <?php if ($this->_tpl_vars['customValue']['collapse_display']): ?>crm-accordion-closed<?php else: ?>crm-accordion-open<?php endif; ?>">
    <div class="crm-accordion-header">
      <div class="icon crm-accordion-pointer"></div>
      <?php echo $this->_tpl_vars['customValue']['title']; ?>

    </div>
    <div class="crm-accordion-body">
      <div class="crm-table2div-layout">
        <div class="crm-clear">
          <?php $_from = $this->_tpl_vars['customValue']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cfId'] => $this->_tpl_vars['customField']):
?>
          <div class="crm-label">
            <?php echo $this->_tpl_vars['customField']['field_title']; ?>

          </div>
          <div class="crm-content">
            <?php echo $this->_tpl_vars['customField']['field_value']; ?>

          </div>
          <?php endforeach; endif; unset($_from); ?>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>   <!-- end custom data -->
  <?php echo '
  <script type="text/javascript">
    cj( function() {
      cj().crmaccordions();
      cj(\'#address-block-'; ?>
<?php echo $this->_tpl_vars['locationIndex']; ?>
<?php echo '\').data(\'location-type-id\', '; ?>
<?php echo $this->_tpl_vars['add']['location_type_id']; ?>
<?php echo ');
    });
  </script>
  '; ?>

<?php else: ?>
    <div class="crm-table2div-layout">
      <div class="crm-clear">
        <a id="edit-address-block-<?php echo $this->_tpl_vars['locationIndex']; ?>
" class="crm-link-action empty-address-block-<?php echo $this->_tpl_vars['locationIndex']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" locno="<?php echo $this->_tpl_vars['locationIndex']; ?>
" aid=0>
        <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </a>
      </div>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['appendBlockIndex'] && $this->_tpl_vars['permission'] == 'edit'): ?>
  <?php if ((1 & $this->_tpl_vars['appendBlockIndex'])): ?>
    <div class="contactCardLeft crm-address_<?php echo $this->_tpl_vars['appendBlockIndex']; ?>
 crm-address-block appendAddLink">
  <?php else: ?>
    <div class="contactCardRight crm-address_<?php echo $this->_tpl_vars['appendBlockIndex']; ?>
 crm-address-block appendAddLink">
  <?php endif; ?>

      <div class="crm-summary-block crm-address-block" id="address-block-<?php echo $this->_tpl_vars['appendBlockIndex']; ?>
" locno="<?php echo $this->_tpl_vars['appendBlockIndex']; ?>
">
        <div class="crm-table2div-layout">
          <div class="crm-clear">
            <a id="edit-address-block-<?php echo $this->_tpl_vars['appendBlockIndex']; ?>
" class="crm-link-action empty-address-block-<?php echo $this->_tpl_vars['appendBlockIndex']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>click to add address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" locno="<?php echo $this->_tpl_vars['appendBlockIndex']; ?>
" aid=0>
            <span class="batch-edit"></span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
<?php endif; ?>
