<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:06:54
         compiled from "application\templates\investment\widget\left-recent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3903584bb79e4ceec6-82148432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44e70a40eff36c8115d6d2ccee860d08765857c9' => 
    array (
      0 => 'application\\templates\\investment\\widget\\left-recent.tpl',
      1 => 1481355285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3903584bb79e4ceec6-82148432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature_blogs' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79e4f5b41_68883562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79e4f5b41_68883562')) {function content_584bb79e4f5b41_68883562($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\investment\\application\\third_party\\smarty\\plugins\\modifier.date_format.php';
?>                <div class="box categories">
                    <h4>Recent Posts</h4>
                    <ul>
                        
                        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                        <li>
                            <div class="small-item-post">
                                <a href="/blogs/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_alias, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <div class="nailthumb">
                                        <div class="nailthumb-figure-square">
                                            <div class="nailthumb-container">
                                                <img class="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_thumb, ENT_QUOTES, 'UTF-8', true);?>
">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <p class="line-clamp-f-3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_title, ENT_QUOTES, 'UTF-8', true);?>
</p>
                                        <span>Post date: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['foo']->value->content_insert);?>
</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <?php }
if (!$_smarty_tpl->tpl_vars['foo']->_loop) {
?>
                        <li><div>No data to display.</div></li>
                        <?php } ?>
                    </ul>
                </div><?php }} ?>
