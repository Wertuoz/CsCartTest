<?php /* Smarty version Smarty-3.1.21, created on 2018-11-30 01:48:17
         compiled from "/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/common/yml_delivery_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12671385925c006cb1f03b36-37358450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f5db96174152ed439bf179b56e7f41ef94edba7' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/addons/yml_export/common/yml_delivery_options.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12671385925c006cb1f03b36-37358450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'id' => 0,
    'num' => 0,
    'name_data' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c006cb1f29e47_38585050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c006cb1f29e47_38585050')) {function content_5c006cb1f29e47_38585050($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/srv/www/esportshop.ru/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('yml_export.delivery_options','yml_export.delivery_cost','yml_export.delivery_days','yml_export.order_before'));
?>
<div class="control-group">
    <label for="yml2_pickup" class="control-label"><?php echo $_smarty_tpl->__("yml_export.delivery_options");?>
:</label>
    <div class="controls">

        <table width="100%" class="table table-middle">
            <thead>
            <tr>
                <th width="15%"><?php echo $_smarty_tpl->__("yml_export.delivery_cost");?>
</th>
                <th width="15%"><?php echo $_smarty_tpl->__("yml_export.delivery_days");?>
</th>
                <th><?php echo $_smarty_tpl->__("yml_export.order_before");?>
</th>
                <th class="cm-non-cb">&nbsp;</th>
            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["option_index"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["option_index"]['iteration']++;
?>
                <?php $_smarty_tpl->tpl_vars["num"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['option_index']['iteration'], null, 0);?>
                <tbody class="hover cm-row-item" id="delivery_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
                <tr>
                    <td>
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][cost]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['cost'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini" />
                    </td>
                    <td>
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][days]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['days'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini" />
                    </td>
                    <td>
                        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][order_before]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['order_before'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-mini" />
                    </td>
                    <td class="right cm-non-cb">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"option_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['num']->value),'tag_level'=>"3",'only_delete'=>"Y"), 0);?>

                    </td>
                </tbody>
            <?php } ?>

            <?php echo smarty_function_math(array('equation'=>"x + 1",'assign'=>"num",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['num']->value)===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>


            <tbody class="hover cm-row-item" id="box_add_delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <tr>
                <td>
                    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][cost]" size="20" value="" class="input-mini" />
                </td>
                <td>
                    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][days]" size="20" value="" class="input-mini" />
                </td>
                <td>
                    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_data']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'ISO-8859-1');?>
][order_before]" size="20" value="" class="input-mini" />
                </td>
                <td class="right cm-non-cb">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_delivery_option_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>"2"), 0);?>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div><?php }} ?>
