<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:02
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1824093955c236b6234ec16-34343820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb8c56852e2be9958df24a7e3c1d836438412965' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/views/block_manager/render/block.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1824093955c236b6234ec16-34343820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'content_alignment' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b6235f553_96477116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b6235f553_96477116')) {function content_5c236b6235f553_96477116($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    ty-float-left<?php }?>">
<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    </div>
<?php }?><?php }} ?>
