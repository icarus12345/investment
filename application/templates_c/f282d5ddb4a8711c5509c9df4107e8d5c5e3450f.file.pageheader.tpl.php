<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 23:47:40
         compiled from "application\templates\dashboard\cp\product\pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5755584c31ac3e1509-11061578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f282d5ddb4a8711c5509c9df4107e8d5c5e3450f' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\product\\pageheader.tpl',
      1 => 1436451000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5755584c31ac3e1509-11061578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584c31ac3fdec1_76440686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584c31ac3fdec1_76440686')) {function content_584c31ac3fdec1_76440686($_smarty_tpl) {?><!-- BEGIN PAGE HEADER-->

<h3 class="page-title">
	Dashboard <small><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</small>
</h3>

<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="/dashboard">Dashboard</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="/dashboard/cp">Content Provider</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#"><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</a>
		</li>
	</ul>
	<!-- <div class="page-toolbar">
		<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
			<i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
		</div>
	</div> -->
</div>
<!-- END PAGE HEADER--><?php }} ?>
