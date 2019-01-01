<?php /* Smarty version Smarty-3.1.21, created on 2018-11-26 12:42:37
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_yandex_metrika/views/components/datalayer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314047845bfbc00d24d101-36440638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a602154ea949831c301bcf8472ab58d8e79b073d' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_yandex_metrika/views/components/datalayer.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '314047845bfbc00d24d101-36440638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'yandex_metrika' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfbc00d2cd5c1_18593311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfbc00d2cd5c1_18593311')) {function content_5bfbc00d2cd5c1_18593311($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']=='Y') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(w, _, $) {
            $(document).ready(function(){

                <?php if (!empty($_smarty_tpl->tpl_vars['yandex_metrika']->value['deleted'])) {?>
                    w.dataLayerYM.push({
                        'ecommerce': {
                            'remove': {
                                'products': [
                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yandex_metrika']->value['deleted']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                    {
                                        'id': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'name': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']));?>
,
                                        'quantity': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?>
                                        'category': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['category']));?>
,
                                        <?php }?>
                                    },
                                    <?php } ?>
                                ]
                            }
                        }
                    });
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['yandex_metrika']->value['added'])) {?>
                    w.dataLayerYM.push({
                        'ecommerce': {
                            'add': {
                                'products': [
                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yandex_metrika']->value['added']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                    {
                                        'id': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'name' : <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']));?>
,
                                        'price': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'quantity': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['brand']) {?>
                                        'brand': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['brand']));?>
,
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?>
                                        'category': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['category']));?>
,
                                        <?php }?>
                                    },
                                    <?php } ?>
                                ]
                            }
                        }
                    });
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased'])) {?>
                    w.dataLayerYM.push({
                        'ecommerce': {
                            'purchase': {
                                'actionField' : {
                                    'id' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    'revenue' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['revenue'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    <?php if ($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['coupon']) {?>
                                    'coupon' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['coupon'], ENT_QUOTES, 'ISO-8859-1');?>
'
                                    <?php }?>
                                },
                                'products': [
                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                    {
                                        'id': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'name' : <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']));?>
,
                                        'price': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['brand']) {?>
                                        'brand': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['brand']));?>
,
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?>
                                        'category': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['category']));?>
,
                                        <?php }?>
                                        'quantity': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    },
                                    <?php } ?>
                                ]
                            }
                        }
                    });
                <?php }?>
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_yandex_metrika/views/components/datalayer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_yandex_metrika/views/components/datalayer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']=='Y') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(w, _, $) {
            $(document).ready(function(){

                <?php if (!empty($_smarty_tpl->tpl_vars['yandex_metrika']->value['deleted'])) {?>
                    w.dataLayerYM.push({
                        'ecommerce': {
                            'remove': {
                                'products': [
                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yandex_metrika']->value['deleted']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                    {
                                        'id': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'name': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']));?>
,
                                        'quantity': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?>
                                        'category': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['category']));?>
,
                                        <?php }?>
                                    },
                                    <?php } ?>
                                ]
                            }
                        }
                    });
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['yandex_metrika']->value['added'])) {?>
                    w.dataLayerYM.push({
                        'ecommerce': {
                            'add': {
                                'products': [
                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yandex_metrika']->value['added']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                    {
                                        'id': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'name' : <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']));?>
,
                                        'price': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'quantity': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['brand']) {?>
                                        'brand': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['brand']));?>
,
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?>
                                        'category': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['category']));?>
,
                                        <?php }?>
                                    },
                                    <?php } ?>
                                ]
                            }
                        }
                    });
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased'])) {?>
                    w.dataLayerYM.push({
                        'ecommerce': {
                            'purchase': {
                                'actionField' : {
                                    'id' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    'revenue' : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['revenue'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    <?php if ($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['coupon']) {?>
                                    'coupon' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['action']['coupon'], ENT_QUOTES, 'ISO-8859-1');?>
'
                                    <?php }?>
                                },
                                'products': [
                                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased']['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                    {
                                        'id': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        'name' : <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']));?>
,
                                        'price': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['brand']) {?>
                                        'brand': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['brand']));?>
,
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['category']) {?>
                                        'category': <?php echo json_encode(strip_tags($_smarty_tpl->tpl_vars['product']->value['category']));?>
,
                                        <?php }?>
                                        'quantity': <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
,
                                    },
                                    <?php } ?>
                                ]
                            }
                        }
                    });
                <?php }?>
            });
        }(window, Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }
}?><?php }} ?>
