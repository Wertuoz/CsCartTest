<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:58:58
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__advanced_banners/views/ab__ab/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3968636155c255932cfa519-55018031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124d23962c917b42390c0d12eecd30ed448e8990' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__advanced_banners/views/ab__ab/help.tpl',
      1 => 1545824899,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3968636155c255932cfa519-55018031',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c255932d178b2_50816895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c255932d178b2_50816895')) {function content_5c255932d178b2_50816895($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('ab__ab.help','ab__advanced_banners'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->__("ab__ab.help");?>
 <?php echo $_smarty_tpl->__("ab__advanced_banners");?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php ob_start();
echo $_smarty_tpl->__('ab__ab.help.installation_completion.title');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>'','title'=>$_tmp1,'target'=>"#ab__ab_help_installation_completion"), 0);?>

<div id="ab__ab_help_installation_completion" class="in collapse" style="padding: 0 20px"><?php echo $_smarty_tpl->__('ab__ab.help.installation_completion.text');?>
</div>

<?php ob_start();
echo $_smarty_tpl->__('ab__ab.help.create_banner.title');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>'','title'=>$_tmp2,'target'=>"#ab__ab_help_create_banner"), 0);?>

<div id="ab__ab_help_create_banner" class="in collapse" style="padding: 0 20px"><?php echo $_smarty_tpl->__('ab__ab.help.create_banner.text');?>
</div>

<?php ob_start();
echo $_smarty_tpl->__('ab__ab.help.show_banner.title');
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>'','title'=>$_tmp3,'target'=>"#ab__ab_help_show_banner"), 0);?>

<div id="ab__ab_help_show_banner" class="in collapse" style="padding: 0 20px"><?php echo $_smarty_tpl->__('ab__ab.help.show_banner.text');?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
