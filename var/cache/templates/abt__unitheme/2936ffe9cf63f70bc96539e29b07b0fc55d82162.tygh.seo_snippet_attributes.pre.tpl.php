<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:46
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1924707735c236c7e6d03c4-79575085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2936ffe9cf63f70bc96539e29b07b0fc55d82162' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1924707735c236c7e6d03c4-79575085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c7e6ea147_57479689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c7e6ea147_57479689')) {function content_5c236c7e6ea147_57479689($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']&&$_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating']) {?>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <meta itemprop="bestRating" content="5">
        <meta itemprop="worstRating" content="1">
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']&&$_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating']) {?>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <meta itemprop="bestRating" content="5">
        <meta itemprop="worstRating" content="1">
    </div>
<?php }
}?><?php }} ?>