<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:49:22
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15819310255c236ac2da6625-09797872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'decbeef8b051087b8eba0915b20419b6d3f3fd64' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl',
      1 => 1545824885,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15819310255c236ac2da6625-09797872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236ac2dd3845_15703869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236ac2dd3845_15703869')) {function content_5c236ac2dd3845_15703869($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.inline_script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/ab__stt_admin.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/jquery.minicolors.js"),$_smarty_tpl);?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['show_in_admin_panel'])===null||$tmp==='' ? "N" : $tmp)=="Y") {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
$(document).ready(function(){
var scroll_height = 100;
var position = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['position'])===null||$tmp==='' ? "bottom_right" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
';
var hide_on_mobile = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['hide_on_mobile'])===null||$tmp==='' ? "N" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
';
var css_arrow = {
'font-size': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_size']))===null||$tmp==='' ? 64 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'font-weight': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_weight'])===null||$tmp==='' ? 'normal' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
',
'color': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['ab__stt_color'])===null||$tmp==='' ? '#000' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
',
};
var css_block = {
'margin-top': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_top']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-right': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_right']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-bottom':'<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_bottom']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'margin-left': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_left']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
px',
'display': 'none',
};
switch (position){
case 'top_right': css_block.top = 0; css_block.right = 0; break;
case 'top_left': css_block.top = 0; css_block.left = 0; break;
case 'bottom_right':css_block.bottom = 0; css_block.right = 0; break;
case 'bottom_left': css_block.bottom = 0; css_block.left = 0; break;
}
if ($(window).scrollTop() > scroll_height) css_block.display = 'block';
if (!$.isMobile() || hide_on_mobile != 'Y') {
$('body').append('<div class="ab__scroll_to_top_button"><span class="ab__stt-' + '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['icon'])===null||$tmp==='' ? "arrow_1" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
' + '"></span></div>');
$('div.ab__scroll_to_top_button').css(css_block).find('span').css(css_arrow);
}
$(window).scroll(function () {
if ($(this).scrollTop() > scroll_height) $('.ab__scroll_to_top_button').fadeIn();
else $('.ab__scroll_to_top_button').fadeOut();
});
$(document).on('click', 'div.ab__scroll_to_top_button', function() {
$("html, body").animate( { scrollTop: 0 } , 600);
return false;
});
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
