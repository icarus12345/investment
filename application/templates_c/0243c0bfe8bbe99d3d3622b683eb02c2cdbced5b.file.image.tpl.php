<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-22 12:56:49
         compiled from "application\templates\funny\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20255585635793f2ea0-81447312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0243c0bfe8bbe99d3d3622b683eb02c2cdbced5b' => 
    array (
      0 => 'application\\templates\\funny\\image.tpl',
      1 => 1482386186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20255585635793f2ea0-81447312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5856357942fe63_51583728',
  'variables' => 
  array (
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5856357942fe63_51583728')) {function content_5856357942fe63_51583728($_smarty_tpl) {?><div ui-content-for="title">
  <span>Hình ảnh</span>
</div>

<div class="navbar navbar-app navbar-absolute-bottom">
    <div class="btn-group justified">
      <span  class="btn btn-navbar"><i class="fa fa-back fa-navbar"></i> Trang chủ</span>
      <a href="#/image/add" class="btn btn-navbar"><i class="fa fa-remove fa-navbar"></i> Tiếp tục</a>
    </div>
</div>

<div class="app-body" ng-class="{loading: loading}">
    <div ng-show="loading" class="app-content-loading">
        <i class="fa fa-spinner fa-spin loading-spinner"></i>
    </div>
    <div class="app-content">
        <div class="scrollable" >  
            <div class="scrollable-content">
                <div class="list-group text-center" >
                    <div class="list-group-item">
                        <h1>CƯỜI CÁI COI <small>1.0</small></h1>
                    </div>
                    <div class="list-group-item">
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
                        <div class="youtube play">
                            <iframe src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_data['id'], ENT_QUOTES, 'UTF-8', true);?>
?autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen></iframe>
                            <!-- <img ng-show="activedId!='<?php echo $_smarty_tpl->tpl_vars['entry']->value->_id;?>
'" src="//img.youtube.com/vi/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value->_data['id'], ENT_QUOTES, 'UTF-8', true);?>
/maxresdefault.jpg"/> -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
