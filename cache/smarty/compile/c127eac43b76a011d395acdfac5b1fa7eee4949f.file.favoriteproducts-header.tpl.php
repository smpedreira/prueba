<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:01:25
         compiled from "/home/miudino/www/prestashop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92544770150e04935670147-49472733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c127eac43b76a011d395acdfac5b1fa7eee4949f' => 
    array (
      0 => '/home/miudino/www/prestashop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1356869296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92544770150e04935670147-49472733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e049356f91a7_23918701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e049356f91a7_23918701')) {function content_50e049356f91a7_23918701($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>