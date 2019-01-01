<?php /* Smarty version Smarty-3.1.21, created on 2018-12-30 01:34:30
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__video_gallery/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3687896175c27f67685d226-01471034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74da4245629ec1dc161d5d03c07dcf68dac35b56' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__video_gallery/hooks/products/tabs_content.post.tpl',
      1 => 1545824947,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3687896175c27f67685d226-01471034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    '_key' => 0,
    'no_hide_input_if_shared_product' => 0,
    'video' => 0,
    'new_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c27f67690a4b7_52725281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c27f67690a4b7_52725281')) {function content_5c27f67690a4b7_52725281($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
?><?php
fn_preload_lang_vars(array('ab__vg.form.product_settings','ab__vg.form.replace_image','tt_addons_ab__video_gallery_hooks_products_tabs_content_post_ab__vg.form.replace_image','ab__vg.form.product_videos','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','ab__vg.form.pos','ab__vg.form.title','ab__vg.form.status','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','ab__vg.form.youtube_id','ab__vg.form.youtube_id.tooltip','ab__vg.form.width','ab__vg.form.width.tooltip','ab__vg.form.height','ab__vg.form.height.tooltip','ab__vg.form.icon_type','ab__vg.form.icon_type.snapshot','ab__vg.form.icon_type.icon','ab__vg.form.icon','ab__vg.form.description','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','ab__vg.form.youtube_id','ab__vg.form.youtube_id.tooltip','ab__vg.form.width','ab__vg.form.width.tooltip','ab__vg.form.height','ab__vg.form.height.tooltip','ab__vg.form.icon_type','ab__vg.form.icon_type.snapshot','ab__vg.form.icon_type.icon','ab__vg.form.icon','ab__vg.form.description'));
?>
<?php if (fn_check_view_permissions('ab__video_gallery.view')) {?>
<?php $_smarty_tpl->createLocalArrayVariable('product_data', null, 0);
$_smarty_tpl->tpl_vars['product_data']->value['ab__vg_videos'] = fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product_data']->value['product_id'],@constant('DESCR_SL'));?>
<?php $_smarty_tpl->createLocalArrayVariable('product_data', null, 0);
$_smarty_tpl->tpl_vars['product_data']->value['settings'] = fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product_data']->value['product_id']);?>
<div class="hidden <?php if (!fn_check_view_permissions('ab__video_gallery.manage')) {?>cm-hide-inputs<?php }?>" id="content_ab__video_gallery">
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__vg.form.product_settings"),'target'=>"#ab__vg-product_settings"), 0);?>

<div id="ab__vg-product_settings" class="in collapse">
<div class="control-group">
<label class="control-label" for="ab__vg__replace_image"><?php echo $_smarty_tpl->__("ab__vg.form.replace_image");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_ab__video_gallery_hooks_products_tabs_content_post_ab__vg.form.replace_image")), 0);?>
</label>
<div class="controls">
<input type="hidden" name="product_data[ab__vg_settings][replace_image]" value="N" />
<input type="checkbox" name="product_data[ab__vg_settings][replace_image]" id="ab__vg__replace_image" value="Y"<?php if ($_smarty_tpl->tpl_vars['product_data']->value['settings']['replace_image']=="Y") {?>checked="checked"<?php }?> />
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__vg.form.product_videos"),'target'=>"#ab__vg-product_videos"), 0);?>

<div id="ab__vg-product_videos" class="in collapse">
<table class="table table-middle" width="100%">
<thead class="cm-first-sibling">
<tr>
<th width="2%">
<span id="on_video_extra" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-video_extra hidden"><span class="exicon-expand"></span></span>
<span id="off_video_extra" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-video_extra"><span class="exicon-collapse"></span></span>
</th>
<th width="5%"><?php echo $_smarty_tpl->__("ab__vg.form.pos");?>
</th>
<th width="50%"><?php echo $_smarty_tpl->__("ab__vg.form.title");?>
</th>
<th width="25%"><?php echo $_smarty_tpl->__("ab__vg.form.status");?>
</th>
<th width="15%">&nbsp;</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["video"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["video"]->_loop = false;
 $_smarty_tpl->tpl_vars["_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_data']->value['ab__vg_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["video"]->key => $_smarty_tpl->tpl_vars["video"]->value) {
$_smarty_tpl->tpl_vars["video"]->_loop = true;
 $_smarty_tpl->tpl_vars["_key"]->value = $_smarty_tpl->tpl_vars["video"]->key;
?>
<tbody class="cm-row-item">
<tr>
<td width="2%">
<span id="on_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-video_extra"><span class="exicon-expand"></span></span>
<span id="off_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-video_extra"><span class="exicon-collapse"></span></span>
</td>
<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="hidden" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][video_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][pos]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['pos'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-micro" />
</td>
<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large" />
</td>
<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['video']->value['video_id'],'status'=>$_smarty_tpl->tpl_vars['video']->value['status'],'hidden'=>true,'object_id_name'=>"video_id",'table'=>"ab__video_gallery"), 0);?>

</td>
<td class="nowrap <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
 right">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('microformats'=>"cm-delete-row",'no_confirm'=>true), 0);?>

</td>
</tr>
<tr class="cr-table-detail" id="ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<td colspan="5">
<div class="control-group">
<label class="control-label" for="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.youtube_id");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.youtube_id.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][youtube_id]" id="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['youtube_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__width__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.width");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.width.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][width]" id="ab__vg__width__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__height__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.height");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.height.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][height]" id="ab__vg__height__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['height'], ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon_type");?>
</label>
<div class="controls">
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__snapshot"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__snapshot" <?php if ($_smarty_tpl->tpl_vars['video']->value['icon_type']=='snapshot') {?>checked="checked"<?php }?> value="snapshot" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.snapshot");?>
</label>
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__icon"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__icon" <?php if ($_smarty_tpl->tpl_vars['video']->value['icon_type']=='icon') {?>checked="checked"<?php }?> value="icon" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.icon");?>
</label>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon");?>
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"video_icon",'image_object_type'=>"ab__vg_video",'image_key'=>$_smarty_tpl->tpl_vars['_key']->value,'image_pair'=>$_smarty_tpl->tpl_vars['video']->value['icon'],'no_detailed'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.description");?>
</label>
<div class="controls">
<textarea id="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][description]" cols="55" rows="8" class="cm-wysiwyg"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
</div>
</div>
</td>
</tr>
</tbody>
<?php } ?>
<?php echo smarty_function_math(array('equation'=>"x+1",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['_key']->value)===null||$tmp==='' ? 0 : $tmp),'assign'=>"new_key"),$_smarty_tpl);?>

<tbody id="box_add_ab__vg_video">
<tr class="<?php echo smarty_function_cycle(array('values'=>"table-row , ",'reset'=>1),$_smarty_tpl);
echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<td width="2%">
<span id="on_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-video_extra"><span class="exicon-expand"></span></span>
<span id="off_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-video_extra"><span class="exicon-collapse"></span></span>
</td>
<td>
<input type="hidden" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][video_id]" value="" />
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][pos]" value="" class="input-micro" />
</td>
<td><input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][title]" value="" class="input-large" /></td>
<td></td>
<td class="right">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_ab__vg_video"), 0);?>

</td>
</tr>
<tr class="cr-table-detail" id="ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<td colspan="5">
<div class="control-group">
<label class="control-label" for="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.youtube_id");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.youtube_id.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][youtube_id]" id="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="55" value="" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__width__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.width");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.width.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][width]" id="ab__vg__width__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="55" value="" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__height__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.height");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.height.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][height]" id="ab__vg__height__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" size="55" value="" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon_type");?>
</label>
<div class="controls">
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__snapshot"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__snapshot" value="snapshot" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.snapshot");?>
</label>
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__icon"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
__icon" value="icon" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.icon");?>
</label>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon");?>
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"video_icon",'image_object_type'=>"ab__vg_video",'image_key'=>$_smarty_tpl->tpl_vars['new_key']->value,'image_pair'=>'','no_detailed'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.description");?>
</label>
<div class="controls">
<textarea id="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][description]" cols="55" rows="8" class="cm-wysiwyg"></textarea>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php }?><?php }} ?>
