<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 09:48:02
         compiled from "application\templates\eye\05_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1382458a7df32eaf904-40618280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0f6def7e513b5b712f1e09cbb172b928279361' => 
    array (
      0 => 'application\\templates\\eye\\05_news.tpl',
      1 => 1487472320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382458a7df32eaf904-40618280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a7df32f2a947_65774780',
  'variables' => 
  array (
    'entrys' => 0,
    'foo' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7df32f2a947_65774780')) {function content_58a7df32f2a947_65774780($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\investment\\application\\third_party\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">Latest News</div>
        </div>
        <div class="becu">
            <div class="container">
            Home / Latest News
            </div>
        </div>
        <div class="latest-news">
            <div class="container">
                <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entrys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                    <div class="item news-item">
                        <div class="col-sm-5">
                            <div class="row">
                            <div class="nailthumb">
                                <div class="nailthumb-figure">
                                    <a href="<?php echo base_url(htmlspecialchars(('news/').($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="nailthumb-container">
                                        <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    </a>
                                </div>
                            </div>
                            <div class="date"><div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['foo']->value->_insert,"%d");?>
</div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['foo']->value->_insert,"%b");?>
</div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="info">
                                <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="desc"><div class="line-clamp-f-5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</div></div>
                                <a class='a' href="<?php echo base_url(htmlspecialchars(('news/').($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
">Read more</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <div class=" text-center">
                        <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

                    </div>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
