<?php /* Smarty version Smarty-3.1.21, created on 2018-11-26 12:40:00
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13726236015bfbbf70473041-62921276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bde7a095dc77fe7d4d5388e8e2cf8b4d298d33aa' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/tooltip.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13726236015bfbbf70473041-62921276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfbbf7047a051_33108789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfbbf7047a051_33108789')) {function content_5bfbbf7047a051_33108789($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'ISO-8859-1');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
