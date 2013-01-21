<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:06:24
         compiled from "/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195927321950e04a600b69d7-30816242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e781460bc384ea17cac5dea8090dc7c916a906de' => 
    array (
      0 => '/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1356869379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195927321950e04a600b69d7-30816242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e04a600cb6d2_27885178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e04a600cb6d2_27885178')) {function content_50e04a600cb6d2_27885178($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>