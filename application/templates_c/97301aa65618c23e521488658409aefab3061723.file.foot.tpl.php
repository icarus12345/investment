<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-08 22:02:33
         compiled from "application\templates\eye\inc\foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3197589b32e6cd5957-11291722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97301aa65618c23e521488658409aefab3061723' => 
    array (
      0 => 'application\\templates\\eye\\inc\\foot.tpl',
      1 => 1486566149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3197589b32e6cd5957-11291722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589b32e6d4e7e8_85643993',
  'variables' => 
  array (
    'aServiceCate' => 0,
    'foo' => 0,
    'aAbouts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b32e6d4e7e8_85643993')) {function content_589b32e6d4e7e8_85643993($_smarty_tpl) {?>        <footer>
            <div>
                <div class="container">
                    <div class="row f16">
                        <div class="col-md-6 cls">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="foot-logo f16">ADELAIDE EYE & LASER CENTRE</div>
                                    <div class="wicon">
                                        <i class="fa fa-phone f18"></i> 
                                        
Free call: 1800 809 991<br/>
(Excluding Adelaide Metro Area)


                                    </div>
                                    <div class="space-line"></div>
                                    <div class="space-line"></div>
                                    <div class="wicon">
                                        <i class="fa fa-map-marker f16"></i> 
                                        215 Greenhill Road<br/>
Eastwood, South Australia 5063.
                                    </div>
                                    <div class="space-line"></div>
                                    <div class="space-line"></div>
                                    <div class="wicon">
                                        <i class="fa fa-envelope-o f16"></i> 
                                        companyname@email.com
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="foot-tit f16">SERVICES</div>
                                    <div class="foot-list">
                                        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aServiceCate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                                        <a href="<?php echo base_url(htmlspecialchars(('services/').($_smarty_tpl->tpl_vars['foo']->value->cat_alias), ENT_QUOTES, 'UTF-8', true));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 cls">
                            <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="foot-tit f16">INFORMATION</div>
                                <div class="foot-list">
                                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aAbouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                                    <a href="<?php echo base_url(htmlspecialchars(('about/').($_smarty_tpl->tpl_vars['foo']->value->_alias), ENT_QUOTES, 'UTF-8', true));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="foot-tit f16">ACCREDITATION</div>
                                <img src="/assets/eye/images/logo-foot.jpg">
                                <div>Global Mark &copy; Accreditation</div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-menu">
                <div class="container">
                    <div class="text-center">
                        ALL RIGHTS RESERVED &copy; 2016 <span>ADELAIDE EYE & LASER CENTRE</span> &reg;
                    </div>
                </div>
            </div>
        </footer><?php }} ?>
