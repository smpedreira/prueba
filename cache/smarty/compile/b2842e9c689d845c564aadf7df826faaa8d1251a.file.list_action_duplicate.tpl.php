<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:07:51
         compiled from "/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153042392850e04ab7c8ae41-51164026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2842e9c689d845c564aadf7df826faaa8d1251a' => 
    array (
      0 => '/home/miudino/www/prestashop/admin131415/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1356869380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153042392850e04ab7c8ae41-51164026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e04ab7ca7ee9_19958400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e04ab7ca7ee9_19958400')) {function content_50e04ab7ca7ee9_19958400($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>