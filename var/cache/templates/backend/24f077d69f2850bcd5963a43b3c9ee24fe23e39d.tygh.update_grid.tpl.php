<?php /* Smarty version Smarty-3.1.21, created on 2018-12-28 01:02:36
         compiled from "/srv/www/esportshop.ru/design/backend/templates/views/block_manager/update_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7627505065c254bfcc38ff1-50373036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f077d69f2850bcd5963a43b3c9ee24fe23e39d' => 
    array (
      0 => '/srv/www/esportshop.ru/design/backend/templates/views/block_manager/update_grid.tpl',
      1 => 1543002777,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7627505065c254bfcc38ff1-50373036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid' => 0,
    'id' => 0,
    'location' => 0,
    'grid_params' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c254bfcc8d541_16054693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c254bfcc8d541_16054693')) {function content_5c254bfcc8d541_16054693($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/srv/www/esportshop.ru/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('general','width','content_alignment','full_width','left','right','offset','user_class'));
?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['grid_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="grid_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit " name="grid_update_form">
<input type="hidden" id="s_layout" name="s_layout" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['layout_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="grid_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

<input type="hidden" name="container_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_params']->value['container_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="parent_id" value="<?php echo htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['parent_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['parent_id'] : $tmp))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("width");?>
</label>
        <div class="controls">
        <select id="elm_grid_width_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="width">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["width"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['name'] = "width";
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] = (int) (($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['min_width'])===null||$tmp==='' ? 1 : $tmp)-(($tmp = @1)===null||$tmp==='' ? 0 : $tmp);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['max_width'])===null||$tmp==='' ? 24 : $tmp)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["width"]['total']);
?>
                <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['width']['index']+1, null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['grid']->value['width']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php endfor; endif; ?>
        </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_content_align_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("content_alignment");?>
</label>
        <div class="controls">
        <select id="elm_grid_content_align_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="content_align">
            <option value="FULL_WIDTH" <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']=="FULL_WIDTH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("full_width");?>
</option>            
            <option value="LEFT" <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']=="LEFT") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("left");?>
</option>
            <option value="RIGHT" <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align']=="RIGHT") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("right");?>
</option>
        </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_offset_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("offset");?>
</label>
        <div class="controls">
        <select id="elm_grid_offset_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="offset">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['name'] = "offset";
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['grid_params']->value['max_width'])===null||$tmp==='' ? 24 : $tmp)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["offset"]['total']);
?>
                <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['offset']['index'], null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['grid']->value['offset']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php endfor; endif; ?>
        </select>
        </div>
    </div>

    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_grid_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("user_class");?>
</label>
        <div class="controls">
        <input id="elm_grid_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="user_class" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');?>
" type="text" />
        </div>
    </div>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_manager_update_grid:settings")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_manager_update_grid:settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_manager_update_grid:settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[block_manager.grid.update]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>
</form>
<!--grid_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div>
<?php }} ?>
