<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:09:33
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10762470155c236f7dab2518-46123507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1453b55ae845e0a2c5a976e7ae17cc6c3c6e0f' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10762470155c236f7dab2518-46123507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236f7dac19f7_85707313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236f7dac19f7_85707313')) {function content_5c236f7dac19f7_85707313($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'ISO-8859-1');?>
" onfocus="this.select();"/>
    </div>
</div><?php }} ?>
