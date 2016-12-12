<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 21:15:47
         compiled from "application\templates\investment\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24275584d490d9e5913-26105754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b899f207c30fe6a88e0e4ca575717238100c90d' => 
    array (
      0 => 'application\\templates\\investment\\about.tpl',
      1 => 1481465744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24275584d490d9e5913-26105754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584d490da4fb57_64501169',
  'variables' => 
  array (
    'cdata' => 0,
    'testimonials' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584d490da4fb57_64501169')) {function content_584d490da4fb57_64501169($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">ABOUT US</div>
        <ul>
            <li>Home</li>
            <li><a href="#">About us</a></li>
        </ul>
    </div>
</div>
        <div class="gray-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-bottom pull-top">
                        <div class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <a href="JavaScript:void(0)" class="nailthumb-container">
                                    <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdata']->value->data_data['thumb'], ENT_QUOTES, 'UTF-8', true);?>
">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 pull-bottom pull-top">
                        <h4 class="a"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdata']->value->data_title, ENT_QUOTES, 'UTF-8', true);?>
</i></h4>
                        <div class="pull-bottom pull-top"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdata']->value->data_data['brief'], ENT_QUOTES, 'UTF-8', true);?>
</strong></div>
                        <p class="word-wrap gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cdata']->value->data_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                        <img src="/assets/investment/images/sign.png" class="pull-right pull-bottom pull-top">
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
        <div class="white-box">
            <div class="container">
                <div class="ckeditor">
                    <?php echo $_smarty_tpl->tpl_vars['cdata']->value->data_data['content'];?>

                </div>
            </div>
        </div>
        <div class="owl-carousel" id="owl-testimonial">
            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
            <div class="item cover" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->image_src, ENT_QUOTES, 'UTF-8', true);?>
)">
                <div class="container">
                    <div class="word-wrap"><h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->image_title, ENT_QUOTES, 'UTF-8', true);?>
</h4><br/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->image_desc, ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
            </div>
            <?php } ?>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/partner-slider.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
