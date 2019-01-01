<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:06:19
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19655911805c236ebb5be4c7-03725705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3516256548a497b5d4b4a35ff215ed869452dd09' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19655911805c236ebb5be4c7-03725705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236ebb5c5aa9_60369623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236ebb5c5aa9_60369623')) {function content_5c236ebb5c5aa9_60369623($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }?><?php }} ?>
