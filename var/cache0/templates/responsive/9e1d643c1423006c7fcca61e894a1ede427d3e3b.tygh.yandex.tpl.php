<?php /* Smarty version Smarty-3.1.21, created on 2018-11-27 13:18:50
         compiled from "/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_pickup/views/pickup/components/maps/yandex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7790856735bfd1a0a923c20-76285135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e1d643c1423006c7fcca61e894a1ede427d3e3b' => 
    array (
      0 => '/srv/www/esportshop.ru/design/themes/responsive/templates/addons/rus_pickup/views/pickup/components/maps/yandex.tpl',
      1 => 1543002778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7790856735bfd1a0a923c20-76285135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'map_container' => 0,
    'sl_settings' => 0,
    'language' => 0,
    'store_locations' => 0,
    'stores' => 0,
    'loc' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bfd1a0a9a22c4_65628416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd1a0a9a22c4_65628416')) {function content_5bfd1a0a9a22c4_65628416($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/rus_pickup/yandex.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        var options = {
            'latitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LATITUDE')), ENT_QUOTES, 'ISO-8859-1');?>
,
            'longitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LONGITUDE')), ENT_QUOTES, 'ISO-8859-1');?>
,
            'map_container': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
            'zoom': <?php if (!empty($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php } else { ?> 16 <?php }?>,
            'controls': [ 
                <?php if ($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom_control']=='Y') {?> 'zoomControl', <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_map_type_control']=='Y') {?> 'typeSelector', <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_scale_control']=='Y') {?> 'rulerControl', <?php }?>
            ],
            'language': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
            'select_store': false,
            'storeData': [
            <?php  $_smarty_tpl->tpl_vars["stores"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["stores"]->_loop = false;
 $_smarty_tpl->tpl_vars["city_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["stores"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["stores"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["stores"]->key => $_smarty_tpl->tpl_vars["stores"]->value) {
$_smarty_tpl->tpl_vars["stores"]->_loop = true;
 $_smarty_tpl->tpl_vars["city_key"]->value = $_smarty_tpl->tpl_vars["stores"]->key;
 $_smarty_tpl->tpl_vars["stores"]->iteration++;
 $_smarty_tpl->tpl_vars["stores"]->last = $_smarty_tpl->tpl_vars["stores"]->iteration === $_smarty_tpl->tpl_vars["stores"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["st_cities_foreach"]['last'] = $_smarty_tpl->tpl_vars["stores"]->last;
?>
                <?php  $_smarty_tpl->tpl_vars["loc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["loc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["loc"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["loc"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["loc"]->key => $_smarty_tpl->tpl_vars["loc"]->value) {
$_smarty_tpl->tpl_vars["loc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["loc"]->key;
 $_smarty_tpl->tpl_vars["loc"]->iteration++;
 $_smarty_tpl->tpl_vars["loc"]->last = $_smarty_tpl->tpl_vars["loc"]->iteration === $_smarty_tpl->tpl_vars["loc"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["st_loc_foreach"]['last'] = $_smarty_tpl->tpl_vars["loc"]->last;
?>
                    {
                        'store_location_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        'country' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'latitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['latitude']), ENT_QUOTES, 'ISO-8859-1');?>
,
                        'longitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['longitude']), ENT_QUOTES, 'ISO-8859-1');?>
,
                        'name' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'description' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['description'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'city' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['city'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'country_title' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country_title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'pickup_address' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_address'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'pickup_phone' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_phone'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'pickup_time' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_time'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    }
                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['st_loc_foreach']['last']) {?>,<?php }?>
                <?php } ?>  
                <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['st_cities_foreach']['last']) {?>,<?php }?>
            <?php } ?>            
            ]
        };

        $.ceEvent('on', 'ce.commoninit', function(context) {
            if (context.find('#' + options.map_container).length) {
                $.cePickup('show', options);
            }
        });
        
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_pickup/views/pickup/components/maps/yandex.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_pickup/views/pickup/components/maps/yandex.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/rus_pickup/yandex.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        var options = {
            'latitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LATITUDE')), ENT_QUOTES, 'ISO-8859-1');?>
,
            'longitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LONGITUDE')), ENT_QUOTES, 'ISO-8859-1');?>
,
            'map_container': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
            'zoom': <?php if (!empty($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php } else { ?> 16 <?php }?>,
            'controls': [ 
                <?php if ($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_zoom_control']=='Y') {?> 'zoomControl', <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_map_type_control']=='Y') {?> 'typeSelector', <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sl_settings']->value['yandex_scale_control']=='Y') {?> 'rulerControl', <?php }?>
            ],
            'language': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
            'select_store': false,
            'storeData': [
            <?php  $_smarty_tpl->tpl_vars["stores"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["stores"]->_loop = false;
 $_smarty_tpl->tpl_vars["city_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["stores"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["stores"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["stores"]->key => $_smarty_tpl->tpl_vars["stores"]->value) {
$_smarty_tpl->tpl_vars["stores"]->_loop = true;
 $_smarty_tpl->tpl_vars["city_key"]->value = $_smarty_tpl->tpl_vars["stores"]->key;
 $_smarty_tpl->tpl_vars["stores"]->iteration++;
 $_smarty_tpl->tpl_vars["stores"]->last = $_smarty_tpl->tpl_vars["stores"]->iteration === $_smarty_tpl->tpl_vars["stores"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["st_cities_foreach"]['last'] = $_smarty_tpl->tpl_vars["stores"]->last;
?>
                <?php  $_smarty_tpl->tpl_vars["loc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["loc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["loc"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["loc"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["loc"]->key => $_smarty_tpl->tpl_vars["loc"]->value) {
$_smarty_tpl->tpl_vars["loc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["loc"]->key;
 $_smarty_tpl->tpl_vars["loc"]->iteration++;
 $_smarty_tpl->tpl_vars["loc"]->last = $_smarty_tpl->tpl_vars["loc"]->iteration === $_smarty_tpl->tpl_vars["loc"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["st_loc_foreach"]['last'] = $_smarty_tpl->tpl_vars["loc"]->last;
?>
                    {
                        'store_location_id' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        'country' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'latitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['latitude']), ENT_QUOTES, 'ISO-8859-1');?>
,
                        'longitude' : <?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['loc']->value['longitude']), ENT_QUOTES, 'ISO-8859-1');?>
,
                        'name' :  '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'description' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['description'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'city' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['city'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'country_title' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['country_title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'pickup_address' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_address'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'pickup_phone' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_phone'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                        'pickup_time' : '<?php echo strtr($_smarty_tpl->tpl_vars['loc']->value['pickup_time'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    }
                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['st_loc_foreach']['last']) {?>,<?php }?>
                <?php } ?>  
                <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['st_cities_foreach']['last']) {?>,<?php }?>
            <?php } ?>            
            ]
        };

        $.ceEvent('on', 'ce.commoninit', function(context) {
            if (context.find('#' + options.map_container).length) {
                $.cePickup('show', options);
            }
        });
        
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
