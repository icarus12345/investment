<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 18:41:22
         compiled from "application\templates\investment\fqa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21504584bcd327d4953-27747409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24e851a2dfbbb9e81ef6c76fe375029355b8551e' => 
    array (
      0 => 'application\\templates\\investment\\fqa.tpl',
      1 => 1481368121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21504584bcd327d4953-27747409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bcd32874d18_59369560',
  'variables' => 
  array (
    'fqa_data' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bcd32874d18_59369560')) {function content_584bcd32874d18_59369560($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">FQA</div>
        <ul>
            <li>Home</li>
            <li><a href="#">FQA</a></li>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-bottom pull-top right-blog">
                <div class="blog-item">
                    <div class="tit-h1">PROPERTY INVESTMENT <span>FQAs</span></div>
                    <div class="gray container">
                        <div class="col-sm-12 pull-bottom">
                            We answer your frequently asked questions about property investment below. To discuss your individual circumstances, your local Mortgage Choice broker is always happy to chat with you.
                            <div class="space-line"></div>
                            <div class="hr2"></div>
                            <div class="space-line"></div>
                            <ul class="a">
                            <li><a href="/privacy-policy" class="a">Privacy Policy</a>
                            <li><a href="/team-conditions" class="a">Team and Conditons</a>
                            </ul>
                            <div class="space-line"></div>
                        </div>
                    </div>
                    <div class="fqa-arcoding">
                        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fqa_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['foo']->value->data_id==$_smarty_tpl->tpl_vars['fqa_data']->value[0]->data_id) {?>actived<?php }?>"
                            >
                            <div class="head-collapse">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->data_title, ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                            <div class="body-collapse">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->data_content, ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php echo '<script'; ?>
 type="text/javascript">
                    $(document).ready(function(){
                        $('.fqa-arcoding .head-collapse').click(function(){
                            $('.fqa-arcoding .actived').removeClass('actived');
                            $(this).parent().addClass('actived');
                        })
                    })
                    <?php echo '</script'; ?>
>
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
