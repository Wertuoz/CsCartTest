<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:58:00
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/blocks/abt_advanced_subcategories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11615168935c236cc8c2d9e9-11940155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be0e6ec8fcf808dd2dcdf422356ae2f9f504dfbd' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/abt__unitheme/blocks/abt_advanced_subcategories_menu.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11615168935c236cc8c2d9e9-11940155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'abt_subcategories' => 0,
    'category' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236cc8c58a98_21644060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236cc8c58a98_21644060')) {function content_5c236cc8c58a98_21644060($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['abt_subcategories']->value) {?>
    <ul class="subcategories clearfix">
        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abt_subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id']==$_REQUEST['category_id']) {?>
                <li class="ty-subcategories__current_item">
                    <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                </li>
            <?php } else { ?>
                <li class="ty-subcategories__item">
                    <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                        <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                    </a>
                </li>
            <?php }?>
        <?php } ?>
    </ul>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme/blocks/abt_advanced_subcategories_menu.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme/blocks/abt_advanced_subcategories_menu.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['abt_subcategories']->value) {?>
    <ul class="subcategories clearfix">
        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abt_subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_id']==$_REQUEST['category_id']) {?>
                <li class="ty-subcategories__current_item">
                    <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                </li>
            <?php } else { ?>
                <li class="ty-subcategories__item">
                    <a href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
">
                        <span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                    </a>
                </li>
            <?php }?>
        <?php } ?>
    </ul>
<?php }
}?><?php }} ?>