<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:45:05
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5650640095c006bf1cdb9c8-89100507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a99a8b9fb022a3a3a43b57981c2b2672a5f6464a' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5650640095c006bf1cdb9c8-89100507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006bf1ce7c94_55877682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006bf1ce7c94_55877682')) {function content_5c006bf1ce7c94_55877682($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'ISO-8859-1');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'ISO-8859-1');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
