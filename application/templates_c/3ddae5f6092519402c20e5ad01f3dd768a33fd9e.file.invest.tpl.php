<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 15:24:12
         compiled from "application\templates\investment\invest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14878584cd2a041db79-06400420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddae5f6092519402c20e5ad01f3dd768a33fd9e' => 
    array (
      0 => 'application\\templates\\investment\\invest.tpl',
      1 => 1481444532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14878584cd2a041db79-06400420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584cd2a0485760_89159733',
  'variables' => 
  array (
    'investment_cates' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584cd2a0485760_89159733')) {function content_584cd2a0485760_89159733($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">INVESTING IN VIETNAM</div>
        <ul>
            <li>Home</li>
            <li><a href="#">Investing In VietNam</a></li>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <h2>WHAT WE DO ?</h2>
        <img src="/assets/investment/images/hr.png">
        <p class="gray pull-top pull-bottom">Property investments is our passion and we understand the hurdles when you are seeking for information from the countries of interests, but have lack of information or who to go to. This website is dedicated for individuals with interest to invest in properties in Vietnam; one of the fastest growing economy in South East Asia. Vietnam has opened its economy to the world in the past 15 years with every changing regulations to become one of the most competitive trading market in South East Asia.</p>
        <div class="space-line"></div>
        <div class="space-line"></div>
        <div class="row invest-items">
            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['investment_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
            <div class="col-sm-6 col-md-4">
                
                <div class="nailthumb">
                    <div class="nailthumb-figure-75">
                        <div class="nailthumb-container">
                            <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_thumb, ENT_QUOTES, 'UTF-8', true);?>
">
                        </div>
                        <a href="/investing-vietnam/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_alias, ENT_QUOTES, 'UTF-8', true);?>
" 
                            
                            class="nailthumb-mark">
                            <div class="f20"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        </a>
                    </div>
                </div>
                <div class="space-line"></div>
                <div class="space-line"></div>
            </div>
            <?php }
if (!$_smarty_tpl->tpl_vars['foo']->_loop) {
?>
            <div class="text-center" style="padding:80px 0">No data to display.</div>
            <?php } ?>
            
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
