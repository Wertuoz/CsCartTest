<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 10:24:07
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10229098405bc83517e06b30-65241826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1493ffdf677bea061898b8f0a62874f7e3ecf7a7' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/buttons/save.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10229098405bc83517e06b30-65241826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc83517e0cbe2_98455129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc83517e0cbe2_98455129')) {function content_5bc83517e0cbe2_98455129($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
