<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 09:41:25
         compiled from "application\templates\eye\10_services.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3143158a8fee1883951-51533411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94d5429a80691ea4cbc8687deb8121e75bbbab2f' => 
    array (
      0 => 'application\\templates\\eye\\10_services.tpl',
      1 => 1487472082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3143158a8fee1883951-51533411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a8fee18c72f5_55484785',
  'variables' => 
  array (
    'selected_cat' => 0,
    'aServiceCate' => 0,
    'foo' => 0,
    'aServices' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a8fee18c72f5_55484785')) {function content_58a8fee18c72f5_55484785($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['selected_cat']->value->cat_title)===null||$tmp==='' ? 'Services' : $tmp);?>
</div>
        </div>
        <div class="becu">
            <div class="container">
            Services <?php if (isset($_smarty_tpl->tpl_vars['selected_cat']->value)) {?> / <?php echo $_smarty_tpl->tpl_vars['selected_cat']->value->cat_title;
}?>
            </div>
        </div>
        <div class="about-list cls meet-the-team">
            <div class="container">
                <!-- <div> -->
                <span class="btns">
                    <a href="/services" class="btn btn-white <?php if (!isset($_smarty_tpl->tpl_vars['selected_cat']->value)) {?>actived<?php }?>">All</a>
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aServiceCate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['selected_cat']->value)&&$_smarty_tpl->tpl_vars['selected_cat']->value->cat_id==$_smarty_tpl->tpl_vars['foo']->value->cat_id) {?>
                    <a href="<?php echo base_url(htmlspecialchars(('services/').($_smarty_tpl->tpl_vars['foo']->value->cat_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="btn btn-white actived"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php } else { ?>
                    <a href="<?php echo base_url(htmlspecialchars(('services/').($_smarty_tpl->tpl_vars['foo']->value->cat_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="btn btn-white"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php }?>
                    <?php } ?>
                </span>
                <!-- </div> -->
                <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                    <div class="item col-sm-6 col-md-4">
                        <a href="<?php echo base_url(htmlspecialchars(((htmlspecialchars(('services/').($_smarty_tpl->tpl_vars['foo']->value->cat_alias), ENT_QUOTES, 'UTF-8', true)).('/')).($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="nailthumb">
                            <div class="nailthumb-figure-75">
                                <div class="nailthumb-container">
                                    <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </div>
                            </div>
                        </a>
                        <div>
                            <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
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
