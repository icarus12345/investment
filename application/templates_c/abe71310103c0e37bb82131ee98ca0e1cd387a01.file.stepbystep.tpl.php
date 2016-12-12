<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 17:31:30
         compiled from "application\templates\investment\widget\stepbystep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2121584d2b0259e051-71273118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe71310103c0e37bb82131ee98ca0e1cd387a01' => 
    array (
      0 => 'application\\templates\\investment\\widget\\stepbystep.tpl',
      1 => 1481452237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2121584d2b0259e051-71273118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'step_data' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584d2b025b0202_61744518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584d2b025b0202_61744518')) {function content_584d2b025b0202_61744518($_smarty_tpl) {?><div class="white-box">
    <div class="container step-by-step text-center">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <h2>Step by step guide to Property Acquisition</h2>
        <div class="space-line"></div>
        <div class="space-line"></div>
        <img src="/assets/investment/images/hr-gray.png">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <div class="steps">
        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['step_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
            <div class="step">
                <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->data_title, ENT_QUOTES, 'UTF-8', true);?>
</h4>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->data_content, ENT_QUOTES, 'UTF-8', true);?>
</p>
            </div>
        <?php } ?>
        </div>
        <div class="space-line"></div>
        <div class="space-line"></div>
    </div>
</div><?php }} ?>
