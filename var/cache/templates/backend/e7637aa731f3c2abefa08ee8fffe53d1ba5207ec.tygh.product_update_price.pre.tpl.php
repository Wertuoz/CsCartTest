<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:24
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/product_update_price.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11126921455c27f67093b8c7-85210966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7637aa731f3c2abefa08ee8fffe53d1ba5207ec' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/product_update_price.pre.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11126921455c27f67093b8c7-85210966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'product_types' => 0,
    'product_data' => 0,
    'product_type_id' => 0,
    'product_type_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f67094bfb0_75083057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f67094bfb0_75083057')) {function content_5c27f67094bfb0_75083057($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.product_type'));
?>
<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="control-group">
        <label for="product_type" class="control-label cm-required"><?php echo $_smarty_tpl->__("product_variations.product_type");?>
</label>
        <div class="controls">
            <select name="product_data[product_type]" form="form" id="product_type">
                <?php  $_smarty_tpl->tpl_vars["product_type_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_type_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_type_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_type_name"]->key => $_smarty_tpl->tpl_vars["product_type_name"]->value) {
$_smarty_tpl->tpl_vars["product_type_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_type_id"]->value = $_smarty_tpl->tpl_vars["product_type_name"]->key;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==$_smarty_tpl->tpl_vars['product_type_id']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
<?php }?>
<?php }} ?>
