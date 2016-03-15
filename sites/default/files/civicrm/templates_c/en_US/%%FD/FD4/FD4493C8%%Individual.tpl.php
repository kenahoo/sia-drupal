<?php /* Smarty version 2.6.26, created on 2013-08-07 20:23:20
         compiled from CRM/Contact/Form/Edit/Individual.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Contact/Form/Edit/Individual.tpl', 29, false),array('function', 'help', 'CRM/Contact/Form/Edit/Individual.tpl', 103, false),array('block', 'ts', 'CRM/Contact/Form/Edit/Individual.tpl', 53, false),array('modifier', 'crmReplace', 'CRM/Contact/Form/Edit/Individual.tpl', 104, false),)), $this); ?>
<script type="text/javascript">
var cid=parseFloat("<?php echo $this->_tpl_vars['contactId']; ?>
");//parseInt is octal by default
var contactIndividual = "<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','q' => 'entity=contact&action=get&json=1&contact_type=Individual&return=display_name,sort_name,email&rowCount=50','h' => 0), $this);?>
";
var viewIndividual = "<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => 'reset=1&cid=','h' => 0), $this);?>
";
var editIndividual = "<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/add','q' => 'reset=1&action=update&cid=','h' => 0), $this);?>
";
var checkSimilar =  <?php echo $this->_tpl_vars['checkSimilar']; ?>
;
<?php echo '

  cj(function( ) {
     if (cj(\'#contact_sub_type *\').length == 0) {//if they aren\'t any subtype we don\'t offer the option
        cj(\'#contact_sub_type\').parent().hide();
     }

     if (!isNaN(cid) || ! checkSimilar)
       return;//no dupe check if this is a modif or if checkSimilar is disabled (contact_ajax_check_similar in civicrm_setting table)

	     cj(\'#last_name\').blur(function () {
         cj(\'#lastname_msg\').remove();
             if (this.value ==\'\') return;
	     cj.getJSON(contactIndividual,{sort_name:cj(\'#last_name\').val()},
         function(data){
           if (data.is_error == 1 || data.count == 0) {
             return;
           }
           var msg="<div id=\'lastname_msg\' class=\'messages status\'><div class=\'icon inform-icon\'></div>";
           if ( data.count == 1 ) {
             msg = msg + "'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There is a contact with a similar last name. If the person you were trying to add is listed below, click on their name to view or edit their record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";  
           } else {
             msg = msg + "'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are "+ data.length +" contacts with a similar last name(<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><a href='#' onclick='cj(\"#lastname_msg\").remove();cj(\"#current_employer\").focus();'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click here<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>to Skip and move to next form field). If the person you were trying to add is listed below, click on their name to view or edit their record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
           }
           msg = msg+ \'<table class="matching-contacts-actions">\';
           cj.each(data.values, function(i,contact){
      	     if ( !(contact.email) ) {
      	       contact.email = \'\';
      	     }
             msg = msg + \'<tr><td><a href="\'+viewIndividual+contact.id+\'" target="_blank">\'+ contact.display_name +\'</a></td><td>\'+contact.email+\'</td><td class="action-items"><a class="action-item action-item-first" href="\'+viewIndividual+contact.contact_id+\'">'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a><a class="action-item" href="\'+editIndividual+contact.contact_id+\'">'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a></td></tr>\';
           });
           msg = msg+ \'</table>\';
           cj(\'#last_name\').closest(\'table\').after(msg+\'</div>\');
           cj(\'#lastname_msg a\').click(function(){global_formNavigate =true; return true;});// No confirmation dialog on click
         });
	    });
  });
</script>
'; ?>


<table class="form-layout-compressed">
    <tr>
        <?php if ($this->_tpl_vars['form']['prefix_id']): ?>
	    <td>
                <?php echo $this->_tpl_vars['form']['prefix_id']['label']; ?>
<br/>
                <?php echo $this->_tpl_vars['form']['prefix_id']['html']; ?>

            </td>    
        <?php endif; ?>
        <td>
            <?php echo $this->_tpl_vars['form']['first_name']['label']; ?>
<br /> 
	    <?php echo $this->_tpl_vars['form']['first_name']['html']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['middle_name']['label']; ?>
<br />
            <?php echo $this->_tpl_vars['form']['middle_name']['html']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['last_name']['label']; ?>
<br />
            <?php echo $this->_tpl_vars['form']['last_name']['html']; ?>

        </td>
	<?php if ($this->_tpl_vars['form']['suffix_id']): ?>
            <td>
                <?php echo $this->_tpl_vars['form']['suffix_id']['label']; ?>
<br/>
                <?php echo $this->_tpl_vars['form']['suffix_id']['html']; ?>

            </td>
	<?php endif; ?>
    </tr>
    
    <tr>
        <td colspan="2">
            <?php echo $this->_tpl_vars['form']['current_employer']['label']; ?>
&nbsp;<?php echo smarty_function_help(array('id' => "id-current-employer",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>
<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['current_employer']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'twenty') : smarty_modifier_crmReplace($_tmp, 'class', 'twenty')); ?>

            <div id="employer_address" style="display:none;"></div>
        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['job_title']['label']; ?>
<br />
            <?php echo $this->_tpl_vars['form']['job_title']['html']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['nick_name']['label']; ?>
<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['nick_name']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'big') : smarty_modifier_crmReplace($_tmp, 'class', 'big')); ?>

        </td>
        <td>
            <?php if ($this->_tpl_vars['buildContactSubType']): ?>
              <?php echo $this->_tpl_vars['form']['contact_sub_type']['label']; ?>
<br />
              <?php echo $this->_tpl_vars['form']['contact_sub_type']['html']; ?>

            <?php endif; ?>
        </td>
    </tr>
</table>
<?php echo '
<script type="text/javascript">
var dataUrl        = "'; ?>
<?php echo $this->_tpl_vars['employerDataURL']; ?>
<?php echo '";
var newContactText = "'; ?>
(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>new contact record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php echo '";
cj(\'#current_employer\').attr("title","Current employer auto complete");
cj(\'#current_employer\').autocomplete( dataUrl, { 
                                      width        : 250, 
                                      selectFirst  : false,
                                      matchCase    : true, 
                                      matchContains: true
    }).result( function(event, data, formatted) {
        var foundContact   = ( parseInt( data[1] ) ) ? cj( "#current_employer_id" ).val( data[1] ) : cj( "#current_employer_id" ).val(\'\');
        if ( ! foundContact.val() ) {
            cj(\'div#employer_address\').html(newContactText).show();    
        } else {
            cj(\'div#employer_address\').html(\'\').hide();    
        }
    }).bind(\'change blur\', function() {
        if ( !cj( "#current_employer_id" ).val( ) ) {
            cj(\'div#employer_address\').html(newContactText).show();    
        }
});

// remove current employer id when current employer removed.
cj("form").submit(function() {
  if ( !cj(\'#current_employer\').val() ) cj( "#current_employer_id" ).val(\'\');
});

//current employer default setting
var employerId = "'; ?>
<?php echo $this->_tpl_vars['currentEmployer']; ?>
<?php echo '";
if ( employerId ) {
    var dataUrl = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','h' => 0,'q' => "className=CRM_Contact_Page_AJAX&fnName=getContactList&json=1&context=contact&org=1&id="), $this);?>
<?php echo '" + employerId + "&employee_id=" + cid ;
    cj.ajax({ 
        url     : dataUrl,   
        async   : false,
        success : function(html){
            //fixme for showing address in div
            htmlText = html.split( \'|\' , 2);
            cj(\'input#current_employer\').val(htmlText[0]);
            cj(\'input#current_employer_id\').val(htmlText[1]);
        }
    }); 
}

cj("input#current_employer").click( function( ) {
    cj("input#current_employer_id").val(\'\');
});
</script>
'; ?>
