<?php /* Smarty version Smarty-3.1.21, created on 2018-11-26 10:09:06
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20987282805bfb9c12877936-16023751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7412f5a8dba607276a54311a757bf123c841a0a4' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/tags/hooks/index/scripts.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20987282805bfb9c12877936-16023751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfb9c1287ddb0_12513556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfb9c1287ddb0_12513556')) {function content_5bfb9c1287ddb0_12513556($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('addons.tags.add_a_tag'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr({
		addons_tags_add_a_tag: '<?php echo strtr($_smarty_tpl->__("addons.tags.add_a_tag"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
