<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 22:10:23
         compiled from "application\templates\investment\inc\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29015855555f63a375-46224263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3976c3cc7e6cdf905d6fa9ca770faa0bc65e7626' => 
    array (
      0 => 'application\\templates\\investment\\inc\\head.tpl',
      1 => 1481730592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29015855555f63a375-46224263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settting_data' => 0,
    'investment_cates' => 0,
    'foo' => 0,
    'service_cates' => 0,
    'actived_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855555fb06e85_71554275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855555fb06e85_71554275')) {function content_5855555fb06e85_71554275($_smarty_tpl) {?><header id="navbar" class="navbar navbar-fixed-top" role="banner">
    <!-- Menu [ -->
    <div class="">
            <div class="navbar-header">
                <a href="/" class="navbar-brand a">
                    Vietnam Property Investment
                </a>
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navigation">
                    <span>
                        <span class="icon-bar line-1"></span>
                        <span class="icon-bar line-2"></span>
                        <span class="icon-bar line-3"></span>
                    </span>
                </button>
            </div>
            <div class="socials-menu">
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['google'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-google-plus-square"></span></a>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['pinterest'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-pinterest-square"></span></a>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['twitter'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-twitter-square"></span></a>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['facebook'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-facebook-square"></span></a>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['rss'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-rss"></span></a>
            </div>
            <nav id="navigation" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li data-menu="home"><a href='/'>HOME</a></li>
                    <li data-menu="about"><a href='/about'>ABOUT</a></li>
                    <li data-menu="investing">
                        <a href="/investing-vietnam" >INVESTING VIETNAM</a>
                        <?php if ($_smarty_tpl->tpl_vars['investment_cates']->value) {?>
                        <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['investment_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                            <li><a href='/investing-vietnam/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_alias, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                            <?php } ?>
                        </ul>
                        <?php }?>
                    </li>
                    <li data-menu="service">
                        <a href="#" data-toggle="dropdown">SERVICES</a>
                        <?php if ($_smarty_tpl->tpl_vars['service_cates']->value) {?>
                        <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['service_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                            <li><a href='/service/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_alias, ENT_QUOTES, 'UTF-8', true);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                            <?php } ?>
                        </ul>
                        <?php }?>
                    </li>
                    <li data-menu="blogs"><a href='/blogs'>BLOG</a></li>
                    <li data-menu="gallery"><a href='/gallery'>GALLERY</a></li>
                    <li data-menu="fqa"><a href='/fqa'>FQA</a></li>
                    <li data-menu="policy"><a href='/privacy-policy'>PRIVACY POLICY</a></li>
                    <li data-menu="team"><a href='/team-conditions'>TEAMS & CONDITIONS</a></li>
                    <li data-menu="contact"><a href='/contact'>CONTACT</a></li>
                </ul>
            </nav>
    </div>
    <!-- Menu ] -->
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $('[data-menu="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['actived_menu']->value)===null||$tmp==='' ? '' : $tmp);?>
"]').addClass('active');
    })
    <?php echo '</script'; ?>
>
</header><?php }} ?>
