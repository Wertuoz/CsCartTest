<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:03
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/static_templates/top_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20896456835c236b63e3bf93-42732189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e872ed1380bab0f646e574b0c9f2c07130e6ef' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/static_templates/top_buttons.tpl',
      1 => 1545825029,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20896456835c236b63e3bf93-42732189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_wishlist_button' => 0,
    'wishlist_count' => 0,
    'settings' => 0,
    'hide_compare_list_button' => 0,
    'product' => 0,
    'compared_products' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b63e73109_17932050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b63e73109_17932050')) {function content_5c236b63e73109_17932050($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_wishlist','compare_list','view_wishlist','compare_list'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if (!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value&&function_exists('fn_wishlist_get_count')) {?>
    <?php $_smarty_tpl->tpl_vars['wishlist_count'] = new Smarty_variable(call_user_func('fn_wishlist_get_count'), null, 0);?>
    <div id="abt__unitheme_wishlist_count">
        <a class="cm-tooltip ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><i class="uni-wish1"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
        <!--abt__unitheme_wishlist_count--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["compared_products"] = new Smarty_variable(fn_get_comparison_products(''), null, 0);?>
    <div id="abt__unitheme_compared_products">
        <a class="cm-tooltip ty-compare__a <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value)>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("compare_list");?>
"><i class="uni-compare"></i><?php if ($_smarty_tpl->tpl_vars['compared_products']->value) {?> <span class="count"><?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
        <!--abt__unitheme_compared_products--></div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/top_buttons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/top_buttons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if (!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value&&function_exists('fn_wishlist_get_count')) {?>
    <?php $_smarty_tpl->tpl_vars['wishlist_count'] = new Smarty_variable(call_user_func('fn_wishlist_get_count'), null, 0);?>
    <div id="abt__unitheme_wishlist_count">
        <a class="cm-tooltip ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><i class="uni-wish1"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
        <!--abt__unitheme_wishlist_count--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["compared_products"] = new Smarty_variable(fn_get_comparison_products(''), null, 0);?>
    <div id="abt__unitheme_compared_products">
        <a class="cm-tooltip ty-compare__a <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value)>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("compare_list");?>
"><i class="uni-compare"></i><?php if ($_smarty_tpl->tpl_vars['compared_products']->value) {?> <span class="count"><?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'ISO-8859-1');?>
</span><?php }?></a>
        <!--abt__unitheme_compared_products--></div>
<?php }
}?><?php }} ?>
