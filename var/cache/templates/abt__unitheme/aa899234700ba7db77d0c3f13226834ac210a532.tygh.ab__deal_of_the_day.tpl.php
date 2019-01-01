<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:51
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14046473365c236c83e8c2f3-78658779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa899234700ba7db77d0c3f13226834ac210a532' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14046473365c236c83e8c2f3-78658779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'items' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c83ea7b17_98477234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c83ea7b17_98477234')) {function content_5c236c83ea7b17_98477234($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['promotions']&&smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions'])>1) {?>
    <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(fn_ab__dotd_get_promotions(array('promotion_id'=>array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('promotions'=>$_smarty_tpl->tpl_vars['items']->value[0]), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/blocks/product_tabs/ab__deal_of_the_day.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['promotions']&&smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions'])>1) {?>
    <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(fn_ab__dotd_get_promotions(array('promotion_id'=>array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('promotions'=>$_smarty_tpl->tpl_vars['items']->value[0]), 0);?>

<?php }
}?><?php }} ?>
