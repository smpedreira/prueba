<?php /* Smarty version Smarty-3.1.8, created on 2012-12-30 15:01:25
         compiled from "/home/miudino/www/prestashop/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159115439050e049359deda2-15909022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5fb27535595d2b489d5c3ce64487d61554ee97' => 
    array (
      0 => '/home/miudino/www/prestashop/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1356868147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159115439050e049359deda2-15909022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e049359fe293_23251352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e049359fe293_23251352')) {function content_50e049359fe293_23251352($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/miudino/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	</div>

	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
		<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
<?php }?><?php }} ?>