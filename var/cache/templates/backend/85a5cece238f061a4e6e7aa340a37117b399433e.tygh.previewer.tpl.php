<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 08:24:44
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16007078225bc8191c851b57-31312968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85a5cece238f061a4e6e7aa340a37117b399433e' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/common/previewer.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16007078225bc8191c851b57-31312968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc8191c857122_81875136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc8191c857122_81875136')) {function content_5bc8191c857122_81875136($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
