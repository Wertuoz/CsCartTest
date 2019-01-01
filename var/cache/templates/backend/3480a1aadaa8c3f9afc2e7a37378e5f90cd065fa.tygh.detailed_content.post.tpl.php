<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:30
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16043947685c27f6765dffa3-85401668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3480a1aadaa8c3f9afc2e7a37378e5f90cd065fa' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16043947685c27f6765dffa3-85401668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f6765ebe24_08798114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f6765ebe24_08798114')) {function content_5c27f6765ebe24_08798114($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('bestselling','sales_amount'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("bestselling"),'target'=>"#acc_bestsellers"), 0);?>

<div id="acc_bestsellers" class="collapse in">
    <div class="control-group">
        <label class="control-label" for="sales_amount"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
        <div class="controls">
        <input type="text" id="sales_amount" name="product_data[sales_amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['sales_amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large" size="10" />
        </div>
    </div>
</div><?php }} ?>
