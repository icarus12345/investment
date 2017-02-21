<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 08:46:56
         compiled from "application\templates\eye\09_referrals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2407858a8f9107ba665-56771372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c106c88cea01d20e76a35e22ba7e8e98d7954b46' => 
    array (
      0 => 'application\\templates\\eye\\09_referrals.tpl',
      1 => 1487468680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2407858a8f9107ba665-56771372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a8f910861cd9_12379785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a8f910861cd9_12379785')) {function content_58a8f910861cd9_12379785($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
        <div class="becu">
            <div class="container">
            About / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
        <div class="about-detail">
            <div class="container">
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['content_detail']->value->_data['image']) {?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
" style="width: 100%" />
                    <?php }?>
                    <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css" >
                    <div class="ckeditor" style="padding:40px 0">
                        <?php echo $_smarty_tpl->tpl_vars['content_detail']->value->_data['content'];?>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
