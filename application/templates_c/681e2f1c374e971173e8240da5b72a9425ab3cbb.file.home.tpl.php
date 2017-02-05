<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-03 09:28:24
         compiled from "application\templates\funny\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28693585553ff6d0b64-64993507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681e2f1c374e971173e8240da5b72a9425ab3cbb' => 
    array (
      0 => 'application\\templates\\funny\\home.tpl',
      1 => 1486088876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28693585553ff6d0b64-64993507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_585553ff710a27_90711959',
  'variables' => 
  array (
    'entrys' => 0,
    'entry' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585553ff710a27_90711959')) {function content_585553ff710a27_90711959($_smarty_tpl) {?><div class="navbar navbar-app navbar-absolute-top">
    <div class="navbar-brand navbar-brand-center" ui-yield-to="title">
        Cười cái coi
    </div>
    <div class="btn-group pull-left">
        <div ui-toggle="uiSidebarLeft" class="btn sidebar-toggle">
            <i class="fa fa-bars"></i> Menu
        </div>
    </div>
    <div class="btn-group pull-right" >
        <div  class="btn">
            <i class="fa fa-user"></i> Login
        </div>
    </div>
</div>
<div class="app-body" ng-class="{loading: loading}">
    <div ng-show="loading" class="app-content-loading">
        <i class="fa fa-spinner fa-spin loading-spinner"></i>
    </div>
    <div class="app-content">
        <div class="scrollable">
            <div class="scrollable-content">
                <div class="list-group text-center">
                    <div class="list-group-item">
                        <h1>CƯỜI CÁI COI <small>1.0</small></h1>
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entrys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                    <div class="list-group-item transition" data-from="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value->_data['origin'])===null||$tmp==='' ? '' : $tmp);?>
" ng-class="activedId=='<?php echo $_smarty_tpl->tpl_vars['entry']->value->_id;?>
'?'actived':''">
                        <?php if ($_smarty_tpl->tpl_vars['entry']->value->_data['type']=="Image") {?>
                        <!-- <a href="#/image/detail/<?php echo $_smarty_tpl->tpl_vars['entry']->value->_id;?>
"> -->
                        <div ng-click="toggle(<?php echo $_smarty_tpl->tpl_vars['entry']->value->_id;?>
)" >
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_data['url'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <!-- </a> -->
                        <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->_data['type']=="Video") {?>
                        <div class="frame">
                            <iframe src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_data['url'], ENT_QUOTES, 'UTF-8', true);?>
" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->_data['type']=="youtube") {?>
                        <div class="youtube" ng-click="toggleVideo(<?php echo $_smarty_tpl->tpl_vars['entry']->value->_id;?>
,'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_data['id'], ENT_QUOTES, 'UTF-8', true);?>
')">
                            <iframe ng-if="activedId=='<?php echo $_smarty_tpl->tpl_vars['entry']->value->_id;?>
'" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_data['id'], ENT_QUOTES, 'UTF-8', true);?>
?autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen></iframe>
                            <img ng-show="activedId!='<?php echo $_smarty_tpl->tpl_vars['entry']->value->_id;?>
'" src="//img.youtube.com/vi/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_data['id'], ENT_QUOTES, 'UTF-8', true);?>
/maxresdefault.jpg"/>
                        </div>
                        <?php }?>
                        <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</h4>
                        <div class="social-action">
                            <div><span class="fa fa-thumbs-up"></span></div>
                            <div><span class="fa fa-thumbs-down"></span></div>
                            <div ng-click="showPost()"><span class="fa fa-comments"></span></div>
                            <div class="pull-right"><span class="fa fa-facebook"></span></div>
                            <div class="pull-right"><span class="fa fa-google"></span></div>
                            <div class="pull-right"><span class="fa fa-twitter"></span></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="pages"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
            </div>
        </div>
    </div>
</div>
<div ui-content-for="modals">
    <div ng-include="'funny/home/modal.html'"></div>
</div><?php }} ?>
