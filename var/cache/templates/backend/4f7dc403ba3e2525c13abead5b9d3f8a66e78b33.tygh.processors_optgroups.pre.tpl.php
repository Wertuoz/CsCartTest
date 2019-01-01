<?php /* Smarty version Smarty-3.1.21, created on 2018-12-31 01:30:15
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/hooks/payments/processors_optgroups.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4910105575c2946f7ae40b8-27740122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7dc403ba3e2525c13abead5b9d3f8a66e78b33' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/hooks/payments/processors_optgroups.pre.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4910105575c2946f7ae40b8-27740122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_processors' => 0,
    'processor' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2946f7af2da4_52240783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2946f7af2da4_52240783')) {function content_5c2946f7af2da4_52240783($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('russian_payments'));
?>
<optgroup label="<?php echo $_smarty_tpl->__("russian_payments");?>
">
    <?php  $_smarty_tpl->tpl_vars["processor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["processor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["processor"]->key => $_smarty_tpl->tpl_vars["processor"]->value) {
$_smarty_tpl->tpl_vars["processor"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['processor']->value['russian']=="Y") {?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']==$_smarty_tpl->tpl_vars['processor']->value['processor_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
        <?php }?>
    <?php } ?>
</optgroup>
<?php }} ?>
