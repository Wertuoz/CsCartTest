<?php /* Smarty version Smarty-3.1.21, created on 2018-10-18 04:53:21
         compiled from "/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13442374255bc7e7916590e3-28770507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01361ef0425fa108b2093a71ad3337959cea9baf' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1539825832,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13442374255bc7e7916590e3-28770507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bc7e7916601f5_79778546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc7e7916601f5_79778546')) {function content_5bc7e7916601f5_79778546($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
