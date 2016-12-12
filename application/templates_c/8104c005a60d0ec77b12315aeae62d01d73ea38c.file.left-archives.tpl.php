<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:06:54
         compiled from "application\templates\investment\widget\left-archives.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24588584bb79e5a0342-09054911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8104c005a60d0ec77b12315aeae62d01d73ea38c' => 
    array (
      0 => 'application\\templates\\investment\\widget\\left-archives.tpl',
      1 => 1481355329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24588584bb79e5a0342-09054911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'by' => 0,
    'n' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79e5d9628_53334493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79e5d9628_53334493')) {function content_584bb79e5d9628_53334493($_smarty_tpl) {?>                <div class="box categories">
                    <h4>Archives</h4>
                    <ul>
                        <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 0, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['by']->value=='time'&&date('Y-m',(strtotime(((('-').($_smarty_tpl->tpl_vars['n']->value)).(' months')))))==$_smarty_tpl->tpl_vars['time']->value) {?>actived<?php }?>"><a href="/blogs/<?php echo date('Y-m',(strtotime(((('-').($_smarty_tpl->tpl_vars['n']->value)).(' months')))));?>
"><?php echo date('F Y',(strtotime(((('-').($_smarty_tpl->tpl_vars['n']->value)).(' months')))));?>
</a></li>
                        <?php }} ?>
                    </ul>
                </div><?php }} ?>
