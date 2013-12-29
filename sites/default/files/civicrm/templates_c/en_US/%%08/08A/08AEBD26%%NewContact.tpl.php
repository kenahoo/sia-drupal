<?php /* Smarty version 2.6.26, created on 2013-08-07 20:23:21
         compiled from CRM/Contact/Form/NewContact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'CRM/Contact/Form/NewContact.tpl', 28, false),array('block', 'ts', 'CRM/Contact/Form/NewContact.tpl', 33, false),array('function', 'crmURL', 'CRM/Contact/Form/NewContact.tpl', 85, false),)), $this); ?>
<?php if ($this->_tpl_vars['context'] != 'search'): ?>
  <?php $this->assign('fldName', ((is_array($_tmp=$this->_tpl_vars['prefix'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'contact') : smarty_modifier_cat($_tmp, 'contact'))); ?>
  <?php $this->assign('profSelect', ((is_array($_tmp=$this->_tpl_vars['prefix'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'profiles') : smarty_modifier_cat($_tmp, 'profiles'))); ?>
    <?php if ($this->_tpl_vars['noLabel']): ?>
     	<div>
          <div id="contact-success-<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
" class="hiddenElement">
              <span class="success-status"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New contact has been created.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </div>
          <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fldName']][$this->_tpl_vars['blockNo']]['html']; ?>
 <br/>
          <?php if ($this->_tpl_vars['form'][$this->_tpl_vars['profSelect']]): ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OR<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br/><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['profSelect']][$this->_tpl_vars['blockNo']]['html']; ?>
<div id="contact-dialog-<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
" class="hiddenElement"></div>
          <?php endif; ?>
    	</div>
    <?php else: ?>
      <tr id="contact-success-<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
" class="hiddenElement">
      <td></td>
      <td><span class="success-status"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New contact has been created.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
      </tr>
      <tr class="crm-new-contact-form-block-contact crm-new-contact-form-block-contact-<?php echo $this->_tpl_vars['blockNo']; ?>
">
        <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fldName']][$this->_tpl_vars['blockNo']]['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fldName']][$this->_tpl_vars['blockNo']]['html']; ?>

            <?php if ($this->_tpl_vars['form'][$this->_tpl_vars['profSelect']]): ?>
          &nbsp;&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OR<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['profSelect']][$this->_tpl_vars['blockNo']]['html']; ?>
<div id="contact-dialog-<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
" class="hiddenElement"></div>
            <?php endif; ?>
        </td>
      </tr>
    <?php endif; ?>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
  var allowMultiClient = Boolean('; ?>
<?php if (! empty ( $this->_tpl_vars['multiClient'] )): ?>1<?php else: ?>0<?php endif; ?><?php echo ');
  var newToken = \'\';
  var existingTokens = \'\';
  cj( function( ) {
      // add multiple client option if configured
      if ( allowMultiClient ) {
      	 addMultiClientOption'; ?>
<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
<?php echo '( newToken, '; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
,"<?php echo $this->_tpl_vars['prefix']; ?>
"<?php echo ' );
      } else {
         addSingleClientOption'; ?>
<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
<?php echo '( '; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
,"<?php echo $this->_tpl_vars['prefix']; ?>
"<?php echo ' );
      }
  });

  function newContact'; ?>
<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
<?php echo '( gid, blockNo, prefix ) {

      if ( allowMultiClient ) {
      	 existingTokens = \'\';
      	 var cid = cj(\'#\' + prefix + \'contact_\' + blockNo ).val();
      	 var cids = new Array();
      	 cids = cid.split(\',\');
      	 var i = 0;
      	 cj(\'li.token-input-token-facebook\').each(function(){
    		var displayName = cj(this).children(\'p\').text();
    	 	existingTokens += \'{"name":"\'+displayName+\'","id":"\'+cids[i]+\'"},\';
    	  	i++;
      	 });
      }

      var dataURL = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/profile/create','q' => "reset=1&snippet=5&context=dialog&blockNo=".($this->_tpl_vars['blockNo'])."&prefix=".($this->_tpl_vars['prefix']),'h' => 0), $this);?>
"<?php echo ';
      dataURL = dataURL + \'&gid=\' + gid;
      '; ?>
<?php if ($this->_tpl_vars['profileCreateCallback']): ?><?php echo '
        dataURL = dataURL + \'&createCallback=1\';
      '; ?>
<?php endif; ?><?php echo '
      cj.ajax({
         url: dataURL,
         success: function( content ) {
             cj( \'#contact-dialog-\'+ prefix + blockNo ).show( ).html( content ).dialog({
         	    	title: "Create New Contact",
             		modal: true,
             		width: 680,
             		overlay: {
             			opacity: 0.5,
             			background: "black"
             		},

                 close: function(event, ui) {
                   cj(\'#contact-success-\' + prefix + blockNo).fadeOut(5000);
                   cj(\'#\' + prefix + \'profiles-\' + blockNo).val(\'\');
                   '; ?>

                   <?php if ($this->_tpl_vars['newContactCallback']): ?>
                      eval("<?php echo $this->_tpl_vars['newContactCallback']; ?>
");
                   <?php endif; ?>
                   <?php echo '
                 }
             });
         }
      });
  }

  function addMultiClientOption'; ?>
<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
<?php echo '( newToken, blockNo, prefix ) {
      existingTokens = existingTokens + newToken;
      eval( \'existingTokens = [\' + existingTokens + \']\');

      var hintText = "'; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Type in a partial or complete name of an existing contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
      var contactUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/checkemail','q' => 'id=1&noemail=1','h' => 0), $this);?>
"<?php echo ';

      cj(\'#\' + prefix + \'contact_\' + blockNo).tokenInput( contactUrl, { prePopulate:existingTokens, theme: \'facebook\', hintText: hintText });
      cj(\'ul.token-input-list-facebook, div.token-input-dropdown-facebook\' ).css( \'width\', \'450px\');

  }

  function addSingleClientOption'; ?>
<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo $this->_tpl_vars['blockNo']; ?>
<?php echo '( blockNo, prefix ) {
      var contactUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','q' => 'className=CRM_Contact_Page_AJAX&fnName=getContactList&json=1&context=newcontact','h' => 0), $this);?>
"<?php echo ';
      '; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php echo '
      contactUrl = contactUrl + \'&cid=\' + '; ?>
<?php echo $this->_tpl_vars['contactId']; ?>
<?php echo ';
      '; ?>
<?php endif; ?><?php echo '

      var contactElement = \'#\' + prefix + \'contact_\' + blockNo;
      var contactHiddenElement = \'input[name="'; ?>
<?php echo $this->_tpl_vars['prefix']; ?>
<?php echo 'contact_select_id[\' + blockNo +\']"]\';
      cj( contactElement ).autocomplete( contactUrl, {
          selectFirst : false, matchContains: true, minChars: 1
      }).result( function(event, data, formatted) {
          cj( contactHiddenElement ).val(data[1]);
          '; ?>

          <?php if ($this->_tpl_vars['newContactCallback']): ?>
            eval("<?php echo $this->_tpl_vars['newContactCallback']; ?>
");
          <?php endif; ?>
          <?php echo '
      }).focus( );

      cj( contactElement ).click( function( ) {
          cj( contactHiddenElement ).val(\'\');
      });

      cj( contactElement ).bind("keypress keyup", function(e) {
          if ( e.keyCode == 13 ) {
              return false;
          }
      });
  }
</script>
'; ?>

