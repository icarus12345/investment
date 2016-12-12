<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 21:04:53
         compiled from "application\templates\investment\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12937584d2c534d6713-78247459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9b6054c549a67defcd66d452dc4a3059b0ab0f5' => 
    array (
      0 => 'application\\templates\\investment\\home.tpl',
      1 => 1481465087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12937584d2c534d6713-78247459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584d2c53595659_68023039',
  'variables' => 
  array (
    'investment_cates' => 0,
    'foo' => 0,
    'gallery_cates' => 0,
    'gallery_data' => 0,
    'feature_blogs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584d2c53595659_68023039')) {function content_584d2c53595659_68023039($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\investment\\application\\third_party\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/slider.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="about-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-4 left">
                        <div class="tit f24">ABOUT <br/>PROPERTY INVESTMENT</div>
                    </div>
                    <div class="col-sm-7 col-md-8 right">
                    <p>
                        Linkedproperties is a small group of individuals that have experienced property investment in Australia, UK and Vietnam for over 5+ years. Property investments is our passion and we understand the hurdles when you are seeking for information from the countries of interests, but have lack of information or who to go to. This website is dedicated for individuals with interest to invest in properties in Vietnam.
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="out-service-box cls">
            <div class="left cover" style="background-image:url(assets/investment/images/service-bg.jpg)">
                <div class="left-content">
                    <div class="lab f24">INVESTING IN VIETNAM</div>
                    <div class="tit">Welcoming Investors to the world of Vietnam property investment.
We showcase and share our experiences and give you up to date information on where the market is heading.</div>
                    <a href="/investing-vietnam" class="btn btn-warning"><span>VIEW MORE</span></a>
                </div>
            </div>
            <div class="right">
                <div class="tit f24">OUR SERVICES</div>
                <div class="">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['investment_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                    <a href='/investing-vietnam/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_alias, ENT_QUOTES, 'UTF-8', true);?>
' class="item">
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="gallery-box">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4 left">
                        <div class="tit f24">GALLERY ABOUT <br/>PROPERTY IN VIETNAM</div>
                    </div>
                    <div class="col-md-8 right">
                        <ul class="gal-tab nav nav-tabs">
                            <li class="active"><a href='JavaScript:void(0)' onclick='initGallery()' data-toggle="tab" href="#home">All Gallery</a>
                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                            <li><a href='JavaScript:void(0)' onclick='initGallery(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_id, ENT_QUOTES, 'UTF-8', true);?>
)' data-toggle="tab" href="#home"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <p class="desc" style="max-width:480px">
                    Mauris eleifend nisi justo, in volutpat magna scelerisque eget. In volutpat magna scelerisque eget. Interdum et malesuada.
                </p>
            </div>
            <div class="owl-carousel" id="owl-gallery"></div>
            <div class="owl-carousel" id="owl-gallery2"></div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            var data = <?php echo json_encode($_smarty_tpl->tpl_vars['gallery_data']->value);?>
;
        <?php echo '</script'; ?>
>
        <div class="blog-box">
            <div class="container">
                <div class="text-center">
                    <div class="tit f24">BLOG POST</div>
                    <p class="desc" style="max-width:720px;margin:auto">
                        We always update the latest news about the market of property investment in Vietnam, with hope will help you are the informations in investment market at Vietnam.eleifend nisi justo.
                    </p>
                </div>
                <div class="owl-carousel" id="owl-blog">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                    <div class="item">
                        <div class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <a href="/blogs/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_alias, ENT_QUOTES, 'UTF-8', true);?>
" class="nailthumb-container">
                                    <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_thumb, ENT_QUOTES, 'UTF-8', true);?>
">
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="cat"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="title"><a href="/blogs/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_alias, ENT_QUOTES, 'UTF-8', true);?>
"><div class="line-clamp-f-2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_title, ENT_QUOTES, 'UTF-8', true);?>
</div></a></div>
                            <div class="date">
                                <span class="fa fa-eye"></span> 0 &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fa fa-comments"></span> 0
                                <div class="pull-right">
                                    <span class="fa fa-calendar"></span> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['foo']->value->content_insert,'%e %b,%Y');?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/partner-slider.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
