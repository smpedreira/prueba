<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:01:26
         compiled from "/home/miudino/www/prestashop/modules/blockcontact/blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13148050750e0493667a148-17522559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e175839158ae8c1b9522e44d21391979915cfdf2' => 
    array (
      0 => '/home/miudino/www/prestashop/modules/blockcontact/blockcontact.tpl',
      1 => 1356868106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13148050750e0493667a148-17522559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e0493669f6c6_53107727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e0493669f6c6_53107727')) {function content_50e0493669f6c6_53107727($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/miudino/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<div id="contact_block" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
	<div class="block_content clearfix">
			<p><?php echo smartyTranslate(array('s'=>'Our hotline is available 24/7','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!=''){?><p class="tel"><span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['telnumber']->value, 'htmlall', 'UTF-8');?>
</p><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['email']->value!=''){?><a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact our hotline','mod'=>'blockcontact'),$_smarty_tpl);?>
</a><?php }?>
	</div>
</div>
<?php }} ?>