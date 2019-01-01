<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 02:18:03
         compiled from "/srv/www/esportshop.ru/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19842372395c0073ab985e62-84966350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7147beb3d39d6d33f3e2a0c3578f0c064b6433f' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/common/sidebox.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19842372395c0073ab985e62-84966350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c0073ab98fd99_61182989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0073ab98fd99_61182989')) {function content_5c0073ab98fd99_61182989($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
