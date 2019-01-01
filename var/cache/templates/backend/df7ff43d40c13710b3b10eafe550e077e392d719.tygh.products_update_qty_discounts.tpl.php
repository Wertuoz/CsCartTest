<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:29
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/products/components/products_update_qty_discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12840565035c27f675e5d954-30020194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df7ff43d40c13710b3b10eafe550e077e392d719' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/products/components/products_update_qty_discounts.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12840565035c27f675e5d954-30020194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'no_hide_input_if_shared_product' => 0,
    'price' => 0,
    '_key' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'usergroup' => 0,
    'usergroups' => 0,
    'default_usergroup_name' => 0,
    'show_update_for_all' => 0,
    'new_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f675ed0876_93527927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f675ed0876_93527927')) {function content_5c27f675ed0876_93527927($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
?><?php
fn_preload_lang_vars(array('quantity','value','type','qty_discount_type_tooltip','usergroup','absolute','percent','absolute','percent','all','absolute','percent'));
?>
<?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
    <?php $_smarty_tpl->tpl_vars["usergroups"] = new Smarty_variable(fn_get_usergroups(array("type"=>"C","status"=>array("A","H"))), null, 0);?>
<?php }?>

<div id="content_qty_discounts" class="hidden">
    <div class="table-wrapper">
        <table class="table table-middle" width="100%">
        <thead class="cm-first-sibling">
        <tr>
            <th width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th width="20%"><?php echo $_smarty_tpl->__("value");?>
</th>
            <th width="25%"><?php echo $_smarty_tpl->__("type");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("qty_discount_type_tooltip")), 0);?>
</th>
            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                <th width="25%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
            <?php }?>
            <th width="15%">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_smarty_tpl->tpl_vars["_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_data']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
 $_smarty_tpl->tpl_vars["_key"]->value = $_smarty_tpl->tpl_vars["price"]->key;
?>
        <tr class="cm-row-item">
            <td width="5%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit']=="1"&&$_smarty_tpl->tpl_vars['price']->value['usergroup_id']=="0") {?>
                    &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'ISO-8859-1');?>

                <?php } else { ?>
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][lower_limit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-micro" />
                <?php }?></td>
            <td width="20%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit']=="1"&&$_smarty_tpl->tpl_vars['price']->value['usergroup_id']=="0") {?>
                    &nbsp;<?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount']==0) {
echo htmlspecialchars(fn_format_price((($tmp = @$_smarty_tpl->tpl_vars['price']->value['price'])===null||$tmp==='' ? "0.00" : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['percentage_discount'], ENT_QUOTES, 'ISO-8859-1');
}?>
                <?php } else { ?>
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][price]" value="<?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount']==0) {
echo htmlspecialchars(fn_format_price((($tmp = @$_smarty_tpl->tpl_vars['price']->value['price'])===null||$tmp==='' ? "0.00" : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['percentage_discount'], ENT_QUOTES, 'ISO-8859-1');
}?>" size="10" class="input-medium" />
                <?php }?></td>
            <td width="25%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit']=="1"&&$_smarty_tpl->tpl_vars['price']->value['usergroup_id']=="0") {?>
                    &nbsp;<?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount']==0) {
echo $_smarty_tpl->__("absolute");
} else {
echo $_smarty_tpl->__("percent");
}?>
                <?php } else { ?>
                <select class="span3" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][type]">
                    <option value="A" <?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount']==0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
                    <option value="P" <?php if ($_smarty_tpl->tpl_vars['price']->value['percentage_discount']!=0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                </select>
                <?php }?></td>
            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
            <td width="25%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit']=="1"&&$_smarty_tpl->tpl_vars['price']->value['usergroup_id']=="0") {?>
                    &nbsp;<?php echo $_smarty_tpl->__("all");?>

                <?php } else { ?>
                <select id="usergroup_id" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][usergroup_id]" class="span3">
                    <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = fn_get_default_usergroups(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['price']->value['usergroup_id']!=$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                        <?php } else { ?>
                            
                            <?php $_smarty_tpl->tpl_vars["default_usergroup_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], null, 0);?>
                        <?php }?>
                    <?php } ?>
                    <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['price']->value['usergroup_id']!=$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                        <?php }?>
                    <?php } ?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['usergroup_id'], ENT_QUOTES, 'ISO-8859-1');?>
" selected="selected"><?php if ($_smarty_tpl->tpl_vars['default_usergroup_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['default_usergroup_name']->value, ENT_QUOTES, 'ISO-8859-1');
} else {
echo htmlspecialchars(fn_get_usergroup_name($_smarty_tpl->tpl_vars['price']->value['usergroup_id']), ENT_QUOTES, 'ISO-8859-1');
}?></option>
                </select>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['_key']->value),'name'=>"update_all_vendors[prices][".((string)$_smarty_tpl->tpl_vars['_key']->value)."]"), 0);?>

                <?php $_smarty_tpl->tpl_vars["default_usergroup_name"] = new Smarty_variable('', null, 0);?>
                <?php }?></td>
            <?php }?>
            <td width="15%" class="nowrap <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
 right">
                <?php if ($_smarty_tpl->tpl_vars['price']->value['lower_limit']=="1"&&$_smarty_tpl->tpl_vars['price']->value['usergroup_id']=="0") {?>
                &nbsp;<?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('microformats'=>"cm-delete-row",'no_confirm'=>true), 0);?>

                <?php }?>
            </td>
        </tr>
        <?php } ?>
        <?php echo smarty_function_math(array('equation'=>"x+1",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['_key']->value)===null||$tmp==='' ? 0 : $tmp),'assign'=>"new_key"),$_smarty_tpl);?>

        <tr class="<?php echo smarty_function_cycle(array('values'=>"table-row , ",'reset'=>1),$_smarty_tpl);
echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="box_add_qty_discount">
            <td width="5%">
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][lower_limit]" value="" class="input-micro" /></td>
            <td width="20%">
                <input type="text" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][price]" value="0.00" size="10" class="input-medium" /></td>
            <td width="25%">
            <select class="span3" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][type]">
                <option value="A" selected="selected"><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</option>
                <option value="P"><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
            </select></td>
            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
            <td width="25%">
                <select id="usergroup_id" name="product_data[prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][usergroup_id]" class="span3">
                    <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = fn_get_default_usergroups(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                    <?php } ?>
                    <?php  $_smarty_tpl->tpl_vars["usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["usergroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["usergroup"]->key => $_smarty_tpl->tpl_vars["usergroup"]->value) {
$_smarty_tpl->tpl_vars["usergroup"]->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                    <?php } ?>
                </select>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['new_key']->value),'name'=>"update_all_vendors[prices][".((string)$_smarty_tpl->tpl_vars['new_key']->value)."]"), 0);?>

            </td>
            <?php }?>
            <td width="15%" class="right">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_qty_discount"), 0);?>

            </td>
        </tr>
        </tbody>
        </table>
    </div>

</div><?php }} ?>
