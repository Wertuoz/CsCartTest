<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:57:26
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/common/sorting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13162578745c236ca6a956e8-59196815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb14c963c790b32912162261b041c3a5b1ced9d' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/common/sorting.tpl',
      1 => 1545825029,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13162578745c236ca6a956e8-59196815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'sorting' => 0,
    'option' => 0,
    'value' => 0,
    'sorting_orders' => 0,
    'sort_order' => 0,
    'class_pref' => 0,
    'avail_sorting' => 0,
    'sort_key' => 0,
    'sort_class' => 0,
    'ajax_class' => 0,
    'pagination_id' => 0,
    'curl' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236ca6af3bd2_44361971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236ca6af3bd2_44361971')) {function content_5c236ca6af3bd2_44361971($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('sort_by_','sort_by_','sort_by_','sort_by_'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-sort-dropdown">
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));?>
<i class="ty-sort-dropdown__icon ty-icon-down-micro"></i></a>
    <ul id="elm_sort_fields" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["option"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==$_smarty_tpl->tpl_vars['option']->value) {?>
                <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], null, 0);?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['default_order'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable("asc", null, 0);?>
                <?php }?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sort_order"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sorting_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sort_order"]->key => $_smarty_tpl->tpl_vars["sort_order"]->value) {
$_smarty_tpl->tpl_vars["sort_order"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']!=$_smarty_tpl->tpl_vars['option']->value||$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']==$_smarty_tpl->tpl_vars['sort_order']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_class"] = new Smarty_variable("sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["sort_key"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value||$_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value]=='Y') {?>
                        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 ty-sort-dropdown__content-item">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__so_seohide:sorting_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__so_seohide:sorting_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)."&abcd__update=Y"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__so_seohide:sorting_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </li>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php } ?>
    </ul>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-sort-dropdown">
    <a id="sw_elm_sort_fields" class="ty-sort-dropdown__wrapper cm-combination"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_by'])."_".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order']));?>
<i class="ty-sort-dropdown__icon ty-icon-down-micro"></i></a>
    <ul id="elm_sort_fields" class="ty-sort-dropdown__content cm-popup-box hidden">
        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["option"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==$_smarty_tpl->tpl_vars['option']->value) {?>
                <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], null, 0);?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['default_order']) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['default_order'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_variable("asc", null, 0);?>
                <?php }?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars["sort_order"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sort_order"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sorting_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sort_order"]->key => $_smarty_tpl->tpl_vars["sort_order"]->value) {
$_smarty_tpl->tpl_vars["sort_order"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']!=$_smarty_tpl->tpl_vars['option']->value||$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']==$_smarty_tpl->tpl_vars['sort_order']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["sort_class"] = new Smarty_variable("sort-by-".((string)$_smarty_tpl->tpl_vars['class_pref']->value).((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["sort_key"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['option']->value)."-".((string)$_smarty_tpl->tpl_vars['sort_order']->value), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['avail_sorting']->value||$_smarty_tpl->tpl_vars['avail_sorting']->value[$_smarty_tpl->tpl_vars['sort_key']->value]=='Y') {?>
                        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 ty-sort-dropdown__content-item">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__so_seohide:sorting_link")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__so_seohide:sorting_link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
 ty-sort-dropdown__content-item-a" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['curl']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['option']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['sort_order']->value)."&abcd__update=Y"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sort_by_".((string)$_smarty_tpl->tpl_vars['option']->value)."_".((string)$_smarty_tpl->tpl_vars['sort_order']->value));?>
</a>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__so_seohide:sorting_link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </li>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php } ?>
    </ul>
</div><?php }?><?php }} ?>