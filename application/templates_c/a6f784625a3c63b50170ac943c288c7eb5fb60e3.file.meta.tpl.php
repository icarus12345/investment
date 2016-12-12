<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:51:49
         compiled from "application\templates\investment\inc\meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17888584bb79e09e0a1-32983229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f784625a3c63b50170ac943c288c7eb5fb60e3' => 
    array (
      0 => 'application\\templates\\investment\\inc\\meta.tpl',
      1 => 1481359470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17888584bb79e09e0a1-32983229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79e0eb656_00737073',
  'variables' => 
  array (
    'site' => 0,
    'settting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79e0eb656_00737073')) {function content_584bb79e0eb656_00737073($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel='shortcut icon' href='/favicon.ico' />
        <meta name="viewport" content="width=device-width; initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
</title>
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['desc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['description'] : $tmp);?>
"/>
        <meta name="keywords" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['keyword'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['keyword'] : $tmp);?>
"/>
        <meta property="place:location:latitude" content="10.792048"/>
        <meta property="place:location:longitude" content="106.679982"/>
        <meta property="business:contact_data:street_address" content="Lê Quý Đôn"/>
        <meta property="business:contact_data:locality" content="Hồ Chí Minh"/>
        <meta property="business:contact_data:postal_code" content="70000 "/>
        <meta property="business:contact_data:country_name" content="TP. Hồ Chí Minh"/>
        <meta property="business:contact_data:email" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
"/>
        <meta property="business:contact_data:phone_number" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['phone'])===null||$tmp==='' ? '' : $tmp);?>
"/>
        <meta property="business:contact_data:website" content="<?php echo base_url('');?>
"/>
        <meta itemprop="name" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
"/>
        <meta itemprop="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['desc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['keyword'] : $tmp);?>
"/>
        <meta itemprop="image" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['image'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['image-250x250'] : $tmp);?>
"/>

        <meta name="twitter:card" content="summary"/>  <!-- Card type -->
        <meta name="twitter:site" content="<?php echo base_url('');?>
"/>
        <meta name="twitter:title" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
">
        <meta name="twitter:description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['desc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['keyword'] : $tmp);?>
"/>
        <meta name="twitter:creator" content="<?php echo base_url('');?>
"/>
        <meta name="twitter:image:src" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['image'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['image-250x250'] : $tmp);?>
"/>
        <meta name="twitter:domain" content="<?php echo base_url('');?>
"/>

        <meta property="og:url" content="<?php echo base_url('');?>
">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
">
        <meta property="og:image" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['image'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['image-250x250'] : $tmp);?>
"/>
        <meta property="og:description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['desc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['keyword'] : $tmp);?>
">
        <meta property="og:site_name" content="<?php echo base_url('');?>
">
        <meta property="article:author" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['fakebook-fanpage'])===null||$tmp==='' ? '' : $tmp);?>
">
        <meta property="article:publisher" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['fakebook-fanpage'])===null||$tmp==='' ? '' : $tmp);?>
">

        <meta name="geo.region" content="VN" />
        <meta name="geo.placename" content="HCM" />
        <meta name="geo.position" content="10.792166;106.679810" />
        <meta name="ICBM" content="10.792166,106.679810"/>

        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/hover.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/bootstrap-select.min.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/bootstrap/css/font-awesome.min.css?t=1">
        <link rel="stylesheet" type="text/css" href="/assets/investment/plugin/countdown/countdown.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/plugin/owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/investment/plugin/swipebox/swipebox-dark-1.3.css" >
        <link rel="stylesheet" type="text/css" href="/assets/investment/css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/investment/bootstrap/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/investment/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/investment/plugin/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/investment/plugin/jquery.nailthumb.1.1.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/investment/plugin/jquery.lazyload.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/investment/js/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/libraries/plugin/validation-engine/jquery.validationEngine.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/libraries/plugin/validation-engine/jquery.validationEngine-en.js"><?php echo '</script'; ?>
>
        <!--[if IE]>
            <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

    </head>

        <!--[if IE]>
            <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

    </head>
    <body>
<?php }} ?>
