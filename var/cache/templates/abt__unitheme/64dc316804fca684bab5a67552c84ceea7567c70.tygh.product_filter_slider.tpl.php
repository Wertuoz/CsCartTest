<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:58:01
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/blocks/product_filters/components/product_filter_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7016591535c236cc99c3bc3-49974935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc316804fca684bab5a67552c84ceea7567c70' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/blocks/product_filters/components/product_filter_slider.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7016591535c236cc99c3bc3-49974935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'filter' => 0,
    'min' => 0,
    'max' => 0,
    'value' => 0,
    'filter_uid' => 0,
    'collapse' => 0,
    'extra_class' => 0,
    'left' => 0,
    'disable_slider' => 0,
    'right' => 0,
    'language_direction' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236cc9a698b7_03074430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236cc9a698b7_03074430')) {function content_5c236cc9a698b7_03074430($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_to_json')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.to_json.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/lib/jqueryuitouch/jquery.ui.touch-punch.min.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['min'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['min'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['max'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['max'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['left'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['left'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['right'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['right'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['disable_slider'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['disable'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
    <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['filter']->value['current_left']).((string)@constant('FILTERS_HASH_FEATURE_SEPARATOR')).((string)$_smarty_tpl->tpl_vars['filter']->value['current_right']), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['extra']) {?>
        <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['value']->value).((string)@constant('FILTERS_HASH_FEATURE_SEPARATOR')).((string)$_smarty_tpl->tpl_vars['filter']->value['extra']), null, 0);?>
    <?php }?>
<?php }?>

<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-product-filters-checkbox-container ty-price-slider <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <p class="ty-price-slider__inputs">
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text" class="ty-price-slider__input-text" id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_left" name="left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>

        </bdi>
        &nbsp;–&nbsp;
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text" class="ty-price-slider__input-text" id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_right" name="right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>

        </bdi>
    </p>
        <div id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-range-slider cm-range-slider">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value!="rtl") {?>
                        <span>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php } else { ?>
                        <span><bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];
echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php }?>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value!="rtl") {?>
                        <span>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php } else { ?>
                        <span><bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];
echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php }?>
                    </span>
                </li>
            </ul>
        </div>

        <input id="elm_checkbox_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>checked="checked"<?php }?> />

        
        <input type="hidden" id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_json" value='{
            "disabled": <?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['disable_slider']->value), ENT_QUOTES, 'ISO-8859-1');?>
,
            "min": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "max": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "left": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "right": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "step": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['round_to'], ENT_QUOTES, 'ISO-8859-1');?>
,
            "extra": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['extra'], ENT_QUOTES, 'ISO-8859-1');?>
"
        }' />
        
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_slider.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/product_filter_slider.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/jqueryuitouch/jquery.ui.touch-punch.min.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['min'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['min'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['max'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['max'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['left'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['left'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['right'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['right'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['disable_slider'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['disable'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
    <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['filter']->value['current_left']).((string)@constant('FILTERS_HASH_FEATURE_SEPARATOR')).((string)$_smarty_tpl->tpl_vars['filter']->value['current_right']), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['extra']) {?>
        <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['value']->value).((string)@constant('FILTERS_HASH_FEATURE_SEPARATOR')).((string)$_smarty_tpl->tpl_vars['filter']->value['extra']), null, 0);?>
    <?php }?>
<?php }?>

<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-product-filters-checkbox-container ty-price-slider <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <p class="ty-price-slider__inputs">
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text" class="ty-price-slider__input-text" id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_left" name="left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>

        </bdi>
        &nbsp;–&nbsp;
        <bdi class="ty-price-slider__bidi-container">
            <span class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
</span>
            <input type="text" class="ty-price-slider__input-text" id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_right" name="right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>

        </bdi>
    </p>
        <div id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-range-slider cm-range-slider">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value!="rtl") {?>
                        <span>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php } else { ?>
                        <span><bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];
echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php }?>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value!="rtl") {?>
                        <span>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];?>
<bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi><?php echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php } else { ?>
                        <span><bdi><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span></bdi>&lrm;<?php echo $_smarty_tpl->tpl_vars['filter']->value['prefix'];
echo $_smarty_tpl->tpl_vars['filter']->value['suffix'];?>
</span>
                        <?php }?>
                    </span>
                </li>
            </ul>
        </div>

        <input id="elm_checkbox_slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>checked="checked"<?php }?> />

        
        <input type="hidden" id="slider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'ISO-8859-1');?>
_json" value='{
            "disabled": <?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['disable_slider']->value), ENT_QUOTES, 'ISO-8859-1');?>
,
            "min": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "max": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "left": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "right": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'ISO-8859-1');?>
,
            "step": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['round_to'], ENT_QUOTES, 'ISO-8859-1');?>
,
            "extra": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['extra'], ENT_QUOTES, 'ISO-8859-1');?>
"
        }' />
        
</div>
<?php }?><?php }} ?>
