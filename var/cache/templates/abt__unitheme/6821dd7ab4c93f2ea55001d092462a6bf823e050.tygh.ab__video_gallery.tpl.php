<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:56:51
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18506446445c236c83eab3e3-58086666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6821dd7ab4c93f2ea55001d092462a6bf823e050' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl',
      1 => 1545825077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18506446445c236c83eab3e3-58086666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'ab__vg_videos' => 0,
    'video' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236c83ecbea3_81116637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236c83ecbea3_81116637')) {function content_5c236c83ecbea3_81116637($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
<div id="content_ab__video_gallery" class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
            <div class="ab__vg-video">
                <a class="cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>370,'height'=>240), 0);?>

                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['video']->value['description'];?>
</div>
            </div>
        <?php } ?>
    </div>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
<div id="content_ab__video_gallery" class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
            <div class="ab__vg-video">
                <a class="cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>370,'height'=>240), 0);?>

                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['video']->value['description'];?>
</div>
            </div>
        <?php } ?>
    </div>
</div>
<?php }
}?><?php }} ?>
