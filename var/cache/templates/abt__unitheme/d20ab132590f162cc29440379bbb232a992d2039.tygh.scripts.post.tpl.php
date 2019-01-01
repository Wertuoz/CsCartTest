<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:17
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/ab__search_motivation/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8544414925c236b710343c9-72366705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20ab132590f162cc29440379bbb232a992d2039' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/ab__search_motivation/hooks/index/scripts.post.tpl',
      1 => 1545824959,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8544414925c236b710343c9-72366705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search_phrases' => 0,
    'search_phrase' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b71053594_33248370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b71053594_33248370')) {function content_5c236b71053594_33248370($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['search_phrases'] = new Smarty_variable(fn_ab__search_motivation_get_phrases(''), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search_phrases']->value) {?>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__search_motivation/theater.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
(function (_, $) {
$.ceEvent('on', 'ce.commoninit', function(context) {
var input = $('#search_input',context);
if (input.length) {
var theaterForSearchBox = new TheaterJS();
theaterForSearchBox
.describe("SearchBox", .8, "#search_input")
<?php  $_smarty_tpl->tpl_vars['search_phrase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['search_phrase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_phrases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['search_phrase']->key => $_smarty_tpl->tpl_vars['search_phrase']->value) {
$_smarty_tpl->tpl_vars['search_phrase']->_loop = true;
?>
.write("SearchBox:<?php echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['search_phrase']->value), ENT_QUOTES, 'ISO-8859-1');?>
").write({
name: 'wait',
args: [2000]
})
<?php } ?>
.write(function () {
theaterForSearchBox.play(true);
});
input.removeClass('cm-hint').val('').attr('name', 'q');
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__search_motivation/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__search_motivation/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['search_phrases'] = new Smarty_variable(fn_ab__search_motivation_get_phrases(''), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search_phrases']->value) {?>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__search_motivation/theater.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
(function (_, $) {
$.ceEvent('on', 'ce.commoninit', function(context) {
var input = $('#search_input',context);
if (input.length) {
var theaterForSearchBox = new TheaterJS();
theaterForSearchBox
.describe("SearchBox", .8, "#search_input")
<?php  $_smarty_tpl->tpl_vars['search_phrase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['search_phrase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_phrases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['search_phrase']->key => $_smarty_tpl->tpl_vars['search_phrase']->value) {
$_smarty_tpl->tpl_vars['search_phrase']->_loop = true;
?>
.write("SearchBox:<?php echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['search_phrase']->value), ENT_QUOTES, 'ISO-8859-1');?>
").write({
name: 'wait',
args: [2000]
})
<?php } ?>
.write(function () {
theaterForSearchBox.play(true);
});
input.removeClass('cm-hint').val('').attr('name', 'q');
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}?><?php }} ?>
