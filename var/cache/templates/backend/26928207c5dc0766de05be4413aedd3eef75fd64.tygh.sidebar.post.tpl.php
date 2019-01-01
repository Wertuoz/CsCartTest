<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 15:09:33
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15551290615c236f7dd21565-42608641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26928207c5dc0766de05be4413aedd3eef75fd64' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15551290615c236f7dd21565-42608641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236f7dd290b0_13456784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236f7dd290b0_13456784')) {function content_5c236f7dd290b0_13456784($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
