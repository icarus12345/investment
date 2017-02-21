<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 08:41:01
         compiled from "application\templates\eye\08_patient_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:785558a8f689b77a69-57081991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0331cfbc597b0ca26d0238272cf264b851f4bf63' => 
    array (
      0 => 'application\\templates\\eye\\08_patient_detail.tpl',
      1 => 1487468456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '785558a8f689b77a69-57081991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a8f689c454c1_10704513',
  'variables' => 
  array (
    'content_detail' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a8f689c454c1_10704513')) {function content_58a8f689c454c1_10704513($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
        <div class="becu">
            <div class="container">
            About / Patients / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->_title, ENT_QUOTES, 'UTF-8', true);?>

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
                    <div class="about-control">
                    <a href="<?php echo base_url(htmlspecialchars(('patients/').($_smarty_tpl->tpl_vars['prev']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="about-prev"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value->_title, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
                    <a href="/patients" class="about-menu"></a>
                    <a href="<?php echo base_url(htmlspecialchars(('patients/').($_smarty_tpl->tpl_vars['next']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="about-next"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['next']->value->_title, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
