<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-08 22:01:58
         compiled from "application\templates\eye\01_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70575896dc1b706032-99434715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '165532fc3d1140d825f31e8f6e63fb3b48448166' => 
    array (
      0 => 'application\\templates\\eye\\01_home.tpl',
      1 => 1486565576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70575896dc1b706032-99434715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5896dc1bbc8cd6_72539669',
  'variables' => 
  array (
    'i' => 0,
    'aContents' => 0,
    'foo' => 0,
    'aAbouts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896dc1bbc8cd6_72539669')) {function content_5896dc1bbc8cd6_72539669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
