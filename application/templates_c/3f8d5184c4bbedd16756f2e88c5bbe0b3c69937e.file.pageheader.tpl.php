<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-12 14:41:16
         compiled from "application\templates\dashboard\cp\serialize\pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:498958edda1c9fd3f3-48646400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8d5184c4bbedd16756f2e88c5bbe0b3c69937e' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\serialize\\pageheader.tpl',
      1 => 1484552883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498958edda1c9fd3f3-48646400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entry_setting' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58edda1ca33831_84959269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58edda1ca33831_84959269')) {function content_58edda1ca33831_84959269($_smarty_tpl) {?><!-- BEGIN PAGE HEADER-->

<h3 class="page-title">
	Dashboard <small><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry_setting']->value->_title)===null||$tmp==='' ? 'Serialize' : $tmp);?>
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
			<a href="#"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry_setting']->value->_title)===null||$tmp==='' ? 'Serialize' : $tmp);?>
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
