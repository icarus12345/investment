<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 09:43:52
         compiled from "application\templates\eye\11_service_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1788058a9054a3a6bf4-73640055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '757a407bda257554fe952f2b7f53bd8225175ab7' => 
    array (
      0 => 'application\\templates\\eye\\11_service_detail.tpl',
      1 => 1487472229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788058a9054a3a6bf4-73640055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a9054a47c227_64973976',
  'variables' => 
  array (
    'content_detail' => 0,
    'selected_cat' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9054a47c227_64973976')) {function content_58a9054a47c227_64973976($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
        <div class="becu">
            <div class="container">
            Service / <?php echo $_smarty_tpl->tpl_vars['selected_cat']->value->cat_title;?>
 / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>

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
                    <a href="<?php echo base_url(htmlspecialchars(((htmlspecialchars(('services/').($_smarty_tpl->tpl_vars['selected_cat']->value->cat_alias), ENT_QUOTES, 'UTF-8', true)).('/')).($_smarty_tpl->tpl_vars['prev']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="about-prev"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value->_title, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
                    <div class="about-menu"></div>
                    <a href="<?php echo base_url(htmlspecialchars(((htmlspecialchars(('services/').($_smarty_tpl->tpl_vars['selected_cat']->value->cat_alias), ENT_QUOTES, 'UTF-8', true)).('/')).($_smarty_tpl->tpl_vars['next']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="about-next"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['next']->value->_title, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
