<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-12 14:41:16
         compiled from "application\templates\dashboard\inc\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:472258edda1cb12977-88968332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33064a5dce60eff9226c8d337ecaf79c3eb6f758' => 
    array (
      0 => 'application\\templates\\dashboard\\inc\\footer.tpl',
      1 => 1484552883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '472258edda1cb12977-88968332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58edda1cb8f432_56053061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58edda1cb8f432_56053061')) {function content_58edda1cb8f432_56053061($_smarty_tpl) {?><!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->

<?php echo '<script'; ?>
>
jQuery(document).ready(function() {    
	Metronic.init(); // init metronic core componets
	Layout.init(); // init layout
	// QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features 
	Index.init();   
	// Index.initDashboardDaterange();
	//Index.initJQVMAP(); // init index page's custom scripts
	Index.initCalendar(); // init index page's custom scripts
	//Index.initCharts(); // init index page's custom scripts
	Index.initChat();
	//Index.initMiniCharts();
	// Tasks.initDashboardWidget();
	//EcommerceProducts.init();
	ComponentsContextMenu.init();
	UIToastr.init();

	var _menu = $('.page-sidebar-menu a[href^="/<?php echo uri_string('');?>
"]');
	if(_menu.length==1){
		var _menus = _menu.parents('li');
		_menus.find('>a').click();
		$(_menus[_menus.length-1]).addClass('active start');
		$(_menus[_menus.length-1]).find('>a>.title').after('<span class="selected"></span>');
		$('.page-sidebar-menu a[href^="/<?php echo uri_string('');?>
"]').parent().addClass('open')
	}else{
		$('.page-sidebar-menu>li:nth-child(4)>a').click()
		$('.page-sidebar-menu>li:nth-child(4)').addClass('active start');
		$('.page-sidebar-menu>li:nth-child(4)>a>.title').after('<span class="selected"></span>');
	}
});
<?php echo '</script'; ?>
>
<!-- END JAVASCRIPTS --><?php }} ?>
