<?php /* Smarty version Smarty-3.1.21, created on 2018-11-24 02:27:33
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9440184855bf88ce54a7203-12015992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67607e8580a394d475b9e595d0b9f125fafe2b19' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/rus_payments/hooks/index/scripts.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9440184855bf88ce54a7203-12015992',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bf88ce54a9a59_23284400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf88ce54a9a59_23284400')) {function content_5bf88ce54a9a59_23284400($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/rus_payments/yandex_checkpoint.js"),$_smarty_tpl);?>
<?php }} ?>
