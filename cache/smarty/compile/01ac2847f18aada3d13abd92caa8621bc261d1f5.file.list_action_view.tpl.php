<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:08:27
         compiled from "/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39486848150e04adbb004d4-04678626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01ac2847f18aada3d13abd92caa8621bc261d1f5' => 
    array (
      0 => '/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1356869381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39486848150e04adbb004d4-04678626',
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
  'unifunc' => 'content_50e04adbb4cf01_66162148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e04adbb4cf01_66162148')) {function content_50e04adbb4cf01_66162148($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>