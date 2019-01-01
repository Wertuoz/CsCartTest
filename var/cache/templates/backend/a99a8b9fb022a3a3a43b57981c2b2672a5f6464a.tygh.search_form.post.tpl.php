<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:09:48
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17572353635c236f8cc86288-47551884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '17572353635c236f8cc86288-47551884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236f8cc92d32_07038336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236f8cc92d32_07038336')) {function content_5c236f8cc92d32_07038336($_smarty_tpl) {?><?php
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
