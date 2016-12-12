<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 15:14:55
         compiled from "application\templates\investment\invest-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25214584cec0010fa99-59930184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3065af672c025f2a7c1279354fec00889fd3981c' => 
    array (
      0 => 'application\\templates\\investment\\invest-detail.tpl',
      1 => 1481444090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25214584cec0010fa99-59930184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584cec001a1d42_09782840',
  'variables' => 
  array (
    'category' => 0,
    'contents' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584cec001a1d42_09782840')) {function content_584cec001a1d42_09782840($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">INVESTING IN VIETNAM</div>
        <ul>
            <li>Home</li>
            <li>Investing In VietNam</li>
            <li><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        </ul>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
<div>
<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
<div class="invest-box">
    <div class="desc">
        <div>
            <div>
                <div class="ckeditor">
                
                <h3 class="h3-1"><?php echo $_smarty_tpl->tpl_vars['foo']->value->title;?>
</h3>
                <div class="space-line"></div>
                <div class="space-line"></div>
                <?php echo $_smarty_tpl->tpl_vars['foo']->value->content_content;?>

                </div>
            </div>
        </div>
    </div>
    <div class="thumb">
        <div class="cover" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_thumb, ENT_QUOTES, 'UTF-8', true);?>
)"></div>
    </div>
</div>
<?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
