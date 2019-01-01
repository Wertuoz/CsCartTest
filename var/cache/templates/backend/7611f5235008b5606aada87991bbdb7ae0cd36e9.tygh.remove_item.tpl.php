<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:04:00
         compiled from "/srv/www/esportshop.ru/design/backend/templates/buttons/remove_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15304733735c254c5020a242-42197281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7611f5235008b5606aada87991bbdb7ae0cd36e9' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/buttons/remove_item.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15304733735c254c5020a242-42197281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simple' => 0,
    'only_delete' => 0,
    'item_id' => 0,
    'but_class' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254c50217720_21973392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254c50217720_21973392')) {function content_5c254c50217720_21973392($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
<a class="icon-remove cm-opacity cm-tooltip <?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y") {?> hidden<?php }?>" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
<?php }?>
<a name="remove_hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="icon-remove cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['but_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'ISO-8859-1');
}?>" title="<?php echo $_smarty_tpl->__("remove");?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>></a><?php }} ?>
