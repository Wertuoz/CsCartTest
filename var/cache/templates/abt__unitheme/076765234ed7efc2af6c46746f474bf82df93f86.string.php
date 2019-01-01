<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:03
         compiled from "076765234ed7efc2af6c46746f474bf82df93f86" */ ?>
<?php /*%%SmartyHeaderCode:612479055c236b63361fa3-36443722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '076765234ed7efc2af6c46746f474bf82df93f86' => 
    array (
      0 => '076765234ed7efc2af6c46746f474bf82df93f86',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '612479055c236b63361fa3-36443722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b6336d719_20228316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b6336d719_20228316')) {function content_5c236b6336d719_20228316($_smarty_tpl) {?><?php if (!is_callable('smarty_function_abt__ut_call_request')) include '/srv/www/esportshop.ru/app/addons/abt__unitheme/functions/smarty_plugins/function.abt__ut_call_request.php';
?><?php
fn_preload_lang_vars(array('working_hours','Contacts'));
?>
<div class="ty-cr-phone-number">
<!-- <div class="ty-cr-work"><?php echo $_smarty_tpl->__("working_hours");?>
</div> -->
<div class="ty-cr-phone"><a href="tel:+88000000000">+8(800) 0000000</a><br><a href="tel:+88000000000">+8(800) 0000000</a></div>
<div class="ty-cr-phone-number-link">
<div class="ty-cr-link"><a href="<?php echo htmlspecialchars(fn_url("pages.view&page_id=20"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("Contacts");?>
</a></div>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {?><div class="ty-cr-link"><?php echo smarty_function_abt__ut_call_request(array(),$_smarty_tpl);?>
</div><?php }?>
</div>
</div><?php }} ?>
