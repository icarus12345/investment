<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-12 14:41:16
         compiled from "application\templates\dashboard\inc\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2435958edda1c640e63-23494000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25b84b9477c08309cd584b6eb034e4a1ce663c8f' => 
    array (
      0 => 'application\\templates\\dashboard\\inc\\sidebar.tpl',
      1 => 1484552883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435958edda1c640e63-23494000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_menu' => 0,
    'foo' => 0,
    'sfoo' => 0,
    'tfoo' => 0,
    'ffoo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58edda1c7b1fc6_14983345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58edda1c7b1fc6_14983345')) {function content_58edda1c7b1fc6_14983345($_smarty_tpl) {?><!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu -page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="sidebar-toggler-wrapper">
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler">
				</div>
				<!-- END SIDEBAR TOGGLER BUTTON -->
			</li>
			
			<li class="sidebar-search-wrapper">
				<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				<form class="sidebar-search " action="extra_search.html" method="POST">
					<a href="javascript:;" class="remove">
					<i class="icon-close"></i>
					</a>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
						</span>
					</div>
				</form>
				<!-- END RESPONSIVE QUICK SEARCH FORM -->
			</li>
			<li class="heading">
				<h3 class="uppercase">Dashboard</h3>
			</li>
			<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dashboard_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
			<li>
				<a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value->cat_link)===null||$tmp==='' ? '#' : $tmp);?>
">
					<i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value->cat_thumb)===null||$tmp==='' ? 'fa fa-bars' : $tmp);?>
"></i>
					<span class="title"><?php echo $_smarty_tpl->tpl_vars['foo']->value->cat_title;?>
</span>
					<?php if (count($_smarty_tpl->tpl_vars['foo']->value->cat_children)>0) {?>
					<span class="arrow"></span>
					<?php }?>
				</a>
				<?php if (count($_smarty_tpl->tpl_vars['foo']->value->cat_children)>0) {?>
				<ul class="sub-menu">
					<?php  $_smarty_tpl->tpl_vars['sfoo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sfoo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foo']->value->cat_children; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sfoo']->key => $_smarty_tpl->tpl_vars['sfoo']->value) {
$_smarty_tpl->tpl_vars['sfoo']->_loop = true;
?>
					<li >
						<a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sfoo']->value->cat_link)===null||$tmp==='' ? '#' : $tmp);?>
">
							<i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['sfoo']->value->cat_thumb)===null||$tmp==='' ? 'fa fa-folder-open-o' : $tmp);?>
"></i>
							<?php echo $_smarty_tpl->tpl_vars['sfoo']->value->cat_title;?>

							<?php if (count($_smarty_tpl->tpl_vars['sfoo']->value->cat_children)>0) {?>
							<span class="arrow"></span>
							<?php }?>
						</a>
						<?php if (count($_smarty_tpl->tpl_vars['sfoo']->value->cat_children)>0) {?>
						<ul class="sub-menu">
							<?php  $_smarty_tpl->tpl_vars['tfoo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tfoo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sfoo']->value->cat_children; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tfoo']->key => $_smarty_tpl->tpl_vars['tfoo']->value) {
$_smarty_tpl->tpl_vars['tfoo']->_loop = true;
?>
							<li >
								<a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tfoo']->value->cat_link)===null||$tmp==='' ? '#' : $tmp);?>
">
									<i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tfoo']->value->cat_thumb)===null||$tmp==='' ? 'fa fa-folder-open-o' : $tmp);?>
"></i>
									<?php echo $_smarty_tpl->tpl_vars['tfoo']->value->cat_title;?>

									<?php if (count($_smarty_tpl->tpl_vars['tfoo']->value->cat_children)>0) {?>
									<span class="arrow"></span>
									<?php }?>
								</a>
								<?php if (count($_smarty_tpl->tpl_vars['tfoo']->value->cat_children)>0) {?>
								<ul class="sub-menu">
									<?php  $_smarty_tpl->tpl_vars['ffoo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ffoo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tfoo']->value->cat_children; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ffoo']->key => $_smarty_tpl->tpl_vars['ffoo']->value) {
$_smarty_tpl->tpl_vars['ffoo']->_loop = true;
?>
									<li >
										<a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ffoo']->value->cat_link)===null||$tmp==='' ? '#' : $tmp);?>
">
											<i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ffoo']->value->cat_thumb)===null||$tmp==='' ? 'fa fa-folder-open-o' : $tmp);?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['ffoo']->value->cat_title;?>

										</a>
									</li>
									<?php } ?>
								</ul>
								<?php }?>
							</li>
							<?php } ?>
						</ul>
						<?php }?>
					</li>
					<?php } ?>
				</ul>
				<?php }?>
			</li>
			<?php } ?>
			<li class="heading">
				<h3 class="uppercase">More</h3>
			</li>
			<?php if ($_SESSION['auth']['user']->ause_authority=='Administrator') {?>
			<li >
				<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">Feature</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li >
						<a href="index.html">
						<i class="icon-user"></i>
						User Option</a>
					</li>
					<li>
						<a href="/dashboard/cp/category/viewport/111135/cms">
						<i class="icon-folder"></i>
						Dashboard Menu</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-graph"></i>
						New Dashboard #2</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">eCommerce</span>
					<span class="arrow open"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="#">
						<i class="icon-home"></i>
						Dashboard</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-basket"></i>
						Orders</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-tag"></i>
						Order View</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-handbag"></i>
							Products
							<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#">
									<i class="icon-home"></i>
									Category
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-home"></i>
									Product List
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-home"></i>
									Add Product
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
						<i class="icon-pencil"></i>
						Product Edit</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-user"></i>
						Customer</a>
					</li>
				</ul>
			</li>
			<?php }?>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<!-- END SIDEBAR --><?php }} ?>
