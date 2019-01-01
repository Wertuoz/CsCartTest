<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:03:59
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_features/properties.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15246339675c254c4f8c70f9-53142571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e25be7d324bb81f544b3bd7f9ceb92bae126f6ae' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/hooks/product_features/properties.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15246339675c254c4f8c70f9-53142571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature' => 0,
    'yml2_price_lists' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c4f8dd570_07739302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c4f8dd570_07739302')) {function content_5c254c4f8dd570_07739302($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml_export.yml2_variants_unit','yml_export.yml2_exclude_from_price'));
?>
<div class="control-group">
    <label for="yml2_variants_unit" class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_variants_unit");?>
</label>
    <div class="controls">
        <div class="checkbox-list">
            <input id="yml2_variants_unit" type="text" name="feature_data[yml2_variants_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['yml2_variants_unit'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        </div>
    </div>
</div>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_exclude_from_price");?>
</label>
    <div class="controls">
        <div class="checkbox-list shift-input">
            <input type="hidden" name="feature_data[yml2_exclude_prices]" value="" />
            <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yml2_price_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                <label>
                    <input type="checkbox"
                           name="feature_data[yml2_exclude_prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'ISO-8859-1');?>
]"
                           value="Y"
                           <?php if ($_smarty_tpl->tpl_vars['feature']->value['yml2_exclude_prices']&&in_array($_smarty_tpl->tpl_vars['price']->value['param_id'],$_smarty_tpl->tpl_vars['feature']->value['yml2_exclude_prices'])) {?>
                           checked="checked"
                           <?php }?>/>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['param_data']['name_price_list'], ENT_QUOTES, 'ISO-8859-1');?>

                </label>
            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>
