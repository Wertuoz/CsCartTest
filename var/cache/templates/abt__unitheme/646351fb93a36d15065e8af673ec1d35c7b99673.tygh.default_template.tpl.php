<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:45
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/product_templates/default_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:907918705c236c7dca10b9-19843981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646351fb93a36d15065e8af673ec1d35c7b99673' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/blocks/product_templates/default_template.tpl',
      1 => 1545825029,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '907918705c236c7dca10b9-19843981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'hide_title' => 0,
    'no_images' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'settings' => 0,
    'discount_label' => 0,
    'form_open' => 0,
    'rating' => 0,
    'discussion' => 0,
    'sku' => 0,
    'old_price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'price' => 0,
    'product_amount' => 0,
    'capture_options_vs_qty' => 0,
    'product_options' => 0,
    'advanced_options' => 0,
    'product_edp' => 0,
    'qty' => 0,
    'min_qty' => 0,
    'capture_buttons' => 0,
    'show_details_button' => 0,
    'add_to_cart' => 0,
    'list_buttons' => 0,
    'show_features' => 0,
    'show_descr' => 0,
    'prod_descr' => 0,
    'addons' => 0,
    'hide_wishlist_button' => 0,
    'hide_compare_list_button' => 0,
    'compare_product_id' => 0,
    'provider_settings' => 0,
    'form_close' => 0,
    'show_product_tabs' => 0,
    'tabs_block_id' => 0,
    'blocks' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c7dec1b49_42399488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c7dec1b49_42399488')) {function content_5c236c7dec1b49_42399488($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_live_edit')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_modifier_enum')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_render_block')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.render_block.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('add_to_cart','reviews','write_review','write_review','view_details','share','add_to_cart','reviews','write_review','write_review','view_details','share'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<div class="ty-product-block ty-product-detail">
    <div class="row-fluid  ty-product-block__wrapper clearfix">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

            <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                <h1 class="ty-product-block-title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart")), 0);?>

            <div class="span7 ty-product-block__img-wrapper">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                    <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
                         id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_update">

                        <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']||fn_abt__ut_check_ab__vg($_smarty_tpl->tpl_vars['product']->value['product_id'])) {?>
                            <div class="<?php if (count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])>5) {?>active-gallery <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>two-col<?php }
} else { ?>active-gallery <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>one-col<?php }
}?>">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                            </div>
                        <?php } else { ?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                        <?php }?>

                        <div class="<?php if (count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])>5&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>two-col<?php } else {
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>one-col<?php }
}?>"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>"Y",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']), 0);?>
</div>
                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_update--></div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="span9 ty-product-block__left">

                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                

                <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
                    <div class="advanced-layer-01">
                        <div class="ty-product-block__rating">
                            <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']&&$_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']>0) {?> 
                                <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
<a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?>
                                </div>
                            <?php } else { ?>
                                <div class="ty-discussion__rating-wrapper">
                                    <span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?>
                                </div>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
		                    <div class="ty-product-block__sku">
			                    <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
			                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

			                </div>
		                <?php }?>
	                </div>
					<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
	                <div class="advanced-layer-01 ty-product-block__sku">
	                    <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
	                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

	                </div>
                <?php }?>

                <div class="show_info_block_in_product"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__deal_of_the_day_product_view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>

                <div class="row-fluid">
                    <div class="span8 ty-product-options-grid">

                        <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                            <div class="ty-product-prices">
                                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>
                                <?php }?>

                                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value])) {?>
                                    <div class="ty-product-block__price-actual">
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                                    </div>
                                <?php }?>

                                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                            </div>
                            <?php }?>
                        </div>
                        <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <div class="ty-product-block__option">
                            <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <div class="ty-product-block__advanced-option clearfix">
                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                            <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                        </div>

                        <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <div class="ty-product-block__field-group">
                            <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php if (Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]&&!$_smarty_tpl->tpl_vars['product']->value['prices']) {?>
                                <div class="block-qty-grid"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php } else { ?>
                                <div class="block-qty-grid"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?>

                            <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                        <div class="ty-product-block__button">
                            <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0);?>

                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                            <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
                            <?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_features_in_product']['value']=='Y') {?>
                                <div class="ty-product-list__feature" style="margin-top: 20px">
                                    <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_features']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features'],'no_container'=>true), 0);?>

                                        <!--dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>

                    <div class="span8 advanced-layer-02">

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:change_product_ft_ds")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:change_product_ft_ds"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']=='') {?>
                            <div class="ty-product-block__sku">
                                <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']=='') {?>
                            <?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_features_in_product']['value']=='Y') {?>
                                <div class="ty-product-list__feature" style="margin-top: 20px">
                                    <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_features']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features'],'no_container'=>true), 0);?>

                                        <!--dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                </div>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['show_descr']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_short_desc_in_product']['value']=='Y') {?>
                            <noindex>
                                <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                            </noindex>
                        <?php }?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:change_product_ft_ds"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
                            <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                        <?php }?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:promo_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                            <div class="ty-product-block__note">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                            </div>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:promo_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        
                    </div>
                </div>

                <!-- List/Advanced buttons -->
                <div class="advanced-buttons">

                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);?>

                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['compare_product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:buy_now")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:buy_now"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['compare_product_id']->value), 0);?>

                    <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:buy_now"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:share_view_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:share_view_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['provider_settings']->value) {?>
                        <a class="ty-btn share-link" onclick="$(this).next().toggleClass('hidden');"><i class="uni-share"></i><?php echo $_smarty_tpl->__("share");?>
</a>
                    <?php }?>
                        <div class="sb-block hidden"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_bottom")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:share_view_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </div>
                <!-- END List/Advanced buttons -->

                <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo Smarty::$_smarty_vars['capture']['popupsbox_content'];?>

                <?php }?>
            </div>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
    <?php }?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_btg")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_btg"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_btg"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox_content'],'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0);?>

        <?php } else { ?>
            <?php echo Smarty::$_smarty_vars['capture']['tabsbox_content'];?>

        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
</div>

<div class="product-details">
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
$_smarty_tpl->tpl_vars["details_page"] = new Smarty_variable(true, null, 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/default_template.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/default_template.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<div class="ty-product-block ty-product-detail">
    <div class="row-fluid  ty-product-block__wrapper clearfix">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

            <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                <h1 class="ty-product-block-title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart")), 0);?>

            <div class="span7 ty-product-block__img-wrapper">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                    <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
                         id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_update">

                        <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']||fn_abt__ut_check_ab__vg($_smarty_tpl->tpl_vars['product']->value['product_id'])) {?>
                            <div class="<?php if (count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])>5) {?>active-gallery <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>two-col<?php }
} else { ?>active-gallery <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>one-col<?php }
}?>">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                            </div>
                        <?php } else { ?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['discount_label']->value];?>

                        <?php }?>

                        <div class="<?php if (count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])>5&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>two-col<?php } else {
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>one-col<?php }
}?>"><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>"Y",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']), 0);?>
</div>
                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_update--></div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="span9 ty-product-block__left">

                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["discount_label"] = new Smarty_variable("discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                

                <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
                    <div class="advanced-layer-01">
                        <div class="ty-product-block__rating">
                            <?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']&&$_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']>0) {?> 
                                <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
<a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?>
                                </div>
                            <?php } else { ?>
                                <div class="ty-discussion__rating-wrapper">
                                    <span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']!==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")&&!$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0);
}?>
                                </div>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
		                    <div class="ty-product-block__sku">
			                    <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
			                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

			                </div>
		                <?php }?>
	                </div>
					<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
	                <div class="advanced-layer-01 ty-product-block__sku">
	                    <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
	                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

	                </div>
                <?php }?>

                <div class="show_info_block_in_product"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__deal_of_the_day_product_view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>

                <div class="row-fluid">
                    <div class="span8 ty-product-options-grid">

                        <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                            <div class="ty-product-prices">
                                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>
                                <?php }?>

                                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value])) {?>
                                    <div class="ty-product-block__price-actual">
                                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                                    </div>
                                <?php }?>

                                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                            </div>
                            <?php }?>
                        </div>
                        <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <div class="ty-product-block__option">
                            <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <div class="ty-product-block__advanced-option clearfix">
                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                            <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                        </div>

                        <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <div class="ty-product-block__field-group">
                            <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php if (Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value]&&!$_smarty_tpl->tpl_vars['product']->value['prices']) {?>
                                <div class="block-qty-grid"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php } else { ?>
                                <div class="block-qty-grid"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?>

                            <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                        <div class="ty-product-block__button">
                            <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0);?>

                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                            <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
                            <?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_features_in_product']['value']=='Y') {?>
                                <div class="ty-product-list__feature" style="margin-top: 20px">
                                    <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_features']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features'],'no_container'=>true), 0);?>

                                        <!--dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>

                    <div class="span8 advanced-layer-02">

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:change_product_ft_ds")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:change_product_ft_ds"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']=='') {?>
                            <div class="ty-product-block__sku">
                                <?php $_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']=='') {?>
                            <?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_features_in_product']['value']=='Y') {?>
                                <div class="ty-product-list__feature" style="margin-top: 20px">
                                    <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" id="dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                                        <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_features']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
                                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features'],'no_container'=>true), 0);?>

                                        <!--dt_product_features_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
                                </div>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['show_descr']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_short_desc_in_product']['value']=='Y') {?>
                            <noindex>
                                <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                                <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                            </noindex>
                        <?php }?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:change_product_ft_ds"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value']>0) {?>
                            <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['settings']->value['abt__unitheme']['show_block_in_product']['value'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                        <?php }?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:promo_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                            <div class="ty-product-block__note">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                            </div>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:promo_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                        
                    </div>
                </div>

                <!-- List/Advanced buttons -->
                <div class="advanced-buttons">

                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);?>

                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['compare_product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:buy_now")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:buy_now"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['compare_product_id']->value), 0);?>

                    <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:buy_now"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:share_view_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:share_view_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['provider_settings']->value) {?>
                        <a class="ty-btn share-link" onclick="$(this).next().toggleClass('hidden');"><i class="uni-share"></i><?php echo $_smarty_tpl->__("share");?>
</a>
                    <?php }?>
                        <div class="sb-block hidden"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_bottom")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:share_view_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </div>
                <!-- END List/Advanced buttons -->

                <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>


                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo Smarty::$_smarty_vars['capture']['popupsbox_content'];?>

                <?php }?>
            </div>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
    <?php }?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_btg")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_btg"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_btg"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox_content'],'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0);?>

        <?php } else { ?>
            <?php echo Smarty::$_smarty_vars['capture']['tabsbox_content'];?>

        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
</div>

<div class="product-details">
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
$_smarty_tpl->tpl_vars["details_page"] = new Smarty_variable(true, null, 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
