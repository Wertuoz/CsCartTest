<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:14
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/tabsbox/abt__tabs_list.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16197467545c236b6e45b553-48541216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '092b002e8073a08e2af60a37f2d6b02935d8865a' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/hooks/tabsbox/abt__tabs_list.override.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16197467545c236b6e45b553-48541216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'navigation' => 0,
    'grid' => 0,
    'content' => 0,
    'top_order_actions' => 0,
    'track' => 0,
    'tabs_section' => 0,
    'tab' => 0,
    'key' => 0,
    'empty_tab_ids' => 0,
    'active_tab' => 0,
    '_tabs' => 0,
    'onclick' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b6e51d031_99578629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b6e51d031_99578629')) {function content_5c236b6e51d031_99578629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_empty_tabs')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.empty_tabs.php';
if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_in_array')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']||$_smarty_tpl->tpl_vars['navigation']->value[$_smarty_tpl->tpl_vars['grid']->value['grid_id']]) {?>
<?php $_smarty_tpl->tpl_vars["empty_tab_ids"] = new Smarty_variable(smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['top_order_actions']->value) {
echo $_smarty_tpl->tpl_vars['top_order_actions']->value;
}?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="ty-tabs cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>cm-j-tabs-disable-convertation<?php }?> clearfix">
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>
        <ul class="ty-tabs__list">
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value[$_smarty_tpl->tpl_vars['grid']->value['grid_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
            <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value&&!$_smarty_tpl->tpl_vars['tab']->value['section'])||($_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section']))&&!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)&&strpos($_smarty_tpl->tpl_vars['key']->value,'ab__grid_tab')!==false) {?>
            <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
                <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(true, null, 0);?>
            <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-block="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['block'], ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']) {?>ab__grid_tabs <?php }?>ty-tabs__item<?php if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?> cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?> cm-js cm-ajax<?php }
if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>"><a class="ty-tabs__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    <?php } else { ?>
        <ul class="ty-tabs__list" <?php if ($_smarty_tpl->tpl_vars['tabs_section']->value) {?>id="tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
            <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value&&!$_smarty_tpl->tpl_vars['tab']->value['section'])||($_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section']))&&!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)) {?>
            <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
                <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(true, null, 0);?>
            <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-tabs__item<?php if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?> cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?> cm-js cm-ajax<?php }
if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>"><a class="ty-tabs__a" <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['_tabs']->value) {?>
<div class="cm-tabs-content ty-tabs__content clearfix<?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?> cm-j-content-disable-convertation<?php }?>"<?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']!='Y') {?> id="tabs_content"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
    var hndl = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

        'tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'ISO-8859-1');?>
': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

<?php echo '</script'; ?>
>
<?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/hooks/tabsbox/abt__tabs_list.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/hooks/tabsbox/abt__tabs_list.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']||$_smarty_tpl->tpl_vars['navigation']->value[$_smarty_tpl->tpl_vars['grid']->value['grid_id']]) {?>
<?php $_smarty_tpl->tpl_vars["empty_tab_ids"] = new Smarty_variable(smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['top_order_actions']->value) {
echo $_smarty_tpl->tpl_vars['top_order_actions']->value;
}?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="ty-tabs cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>cm-j-tabs-disable-convertation<?php }?> clearfix">
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?>
        <ul class="ty-tabs__list">
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value[$_smarty_tpl->tpl_vars['grid']->value['grid_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
            <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value&&!$_smarty_tpl->tpl_vars['tab']->value['section'])||($_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section']))&&!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)&&strpos($_smarty_tpl->tpl_vars['key']->value,'ab__grid_tab')!==false) {?>
            <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
                <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(true, null, 0);?>
            <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-block="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['block'], ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']) {?>ab__grid_tabs <?php }?>ty-tabs__item<?php if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?> cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?> cm-js cm-ajax<?php }
if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>"><a class="ty-tabs__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    <?php } else { ?>
        <ul class="ty-tabs__list" <?php if ($_smarty_tpl->tpl_vars['tabs_section']->value) {?>id="tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
            <?php if (((!$_smarty_tpl->tpl_vars['tabs_section']->value&&!$_smarty_tpl->tpl_vars['tab']->value['section'])||($_smarty_tpl->tpl_vars['tabs_section']->value==$_smarty_tpl->tpl_vars['tab']->value['section']))&&!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value)) {?>
            <?php if (!$_smarty_tpl->tpl_vars['active_tab']->value) {?>
                <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars["_tabs"] = new Smarty_variable(true, null, 0);?>
            <li id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-tabs__item<?php if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?> cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?> cm-js cm-ajax<?php }
if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?>"><a class="ty-tabs__a" <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['_tabs']->value) {?>
<div class="cm-tabs-content ty-tabs__content clearfix<?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']=='Y') {?> cm-j-content-disable-convertation<?php }?>"<?php if ($_smarty_tpl->tpl_vars['grid']->value['ab__show_in_tabs']!='Y') {?> id="tabs_content"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
    var hndl = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

        'tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabs_section']->value, ENT_QUOTES, 'ISO-8859-1');?>
': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['onclick']->value, ENT_QUOTES, 'ISO-8859-1');?>

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

<?php echo '</script'; ?>
>
<?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}?><?php }} ?>
