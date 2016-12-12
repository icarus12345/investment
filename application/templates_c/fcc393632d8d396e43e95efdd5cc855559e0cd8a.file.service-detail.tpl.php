<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 20:55:51
         compiled from "application\templates\investment\service-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8062584d21003a8746-84328732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc393632d8d396e43e95efdd5cc855559e0cd8a' => 
    array (
      0 => 'application\\templates\\investment\\service-detail.tpl',
      1 => 1481464544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8062584d21003a8746-84328732',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584d2100453018_71044845',
  'variables' => 
  array (
    'category' => 0,
    'contents' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584d2100453018_71044845')) {function content_584d2100453018_71044845($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">OUR SERVICES</div>
        <ul>
            <li>Home</li>
            <li>Services</li>
            <li><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        </ul>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
<div class="gray-box">
    <div class="space-line"></div>
    <div class="space-line"></div>
    <div class="container">
    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
        <div class="row service-box">
            <div class="col-sm-6 thumb">
                <img style="max-width:100%" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_thumb, ENT_QUOTES, 'UTF-8', true);?>
">
                <div class="space-line"></div>
                <div class="space-line"></div>
            </div>
            <div class="col-sm-6">
                <div class="ckeditor">
                    <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_title, ENT_QUOTES, 'UTF-8', true);?>
</h4>
                    <div class="space-line"></div>
                    <?php echo $_smarty_tpl->tpl_vars['foo']->value->content_content;?>

                </div>
                <div class="space-line"></div>
                <div class="space-line"></div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['category']->value->cat_id==469) {?>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/stepbystep.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<div class="white-box">
    <div class="container step-by-step text-center">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <h2>SEND INFO GET ADVICE FROM <span class="a">VIETNAM PROPERTY INVESTMENT</span> TEAM</h2>
        <div class="space-line"></div>
        <div class="space-line"></div>
        <img src="/assets/investment/images/hr-gray.png">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/sendrequest.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="space-line"></div>
        <div class="space-line"></div>
    </div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/partner-slider.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
