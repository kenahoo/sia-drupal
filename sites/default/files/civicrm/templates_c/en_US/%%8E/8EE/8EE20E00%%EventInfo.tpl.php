<?php /* Smarty version 2.6.26, created on 2013-07-31 20:24:38
         compiled from CRM/Event/Page/EventInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Event/Page/EventInfo.tpl', 32, false),array('function', 'crmURL', 'CRM/Event/Page/EventInfo.tpl', 45, false),array('modifier', 'replace', 'CRM/Event/Page/EventInfo.tpl', 67, false),array('modifier', 'crmDate', 'CRM/Event/Page/EventInfo.tpl', 112, false),array('modifier', 'date_format', 'CRM/Event/Page/EventInfo.tpl', 117, false),array('modifier', 'nl2br', 'CRM/Event/Page/EventInfo.tpl', 136, false),array('modifier', 'crmMoney', 'CRM/Event/Page/EventInfo.tpl', 198, false),)), $this); ?>

<?php if ($this->_tpl_vars['registerClosed']): ?>
<div class="spacer"></div>
<div class="messages status">
  <div class="icon inform-icon"></div>
     &nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration is closed for this event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php endif; ?>
<?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'access CiviEvent' )): ?> 
<div class="crm-actions-ribbon crm-event-manage-tab-actions-ribbon">
	<ul id="actions">
<?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'edit all events' )): ?> 

	<li><div id="crm-event-links-wrapper">
	      <div id="crm-event-configure-link"><span title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><div class="icon settings-icon"></div></span></div>
	      <div class="ac_results" id="crm-event-links-list" style="margin-left: -25px;">
	      	   <div class="crm-event-links-list-inner">
	      	   	<ul>
        		    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Info and Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/settings','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Info and Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
        		    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/location','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
        		    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/fee','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
        		    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Online Registration<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/registration','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Online Registration<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
        		    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Schedule Reminders<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/reminder','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Schedule Reminders<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                    <?php if ($this->_tpl_vars['eventCartEnabled']): ?>
                    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Conference Slots<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/conference','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Conference Slots<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                    <?php endif; ?>
                    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tell a Friend<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/friend','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tell a Friend<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                    <li><a title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Personal Campaign Pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/manage/pcp','q' => "reset=1&action=update&id=".($this->_tpl_vars['event']['id'])), $this);?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Personal Campaign Pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
                </ul>
	           </div>
	      </div>
    </div></li>

<?php endif; ?>
<li><div id="crm-participant-wrapper">
	      <div id="crm-participant-links"><span title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant listing links.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><div class="icon search-icon"></div></div>
	      <div class="ac_results" id="crm-participant-list" style="margin-left: -25px;">
	      	   <div class="crm-participant-list-inner">
	      	   	<ul>
                    <?php if ($this->_tpl_vars['findParticipants']['statusCounted']): ?>
			    	    <li><a class="crm-participant-counted" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/search','q' => "reset=1&force=1&event=".($this->_tpl_vars['event']['id'])."&status=true"), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['findParticipants']['statusCounted'])) ? $this->_run_mod_handler('replace', true, $_tmp, '/', ', ') : smarty_modifier_replace($_tmp, '/', ', ')); ?>
</a></li>
			        <?php endif; ?>
			
		            <?php if ($this->_tpl_vars['findParticipants']['statusNotCounted']): ?>
			    	<li><a class="crm-participant-not-counted" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/search','q' => "reset=1&force=1&event=".($this->_tpl_vars['event']['id'])."&status=false"), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['findParticipants']['statusNotCounted'])) ? $this->_run_mod_handler('replace', true, $_tmp, '/', ', ') : smarty_modifier_replace($_tmp, '/', ', ')); ?>
</a>
				    </li>
			        <?php endif; ?>
		            <?php if ($this->_tpl_vars['participantListingURL']): ?>
			    	    <li><a class="crm-participant-listing" href="<?php echo $this->_tpl_vars['participantListingURL']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Public Participant Listing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li>
			        <?php endif; ?>
		        </ul>
	           </div>
	      </div>
    	</div></li>
	</ul>
	<div class="clear"></div>
</div>
<?php endif; ?>
<div class="vevent crm-block crm-event-info-form-block">
	<div class="event-info">
	<?php if ($this->_tpl_vars['event']['summary']): ?>
	    <div class="crm-section event_summary-section">
        <?php if ($this->_tpl_vars['allowRegistration']): ?>
          <div class="action-link section register_link-section register_link-top">
            <a href="<?php echo $this->_tpl_vars['registerURL']; ?>
" title="<?php echo $this->_tpl_vars['registerText']; ?>
" class="button crm-register-button"><span><?php echo $this->_tpl_vars['registerText']; ?>
</span></a>
          </div>
        <?php endif; ?>
        <?php echo $this->_tpl_vars['event']['summary']; ?>

	    </div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['event']['description']): ?>
	    <div class="crm-section event_description-section summary">
                  	<?php if ($this->_tpl_vars['allowRegistration'] && ! $this->_tpl_vars['event']['summary']): ?>
              <div class="action-link section register_link-section register_link-top">
                <a href="<?php echo $this->_tpl_vars['registerURL']; ?>
" title="<?php echo $this->_tpl_vars['registerText']; ?>
" class="button crm-register-button"><span><?php echo $this->_tpl_vars['registerText']; ?>
</span></a>
              </div>
          <?php endif; ?>
	        <?php echo $this->_tpl_vars['event']['description']; ?>

	    </div>
	<?php endif; ?>
  <div class="clear"></div>
	<div class="crm-section event_date_time-section">
	    <div class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></div>
	    <div class="content">
            <abbr class="dtstart" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</abbr>
            <?php if ($this->_tpl_vars['event']['event_end_date']): ?>
                &nbsp; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>through<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &nbsp;
                                <?php if (((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) == ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?>
                    <abbr class="dtend" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>

                    </abbr>        
                <?php else: ?>
                    <abbr class="dtend" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

                    </abbr> 	
                <?php endif; ?>
            <?php endif; ?>
        </div>
		<div class="clear"></div>
	</div>
			    
	<?php if ($this->_tpl_vars['isShowLocation']): ?>

        <?php if ($this->_tpl_vars['location']['address']['1']): ?>
            <div class="crm-section event_address-section">
                <div class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></div>
                <div class="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['location']['address']['1']['display'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
                <div class="clear"></div>
            </div>
        <?php endif; ?>

	    <?php if (( $this->_tpl_vars['event']['is_map'] && $this->_tpl_vars['config']->mapProvider && ( is_numeric ( $this->_tpl_vars['location']['address']['1']['geo_code_1'] ) || ( $this->_tpl_vars['config']->mapGeoCoding && $this->_tpl_vars['location']['address']['1']['city'] && $this->_tpl_vars['location']['address']['1']['state_province'] ) ) )): ?>
	        <div class="crm-section event_map-section">
	            <div class="content">
                    <?php $this->assign('showDirectly', '1'); ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task/Map/".($this->_tpl_vars['config']->mapProvider).".tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['showDirectly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <br /><a href="<?php echo $this->_tpl_vars['mapURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show large map<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show large map<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
	            </div>
	            <div class="clear"></div>
	        </div>
	    <?php endif; ?>

	<?php endif; ?>  


	<?php if ($this->_tpl_vars['location']['phone']['1']['phone'] || $this->_tpl_vars['location']['email']['1']['email']): ?>
	    <div class="crm-section event_contact-section">
	        <div class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></div>
	        <div class="content">
	            	            <?php $_from = $this->_tpl_vars['location']['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['phone']):
?>
	                <?php if ($this->_tpl_vars['phone']['phone']): ?>
	                    <?php if ($this->_tpl_vars['phone']['phone_type']): ?><?php echo $this->_tpl_vars['phone']['phone_type_display']; ?>
<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>: 
	                        <span class="tel"><?php echo $this->_tpl_vars['phone']['phone']; ?>
</span> <br />
	                    <?php endif; ?>
	            <?php endforeach; endif; unset($_from); ?>
	
	            <?php $_from = $this->_tpl_vars['location']['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
	                <?php if ($this->_tpl_vars['email']['email']): ?>
	                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <span class="email"><a href="mailto:<?php echo $this->_tpl_vars['email']['email']; ?>
"><?php echo $this->_tpl_vars['email']['email']; ?>
</a></span>
	                <?php endif; ?>
	            <?php endforeach; endif; unset($_from); ?>
	        </div>
	        <div class="clear"></div>
	    </div>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['event']['is_monetary'] == 1 && $this->_tpl_vars['feeBlock']['value']): ?>
	    <div class="crm-section event_fees-section">
	        <div class="label"><label><?php echo $this->_tpl_vars['event']['fee_label']; ?>
</label></div>
	        <div class="content">
	            <table class="form-layout-compressed fee_block-table">
	                <?php $_from = $this->_tpl_vars['feeBlock']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fees'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fees']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['value']):
        $this->_foreach['fees']['iteration']++;
?>
	                    <?php $this->assign('idx', $this->_foreach['fees']['iteration']); ?>
	                    	                    <?php if ($this->_tpl_vars['feeBlock']['lClass'][$this->_tpl_vars['idx']]): ?>
	                        <?php $this->assign('lClass', $this->_tpl_vars['feeBlock']['lClass'][$this->_tpl_vars['idx']]); ?>
	                    <?php else: ?>
	                        <?php $this->assign('lClass', "fee_level-label"); ?>
	                    <?php endif; ?>
	                    <?php if ($this->_tpl_vars['isQuickConfig'] && $this->_tpl_vars['lClass'] == "price_set_option_group-label"): ?>
	                      	                    <?php else: ?>
	                    <tr>
	                        <td class="<?php echo $this->_tpl_vars['lClass']; ?>
 crm-event-label"><?php echo $this->_tpl_vars['feeBlock']['label'][$this->_tpl_vars['idx']]; ?>
</td>
                          <?php if ($this->_tpl_vars['isPriceSet'] & $this->_tpl_vars['feeBlock']['isDisplayAmount'][$this->_tpl_vars['idx']]): ?>
	                        <td class="fee_amount-value right"><?php echo ((is_array($_tmp=$this->_tpl_vars['feeBlock']['value'][$this->_tpl_vars['idx']])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</td>
                          <?php endif; ?>
	                    </tr>
	                    <?php endif; ?>
	                <?php endforeach; endif; unset($_from); ?>
	            </table>
	        </div>
	        <div class="clear"></div>
	    </div>
	<?php endif; ?>


    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Page/CustomDataView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
	<?php if ($this->_tpl_vars['allowRegistration']): ?>
        <div class="action-link section register_link-section register_link-bottom">
            <a href="<?php echo $this->_tpl_vars['registerURL']; ?>
" title="<?php echo $this->_tpl_vars['registerText']; ?>
" class="button crm-register-button"><span><?php echo $this->_tpl_vars['registerText']; ?>
</span></a>
        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['event']['is_public']): ?>
        <br /><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Page/iCalLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    
    <?php if ($this->_tpl_vars['event']['is_share']): ?>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "id=".($this->_tpl_vars['event']['id'])."&amp;reset=1",'a' => true,'fe' => 1,'h' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('eventUrl', ob_get_contents());ob_end_clean(); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/SocialNetwork.tpl", 'smarty_include_vars' => array('url' => $this->_tpl_vars['eventUrl'],'title' => $this->_tpl_vars['event']['title'],'pageURL' => $this->_tpl_vars['eventUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    </div>
</div>
<?php echo '
<script type="text/javascript">

cj(\'body\').click(function() {
    cj(\'#crm-event-links-list\').hide();
    cj(\'#crm-participant-list\').hide();
});

cj(\'#crm-event-configure-link\').click(function(event) {
    cj(\'#crm-event-links-list\').toggle();
    cj(\'#crm-participant-list\').hide();
    event.stopPropagation();
});

cj(\'#crm-participant-links\').click(function(event) {
    cj(\'#crm-participant-list\').toggle();
    cj(\'#crm-event-links-list\').hide();
    event.stopPropagation();
});

</script>
'; ?>
