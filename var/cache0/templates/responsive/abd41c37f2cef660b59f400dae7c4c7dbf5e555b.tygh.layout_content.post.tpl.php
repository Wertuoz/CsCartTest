<?php /* Smarty version Smarty-3.1.21, created on 2018-11-28 15:38:15
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_yandex_metrika/hooks/products/layout_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16333755345bfe8c37e92190-74960882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd41c37f2cef660b59f400dae7c4c7dbf5e555b' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_yandex_metrika/hooks/products/layout_content.post.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16333755345bfe8c37e92190-74960882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'ym_brand' => 0,
    'ym_variant' => 0,
    'category' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfe8c37ec35e6_02152402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfe8c37ec35e6_02152402')) {function content_5bfe8c37ec35e6_02152402($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']=='Y') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (w, _, $) {
            $(document).ready(function () {
                w.dataLayerYM.push({
                    "ecommerce": {
                        "detail": {
                            "products": [
                                {
                                    "id": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    "name": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['product']));?>
,
                                    "price": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
",
                                    "brand": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['ym_brand']->value));?>
,
                                    <?php if ($_smarty_tpl->tpl_vars['ym_variant']->value) {?>
                                    "variant": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['ym_variant']->value));?>
,
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                                    "category": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['category']->value));?>
,
                                    <?php }?>
                                }
                            ]
                        }
                    }
                });
            });
        }(window, Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_yandex_metrika/hooks/products/layout_content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_yandex_metrika/hooks/products/layout_content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']=='Y') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (w, _, $) {
            $(document).ready(function () {
                w.dataLayerYM.push({
                    "ecommerce": {
                        "detail": {
                            "products": [
                                {
                                    "id": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    "name": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['product']));?>
,
                                    "price": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
",
                                    "brand": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['ym_brand']->value));?>
,
                                    <?php if ($_smarty_tpl->tpl_vars['ym_variant']->value) {?>
                                    "variant": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['ym_variant']->value));?>
,
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                                    "category": <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['category']->value));?>
,
                                    <?php }?>
                                }
                            ]
                        }
                    }
                });
            });
        }(window, Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
}?><?php }} ?>
