<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:49:21
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__addons_manager/views/ab__am/components/install_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3292743185c236ac10d6b95-35661658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac50382108df14176ef1482a410125590b94c85b' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__addons_manager/views/ab__am/components/install_form.tpl',
      1 => 1545824644,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3292743185c236ac10d6b95-35661658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236ac10de738_83466594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236ac10de738_83466594')) {function content_5c236ac10de738_83466594($_smarty_tpl) {?><div class="sidebar-row sidebar-ab">
<h6><?php echo $_smarty_tpl->__('ab__am_install_addon');?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" name="ab_install_form" method="post">
<input type="hidden" name="dispatch" value="ab__am.install" />
<div class="sidebar-field">
<label class="cm-required" for="ab_code"><?php echo $_smarty_tpl->__('ab__am_install_code');?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__('ab__am_install_code_tooltip')), 0);?>
</label>
<input type="text" id="ab_code" size="20" value="" onfocus="this.select();" class="input-text" name="ab_code" />
</div>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__('ab__am_install_addon'),'but_id'=>"ab_install",'but_role'=>"submit"), 0);?>

</form>
<span class="info"><?php echo $_smarty_tpl->__('ab__am_install_info');?>
</span>
</div><?php }} ?>
