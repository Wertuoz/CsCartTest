<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:46
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/products/seo_snippet_attributes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8164834015c236c7e6ee2c0-02408559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b292fd0c31ca4b10f6890db8b5df3fb6ea963a22' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/products/seo_snippet_attributes.post.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8164834015c236c7e6ee2c0-02408559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'brand' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c7e70b6c7_56892574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c7e70b6c7_56892574')) {function content_5c236c7e70b6c7_56892574($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['main_pair']&&$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
">
<?php }?>

<?php $_smarty_tpl->tpl_vars['brand'] = new Smarty_variable(fn_abt__ut_get_product_brand($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
    <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/products/seo_snippet_attributes.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/products/seo_snippet_attributes.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['main_pair']&&$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'ISO-8859-1');?>
">
<?php }?>

<?php $_smarty_tpl->tpl_vars['brand'] = new Smarty_variable(fn_abt__ut_get_product_brand($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
    <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<?php }
}?><?php }} ?>
