<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:06:54
         compiled from "application\templates\investment\widget\left-category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32606584bb79e409c78-78015342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d272e6e979c6d1132d3a180450371417912b8b6' => 
    array (
      0 => 'application\\templates\\investment\\widget\\left-category.tpl',
      1 => 1481355215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32606584bb79e409c78-78015342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'by' => 0,
    'category' => 0,
    'blog_cates' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79e433c77_32364611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79e433c77_32364611')) {function content_584bb79e433c77_32364611($_smarty_tpl) {?><div class="box categories">
    <h4>Categories</h4>
    <ul>
        <li class="<?php if ($_smarty_tpl->tpl_vars['by']->value=='cat'&&!isset($_smarty_tpl->tpl_vars['category']->value)) {?>actived<?php }?>"><a href="/blogs">All</a></li>
        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['by']->value=='cat'&&isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->cat_id==$_smarty_tpl->tpl_vars['foo']->value->cat_id) {?>actived<?php }?>"><a href="/blogs/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_alias, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        <?php } ?>
    </ul>
</div><?php }} ?>
