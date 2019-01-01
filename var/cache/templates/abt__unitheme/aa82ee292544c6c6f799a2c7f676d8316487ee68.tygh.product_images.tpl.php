<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:48
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:384077455c236c805abb93-27646939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa82ee292544c6c6f799a2c7f676d8316487ee68' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '384077455c236c805abb93-27646939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'thumbnails_size' => 0,
    'addons' => 0,
    'product' => 0,
    'image_pair_var' => 0,
    'preview_id' => 0,
    'settings' => 0,
    'image_id' => 0,
    'ab__vg_videos' => 0,
    'ab__vg_settings' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'image_pair' => 0,
    'img_id' => 0,
    'ab__video_width' => 0,
    'ab__video_height' => 0,
    'video' => 0,
    'images_dir' => 0,
    'th_size' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c80783346_27842205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c80783346_27842205')) {function content_5c236c80783346_27842205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnails_size']->value)===null||$tmp==='' ? 50 : $tmp), null, 0);?>
<?php ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['controls']=='N') {?><?php echo "0";?><?php } else { ?><?php echo "1";?><?php }
$_tmp1=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['repeat']=='N') {?><?php echo "0";?><?php } else { ?><?php echo "1";?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["player_params"] = new Smarty_variable("rel=0&controls=".$_tmp1."&loop=".$_tmp2."&enablejsapi=1&version=3&autoplay=1", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon']||$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'], null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["preview_id"] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['ab__vg_settings'] = new Smarty_variable(fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<div class="ty-product-img cm-preview-wrapper" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>style="display:inline-block"<?php }?>>
    <?php ob_start();
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y') {?><?php echo " hidden";?><?php }
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer".$_tmp3,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

    
    <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='image_replace') {?>
            <?php $_smarty_tpl->tpl_vars['ab__video_width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['ab__video_height'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ab__video_width']->value : $tmp)*3/ceil(4), null, 0);?>
            <?php if (!$_smarty_tpl->tpl_vars['ab__video_width']->value) {?>
                <?php $_smarty_tpl->tpl_vars['ab__video_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['ab__video_height']->value*4/ceil(3), null, 0);?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?>
                <div id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
                     class="ab__vg_loading ab__vg-image_gallery_video cm-image-previewer<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y'||$_smarty_tpl->tpl_vars['video']->iteration>1) {?> hidden<?php }?>"
                     data-width="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                     data-height="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                     data-src="<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/build_url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('youtube_id'=>$_smarty_tpl->tpl_vars['video']->value['youtube_id']), 0);?>
"
                     data-frameborder="0" data-allowfullscreen="1">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp),'height'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp)), 0);?>

                </div>
            <?php } ?>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='open_popup') {?>
                <a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_video cm-image-previewer<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='open_popup') {?> cm-dialog-opener cm-dialog-auto-size<?php }
if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y'||$_smarty_tpl->tpl_vars['video']->iteration>1) {?> hidden<?php }?>" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">
                    <?php $_smarty_tpl->createLocalArrayVariable('video', null, 0);
$_smarty_tpl->tpl_vars['video']->value['icon_type'] = 'snapshot';?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp),'height'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp)), 0);?>

                </a>
            <?php }?>
            <div id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-popup-box hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <div style="<?php if ($_smarty_tpl->tpl_vars['video']->value['width']) {?>width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
px;<?php }
if ($_smarty_tpl->tpl_vars['video']->value['height']) {?>height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['height'], ENT_QUOTES, 'ISO-8859-1');?>
px<?php }?>"
                     <?php if ($_smarty_tpl->tpl_vars['video']->value['width']) {?>data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['video']->value['height']) {?>data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['height'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ab__vg_loading" data-src="<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/build_url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('youtube_id'=>$_smarty_tpl->tpl_vars['video']->value['youtube_id']), 0);?>
" data-frameborder="0" data-allowfullscreen="1">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp),'height'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp)), 0);?>

                </div>
            </div>
        <?php } ?>
    <?php }?>
    <p class="ty-center"><small style="color:#999;"><?php echo $_smarty_tpl->__('hover_to_enlarge');?>
</small></p>
</div>
<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']||$_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="Y") {?>
        <input type="hidden" name="no_cache" value="1"/>
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery"><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-item-gallery cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a></div><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
px"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery ty-float-left"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a></div><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-item-gallery cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a></div><?php }
}?></div>
                </div>
            </div>
        
    <?php } else { ?>
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'ISO-8859-1');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
"class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']==0) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a><?php }
}?>
        </div>
    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_images")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['thumbnails_size']->value)===null||$tmp==='' ? 50 : $tmp), null, 0);?>
<?php ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['controls']=='N') {?><?php echo "0";?><?php } else { ?><?php echo "1";?><?php }
$_tmp4=ob_get_clean();?><?php ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['repeat']=='N') {?><?php echo "0";?><?php } else { ?><?php echo "1";?><?php }
$_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["player_params"] = new Smarty_variable("rel=0&controls=".$_tmp4."&loop=".$_tmp5."&enablejsapi=1&version=3&autoplay=1", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon']||$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'], null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["preview_id"] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['ab__vg_settings'] = new Smarty_variable(fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<div class="ty-product-img cm-preview-wrapper" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {?>style="display:inline-block"<?php }?>>
    <?php ob_start();
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y') {?><?php echo " hidden";?><?php }
$_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer".$_tmp6,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

    
    <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='image_replace') {?>
            <?php $_smarty_tpl->tpl_vars['ab__video_width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['ab__video_height'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ab__video_width']->value : $tmp)*3/ceil(4), null, 0);?>
            <?php if (!$_smarty_tpl->tpl_vars['ab__video_width']->value) {?>
                <?php $_smarty_tpl->tpl_vars['ab__video_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['ab__video_height']->value*4/ceil(3), null, 0);?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?>
                <div id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
                     class="ab__vg_loading ab__vg-image_gallery_video cm-image-previewer<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y'||$_smarty_tpl->tpl_vars['video']->iteration>1) {?> hidden<?php }?>"
                     data-width="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                     data-height="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
"
                     data-src="<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/build_url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('youtube_id'=>$_smarty_tpl->tpl_vars['video']->value['youtube_id']), 0);?>
"
                     data-frameborder="0" data-allowfullscreen="1">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp),'height'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp)), 0);?>

                </div>
            <?php } ?>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?>
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='open_popup') {?>
                <a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_video cm-image-previewer<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='open_popup') {?> cm-dialog-opener cm-dialog-auto-size<?php }
if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y'||$_smarty_tpl->tpl_vars['video']->iteration>1) {?> hidden<?php }?>" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">
                    <?php $_smarty_tpl->createLocalArrayVariable('video', null, 0);
$_smarty_tpl->tpl_vars['video']->value['icon_type'] = 'snapshot';?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp),'height'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp)), 0);?>

                </a>
            <?php }?>
            <div id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-popup-box hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <div style="<?php if ($_smarty_tpl->tpl_vars['video']->value['width']) {?>width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
px;<?php }
if ($_smarty_tpl->tpl_vars['video']->value['height']) {?>height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['height'], ENT_QUOTES, 'ISO-8859-1');?>
px<?php }?>"
                     <?php if ($_smarty_tpl->tpl_vars['video']->value['width']) {?>data-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['video']->value['height']) {?>data-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['height'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?> class="ab__vg_loading" data-src="<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/build_url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('youtube_id'=>$_smarty_tpl->tpl_vars['video']->value['youtube_id']), 0);?>
" data-frameborder="0" data-allowfullscreen="1">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['width'] : $tmp),'height'=>(($tmp = @$_smarty_tpl->tpl_vars['ab__video_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['video']->value['height'] : $tmp)), 0);?>

                </div>
            </div>
        <?php } ?>
    <?php }?>
    <p class="ty-center"><small style="color:#999;"><?php echo $_smarty_tpl->__('hover_to_enlarge');?>
</small></p>
</div>
<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']||$_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="Y") {?>
        <input type="hidden" name="no_cache" value="1"/>
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery"><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-item-gallery cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a></div><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
px"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery ty-float-left"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a></div><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-item-gallery cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a></div><?php }
}?></div>
                </div>
            </div>
        
    <?php } else { ?>
        <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'ISO-8859-1');?>
px;">
            <?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
"class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']==0) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
}?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
?><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'ISO-8859-1');?>
/addons/ab__video_gallery/youtube_logo.png" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']), ENT_QUOTES, 'ISO-8859-1');?>
"/></a><?php }
}?>
        </div>
    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_images")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
