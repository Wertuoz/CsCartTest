<?php /* Smarty version Smarty-3.1.21, created on 2018-10-28 00:26:09
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/buttons/sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7501091845bd4d7f147ebe3-46252544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da299c3804b84ed533b31ff07a02ee18ee087d0' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/buttons/sign_in.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7501091845bd4d7f147ebe3-46252544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd4d7f1489047_34528755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd4d7f1489047_34528755')) {function content_5bd4d7f1489047_34528755($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
