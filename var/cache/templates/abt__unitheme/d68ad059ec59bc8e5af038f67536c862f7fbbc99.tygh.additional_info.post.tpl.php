<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:15
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/hooks/products/additional_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20239312505c236b6f174e80-45798124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd68ad059ec59bc8e5af038f67536c862f7fbbc99' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__deal_of_the_day/hooks/products/additional_info.post.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20239312505c236b6f174e80-45798124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b6f196ff0_19316160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b6f196ff0_19316160')) {function content_5c236b6f196ff0_19316160($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['ab__show_promos']=='Y'&&smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions'])>0) {?>
    <div class="ab-ut-category-promo-actions-info ab-dotd-promos" data-abt-dotd-promotions-id="<?php echo htmlspecialchars(implode(',',(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))), ENT_QUOTES, 'ISO-8859-1');?>
">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['promotions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li class="ab-dotd-category-promo promo-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'ISO-8859-1');?>
"></li>
            <?php } ?>
        </ul>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/products/additional_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/products/additional_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['ab__show_promos']=='Y'&&smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions'])>0) {?>
    <div class="ab-ut-category-promo-actions-info ab-dotd-promos" data-abt-dotd-promotions-id="<?php echo htmlspecialchars(implode(',',(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))), ENT_QUOTES, 'ISO-8859-1');?>
">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['promotions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li class="ab-dotd-category-promo promo-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'ISO-8859-1');?>
"></li>
            <?php } ?>
        </ul>
    </div>
<?php }?>
<?php }?><?php }} ?>
