<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 05:25:41
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/views/products/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2745206815bc940a5cd8cd9-93908904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d6eff399623d92a2133e553b78fa07dbaf7ddf4' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/views/products/components/bulk_edit/actions.tpl',
      1 => 1539165554,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2745206815bc940a5cd8cd9-93908904',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc940a5ce8067_45400512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc940a5ce8067_45400512')) {function content_5bc940a5ce8067_45400512($_smarty_tpl) {?><?php
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
