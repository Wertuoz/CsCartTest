<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:12:20
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/discussion/views/discussion_manager/components/rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11304149125c27f144f2a219-77195744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbe6b68ef77f41a111e12773daaf7fe67f22ec2' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/discussion/views/discussion_manager/components/rate.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11304149125c27f144f2a219-77195744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rate_id' => 0,
    'val' => 0,
    'item_rate_id' => 0,
    'rate_name' => 0,
    'rate_value' => 0,
    'disabled' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f144f39648_12032099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f144f39648_12032099')) {function content_5c27f144f39648_12032099($_smarty_tpl) {?><fieldset class="rating" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php  $_smarty_tpl->tpl_vars["title"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["title"]->_loop = false;
 $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable;
 $_from = fn_get_discussion_ratings(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["title"]->key => $_smarty_tpl->tpl_vars["title"]->value) {
$_smarty_tpl->tpl_vars["title"]->_loop = true;
 $_smarty_tpl->tpl_vars["val"]->value = $_smarty_tpl->tpl_vars["title"]->key;
?>
    <?php $_smarty_tpl->tpl_vars['item_rate_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate_id']->value)."_".((string)$_smarty_tpl->tpl_vars['val']->value), null, 0);?>
    <input type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['rate_value']->value==$_smarty_tpl->tpl_vars['val']->value) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?>/><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_rate_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
</label>
    <?php } ?>
</fieldset><?php }} ?>
