<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 00:52:23
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/addons/components/addon_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16228123195c25499732cd96-37283498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a82765cc3cbedd86e8f216716195958a16c6057' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/addons/components/addon_info.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16228123195c25499732cd96-37283498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_version' => 0,
    'addon_supplier' => 0,
    'addon_supplier_link' => 0,
    'addon_install_datetime' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c25499733a9f4_60102315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c25499733a9f4_60102315')) {function content_5c25499733a9f4_60102315($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('version'));
?>
<div class="addon-info pull-left">
    <small class="muted addon-version"><?php echo $_smarty_tpl->__("version");?>
 <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addon_version']->value)===null||$tmp==='' ? 0.1 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</small>
    <?php if ($_smarty_tpl->tpl_vars['addon_supplier']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['addon_supplier_link']->value) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_supplier_link']->value, ENT_QUOTES, 'ISO-8859-1');?>
" target="_blank" class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_supplier']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
        <?php } else { ?>
            <small class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_supplier']->value, ENT_QUOTES, 'ISO-8859-1');?>
</small>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value) {?>
        <small class="muted addon-installed-date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['addon_install_datetime']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'ISO-8859-1');?>
</small>
    <?php }?>
</div><?php }} ?>
