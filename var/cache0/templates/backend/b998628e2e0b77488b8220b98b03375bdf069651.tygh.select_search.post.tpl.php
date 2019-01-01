<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:06
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8336328175c006bf2134973-85213198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b998628e2e0b77488b8220b98b03375bdf069651' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8336328175c006bf2134973-85213198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006bf2139642_73182505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006bf2139642_73182505')) {function content_5c006bf2139642_73182505($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }} ?>
