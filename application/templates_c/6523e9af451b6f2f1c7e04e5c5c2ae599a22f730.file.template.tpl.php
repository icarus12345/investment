<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-12 16:12:17
         compiled from "application\templates\creative\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2394258edddc851ecc0-71890041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6523e9af451b6f2f1c7e04e5c5c2ae599a22f730' => 
    array (
      0 => 'application\\templates\\creative\\template.tpl',
      1 => 1491988334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2394258edddc851ecc0-71890041',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58edddc85200e7_48263811',
  'variables' => 
  array (
    'sliderData' => 0,
    'i' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58edddc85200e7_48263811')) {function content_58edddc85200e7_48263811($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/creative/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <body class="full-page">
        <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/creative/inc/header.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <span class="slider-nav prev">
            <span class="arrow"></span>
            <span class="number">
                <span class="left"></span>
                <span class="middle"></span>
                <span class="right"></span>
            </span>
        </span>
        <span class="slider-nav next">
            <span class="arrow"></span>
            <span class="number">
                <span class="left">2</span>
                <span class="middle"></span>
                <span class="right"></span>
            </span>
        </span>
        <div id="fullpage">
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sliderData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['entry']->key;
?>

            <div class="section" data-index="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                <div class="section-image">
                    <div data-pos="tl"><div><div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['entry']->value->_data['image'];?>
)" class="cover slider-bg"></div></div></div>
                    <div data-pos="tr"><div><div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['entry']->value->_data['image'];?>
)" class="cover slider-bg"></div></div></div>
                    <div data-pos="bl"><div><div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['entry']->value->_data['image'];?>
)" class="cover slider-bg"></div></div></div>
                    <div data-pos="br"><div><div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['entry']->value->_data['image'];?>
)" class="cover slider-bg"></div></div></div>
                </div>
                <div class="slider-cap">
                    <div class="cap1">
                        <div class="capitalize text-animation">
                            <?php echo $_smarty_tpl->tpl_vars['entry']->value->_data['desc'];?>

                        </div>
                    </div>
                    <h2 class="delay-1 text-animation-2"><?php echo $_smarty_tpl->tpl_vars['entry']->value->_title;?>
</h2>
                    <a class="btn-white text-animation-2 delay-2" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->_data['url'];?>
">
                        Xem Thêm
                    </a>
                </div>
                
            </div>
            <?php } ?>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function() {
                
            });
        <?php echo '</script'; ?>
>
        <footer>
            <div class="socials">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google"></span></a>
            </div>
            <div class="copyright">&copy; 2016 All right reserved. Development with <span class="fa fa-heart"></span> by <a href="#">Creative Design</a></div>
        </footer>


<?php }} ?>
