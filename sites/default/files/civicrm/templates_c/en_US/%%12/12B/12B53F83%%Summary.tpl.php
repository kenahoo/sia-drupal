<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/View/Summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'CRM/Contact/Page/View/Summary.tpl', 40, false),array('modifier', 'mb_truncate', 'CRM/Contact/Page/View/Summary.tpl', 256, false),array('function', 'crmURL', 'CRM/Contact/Page/View/Summary.tpl', 53, false),array('function', 'help', 'CRM/Contact/Page/View/Summary.tpl', 88, false),array('function', 'cycle', 'CRM/Contact/Page/View/Summary.tpl', 272, false),array('block', 'ts', 'CRM/Contact/Page/View/Summary.tpl', 53, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] == 2): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Contact.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/wysiwyg.tpl", 'smarty_include_vars' => array('includeWysiwygEditor' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/overlay.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="crm-actions-ribbon">
    <ul id="actions">
        <?php $this->assign('urlParams', "reset=1"); ?>
        <?php if ($this->_tpl_vars['searchKey']): ?>
            <?php $this->assign('urlParams', ((is_array($_tmp=$this->_tpl_vars['urlParams'])) ? $this->_run_mod_handler('cat', true, $_tmp, "&key=".($this->_tpl_vars['searchKey'])) : smarty_modifier_cat($_tmp, "&key=".($this->_tpl_vars['searchKey'])))); ?>
            <?php endif; ?>
        <?php if ($this->_tpl_vars['context']): ?>
            <?php $this->assign('urlParams', ((is_array($_tmp=$this->_tpl_vars['urlParams'])) ? $this->_run_mod_handler('cat', true, $_tmp, "&context=".($this->_tpl_vars['context'])) : smarty_modifier_cat($_tmp, "&context=".($this->_tpl_vars['context'])))); ?>
        <?php endif; ?>

              <?php if ($this->_tpl_vars['permission'] == 'edit' && ! $this->_tpl_vars['isDeleted']): ?>
            <li class="crm-contact-activity">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/ActionsButton.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </li>
            <li>
                <?php $this->assign('editParams', ((is_array($_tmp=$this->_tpl_vars['urlParams'])) ? $this->_run_mod_handler('cat', true, $_tmp, "&action=update&cid=".($this->_tpl_vars['contactId'])) : smarty_modifier_cat($_tmp, "&action=update&cid=".($this->_tpl_vars['contactId'])))); ?>
                <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/add','q' => $this->_tpl_vars['editParams']), $this);?>
" class="edit button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                <span><div class="icon edit-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </a>
            </li>
        <?php endif; ?>

                <?php if (( call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'access deleted contacts' ) && $this->_tpl_vars['is_deleted'] )): ?>
            <li class="crm-contact-restore">
                <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/delete','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])."&restore=1"), $this);?>
" class="delete button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Restore<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                <span><div class="icon restore-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Restore from Trash<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </a>
            </li>

            <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete contacts' )): ?>
                <li class="crm-contact-permanently-delete">
                    <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/delete','q' => "reset=1&delete=1&cid=".($this->_tpl_vars['contactId'])."&skip_undelete=1"), $this);?>
" class="delete button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Permanently<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                    <span><div class="icon delete-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Permanently<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                    </a>
                </li>
            <?php endif; ?>

        <?php elseif (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete contacts' )): ?>
            <?php $this->assign('deleteParams', "&reset=1&delete=1&cid=".($this->_tpl_vars['contactId'])); ?>
            <li class="crm-delete-action crm-contact-delete">
                <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/delete','q' => $this->_tpl_vars['deleteParams']), $this);?>
" class="delete button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                <span><div class="icon delete-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </a>
            </li>
        <?php endif; ?>

                <?php if ($this->_tpl_vars['nextPrevError']): ?>
           <li class="crm-next-action">
             <?php echo smarty_function_help(array('id' => "id-next-prev-buttons"), $this);?>
&nbsp;
           </li>
        <?php else: ?>
          <?php if ($this->_tpl_vars['nextContactID']): ?>
           <?php $this->assign('viewParams', ((is_array($_tmp=$this->_tpl_vars['urlParams'])) ? $this->_run_mod_handler('cat', true, $_tmp, "&cid=".($this->_tpl_vars['nextContactID'])) : smarty_modifier_cat($_tmp, "&cid=".($this->_tpl_vars['nextContactID'])))); ?>
           <li class="crm-next-action">
             <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => $this->_tpl_vars['viewParams']), $this);?>
" class="view button" title="<?php echo $this->_tpl_vars['nextContactName']; ?>
">
             <span title="<?php echo $this->_tpl_vars['nextContactName']; ?>
"><div class="icon next-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
             </a>
           </li>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['prevContactID']): ?>
           <?php $this->assign('viewParams', ((is_array($_tmp=$this->_tpl_vars['urlParams'])) ? $this->_run_mod_handler('cat', true, $_tmp, "&cid=".($this->_tpl_vars['prevContactID'])) : smarty_modifier_cat($_tmp, "&cid=".($this->_tpl_vars['prevContactID'])))); ?>
           <li class="crm-previous-action">
             <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => $this->_tpl_vars['viewParams']), $this);?>
" class="view button" title="<?php echo $this->_tpl_vars['prevContactName']; ?>
">
             <span title="<?php echo $this->_tpl_vars['prevContactName']; ?>
"><div class="icon previous-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Previous<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
             </a>
           </li>
          <?php endif; ?>
        <?php endif; ?>


        <?php if (! empty ( $this->_tpl_vars['groupOrganizationUrl'] )): ?>
        <li class="crm-contact-associated-groups">
            <a href="<?php echo $this->_tpl_vars['groupOrganizationUrl']; ?>
" class="associated-groups button" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Associated Multi-Org Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
            <span><div class="icon associated-groups-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Associated Multi-Org Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
    <div class="clear"></div>
</div><!-- .crm-actions-ribbon -->

<div class="crm-block crm-content-block crm-contact-page">

    <div id="mainTabContainer" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <ul class="crm-contact-tabs-list">
            <li id="tab_summary" class="crm-tab-button">
              <a href="#contact-summary" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
              <span> </span> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <em>&nbsp;</em>
              </a>
            </li>
            <?php $_from = $this->_tpl_vars['allTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabName'] => $this->_tpl_vars['tabValue']):
?>
            <li id="tab_<?php echo $this->_tpl_vars['tabValue']['id']; ?>
" class="crm-tab-button crm-count-<?php echo $this->_tpl_vars['tabValue']['count']; ?>
">
              <a href="<?php echo $this->_tpl_vars['tabValue']['url']; ?>
" title="<?php echo $this->_tpl_vars['tabValue']['title']; ?>
">
                <span> </span> <?php echo $this->_tpl_vars['tabValue']['title']; ?>

                <em><?php echo $this->_tpl_vars['tabValue']['count']; ?>
</em>
              </a>
            </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>

        <div id="contact-summary" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
            <?php if (( isset ( $this->_tpl_vars['hookContentPlacement'] ) && ( $this->_tpl_vars['hookContentPlacement'] != 3 ) ) || empty ( $this->_tpl_vars['hookContentPlacement'] )): ?>

                <?php if (! empty ( $this->_tpl_vars['hookContent'] ) && isset ( $this->_tpl_vars['hookContentPlacement'] ) && $this->_tpl_vars['hookContentPlacement'] == 2): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>

                <?php if (! empty ( $this->_tpl_vars['imageURL'] )): ?>
                    <div id="crm-contact-thumbnail">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/ContactImage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                <?php endif; ?>

                <?php if (! empty ( $this->_tpl_vars['contact_type_label'] ) || ! empty ( $this->_tpl_vars['current_employer_id'] ) || ! empty ( $this->_tpl_vars['job_title'] ) || ! empty ( $this->_tpl_vars['legal_name'] ) || $this->_tpl_vars['sic_code'] || ! empty ( $this->_tpl_vars['nick_name'] ) || ! empty ( $this->_tpl_vars['contactTag'] ) || ! empty ( $this->_tpl_vars['source'] )): ?>
                <div id="contactTopBar">
                    <table>
                        <?php if (! empty ( $this->_tpl_vars['contact_type_label'] ) || ! empty ( $this->_tpl_vars['userRecordUrl'] ) || ! empty ( $this->_tpl_vars['current_employer_id'] ) || ! empty ( $this->_tpl_vars['job_title'] ) || ! empty ( $this->_tpl_vars['legal_name'] ) || $this->_tpl_vars['sic_code'] || ! empty ( $this->_tpl_vars['nick_name'] )): ?>
                        <tr>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                            <td class="crm-contact_type_label"><?php if (isset ( $this->_tpl_vars['contact_type_label'] )): ?><?php echo $this->_tpl_vars['contact_type_label']; ?>
<?php endif; ?></td>
                            <?php if (! empty ( $this->_tpl_vars['current_employer_id'] )): ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Employer<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                            <td class="crm-contact-current_employer"><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['current_employer_id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view current employer<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo $this->_tpl_vars['current_employer']; ?>
</a></td>
                            <?php endif; ?>
                            <?php if (! empty ( $this->_tpl_vars['job_title'] )): ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Position<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                            <td class="crm-contact-job_title"><?php echo $this->_tpl_vars['job_title']; ?>
</td>
                            <?php endif; ?>
                            <?php if (! empty ( $this->_tpl_vars['legal_name'] )): ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Legal Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                            <td class="crm-contact-legal_name"><?php echo $this->_tpl_vars['legal_name']; ?>
</td>
                            <?php if ($this->_tpl_vars['sic_code']): ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SIC Code<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                            <td class="crm-contact-sic_code"><?php echo $this->_tpl_vars['sic_code']; ?>
</td>
                            <?php endif; ?>
                            <?php elseif (! empty ( $this->_tpl_vars['nick_name'] )): ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Nickname<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                            <td class="crm-contact-nick_name"><?php echo $this->_tpl_vars['nick_name']; ?>
</td>
                            <?php endif; ?>
                        </tr>
                        <?php endif; ?>
                        <tr>
                            <?php if (! empty ( $this->_tpl_vars['contactTag'] )): ?>
                            <td class="label" id="tagLink"><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])."&selectedChild=tag"), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></td><td id="tags"><?php echo $this->_tpl_vars['contactTag']; ?>
</td>
                            <?php endif; ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviCRM ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td class="crm-contact-contact_id"><?php echo $this->_tpl_vars['contactId']; ?>
</td>
                            <?php if (! empty ( $this->_tpl_vars['userRecordUrl'] )): ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>User ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td class="crm-contact-user_record_id"><a title="View user record" class="user-record-link" href="<?php echo $this->_tpl_vars['userRecordUrl']; ?>
"><?php echo $this->_tpl_vars['userRecordId']; ?>
</a></td>
                            <?php endif; ?>
                            <?php if (! empty ( $this->_tpl_vars['source'] )): ?>
                            <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Source<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td class="crm-contact_source"><?php echo $this->_tpl_vars['source']; ?>
</td>
                            <?php endif; ?>
                        </tr>
                    </table>

                    <div class="clear"></div>
                </div><!-- #contactTopBar -->
                <?php endif; ?>
                <div class="contact_details">
                    <div class="contact_panel">
                        <div class="contactCardLeft">
                           <div class="crm-table2div-layout">
                              <?php if ($this->_tpl_vars['showEmail']): ?>
                              <div class="crm-clear crm-summary-email-block">
                                <div class="crm-summary-block" id="email-block">
                                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Email.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                              </div>
                              <?php endif; ?>
                              <?php if ($this->_tpl_vars['website'] && $this->_tpl_vars['showWebsite']): ?>
                              <div class="crm-clear crm-summary-block">
                                <?php $_from = $this->_tpl_vars['website']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                    <?php if (! empty ( $this->_tpl_vars['item']['url'] )): ?>
                                        <div class="crm-label"><?php echo $this->_tpl_vars['item']['website_type']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Website<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
                                        <div class="crm-content crm-contact_website"><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['url']; ?>
</a></div>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                              </div>
                              <?php endif; ?>
                              <?php if ($this->_tpl_vars['user_unique_id']): ?>
                                  <br/>
                                  <div class="crm-clear crm-summary-block">
                                      <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Unique Id<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
                                      <div class="crm-content crm-contact-user_unique_id"><?php echo $this->_tpl_vars['user_unique_id']; ?>
</div>
                                  </div>
                              <?php endif; ?>
                           </div>
                        </div><!-- #contactCardLeft -->

                        <div class="contactCardRight">
                            <div class="crm-table2div-layout">
                              <?php if ($this->_tpl_vars['showPhone']): ?>
                              <div class="crm-clear crm-summary-phone-block">
                                <div class="crm-summary-block" id="phone-block">
                                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Phone.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                              </div>
                              <?php endif; ?>
                              <?php if ($this->_tpl_vars['im'] && $this->_tpl_vars['showIM']): ?>
                                <div class="crm-clear crm-summary-block" id="im-block">
                                <?php $_from = $this->_tpl_vars['im']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                    <?php if ($this->_tpl_vars['item']['name'] || $this->_tpl_vars['item']['provider']): ?>
                                      <?php if ($this->_tpl_vars['item']['name']): ?>
                                        <div class="crm-label"><?php echo $this->_tpl_vars['item']['provider']; ?>
&nbsp;(<?php echo $this->_tpl_vars['item']['location_type']; ?>
)</div>
                                        <div class="crm-content crm-contact_im <?php if ($this->_tpl_vars['item']['is_primary'] == 1): ?> primary<?php endif; ?>"><?php echo $this->_tpl_vars['item']['name']; ?>
</div>
                                      <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                                </div>
                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['openid'] && $this->_tpl_vars['showOpenID']): ?>
                                <div class="crm-clear crm-summary-block" id="openid-block">
                                <?php $_from = $this->_tpl_vars['openid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                                    <?php if ($this->_tpl_vars['item']['openid']): ?>
                                      <div class="crm-label"><?php echo $this->_tpl_vars['item']['location_type']; ?>
&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OpenID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
                                      <div class="crm-content crm-contact_openid <?php if ($this->_tpl_vars['item']['is_primary'] == 1): ?> primary<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['item']['openid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['openid'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 40) : smarty_modifier_mb_truncate($_tmp, 40)); ?>
</a>
                                       </div>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div><!-- #contactCardRight -->

                        <div class="clear"></div>
                    </div><!-- #contact_panel -->
            <?php if ($this->_tpl_vars['showAddress']): ?>
            <div class="contact_panel">
              <?php $this->assign('locationIndex', 1); ?>
              <?php if ($this->_tpl_vars['address']): ?>
                <?php $_from = $this->_tpl_vars['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locationIndex'] => $this->_tpl_vars['add']):
?>
                <div class="<?php echo smarty_function_cycle(array('name' => 'location','values' => "contactCardLeft,contactCardRight"), $this);?>
 crm-address_<?php echo $this->_tpl_vars['locationIndex']; ?>
 crm-address_type_<?php echo $this->_tpl_vars['add']['location_type']; ?>
">
                  <div class="crm-summary-block crm-address-block" id="address-block-<?php echo $this->_tpl_vars['locationIndex']; ?>
" locno="<?php echo $this->_tpl_vars['locationIndex']; ?>
">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </div>
                </div>
                <?php endforeach; endif; unset($_from); ?>               
                <?php $this->assign('locationIndex', $this->_tpl_vars['locationIndex']+1); ?>
              <?php endif; ?>
              
              <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
                <?php if ($this->_tpl_vars['locationIndex'] == 1 || (1 & $this->_tpl_vars['locationIndex'])): ?>
                  <div class="contactCardLeft crm-address_<?php echo $this->_tpl_vars['locationIndex']; ?>
 crm-address-block appendAddLink">
                <?php else: ?>
                  <div class="contactCardRight crm-address_<?php echo $this->_tpl_vars['locationIndex']; ?>
 crm-address-block appendAddLink">
                <?php endif; ?>

                    <div class="crm-summary-block crm-address-block" id="address-block-<?php echo $this->_tpl_vars['locationIndex']; ?>
" locno="<?php echo $this->_tpl_vars['locationIndex']; ?>
">
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
                    </div>
                  </div>
              <?php endif; ?>

            </div> <!-- end of contact panel -->
            <?php endif; ?>
          <div class="contact_panel">
            <?php if ($this->_tpl_vars['showCommunicationPreferences']): ?>
            <div class="contactCardLeft">
              <div class="crm-summary-comm-pref-block">
                <div class="crm-summary-block" id="communication-pref-block" >
                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/CommunicationPreferences.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
              </div>
            </div> <!-- contactCardLeft -->
            <?php endif; ?>
            <?php if ($this->_tpl_vars['contact_type'] == 'Individual' && $this->_tpl_vars['showDemographics']): ?>
              <div class="contactCardRight">
                <div class="crm-summary-demographic-block">
                  <div class="crm-summary-block" id="demographic-block">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Demographics.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </div>
                </div>
              </div> <!-- contactCardRight -->
            <?php endif; ?>
            <div class="clear"></div>
            <div class="separator"></div>
          </div> <!-- contact panel -->
     </div><!--contact_details-->

     <?php if ($this->_tpl_vars['showCustomData']): ?>         
        <div id="customFields">
            <div class="contact_panel">
                <div class="contactCardLeft">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataView.tpl", 'smarty_include_vars' => array('side' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div><!--contactCardLeft-->

                <div class="contactCardRight">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataView.tpl", 'smarty_include_vars' => array('side' => '0')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>

                <div class="clear"></div>
            </div>
        </div>

        <?php echo '
        <script type="text/javascript">
            cj(\'.columnheader\').click( function( ) {
                var aTagObj = cj(this).find(\'a\');
                if ( aTagObj.hasClass( "expanded" ) ) {
                    cj(this).parent().find(\'tr:not(".columnheader")\').hide( );
                } else {
                    cj(this).parent().find(\'tr:not(".columnheader")\').show( );
                }
                aTagObj.toggleClass("expanded");
                return false;
            });
        </script>
        '; ?>

     <?php endif; ?>         
     
     <?php if (! empty ( $this->_tpl_vars['hookContent'] ) && isset ( $this->_tpl_vars['hookContentPlacement'] ) && $this->_tpl_vars['hookContentPlacement'] == 1): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     <?php endif; ?>
   <?php else: ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <?php endif; ?>
   </div>
   <div class="clear"></div>
 </div>
 <script type="text/javascript">
 var selectedTab  = 'summary';
 var spinnerImage = '<img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/loading.gif" style="width:10px;height:10px"/>';
 <?php if ($this->_tpl_vars['selectedChild']): ?>selectedTab = "<?php echo $this->_tpl_vars['selectedChild']; ?>
";<?php endif; ?>
 <?php echo '

 //explicitly stop spinner
 function stopSpinner( ) {
   cj(\'li.crm-tab-button\').each(function(){ cj(this).find(\'span\').text(\' \');})
 }

 cj( function() {
  var tabIndex = cj(\'#tab_\' + selectedTab).prevAll().length;
  cj("#mainTabContainer").tabs({ selected: tabIndex, spinner: spinnerImage, cache: true, load: stopSpinner});
  cj(".crm-tab-button").addClass("ui-corner-bottom");
 });
 '; ?>

 </script>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['isAddressCustomPresent'] )): ?>
  <?php echo '
  <script type="text/javascript">
  cj(function() {
    cj().crmaccordions();
  });
  </script>
  '; ?>

<?php endif; ?>
<div class="clear"></div>
</div><!-- /.crm-content-block -->

<?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
<?php echo '
<script type="text/javascript">

cj(function(){
  /* start of js for inline custom data */
  var customBlock = cj(\'div[id^="custom-set-block-"]\');
  customBlock.mouseenter( function() {
    cj(this).addClass(\'crm-inline-edit-hover\');
    cj(this).find(\'a[id^="edit-custom-set-block-"]\').show();
  }).mouseleave( function() {
    cj(this).removeClass(\'crm-inline-edit-hover\');
    cj(this).find(\'a[id^="edit-custom-set-block-"]\').hide();
  });

  cj(\'a[id^="edit-custom-set-block-"]\').live( \'click\', function() {
    var cgId   = cj(this).attr(\'cgId\');
    var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/inline','h' => 0,'q' => 'snippet=5&reset=1&cid='), $this);?>
<?php echo $this->_tpl_vars['contactId']; ?>
"<?php echo ' + \'&groupID=\' + cgId;

    addCiviOverlay(\'.crm-custom-set-block-\' + cgId);   
    cj.ajax({
      data: {\'class_name\':\'CRM_Contact_Form_Inline_CustomData\'},
      url: dataUrl,
      async: false
    }).done( function( response ) {
      cj(\'#custom-set-block-\'+ cgId).html( response );
    });

    removeCiviOverlay(\'.crm-custom-set-block-\' + cgId);   
  });
  /* end of js for inline custom data */

  /* start of js for inline address */
  var addressBlock = cj(\'.contact_panel\');
  addressBlock.on( \'mouseenter\', \'div[id^="address-block-"]\', function() {
    var locno   = cj(this).attr(\'locno\');
    cj(this).addClass(\'crm-inline-edit-hover\');
    cj(\'a[id^="edit-address-block-\' + locno +\'"]\').show();
  });

  addressBlock.on( \'mouseleave\', \'div[id^="address-block-"]\', function() {
    var locno   = cj(this).attr(\'locno\');
    cj(this).removeClass(\'crm-inline-edit-hover\');
    if ( !cj(\'a[id^="edit-address-block-\' + locno +\'"]\').hasClass(\'empty-address-block-\' + locno) ) { 
      cj(\'a[id^="edit-address-block-\'+ locno +\'"]\').hide();
    }
  });

  cj(\'a[id^="edit-address-block-"]\').live( \'click\', function() {
    var locno = cj(this).attr(\'locno\');
    var aid   = cj(this).attr(\'aid\');
    var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/inline','h' => 0,'q' => 'snippet=5&reset=1&cid='), $this);?>
<?php echo $this->_tpl_vars['contactId']; ?>
"<?php echo ' + \'&locno=\' + locno + \'&aid=\' + aid ;
   
    addCiviOverlay(\'div.crm-address_\' + locno);   
    cj.ajax({ 
      data: {\'class_name\':\'CRM_Contact_Form_Inline_Address\'},
      url: dataUrl,
      async: false
    }).done( function(response) {
      cj(\'#address-block-\'+ locno).html(response);
    });
    
    removeCiviOverlay(\'div.crm-address_\' + locno);   
  });
  /* end of js for inline address data */
});

</script>
'; ?>

<?php endif; ?>