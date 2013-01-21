<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:06:24
         compiled from "/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213799039250e04a600a8098-42186329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac62cb78b27660c9737cf2b4f5b5978c2591de5' => 
    array (
      0 => '/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1356869380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213799039250e04a600a8098-42186329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e04a600b3c90_63315881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e04a600b3c90_63315881')) {function content_50e04a600b3c90_63315881($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>