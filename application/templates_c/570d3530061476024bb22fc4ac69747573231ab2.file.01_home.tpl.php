<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-17 10:15:20
         compiled from "application\templates\eye\01_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2166158f43348536442-48642782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570d3530061476024bb22fc4ac69747573231ab2' => 
    array (
      0 => 'application\\templates\\eye\\01_home.tpl',
      1 => 1488157394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2166158f43348536442-48642782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'aContents' => 0,
    'foo' => 0,
    'aAbouts' => 0,
    'news_data' => 0,
    'aSetting' => 0,
    'aTestimonial' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f43348d146d5_11757178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f43348d146d5_11757178')) {function content_58f43348d146d5_11757178($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp64\\www\\investment\\investment\\application\\third_party\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/widget/01_slider.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="container services-box">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if (isset($_smarty_tpl->tpl_vars["foo"])) {$_smarty_tpl->tpl_vars["foo"] = clone $_smarty_tpl->tpl_vars["foo"];
$_smarty_tpl->tpl_vars["foo"]->value = $_smarty_tpl->tpl_vars['aContents']->value[$_smarty_tpl->tpl_vars['i']->value]; $_smarty_tpl->tpl_vars["foo"]->nocache = null; $_smarty_tpl->tpl_vars["foo"]->scope = 0;
} else $_smarty_tpl->tpl_vars["foo"] = new Smarty_variable($_smarty_tpl->tpl_vars['aContents']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?>
            <div class="col-sm-4">
                <div>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                    <div class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <p class="line-clamp-f-4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                    <a href="<?php echo base_url(htmlspecialchars(('content/').($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="reaad-more a">Read more</a>
                </div>
            </div>
            <?php }} ?>
        </div>
        <div class="about-box">
            <?php if (isset($_smarty_tpl->tpl_vars["foo"])) {$_smarty_tpl->tpl_vars["foo"] = clone $_smarty_tpl->tpl_vars["foo"];
$_smarty_tpl->tpl_vars["foo"]->value = $_smarty_tpl->tpl_vars['aContents']->value[3]; $_smarty_tpl->tpl_vars["foo"]->nocache = null; $_smarty_tpl->tpl_vars["foo"]->scope = 0;
} else $_smarty_tpl->tpl_vars["foo"] = new Smarty_variable($_smarty_tpl->tpl_vars['aContents']->value[3], null, 0);?>
            <div class="left cover" style="background-image:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
')"></div>
            <div class="right">
                <div>
                    <div>
                        <div class="h2">OUR <span>STORY</span></div>
                        <div class="desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['content'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars["foo"])) {$_smarty_tpl->tpl_vars["foo"] = clone $_smarty_tpl->tpl_vars["foo"];
$_smarty_tpl->tpl_vars["foo"]->value = $_smarty_tpl->tpl_vars['aAbouts']->value[0]; $_smarty_tpl->tpl_vars["foo"]->nocache = null; $_smarty_tpl->tpl_vars["foo"]->scope = 0;
} else $_smarty_tpl->tpl_vars["foo"] = new Smarty_variable($_smarty_tpl->tpl_vars['aAbouts']->value[0], null, 0);?>
        <div class="accreditation cover" style="background-image:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
')">
            <div class="container">
                <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <p class="lab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <a href="<?php echo base_url(htmlspecialchars(('about/').($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="btn btn-default"><span>Read more</span></a>
            </div>
        </div>
        <div class="blog-box">
            <div class="container">
                <div class="text-center">
                    <div class="h2">LATEST <span>NEWS</span></div>
                    <p class="desc">
                        We always update the latest news about the market of property investment in Vietnam, with hope will help you are the informations in investment market at Vietnam.eleifend nisi justo.
                    </p>
                </div>
                <div class="owl-carousel" id="owl-blog">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                    <div class="item blog-item">
                        <div class="nailthumb">
                            <div class="nailthumb-figure-75">
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
                        <div class="info">
                            <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="desc"><div class="line-clamp-f-3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</div></div>
                            <a href="<?php echo base_url(htmlspecialchars(('news/').($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
" class='a'>Read More</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="adv">
            <div class="container">
                <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aSetting']->value['make-version']->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <p class="lab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aSetting']->value['make-version']->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aSetting']->value['make-version']->_data['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default"><span>BOOK NOW</span></a>
            </div>
        </div>
        <div class="owl-carousel" id="owl-testimonial">
            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aTestimonial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
            <div class="item quote">
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>

                <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['position'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
            <?php } ?>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
