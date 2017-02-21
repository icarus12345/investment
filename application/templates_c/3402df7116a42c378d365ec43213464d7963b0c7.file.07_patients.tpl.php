<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 08:41:05
         compiled from "application\templates\eye\07_patients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2768158a8f62b889d73-08858546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3402df7116a42c378d365ec43213464d7963b0c7' => 
    array (
      0 => 'application\\templates\\eye\\07_patients.tpl',
      1 => 1487468254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2768158a8f62b889d73-08858546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a8f62b9233c1_48956091',
  'variables' => 
  array (
    'aPatients' => 0,
    'i' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a8f62b9233c1_48956091')) {function content_58a8f62b9233c1_48956091($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">Patients</div>
        </div>
        <div class="becu">
            <div class="container">
            About / Patients
            </div>
        </div>
        <div class="about-list cls">
            <div class="container">
                <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aPatients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                    <div class="item col-sm-6 col-md-4">
                        <div>
                            <div class="num">0<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</div>
                            <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['foo']->value->_id==77) {?>
                            <a href="<?php echo base_url('patients/meet-the-team');?>
"><div class="btn btn-info">Read more</div></a>
                            <?php } else { ?>
                            <a href="<?php echo base_url(htmlspecialchars(('patients/').($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
"><div class="btn btn-info">Read more</div></a>
                            <?php }?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
