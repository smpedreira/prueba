<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:01:25
         compiled from "/home/miudino/www/prestashop/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176599422250e0493573d8c5-15534325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf3145483ef771e97c631de49a22b839b0993dc' => 
    array (
      0 => '/home/miudino/www/prestashop/modules/feeder/feederHeader.tpl',
      1 => 1356868169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176599422250e0493573d8c5-15534325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e04935755b97_18323801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e04935755b97_18323801')) {function content_50e04935755b97_18323801($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/miudino/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>