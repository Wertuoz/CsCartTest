<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 09:07:11
         compiled from "/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/address_on_map/hooks/profiles/general_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3442773285bd7f50fe71e07-61387576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f698025974abe88603ed1d837f14ec151b67dc' => 
    array (
      0 => '/opt/lampp/htdocs/cscartRep/design/backend/templates/addons/address_on_map/hooks/profiles/general_content.pre.tpl',
      1 => 1539165548,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3442773285bd7f50fe71e07-61387576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd7f50fe811e3_88958982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd7f50fe811e3_88958982')) {function content_5bd7f50fe811e3_88958982($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.address_on_map.shipping_address_on_map'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']&&$_smarty_tpl->tpl_vars['user_data']->value['user_type']=='C') {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("addons.address_on_map.shipping_address_on_map");?>
</h6>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
                <div class="cm-map" style="width: 100%; height: 220px" data-ca-geocode="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
"></div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->__('no_data');?>

            <?php }?>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }} ?>
