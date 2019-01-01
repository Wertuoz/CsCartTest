<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 00:52:23
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__scroll_to_top/settings/color.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10537868815c254997147b95-38827822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6645e72080650d925af5b7448c2ddb51bb5f621' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__scroll_to_top/settings/color.tpl',
      1 => 1545824885,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10537868815c254997147b95-38827822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c25499714ad88_46840814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c25499714ad88_46840814')) {function content_5c25499714ad88_46840814($_smarty_tpl) {?><div id="container_addon_option_ab__scroll_to_top_color" class="control-group setting-wide ab__scroll_to_top">
<label class="control-label cm-color" for="addon_option_ab__scroll_to_top_color"><?php echo $_smarty_tpl->__('ab__stt.color');?>
</label>
<div class="controls">
<input class="cm-ab-stt-colorpicker" style="font-family: monospace;" type="text" name="addon_data[ab__scroll_to_top][ab__stt_color]" id="addon_option_ab__scroll_to_top_color" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['ab__stt_color'], ENT_QUOTES, 'ISO-8859-1');?>
"/>
</div>
</div>
<?php }} ?>
