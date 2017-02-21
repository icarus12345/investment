<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 09:47:53
         compiled from "application\templates\eye\06_news_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2766958a8efffc15d57-05195248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dc8769c6c805c401840f5732ee5da421ee3219b' => 
    array (
      0 => 'application\\templates\\eye\\06_news_detail.tpl',
      1 => 1487472470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2766958a8efffc15d57-05195248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a8efffd8a6a9_26132069',
  'variables' => 
  array (
    'content_detail' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a8efffd8a6a9_26132069')) {function content_58a8efffd8a6a9_26132069($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
        <div class="becu">
            <div class="container">
            Home / Latest News / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
        <div class="about-detail">
            <div class="container">
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['content_detail']->value->_data['image']) {?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
" style="display:block;margin:auto;max-width: 100%" />
                    <?php }?>
                    <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css" >
                    <div class="ckeditor" style="padding:40px 0">
                        <?php echo $_smarty_tpl->tpl_vars['content_detail']->value->_data['content'];?>

                        <div class="clearfix"></div>
                    </div>
                    <div class="about-control">
                    <a href="<?php echo base_url(htmlspecialchars(('news/').($_smarty_tpl->tpl_vars['prev']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="about-prev"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value->_title, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
                    <a href="/news" class="about-menu"></a>
                    <a href="<?php echo base_url(htmlspecialchars(('news/').($_smarty_tpl->tpl_vars['next']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="about-next"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['next']->value->_title, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
