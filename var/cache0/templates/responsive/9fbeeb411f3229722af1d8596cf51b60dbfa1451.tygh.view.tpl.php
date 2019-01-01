<?php /* Smarty version Smarty-3.1.21, created on 2018-11-27 13:18:50
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_pickup/views/pickup/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11073703155bfd1a0a8a0533-73913879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fbeeb411f3229722af1d8596cf51b60dbfa1451' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_pickup/views/pickup/view.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11073703155bfd1a0a8a0533-73913879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'map_provider' => 0,
    'store_locations' => 0,
    'map_container' => 0,
    'city_name' => 0,
    'stores' => 0,
    'loc' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfd1a0a911fa0_25587283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd1a0a911fa0_25587283')) {function content_5bfd1a0a911fa0_25587283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_all','view_on_map','view_all','no_data','rus_pickup.pick_up_points','view_all','view_on_map','view_all','no_data','rus_pickup.pick_up_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["map_provider"] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['store_locator']['map_provider'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_provider_api"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['map_provider']->value)."_map_api", null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_container"] = new Smarty_variable("map_canvas", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['map_provider']->value=='yandex') {?>
    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/rus_pickup/views/pickup/components/maps/yandex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div class="ty-pickup-location">
            <div class="ty-pickup-location__map-wrapper" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'ISO-8859-1');?>
"></div>
            <div class="ty-wysiwyg-content ty-pickup-location__locations-wrapper" id="stores_list_box">
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                    <div class="ty-pickup-location__item-all_stores">
                        <div class="ty-pickup-location__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("view_all")), 0);?>
</div>
                    </div>
                    <hr />
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['stores'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stores']->_loop = false;
 $_smarty_tpl->tpl_vars['city_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stores']->key => $_smarty_tpl->tpl_vars['stores']->value) {
$_smarty_tpl->tpl_vars['stores']->_loop = true;
 $_smarty_tpl->tpl_vars['city_name']->value = $_smarty_tpl->tpl_vars['stores']->key;
?>
                    <h2 class="ty-pickup-location__city-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h2>
                    <div class="ty-pickup-location_city-items">
                    <?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['loc']->key;
?>
                        <div class="ty-pickup-location__item ty-column3" id="loc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                            <h3 class="ty-pickup-location__item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</h3>
                            
                            <div class="ty-pickup-location__item-desc"><?php echo $_smarty_tpl->tpl_vars['loc']->value['description'];?>
</div>

                            <?php if ($_smarty_tpl->tpl_vars['loc']->value['city']||$_smarty_tpl->tpl_vars['loc']->value['country_title']) {?>
                                <span class="ty-pickup-location__item-country"><?php if ($_smarty_tpl->tpl_vars['loc']->value['city']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'ISO-8859-1');?>
, <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['country_title'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                            <?php }?>
                            
                            <div class="ty-pickup-location__item-view">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-location ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("view_on_map"),'but_extra'=>"data-ca-latitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['latitude'])." data-ca-longitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['longitude'])." data-ca-scroll=".((string)$_smarty_tpl->tpl_vars['map_container']->value)), 0);?>

                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <hr />
                <?php } ?>

                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                    <div class="ty-pickup-location__item-all_stores">
                        <div class="ty-pickup-location__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("view_all"),'but_extra'=>"data-ca-scroll=".((string)$_smarty_tpl->tpl_vars['map_container']->value)), 0);?>
</div>
                    </div>
                    <hr />
                <?php }?>

            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("rus_pickup.pick_up_points");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_pickup/views/pickup/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_pickup/views/pickup/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["map_provider"] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['store_locator']['map_provider'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_provider_api"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['map_provider']->value)."_map_api", null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_container"] = new Smarty_variable("map_canvas", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['map_provider']->value=='yandex') {?>
    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/rus_pickup/views/pickup/components/maps/yandex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div class="ty-pickup-location">
            <div class="ty-pickup-location__map-wrapper" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'ISO-8859-1');?>
"></div>
            <div class="ty-wysiwyg-content ty-pickup-location__locations-wrapper" id="stores_list_box">
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                    <div class="ty-pickup-location__item-all_stores">
                        <div class="ty-pickup-location__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("view_all")), 0);?>
</div>
                    </div>
                    <hr />
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['stores'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stores']->_loop = false;
 $_smarty_tpl->tpl_vars['city_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stores']->key => $_smarty_tpl->tpl_vars['stores']->value) {
$_smarty_tpl->tpl_vars['stores']->_loop = true;
 $_smarty_tpl->tpl_vars['city_name']->value = $_smarty_tpl->tpl_vars['stores']->key;
?>
                    <h2 class="ty-pickup-location__city-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h2>
                    <div class="ty-pickup-location_city-items">
                    <?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['loc']->key;
?>
                        <div class="ty-pickup-location__item ty-column3" id="loc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                            <h3 class="ty-pickup-location__item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</h3>
                            
                            <div class="ty-pickup-location__item-desc"><?php echo $_smarty_tpl->tpl_vars['loc']->value['description'];?>
</div>

                            <?php if ($_smarty_tpl->tpl_vars['loc']->value['city']||$_smarty_tpl->tpl_vars['loc']->value['country_title']) {?>
                                <span class="ty-pickup-location__item-country"><?php if ($_smarty_tpl->tpl_vars['loc']->value['city']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'ISO-8859-1');?>
, <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['country_title'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                            <?php }?>
                            
                            <div class="ty-pickup-location__item-view">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-location ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("view_on_map"),'but_extra'=>"data-ca-latitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['latitude'])." data-ca-longitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['longitude'])." data-ca-scroll=".((string)$_smarty_tpl->tpl_vars['map_container']->value)), 0);?>

                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <hr />
                <?php } ?>

                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                    <div class="ty-pickup-location__item-all_stores">
                        <div class="ty-pickup-location__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>$_smarty_tpl->__("view_all"),'but_extra'=>"data-ca-scroll=".((string)$_smarty_tpl->tpl_vars['map_container']->value)), 0);?>
</div>
                    </div>
                    <hr />
                <?php }?>

            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("rus_pickup.pick_up_points");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
