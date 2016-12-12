<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 18:15:53
         compiled from "application\templates\investment\inc\foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24667584bb79e6f2949-39602558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5826bbed3181acd9ddbba0a92832471af7601046' => 
    array (
      0 => 'application\\templates\\investment\\inc\\foot.tpl',
      1 => 1481454951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24667584bb79e6f2949-39602558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79e6fab33_65268838',
  'variables' => 
  array (
    'feature_blogs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79e6fab33_65268838')) {function content_584bb79e6fab33_65268838($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\investment\\application\\third_party\\smarty\\plugins\\modifier.date_format.php';
?><footer>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 cls">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <a href="/" class="foot-logo f16">VIETNAMS<br/>PROPERTY INVESTMENT</a>
                            <div class="wicon">
                                <i class="fa fa-map-marker f18"></i> 
                                Australia - Sydney<br/>
                                Vietnam - Ho Chi Minh City
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="wicon">
                                <i class="fa fa-phone f16"></i> 
                                Australia: +90 547 854 14 57<br/>
                                Vietnam: +84 163 322 3508
                            </div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <div class="wicon">
                                <i class="fa fa-envelope-o f16"></i> 
                                info@linkedproperties.net
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="foot-tit f16">Twitter Stream</div>
                            <div class="wicon">
                                <i class="fa fa-twitter f20"></i> 
                                <div>A well-designed #eComme & back office in egration is ...</div>
                                <a href="#">https://t.co/0Nn8mVrebG</a><br/>
                                December , 01, 2016
                            </div>
                            <hr class="dashed-hr">
                            <div class="wicon">
                                <i class="fa fa-twitter f20"></i> 
                                <div>A well-designed #eComme & back office in egration is ...</div>
                                <a href="#">https://t.co/0Nn8mVrebG</a><br/>
                                December , 01, 2016
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cls">
                    <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="foot-tit f16">New Blog Posts</div>
                        
                        <?php if (isset($_smarty_tpl->tpl_vars['feature_blogs']->value[0])) {?>
                        <div class="">
                            <a href="/blogs/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_blogs']->value[0]->content_alias, ENT_QUOTES, 'UTF-8', true);?>
">
                            <div class="foot-tit2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_blogs']->value[0]->content_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            </a>
                            <br/><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature_blogs']->value[0]->content_insert,'%e %b,%Y');?>

                        </div>
                        <?php }?>
                        <hr class="dashed-hr">
                        <?php if (isset($_smarty_tpl->tpl_vars['feature_blogs']->value[1])) {?>
                        <div class="">
                            <a href="/blogs/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_blogs']->value[1]->content_alias, ENT_QUOTES, 'UTF-8', true);?>
">
                            <div class="foot-tit2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_blogs']->value[1]->content_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            </a>
                            <br/><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature_blogs']->value[1]->content_insert,'%e %b,%Y');?>

                            
                        </div>
                        <?php }?>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="foot-tit f16">News Letter</div>
                        <div class="">
                            Enter your email address to subscribe our notification of our new post & features by property investment.
                        </div>
                        <form id="subcribeFrm" name="subcribeFrm" class="validationFrm">
                        <div class="input-group">
                          <input type="text" class="form-control validate[required,custom[email]]" placeholder="Recipient's username" aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2"><span class="fa fa-paper-plane-o"></span></span>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul>
                            <li><a href="/about">About us</a></li>
                            <li><a href="/blogs">Blog</a></li>
                            <li><a href="/fqa">FAQ</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/team-conditions">Team & Conditions</a></li>
                            <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                VIETNAMS PROPERTY INVESTMENT &copy; 2016
                </div>
            </div>
        </div>
    </div>
</footer><?php }} ?>
