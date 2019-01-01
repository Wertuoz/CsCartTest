<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:48:15
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_tracking.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9384094515c006caf2fea76-82395616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c60ef1e3b5eb8b101358ffcdd56935184e176733' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/product_variations/hooks/products/update_product_tracking.override.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9384094515c006caf2fea76-82395616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
    'settings' => 0,
    'product_data' => 0,
    'product_options' => 0,
    'track' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006caf329079_75951332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006caf329079_75951332')) {function content_5c006caf329079_75951332($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.enum.php';
?><?php
fn_preload_lang_vars(array('inventory','tt_addons_product_variations_hooks_products_update_product_tracking_override_inventory','track','track_with_options','track_without_options','dont_track'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tracking")) {?>
    <div class="control-group">
        <label class="control-label" for="elm_product_tracking"><?php echo $_smarty_tpl->__("inventory");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_product_variations_hooks_products_update_product_tracking_override_inventory")), 0);?>
:</label>
        <div class="controls">
            <select class="span5" name="product_data[tracking]" id="elm_product_tracking" <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="N") {?>disabled="disabled"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
                    <?php $_smarty_tpl->tpl_vars['track'] = new Smarty_variable($_smarty_tpl->__("track"), null, 0);?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS"), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['tracking']==smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS")&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("track_with_options");?>
</option>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['track'] = new Smarty_variable($_smarty_tpl->__("track_without_options"), null, 0);?>
                <?php }?>
                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITHOUT_OPTIONS"), ENT_QUOTES, 'ISO-8859-1');?>
" <?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITHOUT_OPTIONS"), ENT_QUOTES, 'ISO-8859-1');
$_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['tracking']==$_tmp5&&$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="Y") {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['track']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"), ENT_QUOTES, 'ISO-8859-1');?>
" <?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"), ENT_QUOTES, 'ISO-8859-1');
$_tmp6=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['tracking']==$_tmp6||$_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("dont_track");?>
</option>
            </select>
        </div>
    </div>
<?php } else { ?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
