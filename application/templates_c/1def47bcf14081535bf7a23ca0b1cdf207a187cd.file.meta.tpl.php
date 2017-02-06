<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-06 22:38:56
         compiled from "application\templates\eye\inc\meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69025896dc1bc6e3d9-69258689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1def47bcf14081535bf7a23ca0b1cdf207a187cd' => 
    array (
      0 => 'application\\templates\\eye\\inc\\meta.tpl',
      1 => 1486395498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69025896dc1bc6e3d9-69258689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5896dc1bd84ab6_15609457',
  'variables' => 
  array (
    'seo' => 0,
    'settting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896dc1bd84ab6_15609457')) {function content_5896dc1bd84ab6_15609457($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel='shortcut icon' href='/favicon.ico' />
        <meta name="viewport" content="width=device-width; initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
</title>
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_desc)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['description'] : $tmp);?>
"/>
        <meta name="keywords" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_keyword)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['keyword'] : $tmp);?>
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
        <meta itemprop="name" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
"/>
        <meta itemprop="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_desc)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['description'] : $tmp);?>
"/>
        <meta itemprop="image" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_image)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['image-250x250'] : $tmp);?>
"/>

        <meta name="twitter:card" content="summary"/>  <!-- Card type -->
        <meta name="twitter:site" content="<?php echo base_url('');?>
"/>
        <meta name="twitter:title" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
">
        <meta name="twitter:description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_desc)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['description'] : $tmp);?>
"/>
        <meta name="twitter:creator" content="<?php echo base_url('');?>
"/>
        <meta name="twitter:image:src" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_image)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['image-250x250'] : $tmp);?>
"/>
        <meta name="twitter:domain" content="<?php echo base_url('');?>
"/>

        <meta property="og:url" content="<?php echo base_url('');?>
">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['title-of-website'] : $tmp);?>
">
        <meta property="og:image" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_image)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['image-250x250'] : $tmp);?>
"/>
        <meta property="og:description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['seo']->value->seo_social_desc)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['description'] : $tmp);?>
">
        <meta property="og:site_name" content="<?php echo base_url('');?>
">
        <meta property="article:author" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['fakebook-fanpage'])===null||$tmp==='' ? '' : $tmp);?>
">
        <meta property="article:publisher" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settting_data']->value['fakebook-fanpage'])===null||$tmp==='' ? '' : $tmp);?>
">

        <meta name="p:domain_verify" content="611142a2af6e2ee6d83075699bf8e6f9"/>
        <meta name="geo.region" content="VN" />
        <meta name="geo.placename" content="HCM" />
        <meta name="geo.position" content="10.792166;106.679810" />
        <meta name="ICBM" content="10.792166,106.679810"/>

        <link rel="stylesheet" type="text/css" href="/assets/eye/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/eye/bootstrap/css/bootstrap-select.min.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/eye/bootstrap/css/font-awesome.min.css?t=1">
        <link rel="stylesheet" type="text/css" href="/assets/eye/plugin/owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/eye/plugin/swipebox/swipebox-dark-1.3.css" >
        <link rel="stylesheet" type="text/css" href="/assets/eye/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="/libraries/metronic/theme/assets/global/plugins/bootstrap-toastr/toastr.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/eye/bootstrap/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/eye/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/eye/plugin/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/eye/plugin/jquery.nailthumb.1.1.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/eye/plugin/jquery.lazyload.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/assets/eye/js/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/libraries/metronic/theme/assets/global/plugins/bootstrap-toastr/toastr.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/libraries/plugin/serializeObject.js"><?php echo '</script'; ?>
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
    <body>
<?php }} ?>
