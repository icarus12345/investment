<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-05 15:07:52
         compiled from "application\templates\eye\01_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70575896dc1b706032-99434715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '165532fc3d1140d825f31e8f6e63fb3b48448166' => 
    array (
      0 => 'application\\templates\\eye\\01_home.tpl',
      1 => 1486282069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70575896dc1b706032-99434715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5896dc1bbc8cd6_72539669',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896dc1bbc8cd6_72539669')) {function content_5896dc1bbc8cd6_72539669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/widget/01_slider.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
