<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-18 14:13:41
         compiled from "application\templates\plugin\comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3037958563725a18ba1-46347805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b17c399935409d1024fd685579dfdc46c32d683' => 
    array (
      0 => 'application\\templates\\plugin\\comment.tpl',
      1 => 1481636028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3037958563725a18ba1-46347805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'foo' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58563725b48001_78056836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58563725b48001_78056836')) {function content_58563725b48001_78056836($_smarty_tpl) {?><div>
<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
<div class="cmt-item">
    <div class="cmt-avatar"></div>
    <div class="cmt-user">
        <span class="cmt-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->comment_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
        <span class="cmt-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->comment_insert, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </div>
    <p class="cmt-comment"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->comment_content, ENT_QUOTES, 'UTF-8', true);?>
</p>
</div>
<?php } ?>
</div>
<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
<?php }} ?>
