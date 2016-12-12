<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:28:30
         compiled from "application\templates\investment\widget\partner-slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9692584bbcae264f44-90126934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ac3b4fcceabf78ebb8fe69cfb9b5645bf34ffa' => 
    array (
      0 => 'application\\templates\\investment\\widget\\partner-slider.tpl',
      1 => 1481358508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9692584bbcae264f44-90126934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partners' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bbcae30e0a7_74756477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bbcae30e0a7_74756477')) {function content_584bbcae30e0a7_74756477($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['partners']->value) {?>
<div class="partner-box">
    <div class="container">
        <div class="text-center">
            <div class="tit f24">OUR PARTNER</div>
        </div>
        <div class="owl-carousel" id="owl-partner">
            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
            <div class="item">
                <div class="nailthumb">
                    <div class="nailthumb-figure-9-16">
                        <a href="JavaScript:void(0)" class="nailthumb-container">
                            <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->image_src, ENT_QUOTES, 'UTF-8', true);?>
">
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</div>
<?php }?><?php }} ?>
