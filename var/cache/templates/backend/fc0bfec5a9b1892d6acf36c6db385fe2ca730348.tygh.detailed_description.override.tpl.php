<?php /* Smarty version Smarty-3.1.21, created on 2018-12-29 15:17:55
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/blog/hooks/pages/detailed_description.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20713253275c2765f39959c9-04677847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc0bfec5a9b1892d6acf36c6db385fe2ca730348' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/blog/hooks/pages/detailed_description.override.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20713253275c2765f39959c9-04677847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2765f39aeb80_54386215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2765f39aeb80_54386215')) {function content_5c2765f39aeb80_54386215($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('post_description','ttc_post_description','description'));
?>
        <?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
        <div class="control-group">
            <?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_BLOG')) {?>
            <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_post_description")), 0);?>
:</label>
            <?php } else { ?>
            <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <?php }?>
            <div class="controls">
                <textarea id="elm_page_descr" name="page_data[description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['description'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_LINK')) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
<?php }} ?>
