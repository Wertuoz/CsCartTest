<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:13:09
         compiled from "/srv/www/esportshop.ru/design/backend/templates/buttons/add_close.tpl" */ ?>
<?php /*%%SmartyHeaderCode:461900665c237055a6e095-58107400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da9b3130c4d565a96296545bc8b803d8fcc0adf' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/buttons/add_close.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '461900665c237055a6e095-58107400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disable_cancel' => 0,
    'is_js' => 0,
    'but_close_text' => 0,
    'but_close_onclick' => 0,
    'but_text' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c237055a80482_01610750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c237055a80482_01610750')) {function content_5c237055a80482_01610750($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('cancel'));
?>
<a class="cm-dialog-closer cm-cancel tool-link btn <?php if ($_smarty_tpl->tpl_vars['disable_cancel']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("cancel");?>
</a>
<?php if ($_smarty_tpl->tpl_vars['is_js']->value==true) {?>
    <?php ob_start();
if ($_smarty_tpl->tpl_vars['disable_cancel']->value) {?><?php echo "hidden";?><?php }
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_close_onclick']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items cm-dialog-closer btn-primary ".$_tmp1), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>'','but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_role'=>"submit",'but_meta'=>"cm-process-items btn-primary"), 0);?>

    <?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items btn-primary"), 0);?>

<?php }?><?php }} ?>
