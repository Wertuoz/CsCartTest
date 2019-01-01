<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:50:20
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19633764415c236afc7667e0-91935231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849e8ec9518e65c2a6b0d3adfda299b5c26456ca' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/previewer.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19633764415c236afc7667e0-91935231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236afc76af57_00764797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236afc76af57_00764797')) {function content_5c236afc76af57_00764797($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
