<?php /* Smarty version Smarty-3.1.21, created on 2018-11-26 12:40:00
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10891940565bfbbf701bca93-55748387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71e76a37c96dd9481569c5593cd9a8d6cbe83aff' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/subheader.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10891940565bfbbf701bca93-55748387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfbbf701c81f9_93948954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfbbf701c81f9_93948954')) {function content_5bfbbf701c81f9_93948954($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="icon-caret-down"></span><?php }?>
</h4><?php }} ?>