<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 16:20:22
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/yml_export/hooks/product_features/properties.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12794675405bc88896c969f3-00660951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc52adb2893e855308fcab5ecebb5cfd0780924e' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/yml_export/hooks/product_features/properties.post.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12794675405bc88896c969f3-00660951',
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
  'unifunc' => 'content_5bc88896cabaa7_14419285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc88896cabaa7_14419285')) {function content_5bc88896cabaa7_14419285($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('yml_export.yml2_variants_unit','yml_export.yml2_exclude_from_price'));
?>
<div class="control-group">
    <label for="yml2_variants_unit" class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_variants_unit");?>
</label>
    <div class="controls">
        <div class="checkbox-list">
            <input id="yml2_variants_unit" type="text" name="feature_data[yml2_variants_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['yml2_variants_unit'], ENT_QUOTES, 'UTF-8');?>
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
                           name="feature_data[yml2_exclude_prices][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="Y"
                           <?php if ($_smarty_tpl->tpl_vars['feature']->value['yml2_exclude_prices']&&in_array($_smarty_tpl->tpl_vars['price']->value['param_id'],$_smarty_tpl->tpl_vars['feature']->value['yml2_exclude_prices'])) {?>
                           checked="checked"
                           <?php }?>/>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['param_data']['name_price_list'], ENT_QUOTES, 'UTF-8');?>

                </label>
            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>
