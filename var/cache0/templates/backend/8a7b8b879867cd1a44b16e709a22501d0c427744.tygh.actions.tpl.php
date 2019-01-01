<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:04
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/products/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10163744405c006bf02518d6-88869121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7b8b879867cd1a44b16e709a22501d0c427744' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/products/components/bulk_edit/actions.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10163744405c006bf02518d6-88869121',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006bf0258d16_86302433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006bf0258d16_86302433')) {function content_5c006bf0258d16_86302433($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone_selected','export_selected'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
