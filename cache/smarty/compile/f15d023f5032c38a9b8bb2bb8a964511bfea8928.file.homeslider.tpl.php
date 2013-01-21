<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:01:26
         compiled from "/home/miudino/www/prestashop/modules/homeslider/homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113379075450e049366bfc09-63502229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15d023f5032c38a9b8bb2bb8a964511bfea8928' => 
    array (
      0 => '/home/miudino/www/prestashop/modules/homeslider/homeslider.tpl',
      1 => 1356868183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113379075450e049366bfc09-63502229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e0493671e4a8_28491406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e0493671e4a8_28491406')) {function content_50e0493671e4a8_28491406($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/miudino/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Module HomeSlider -->
<?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)&&count($_smarty_tpl->tpl_vars['homeslider_slides']->value)>1){?>
	<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['loop']==1){?>
		var homeslider_loop = true;
	<?php }else{ ?>
		var homeslider_loop = false;
	<?php }?>
<?php }else{ ?>
	var homeslider_loop = false;
<?php }?>
var homeslider_speed = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['speed'];?>
;
var homeslider_pause = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['pause'];?>
;
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)){?>
<ul id="homeslider">
<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']){?>
		<li><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['url'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['description'], 'htmlall', 'UTF-8');?>
"><img src="<?php echo @_MODULE_DIR_;?>
/homeslider/images/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['image'], 'htmlall', 'UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['legend'], 'htmlall', 'UTF-8');?>
" legend="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['description'], 'htmlall', 'UTF-8');?>
" height="<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['height']);?>
" width="<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
" /></a></li>
	<?php }?>
<?php } ?>
</ul>
<?php }?>
<!-- /Module HomeSlider -->
<?php }} ?>