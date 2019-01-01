<?php /* Smarty version Smarty-3.1.21, created on 2018-12-27 15:56:32
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223066425c24cc00b4f736-55181281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c14564edcf4adb1b3d8f96b08fcff5968a5bb1' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/theme_editor.tpl',
      1 => 1543002777,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '223066425c24cc00b4f736-55181281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c24cc00b5eda5_59046446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c24cc00b5eda5_59046446')) {function content_5c24cc00b5eda5_59046446($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr($_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
