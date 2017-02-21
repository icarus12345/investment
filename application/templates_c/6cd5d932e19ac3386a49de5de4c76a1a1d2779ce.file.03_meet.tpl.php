<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-12 11:34:42
         compiled from "application\templates\eye\03_meet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27311589fe289ebc555-75610283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd5d932e19ac3386a49de5de4c76a1a1d2779ce' => 
    array (
      0 => 'application\\templates\\eye\\03_meet.tpl',
      1 => 1486874079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27311589fe289ebc555-75610283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589fe289f27df0_71298063',
  'variables' => 
  array (
    'aTeams' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589fe289f27df0_71298063')) {function content_589fe289f27df0_71298063($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">Meet The Team</div>
        </div>
        <div class="becu">
            <div class="container">
            About / Meet The Team
            </div>
        </div>
        <div class="about-list cls meet-the-team">
            <div class="container">
                <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aTeams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                    <div class="item col-sm-6 col-md-4">
                        <a href="#" class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <div class="nailthumb-container">
                                    <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </div>
                            </div>
                        </a>
                        <div>
                            <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
 / <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['position'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
