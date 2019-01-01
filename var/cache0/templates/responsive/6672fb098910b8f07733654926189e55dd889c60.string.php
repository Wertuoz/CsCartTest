<?php /* Smarty version Smarty-3.1.21, created on 2018-11-26 12:42:36
         compiled from "6672fb098910b8f07733654926189e55dd889c60" */ ?>
<?php /*%%SmartyHeaderCode:5195843635bfbc00cc21536-44961790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6672fb098910b8f07733654926189e55dd889c60' => 
    array (
      0 => '6672fb098910b8f07733654926189e55dd889c60',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '5195843635bfbc00cc21536-44961790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfbc00cc2a0f1_75074680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfbc00cc2a0f1_75074680')) {function content_5bfbc00cc2a0f1_75074680($_smarty_tpl) {?>
                                    <ul id="customer_service_links">
                                    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">Ваши заказы</a></li>
                                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">Отложенные</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">Список сравнения</a></li>
                                    <?php }?>
                                    </ul><?php }} ?>
