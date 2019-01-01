<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:02
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2644430235c236b62926e91-81989414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d55bbdeb4483d7410fa668c56016b814e5018d2' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/views/block_manager/render/container.tpl',
      1 => 1545825029,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2644430235c236b62926e91-81989414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'ab__ut_full_width' => 0,
    'ab__ut_hidden_filter' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b629324f7_38085933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b629324f7_38085933')) {function content_5c236b629324f7_38085933($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');?>

    <?php if (strpos($_smarty_tpl->tpl_vars['container']->value['user_class'],"categories_grid")&&$_smarty_tpl->tpl_vars['ab__ut_full_width']->value) {?>full_width<?php }?>
    <?php if (strpos($_smarty_tpl->tpl_vars['container']->value['user_class'],"categories_grid")&&$_smarty_tpl->tpl_vars['ab__ut_hidden_filter']->value) {?>side_hidden<?php }?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
