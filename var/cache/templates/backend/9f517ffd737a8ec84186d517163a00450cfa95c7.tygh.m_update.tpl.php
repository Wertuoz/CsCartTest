<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 13:35:25
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/views/categories/m_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16275836435bc861edea1027-13952645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f517ffd737a8ec84186d517163a00450cfa95c7' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/views/categories/m_update.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16275836435bc861edea1027-13952645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filled_groups' => 0,
    'field_names' => 0,
    'field_name' => 0,
    'field_key' => 0,
    'categories_data' => 0,
    'type' => 0,
    'field_groups' => 0,
    'field' => 0,
    'v' => 0,
    'category' => 0,
    'name' => 0,
    'settings' => 0,
    'layout' => 0,
    'item' => 0,
    'f_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc861edf40198_51601608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc861edf40198_51601608')) {function content_5bc861edf40198_51601608($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/opt/lampp/htdocs/cscartRep/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('active','disabled','hidden','update_categories'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function($) {
        $(document).ready(function(){
            // Double scroll
            var elm_orig = $("#scrolled_div");
            var elm_scroller = $("#scrolled_div_top");

            var dummy = $("<div></div>");
            dummy.width(elm_orig.get(0).scrollWidth);
            dummy.height(24);
            elm_scroller.append(dummy);

            elm_scroller.scroll(function(){
                elm_orig.scrollLeft(elm_scroller.scrollLeft());
            });
            elm_orig.scroll(function(){
                elm_scroller.scrollLeft(elm_orig.scrollLeft());
            });
        });
    }(Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="categories_m_update_form">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("categories.m_update"), ENT_QUOTES, 'UTF-8');?>
" />

<div class="table-wrapper">
    <table width="100%">
    <tr>
        <td width="100%">
            <div id="scrolled_div_top" class="scroll-x scroll-top"></div>
            <div id="scrolled_div" class="scroll-x scroll-border">
            <table width="100%" class="table-fixed">
            <tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <th>&nbsp;</th>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars["field_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_name"]->_loop = false;
 $_smarty_tpl->tpl_vars['field_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_name"]->key => $_smarty_tpl->tpl_vars["field_name"]->value) {
$_smarty_tpl->tpl_vars["field_name"]->_loop = true;
 $_smarty_tpl->tpl_vars['field_key']->value = $_smarty_tpl->tpl_vars["field_name"]->key;
?>
                <th><?php if (is_array($_smarty_tpl->tpl_vars['field_name']->value)) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_key']->value);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');
}?></th>
                <?php } ?>
            </tr>
            <?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
?>

            <tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <td valign="top" class="pad">
                    <table>
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_groups']->value[$_smarty_tpl->tpl_vars['type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value]) {?>
                    <tr valign="top">
                        <td class="nowrap <?php if ($_smarty_tpl->tpl_vars['field']->value=="category") {?>strong<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['type']->value=="A") {?>
                            <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
" class="input-text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="C") {?>
                            <textarea class="input-text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" rows="3" cols="40"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <?php }?>
                        </td>
                    </tr>
                    <?php }?>
                    <?php } ?>
                    </table>
                </td>
                <?php } ?>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars["field"]->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <td valign="top" class="pad">
                        <?php if ($_smarty_tpl->tpl_vars['field']->value=="status") {?>
                            <select name="categories_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                                <option value="A" <?php if ($_smarty_tpl->tpl_vars['category']->value['status']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                                <option value="D" <?php if ($_smarty_tpl->tpl_vars['category']->value['status']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
                                <option value="H" <?php if ($_smarty_tpl->tpl_vars['category']->value['status']=="H") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("hidden");?>
</option>
                            </select>
                        
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="usergroup_ids") {?>
                            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"category_ug_".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']),'name'=>"categories_data[".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),@constant('DESCR_SL')),'usergroup_ids'=>$_smarty_tpl->tpl_vars['category']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>true), 0);?>

                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="discussion_type") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/bulk_allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"categories_data",'object_id'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'object_type'=>"C"), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="image_pair") {?>
                            <table width="420">
                            <tr>
                                <td><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_key'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'image_name'=>"category_main",'image_object_type'=>"category",'image_pair'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'no_thumbnail'=>true), 0);?>
</td>
                            </tr>
                            </table>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_".((string)$_smarty_tpl->tpl_vars['category']->value['category_id']),'date_name'=>"categories_data[".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['category']->value['timestamp'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="localization") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'data_from'=>$_smarty_tpl->tpl_vars['category']->value['localization'],'data_name'=>"categories_data[".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]"), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="product_details_view") {?>
                            <select name="categories_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]">
                            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = fn_get_product_details_views("category"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['category']->value['product_details_view']==$_smarty_tpl->tpl_vars['layout']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                            </select>
                        <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["f_category"] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->tpl_vars['field']->value], null, 0);?>
                        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_category']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-mupdate-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
" name="categories_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'UTF-8');?>
]" />
                        <?php }?>

                </td>
                <?php } ?>
            </tr>
            <?php } ?>
            </table>
            </div>
        </td>
    </tr>
    </table>
</div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[categories.m_update]",'but_target_form'=>"categories_m_update_form",'but_role'=>"submit-link"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("update_categories"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
