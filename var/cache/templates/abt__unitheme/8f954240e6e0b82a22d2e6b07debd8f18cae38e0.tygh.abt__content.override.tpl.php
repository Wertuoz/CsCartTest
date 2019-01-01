<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:02
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/grid/abt__content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17815995495c236b628d3f94-95510996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f954240e6e0b82a22d2e6b07debd8f18cae38e0' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/grid/abt__content.override.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17815995495c236b628d3f94-95510996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'grid' => 0,
    'layout_data' => 0,
    'fluid_width' => 0,
    'width' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b62921604_63840315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b62921604_63840315')) {function content_5c236b62921604_63840315($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['grid']->value['parent_id']==0) {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="container-fluid-row<?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="E") {?> container-fluid-row-full-width<?php }
if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="F") {?> container-fluid-row-no-limit<?php }
if ($_smarty_tpl->tpl_vars['grid']->value['extended']!="O") {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}?>"><?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
    <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
    <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']!="E"&&$_smarty_tpl->tpl_vars['grid']->value['extended']!="F") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['parent_id']==0) {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/grid/abt__content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/grid/abt__content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['grid']->value['parent_id']==0) {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="container-fluid-row<?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="E") {?> container-fluid-row-full-width<?php }
if ($_smarty_tpl->tpl_vars['grid']->value['extended']=="F") {?> container-fluid-row-no-limit<?php }
if ($_smarty_tpl->tpl_vars['grid']->value['extended']!="O") {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}?>"><?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
    <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
    <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['grid']->value['extended']!="E"&&$_smarty_tpl->tpl_vars['grid']->value['extended']!="F") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['parent_id']==0) {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
<?php }?>
<?php }?><?php }} ?>
