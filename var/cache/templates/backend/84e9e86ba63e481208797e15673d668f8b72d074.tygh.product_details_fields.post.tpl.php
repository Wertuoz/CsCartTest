<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:24
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14027863155c27f6706965c4-18227112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84e9e86ba63e481208797e15673d668f8b72d074' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14027863155c27f6706965c4-18227112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f6706a1920_39993892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f6706a1920_39993892')) {function content_5c27f6706a1920_39993892($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('supplier'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/suppliers/views/suppliers/components/supplier_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("supplier"),'name'=>"product_data[supplier_id]",'id'=>"product_data_supplier_id",'selected'=>$_smarty_tpl->tpl_vars['product_data']->value['supplier_id'],'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'read_only'=>$_smarty_tpl->tpl_vars['readonly']->value), 0);?>
<?php }} ?>
