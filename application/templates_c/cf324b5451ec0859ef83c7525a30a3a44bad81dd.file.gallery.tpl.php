<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 09:22:49
         compiled from "application\templates\investment\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11665584c1e1b6f5cd2-79458258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf324b5451ec0859ef83c7525a30a3a44bad81dd' => 
    array (
      0 => 'application\\templates\\investment\\gallery.tpl',
      1 => 1481422962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11665584c1e1b6f5cd2-79458258',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584c1e1b763114_26815543',
  'variables' => 
  array (
    'gallery_cates' => 0,
    'foo' => 0,
    'gallery_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584c1e1b763114_26815543')) {function content_584c1e1b763114_26815543($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-box">
            <div class="tit">
                <div class="f32">GALLERY</div>
                <ul>
                    <li>Home</li>
                    <li><a href="#">Gallery</a></li>
                </ul>
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
                <p class="desc">
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

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/partner-slider.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
