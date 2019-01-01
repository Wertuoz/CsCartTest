<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:51:58
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/seo/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13744407295c236b5ee78821-27747294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9ba0846adf4f6270c21c4a4c7b42ecee05cb661' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/seo/hooks/index/meta.post.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13744407295c236b5ee78821-27747294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'seo_canonical' => 0,
    'seo_alt_hreflangs_list' => 0,
    'seo_alt_lang' => 0,
    'seo_alt_lang_code' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b5eeb10f2_03205971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b5eeb10f2_03205971')) {function content_5c236b5eeb10f2_03205971($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:ab__so_noindex")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:ab__seo_filters_meta_indexed_page")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:ab__seo_filters_meta_indexed_page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<meta name="robots" content="noindex<?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']=="partial"&&defined('HTTPS')) {?>,nofollow<?php }?>" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:ab__seo_filters_meta_indexed_page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
    <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
    <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'ISO-8859-1');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php } ?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:ab__so_noindex")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:ab__seo_filters_meta_indexed_page")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:ab__seo_filters_meta_indexed_page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<meta name="robots" content="noindex<?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']=="partial"&&defined('HTTPS')) {?>,nofollow<?php }?>" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:ab__seo_filters_meta_indexed_page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
    <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
    <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'ISO-8859-1');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php } ?>

<?php }?><?php }} ?>
