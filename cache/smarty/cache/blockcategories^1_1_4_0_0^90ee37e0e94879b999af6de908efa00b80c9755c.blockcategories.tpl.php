<?php /*%%SmartyHeaderCode:195997855350e04935df5ea1-13232961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ee37e0e94879b999af6de908efa00b80c9755c' => 
    array (
      0 => '/home/miudino/www/prestashop/modules/blockcategories/blockcategories.tpl',
      1 => 1356868102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195997855350e04935df5ea1-13232961',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e055ace07db2_62497756',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e055ace07db2_62497756')) {function content_50e055ace07db2_62497756($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categorías</p>
	<div class="block_content">
		<ul class="tree dhtml">
				</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>