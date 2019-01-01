<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 14:52:02
         compiled from "/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14759301115c236b6255f840-29304568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc001312b879a523ea26483f23f55ce2293d8709' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/abt__unitheme/templates/views/block_manager/render/grid.tpl',
      1 => 1545825029,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14759301115c236b6255f840-29304568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'parent_grid' => 0,
    'grid' => 0,
    'content' => 0,
    'fluid_width' => 0,
    'width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c236b62578ca9_91583330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236b62578ca9_91583330')) {function content_5c236b62578ca9_91583330($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.hook.php';
?><?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
    <?php }?>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"grid:abt__content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"grid:abt__content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
        <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
        <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');?>
" >
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"grid:abt__content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
