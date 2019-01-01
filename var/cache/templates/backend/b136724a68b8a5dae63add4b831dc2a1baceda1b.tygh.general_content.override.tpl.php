<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:59:11
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/ab__advanced_banners/hooks/banners/general_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15382333915c255940011fb3-17773937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b136724a68b8a5dae63add4b831dc2a1baceda1b' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/ab__advanced_banners/hooks/banners/general_content.override.tpl',
      1 => 1545824899,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15382333915c255940011fb3-17773937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'b_type' => 0,
    'id' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c255940092021_50699132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c255940092021_50699132')) {function content_5c255940092021_50699132($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('name','position_short','type','graphic_banner','text_banner','abab.type','image','abab.color_scheme','ttc_abab.color_scheme','abab.color_scheme.light','abab.color_scheme.dark','abab.title','ttc_abab.title','abab.description','ttc_abab.description','abab.button','ttc_abab.button','abab.background_image','ttc_abab.background_image','abab.background_color','ttc_abab.background_color','description','open_in_new_window','url','creation_date'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
$('#elm_banner_type').change(function(){
var type = $(this).find('option:selected').val();
if (type == 'G'){
$('#banner_graphic').show();
$('#banner_target').show();
$('#banner_url').show();
$('#ab__color_scheme').hide();
$('#ab__title').hide();
$('#ab__button_text').hide();
$('#ab__adv_text').hide();
$('#banner_text').hide();
$('#ab__background_image').hide();
$('#ab__bg_color').hide();
}
if (type == 'T'){
$('#banner_text').show();
$('#banner_graphic').hide();
$('#banner_target').hide();
$('#banner_url').hide();
$('#ab__color_scheme').hide();
$('#ab__title').hide();
$('#ab__button_text').hide();
$('#ab__adv_text').hide();
$('#ab__background_image').hide();
$('#ab__bg_color').hide();
}
if (type == 'C'){
$('#banner_text').hide();
$('#ab__color_scheme').show();
$('#ab__title').show();
$('#ab__button_text').show();
$('#ab__adv_text').show();
$('#banner_graphic').show();
$('#banner_target').show();
$('#banner_url').show();
$('#ab__background_image').show();
$('#ab__bg_color').show();
}
});
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="control-group">
<label for="elm_banner_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
<div class="controls">
<input type="text" name="banner_data[banner]" id="elm_banner_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'ISO-8859-1');?>
" size="25" class="input-large" /></div>
</div>
<?php if (fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"banner_data[company_id]",'id'=>"banner_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['banner']->value['company_id']), 0);?>

<?php }?>
<div class="control-group">
<label for="elm_banner_position" class="control-label"><?php echo $_smarty_tpl->__("position_short");?>
</label>
<div class="controls">
<input type="text" name="banner_data[position]" id="elm_banner_position" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['banner']->value['position'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" size="3"/>
</div>
</div>
<div class="control-group">
<label for="elm_banner_type" class="control-label cm-required"><?php echo $_smarty_tpl->__("type");?>
</label>
<div class="controls">
<select name="banner_data[type]" id="elm_banner_type">
<option <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G") {?>selected="selected"<?php }?> value="G"><?php echo $_smarty_tpl->__("graphic_banner");?>
</option>
<option <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="T") {?>selected="selected"<?php }?> value="T"><?php echo $_smarty_tpl->__("text_banner");?>
</option>
<option <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="C") {?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("abab.type");?>
</option>
</select>
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="banner_graphic">
<label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"banners_main",'image_object_type'=>"promo",'image_pair'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="G"||$_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="ab__color_scheme">
<label for="elm_ab__color_scheme" class="control-label"><?php echo $_smarty_tpl->__("abab.color_scheme");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_abab.color_scheme")), 0);?>
:</label>
<div class="controls">
<select name="banner_data[ab__color_scheme]" id="elm_ab__color_scheme">
<option <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__color_scheme']=="light") {?>selected="selected"<?php }?> value="light"><?php echo $_smarty_tpl->__("abab.color_scheme.light");?>
</option>
<option <?php if ($_smarty_tpl->tpl_vars['banner']->value['ab__color_scheme']=="dark") {?>selected="selected"<?php }?> value="dark"><?php echo $_smarty_tpl->__("abab.color_scheme.dark");?>
</option>
</select>
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="G"||$_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="ab__title">
<label class="control-label" for="elm_ab__title"><?php echo $_smarty_tpl->__("abab.title");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_abab.title")), 0);?>
:</label>
<div class="controls">
<input id="elm_ab__title" name="banner_data[ab__title]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__title'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large">
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="G"||$_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="ab__adv_text">
<label class="control-label" for="elm_ab__adv_text"><?php echo $_smarty_tpl->__("abab.description");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_abab.description")), 0);?>
:</label>
<div class="controls">
<input id="elm_ab__adv_text" name="banner_data[ab__adv_text]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__adv_text'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large">
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="G"||$_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="ab__button_text">
<label class="control-label" for="elm_ab__button_text"><?php echo $_smarty_tpl->__("abab.button");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_abab.button")), 0);?>
:</label>
<div class="controls">
<input id="elm_ab__button_text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__button_text'], ENT_QUOTES, 'ISO-8859-1');?>
" name="banner_data[ab__button_text]" type="text" class="input-large">
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="G"||$_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="ab__background_image">
<label class="control-label" for="elm_ab__adv_text"><?php echo $_smarty_tpl->__("abab.background_image");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_abab.background_image")), 0);?>
:</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"banners_background_image",'image_object_type'=>"bg_image",'image_pair'=>$_smarty_tpl->tpl_vars['banner']->value['bg_image'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="G"||$_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="ab__bg_color">
<label class="control-label" for="elm_ab__bg_color"><?php echo $_smarty_tpl->__("abab.background_color");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_abab.background_color")), 0);?>
:</label>
<div class="controls">
<input id="elm_ab__bg_color" name="banner_data[ab__bg_color]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['ab__bg_color'], ENT_QUOTES, 'ISO-8859-1');?>
">
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="G"||$_smarty_tpl->tpl_vars['b_type']->value=="C") {?>hidden<?php }?>" id="banner_text">
<label class="control-label" for="elm_banner_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
<div class="controls">
<textarea id="elm_banner_description" name="banner_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="banner_target">
<label class="control-label" for="elm_banner_target"><?php echo $_smarty_tpl->__("open_in_new_window");?>
</label>
<div class="controls">
<input type="hidden" name="banner_data[target]" value="T" />
<input type="checkbox" name="banner_data[target]" id="elm_banner_target" value="B" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target']=="B") {?>checked="checked"<?php }?> />
</div>
</div>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value=="T") {?>hidden<?php }?>" id="banner_url">
<label class="control-label" for="elm_banner_url"><?php echo $_smarty_tpl->__("url");?>
:</label>
<div class="controls">
<input type="text" name="banner_data[url]" id="elm_banner_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_banner_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_banner_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"banner_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['banner']->value['timestamp'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"banner_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['banner']->value['localization']), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"banner_data[status]",'id'=>"elm_banner_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['banner']->value,'hidden'=>true), 0);?>

<?php }} ?>
