<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 05:25:41
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/views/products/components/bulk_edit/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13682078615bc940a5cb9e23-40143586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e54af6ab2cab1a7862933edc0dcfd8af64527b' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/views/products/components/bulk_edit/status.tpl',
      1 => 1539165554,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13682078615bc940a5cb9e23-40143586',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc940a5ccff12_46440439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc940a5ccff12_46440439')) {function content_5bc940a5ccff12_46440439($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('bulk_edit.make_active','bulk_edit.make_disabled','bulk_edit.make_hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_active");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1,'dispatch'=>"dispatch[products.m_activate]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_disabled");
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[products.m_disable]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_hidden");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[products.m_hide]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
