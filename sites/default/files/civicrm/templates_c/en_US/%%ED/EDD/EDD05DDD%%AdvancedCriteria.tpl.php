<?php /* Smarty version 2.6.26, created on 2013-08-30 14:48:36
         compiled from CRM/Contact/Form/Search/AdvancedCriteria.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Contact/Form/Search/AdvancedCriteria.tpl', 41, false),array('function', 'help', 'CRM/Contact/Form/Search/AdvancedCriteria.tpl', 58, false),array('block', 'ts', 'CRM/Contact/Form/Search/AdvancedCriteria.tpl', 43, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
// bind first click of accordion header to load crm-accordion-body with snippet
// everything else taken care of by cj().crm-accordions()
cj(document).ready( function() {
    cj(\'.crm-ajax-accordion .crm-accordion-header\').one(\'click\', function() { 
    	loadPanes(cj(this).attr(\'id\')); 
    	});
    cj(\'.crm-ajax-accordion.crm-accordion-open .crm-accordion-header\').each(function(index) { 
    	loadPanes(cj(this).attr(\'id\')); 
    	});
});
// load panes function calls for snippet based on id of crm-accordion-header
function loadPanes( id ) {
    var url = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/advanced','q' => "snippet=1&qfKey=".($this->_tpl_vars['qfKey'])."&searchPane=",'h' => 0), $this);?>
<?php echo '" + id;
   if ( ! cj(\'div.\'+id).html() ) {
	    var loading = \'<div class="crm-loading-element"><span class="loading-text">'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Loading<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '...</span></div>\';
	    cj(\'div.\'+id).html(loading);
	    cj.ajax({
	        url    : url,
	        success: function(data) { cj(\'div.\'+id).html(data); }
	        });
    	}
	}
</script>
'; ?>

		
		<?php if ($this->_tpl_vars['context'] == 'smog' || $this->_tpl_vars['context'] == 'amtg' || $this->_tpl_vars['savedSearch']): ?>
        	<h3>
        	<?php if ($this->_tpl_vars['context'] == 'smog'): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Contacts within this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        	<?php elseif ($this->_tpl_vars['context'] == 'amtg'): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Contacts to Add to this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        	<?php elseif ($this->_tpl_vars['savedSearch']): ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['savedSearch']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1 Smart Group Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &nbsp; <?php echo smarty_function_help(array('id' => 'id-advanced-smart'), $this);?>

        	<?php endif; ?>
        	</h3>
        <?php endif; ?>

<?php echo '<div class="crm-accordion-wrapper crm-search_criteria_basic-accordion crm-accordion-open"><div class="crm-accordion-header"><div class="icon crm-accordion-pointer"></div>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Basic Criteria'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</div><!-- /.crm-accordion-header --><div class="crm-accordion-body">'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Search/Criteria/Basic.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '</div><!-- /.crm-accordion-body --></div><!-- /.crm-accordion-wrapper -->'; ?><?php $_from = $this->_tpl_vars['allPanes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paneName'] => $this->_tpl_vars['paneValue']):
?><?php echo '<div class="crm-accordion-wrapper crm-ajax-accordion crm-'; ?><?php echo $this->_tpl_vars['paneValue']['id']; ?><?php echo '-accordion '; ?><?php if ($this->_tpl_vars['paneValue']['open'] == 'true' && $this->_tpl_vars['openedPanes'][$this->_tpl_vars['paneName']]): ?><?php echo 'crm-accordion-open'; ?><?php else: ?><?php echo 'crm-accordion-closed'; ?><?php endif; ?><?php echo '"><div class="crm-accordion-header" id="'; ?><?php echo $this->_tpl_vars['paneValue']['id']; ?><?php echo '"><div class="icon crm-accordion-pointer"></div>'; ?><?php echo $this->_tpl_vars['paneName']; ?><?php echo '</div><div class="crm-accordion-body '; ?><?php echo $this->_tpl_vars['paneValue']['id']; ?><?php echo '"></div></div>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '<div class="spacer"></div><table class="form-layout"><tr><td>'; ?><?php echo $this->_tpl_vars['form']['buttons']['html']; ?><?php echo '</td></tr></table>'; ?>
