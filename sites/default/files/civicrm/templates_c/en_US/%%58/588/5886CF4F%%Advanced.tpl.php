<?php /* Smarty version 2.6.26, created on 2013-08-30 14:48:36
         compiled from CRM/Contact/Form/Search/Advanced.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Search/Advanced.tpl', 37, false),)), $this); ?>

<div class="crm-form-block crm-search-form-block">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Search/Intro.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="crm-accordion-wrapper crm-advanced_search_form-accordion <?php if (! empty ( $this->_tpl_vars['ssID'] ) || $this->_tpl_vars['rows']): ?>crm-accordion-closed<?php else: ?>crm-accordion-open<?php endif; ?>">
 <div class="crm-accordion-header crm-master-accordion-header">
  <div class="icon crm-accordion-pointer"></div>
  <?php if (! empty ( $this->_tpl_vars['ssID'] ) || $this->_tpl_vars['rows']): ?>
  <?php if ($this->_tpl_vars['savedSearch']): ?>
    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['savedSearch']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit %1 Smart Group Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Search Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php endif; ?>
  <?php else: ?>
  <?php if ($this->_tpl_vars['savedSearch']): ?>
    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['savedSearch']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit %1 Smart Group Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php endif; ?>
  <?php endif; ?>
 </div>
 <div class="crm-accordion-body">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Search/AdvancedCriteria.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 </div>
</div>  
</div>

<?php if ($this->_tpl_vars['rowsEmpty']): ?>
<div class="crm-content-block">
	<div class="crm-results-block crm-results-block-empty">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Search/EmptyResults.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['rows']): ?>
<div class="crm-content-block">
	<div class="crm-results-block">
        
              <div class="crm-search-tasks">
       <?php if ($this->_tpl_vars['taskFile']): ?>
          <?php if ($this->_tpl_vars['taskContext']): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['taskFile'], 'smarty_include_vars' => array('context' => $this->_tpl_vars['taskContext'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php else: ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['taskFile'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endif; ?>
       <?php else: ?>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Search/ResultTasks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       <?php endif; ?>
       </div>

              <div class="crm-search-results">
       <?php if ($this->_tpl_vars['resultFile']): ?>
          <?php if ($this->_tpl_vars['resultContext']): ?>
             <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['resultFile'], 'smarty_include_vars' => array('context' => $this->_tpl_vars['resultContext'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php else: ?>
             <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['resultFile'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endif; ?>
       <?php else: ?>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Selector.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       <?php endif; ?>
       </div>

              </div>
</div>
<?php endif; ?>
<?php echo '
<script type="text/javascript">
cj(function() { 
    cj().crmaccordions(); 
    if ( cj(\'#component_mode\').val() != \'7\' ) {
      cj(\'#crm-display_relationship_type\').hide( );
    }

    cj(\'#component_mode\').change( function( ) {
        // reset task dropdown if user changes component mode and it exists
	    if (cj("#task").length > 0) {
	        cj(\'#task\').val( \'\' );
	    }
        var selectedValue = cj(this).val( );
        switch ( selectedValue ) {
            case \'2\':
            cj(\'.crm-CiviContribute-accordion\').removeClass(\'crm-accordion-closed\').addClass(\'crm-accordion-open\') ;
            cj(\'#crm-display_relationship_type\').hide( );
            cj(\'#display_relationship_type\').val(\'\');
            loadPanes(\'CiviContribute\');
            break;

            case \'3\':
            cj(\'.crm-CiviEvent-accordion\').removeClass(\'crm-accordion-closed\').addClass(\'crm-accordion-open\') ;
            cj(\'#display_relationship_type\').val(\'\');
            cj(\'#crm-display_relationship_type\').hide( );
            loadPanes(\'CiviEvent\');
            break;

            case \'4\':
            cj(\'.crm-activity-accordion\').removeClass(\'crm-accordion-closed\').addClass(\'crm-accordion-open\') ;
            cj(\'#display_relationship_type\').val(\'\');
            cj(\'#crm-display_relationship_type\').hide( );
            loadPanes(\'activity\');
            break;

            case \'5\':
            cj(\'.crm-CiviMember-accordion\').removeClass(\'crm-accordion-closed\').addClass(\'crm-accordion-open\') ;
            cj(\'#display_relationship_type\').val(\'\');
            cj(\'#crm-display_relationship_type\').hide( );
            loadPanes(\'CiviMember\');
            break;

            case \'6\':
            cj(\'.crm-CiviCase-accordion\').removeClass(\'crm-accordion-closed\').addClass(\'crm-accordion-open\') ;
            cj(\'#display_relationship_type\').val(\'\');
            cj(\'#crm-display_relationship_type\').hide( );
            loadPanes(\'CiviCase\');
            break;

	    case \'7\':
            cj(\'#crm-display_relationship_type\').show( );
            break;

            default:
            cj(\'#crm-display_relationship_type\').hide( );
            cj(\'#display_relationship_type\').val(\'\');
            break;
        } 
    });
});
</script>
'; ?>

