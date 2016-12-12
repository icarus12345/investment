<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-12 17:27:37
         compiled from "application\templates\investment\inc\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9844584df5c8e07533-55403431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2289f92f582f353b24e9cf9f0ca167469b1be2' => 
    array (
      0 => 'application\\templates\\investment\\inc\\head.tpl',
      1 => 1481534817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9844584df5c8e07533-55403431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584df5c8ef59e9_49937004',
  'variables' => 
  array (
    'settting_data' => 0,
    'investment_cates' => 0,
    'foo' => 0,
    'service_cates' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584df5c8ef59e9_49937004')) {function content_584df5c8ef59e9_49937004($_smarty_tpl) {?><header id="navbar" class="navbar navbar-fixed-top" role="banner">
    <!-- Menu [ -->
    <div class="">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">
                    VIETNAM'S PROPERTY INVESTMENT
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
"><span class="fa fa fa-google"></span></a>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['google'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-pinterest-square"></span></a>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['twitter'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-twitter"></span></a>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['facebook'])===null||$tmp==='' ? '' : $tmp);?>
"><span class="fa fa fa-facebook"></span></a>
            </div>
            <nav id="navigation" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href='/'>HOME</a></li>
                    <li><a href='/about'>ABOUT</a></li>
                    <li>
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
                    <li>
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
                    <li><a href='/blogs'>BLOG</a></li>
                    <li><a href='/gallery'>GALLERY</a></li>
                    <li><a href='/fqa'>FQA</a></li>
                    <li><a href='/privacy-policy'>PRIVACY POLICY</a></li>
                    <li><a href='/team-condition'>TEAM & CONDITIONS</a></li>
                    <li><a href='/contact'>CONTACT</a></li>
                </ul>
            </nav>
    </div>
    <!-- Menu ] -->
</header><?php }} ?>
