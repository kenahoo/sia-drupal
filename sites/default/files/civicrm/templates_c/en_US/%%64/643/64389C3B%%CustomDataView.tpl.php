<?php /* Smarty version 2.6.26, created on 2013-08-07 20:21:27
         compiled from CRM/Contact/Page/View/CustomDataView.tpl */ ?>
<?php $this->assign('customGroupCount', 1); ?>
<?php $_from = $this->_tpl_vars['viewCustomData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customGroupId'] => $this->_tpl_vars['customValues']):
?>
  <?php $this->assign('count', $this->_tpl_vars['customGroupCount']%2); ?>
  <?php if (( $this->_tpl_vars['count'] == $this->_tpl_vars['side'] ) || $this->_tpl_vars['skipTitle']): ?>
    <?php $_from = $this->_tpl_vars['customValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cvID'] => $this->_tpl_vars['cd_edit']):
?>
      <div class="customFieldGroup ui-corner-all <?php echo $this->_tpl_vars['cd_edit']['name']; ?>
 crm-custom-set-block-<?php echo $this->_tpl_vars['customGroupId']; ?>
">
        <table id="<?php echo $this->_tpl_vars['cd_edit']['name']; ?>
_<?php echo $this->_tpl_vars['count']; ?>
" >
          <tr class="columnheader">
            <td colspan="2" class="grouplabel">
              <a href="#" class="show-block <?php if ($this->_tpl_vars['cd_edit']['collapse_display'] == 0): ?> expanded collapsed <?php else: ?> collapsed <?php endif; ?>" >
                <?php echo $this->_tpl_vars['cd_edit']['title']; ?>

              </a>
            </td>
          </tr>
          <tr class= "<?php if ($this->_tpl_vars['cd_edit']['collapse_display']): ?>hiddenElement<?php endif; ?>">
            <td>
              <div class="crm-summary-block" id="custom-set-block-<?php echo $this->_tpl_vars['customGroupId']; ?>
">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataFieldView.tpl", 'smarty_include_vars' => array('customGroupId' => $this->_tpl_vars['customGroupId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            </td>
          </tr>
        </table>
      </div>
    <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
  <?php $this->assign('customGroupCount', $this->_tpl_vars['customGroupCount']+1); ?>
<?php endforeach; endif; unset($_from); ?>
