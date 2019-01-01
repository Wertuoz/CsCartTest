<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:09:48
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8635489585c236f8cc71644-44659372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb177ad9f3c4f6a6bc8b686fa2303bd8df1d8a1c' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8635489585c236f8cc71644-44659372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236f8cc81007_60240828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236f8cc81007_60240828')) {function content_5c236f8cc81007_60240828($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'ISO-8859-1');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }?><?php }} ?>
