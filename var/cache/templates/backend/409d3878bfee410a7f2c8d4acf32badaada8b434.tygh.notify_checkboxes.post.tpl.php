<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:50:20
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/suppliers/hooks/select_popup/notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3028878985c236afcea7872-84624288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '409d3878bfee410a7f2c8d4acf32badaada8b434' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/suppliers/hooks/select_popup/notify_checkboxes.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3028878985c236afcea7872-84624288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notify' => 0,
    'order_info' => 0,
    'prefix' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236afceafaa1_42596561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236afceafaa1_42596561')) {function content_5c236afceafaa1_42596561($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('notify_supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['notify']->value&&$_smarty_tpl->tpl_vars['order_info']->value['have_suppliers']) {?>
    <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_notify_supplier">
        <input type="checkbox" name="__notify_supplier" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_notify_supplier" value="Y" checked="checked" onclick="Tygh.$('input[name=__notify_supplier]').prop('checked', this.checked);" />
        <?php echo $_smarty_tpl->__("notify_supplier");?>
</label></a>
    </li>
<?php }?><?php }} ?>
