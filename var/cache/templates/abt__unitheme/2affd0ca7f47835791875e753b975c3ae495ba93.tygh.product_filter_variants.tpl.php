<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:58:01
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/product_filters/components/product_filter_variants.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10933630495c236cc95a3811-11937778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2affd0ca7f47835791875e753b975c3ae495ba93' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/product_filters/components/product_filter_variants.tpl',
      1 => 1545825029,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10933630495c236cc95a3811-11937778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'collapse' => 0,
    'filter_uid' => 0,
    'filter' => 0,
    'variant' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236cc9625f38_43119608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236cc9625f38_43119608')) {function content_5c236cc9625f38_43119608($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_count')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('search','clear','no_items_found','search','clear','no_items_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:ab__cf_variants")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']&&smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
    <li>
        <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


        <div class="ty-product-filters__search">
        <input type="text" placeholder="<?php echo $_smarty_tpl->__("search");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="" />
        <i class="ty-product-filters__search-icon ty-icon-cancel-circle hidden" id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("clear");?>
"></i>
        </div>
    </li>
    <?php }?>


    
    <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_smarty_tpl->tpl_vars["variant_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['selected_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
 $_smarty_tpl->tpl_vars["variant_id"]->value = $_smarty_tpl->tpl_vars["variant"]->key;
?>
        <li class="cm-product-filters-checkbox-container ty-product-filters__group">
            <input class="cm-product-filters-checkbox" type="checkbox" name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" checked="checked"><label for="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
        </li>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
        <li class="ty-product-filters__item-more">
            <ul id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['display_count']*25, ENT_QUOTES, 'ISO-8859-1');?>
px;"<?php }?> class="ty-product-filters__variants <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>items-more <?php }?>cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

                <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                    <input class="cm-product-filters-checkbox" type="checkbox" name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?>disabled="disabled"<?php }?>><label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?>class="disabled"<?php }?> for="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
                </li>
                <?php } ?>
            </ul>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
            <a class="ty-more-btn" onclick="$(this).prev().addClass('none-overflow'); $(this).remove();"><?php echo $_smarty_tpl->__('more');?>
 <i class="uni-bottom-sight"></i></a>
            <?php }?>
            <p id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_variants.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/product_filter_variants.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:ab__cf_variants")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']&&smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
    <li>
        <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


        <div class="ty-product-filters__search">
        <input type="text" placeholder="<?php echo $_smarty_tpl->__("search");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="" />
        <i class="ty-product-filters__search-icon ty-icon-cancel-circle hidden" id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo $_smarty_tpl->__("clear");?>
"></i>
        </div>
    </li>
    <?php }?>


    
    <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_smarty_tpl->tpl_vars["variant_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['selected_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
 $_smarty_tpl->tpl_vars["variant_id"]->value = $_smarty_tpl->tpl_vars["variant"]->key;
?>
        <li class="cm-product-filters-checkbox-container ty-product-filters__group">
            <input class="cm-product-filters-checkbox" type="checkbox" name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" checked="checked"><label for="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
        </li>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
        <li class="ty-product-filters__item-more">
            <ul id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['display_count']*25, ENT_QUOTES, 'ISO-8859-1');?>
px;"<?php }?> class="ty-product-filters__variants <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>items-more <?php }?>cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

                <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                    <input class="cm-product-filters-checkbox" type="checkbox" name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?>disabled="disabled"<?php }?>><label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?>class="disabled"<?php }?> for="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
                </li>
                <?php } ?>
            </ul>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
            <a class="ty-more-btn" onclick="$(this).prev().addClass('none-overflow'); $(this).remove();"><?php echo $_smarty_tpl->__('more');?>
 <i class="uni-bottom-sight"></i></a>
            <?php }?>
            <p id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
