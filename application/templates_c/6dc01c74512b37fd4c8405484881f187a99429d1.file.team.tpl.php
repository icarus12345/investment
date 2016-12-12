<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 18:50:14
         compiled from "application\templates\investment\team.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12223584d3d19bda8b7-67314839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dc01c74512b37fd4c8405484881f187a99429d1' => 
    array (
      0 => 'application\\templates\\investment\\team.tpl',
      1 => 1481457012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12223584d3d19bda8b7-67314839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584d3d19c7e304_11206527',
  'variables' => 
  array (
    'content_detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584d3d19c7e304_11206527')) {function content_584d3d19c7e304_11206527($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">TEAM AND CONDITION</div>
        <ul>
            <li>Home</li>
            <li><a href="#">Team and Condition</a></li>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-bottom pull-top right-blog">
                <div class="blog-item">
                    <div class="tit-h1">TEAM AND <span>CONDITIONS</span></div>
                    <div class="gray container">
                        <div class="col-sm-12 pull-bottom">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_detail']->value->content_desc, ENT_QUOTES, 'UTF-8', true);?>

                            <div class="space-line"></div>
                            <div class="hr2"></div>
                            <div class="space-line"></div>
                            <ul class="a">
                            <li><a href="/privacy-policy" class="a">Privacy Policy</a>
                            <li><a href="/team-conditions" class="a">Team and Conditons</a>
                            </ul>
                            <div class="space-line"></div>
                        </div>
                        <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
                        <div class="ckeditor col-sm-12 pull-bottom">
                            <?php echo $_smarty_tpl->tpl_vars['content_detail']->value->content_content;?>

                            <br/>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pull-bottom pull-top">
                <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/left-recent.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
