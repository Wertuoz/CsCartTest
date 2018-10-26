<?php /* Smarty version Smarty-3.1.21, created on 2018-10-19 04:40:45
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/product_update_price.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17926349115bc9361d07aa69-90169524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6ab34eabd2475ff649567e7010aa15908dcce3' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/product_variations/hooks/products/product_update_price.pre.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17926349115bc9361d07aa69-90169524',
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
  'unifunc' => 'content_5bc9361d08b561_60834197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc9361d08b561_60834197')) {function content_5bc9361d08b561_60834197($_smarty_tpl) {?><?php
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
                    <option <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==$_smarty_tpl->tpl_vars['product_type_id']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
<?php }?>
<?php }} ?>
