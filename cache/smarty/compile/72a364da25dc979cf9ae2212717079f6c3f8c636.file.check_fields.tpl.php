<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 21:20:54
         compiled from "/home/miudino/www/prestashop/admin131415/themes/default/template/controllers/products/multishop/check_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91135174450e0a2267198b5-70684150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72a364da25dc979cf9ae2212717079f6c3f8c636' => 
    array (
      0 => '/home/miudino/www/prestashop/admin131415/themes/default/template/controllers/products/multishop/check_fields.tpl',
      1 => 1356869460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91135174450e0a2267198b5-70684150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'product_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e0a226758881_14379085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e0a226758881_14379085')) {function content_50e0a226758881_14379085($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value){?>
	<label style="float: none">
		<input type="checkbox" style="vertical-align: text-bottom" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', this.checked); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()" />
		<?php echo smartyTranslate(array('s'=>'Check/uncheck all (you are editing this page for several shops, some fields like "name" or "price" are disabled, you have to check these fields in order to edit them for these shops)'),$_smarty_tpl);?>

	</label>
<?php }?><?php }} ?>