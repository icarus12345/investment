<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:51:49
         compiled from "application\templates\investment\widget\left-tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15701584bb79e651105-22686719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6603a10445257bd7eafce0bfae4105f67e3a826' => 
    array (
      0 => 'application\\templates\\investment\\widget\\left-tags.tpl',
      1 => 1481359478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15701584bb79e651105-22686719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79e653218_51111373',
  'variables' => 
  array (
    'site' => 0,
    'settting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79e653218_51111373')) {function content_584bb79e653218_51111373($_smarty_tpl) {?>                <div class="box categories">
                    <h4>Tags</h4>
                    <ul>
                        <li>
                            <div>
                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['keyword'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['keyword'] : $tmp);?>

                            </div>
                        </li>
                    </ul>
                </div><?php }} ?>
