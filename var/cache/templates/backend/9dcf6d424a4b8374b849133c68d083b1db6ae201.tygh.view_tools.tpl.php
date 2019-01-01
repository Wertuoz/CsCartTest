<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:12:08
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/view_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16465314135c23701866f943-71456388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dcf6d424a4b8374b849133c68d083b1db6ae201' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/view_tools.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16465314135c23701866f943-71456388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_tools' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2370186897c2_22577080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2370186897c2_22577080')) {function content_5c2370186897c2_22577080($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('prev_page','next'));
?>
<div class="btn-group prev-next">
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['prev_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'ISO-8859-1');
}
} else {
echo $_smarty_tpl->__("prev_page");
}?>"<?php }?>><i class="icon-chevron-left"></i></a>
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['next_id'])), ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'ISO-8859-1');
}
} else {
echo $_smarty_tpl->__("next");
}?>"<?php }?>> <i class="icon-chevron-right"></i> </a>
</div><?php }} ?>
