<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:40:44
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16000215575bc9361ce73749-46196437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516b0e3771cc56ab9ebb09895b98e26799beb3ba' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16000215575bc9361ce73749-46196437',
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
  'unifunc' => 'content_5bc9361ce82cc1_04136683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc9361ce82cc1_04136683')) {function content_5bc9361ce82cc1_04136683($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('supplier'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/suppliers/views/suppliers/components/supplier_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("supplier"),'name'=>"product_data[supplier_id]",'id'=>"product_data_supplier_id",'selected'=>$_smarty_tpl->tpl_vars['product_data']->value['supplier_id'],'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'read_only'=>$_smarty_tpl->tpl_vars['readonly']->value), 0);?>
<?php }} ?>
