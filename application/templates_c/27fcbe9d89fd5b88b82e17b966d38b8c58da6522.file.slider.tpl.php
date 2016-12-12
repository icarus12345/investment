<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 21:01:26
         compiled from "application\templates\investment\widget\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8876584d2cb9e84386-09032702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27fcbe9d89fd5b88b82e17b966d38b8c58da6522' => 
    array (
      0 => 'application\\templates\\investment\\widget\\slider.tpl',
      1 => 1481464881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8876584d2cb9e84386-09032702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584d2cb9e86c20_83349821',
  'variables' => 
  array (
    'sliders' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584d2cb9e86c20_83349821')) {function content_584d2cb9e86c20_83349821($_smarty_tpl) {?>        <div class="home-slider">
            <div class="owl-carousel" id="owl-home">
                <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                <div class="item cover" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->image_src, ENT_QUOTES, 'UTF-8', true);?>
)">
                    <div class="home-content">
                        <div class="lab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->image_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->image_desc, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="btn btn-warning"><span>VIEW MORE</span></div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="mouse"></div>
        </div>
        
<?php }} ?>
