<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 19:31:00
         compiled from "application\templates\investment\gallery-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478584cbc08836fd8-94640628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebcb705a3dcd166fab183aa7f42f21405e55fc56' => 
    array (
      0 => 'application\\templates\\investment\\gallery-detail.tpl',
      1 => 1481459233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478584cbc08836fd8-94640628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584cbc088ce293_91091467',
  'variables' => 
  array (
    'gallery_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584cbc088ce293_91091467')) {function content_584cbc088ce293_91091467($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-box">
            <div class="tit">
                <div class="f32">GALLERY</div>
                <ul>
                    <li>Home</li>
                    <li>Gallery</li>
                    <li><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_title, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                </ul>
            </div>
        </div>
        <div class="gallery-detail-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-7">
                        <div class="gallery-left">
                            <div class="nailthumb">
                                <div class="nailthumb-figure-75">
                                    <div class="nailthumb-container ">
                                        <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image1_src'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                    <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image1_src'], ENT_QUOTES, 'UTF-8', true);?>
"
                                        data-fancybox-group="gallery"
                                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image1_title'], ENT_QUOTES, 'UTF-8', true);?>
" 
                                        class="nailthumb-mark fancybox">
                                        <div>
                                            <h3 class="h3-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image1_title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image1_desc'], ENT_QUOTES, 'UTF-8', true);?>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="nailthumb">
                                        <div class="nailthumb-figure-75">
                                            <div class="nailthumb-container">
                                                <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image2_src'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            </div>
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image2_src'], ENT_QUOTES, 'UTF-8', true);?>
" 
                                                data-fancybox-group="gallery"
                                                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image2_title'], ENT_QUOTES, 'UTF-8', true);?>
" 
                                                class="nailthumb-mark fancybox">
                                                <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image2_title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="nailthumb">
                                        <div class="nailthumb-figure-75">
                                            <div class="nailthumb-container">
                                                <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image3_src'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            </div>
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image3_src'], ENT_QUOTES, 'UTF-8', true);?>
" 
                                                data-fancybox-group="gallery"
                                                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image3_title'], ENT_QUOTES, 'UTF-8', true);?>
" 
                                                class="nailthumb-mark fancybox">
                                                <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image3_title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="nailthumb">
                                <div class="nailthumb-figure-9-16">
                                    <div class="nailthumb-container">
                                        <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image4_src'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image4_src'], ENT_QUOTES, 'UTF-8', true);?>
"
                                        data-fancybox-group="gallery"
                                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image4_title'], ENT_QUOTES, 'UTF-8', true);?>
" 
                                        class="nailthumb-mark fancybox">
                                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_data']->value->data_data['image4_title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    </a>
                                </div>
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-5">
                        <div class="gallery-right">
                            <h4 class="h4-1">OVERVIEW</h4>
                            <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
                            <div class="ckeditor pull-top pull-bottom gray"><?php echo $_smarty_tpl->tpl_vars['gallery_data']->value->data_data['overview'];?>
</div>
                            <hr/>
                            <h4 class="h4-1">LOCATION</h4>
                            <div class="ckeditor pull-top pull-bottom gray"><?php echo $_smarty_tpl->tpl_vars['gallery_data']->value->data_data['location'];?>
</div>
                            <hr/>
                            <h4 class="h4-1">FACILITIES</h4>
                            <div class="ckeditor pull-top pull-bottom gray"><?php echo $_smarty_tpl->tpl_vars['gallery_data']->value->data_data['facilcities'];?>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="/libraries/plugin/fancy/source/jquery.fancybox.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="/libraries/plugin/fancy/source/jquery.fancybox.css">
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function() {
                $('.fancybox').fancybox();
            });
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
