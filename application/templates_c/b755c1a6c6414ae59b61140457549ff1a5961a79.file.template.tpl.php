<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-12 14:50:44
         compiled from "application\templates\funny\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3198658eddc547e8672-60780069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b755c1a6c6414ae59b61140457549ff1a5961a79' => 
    array (
      0 => 'application\\templates\\funny\\template.tpl',
      1 => 1488157394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3198658eddc547e8672-60780069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58eddc54858f17_59577859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eddc54858f17_59577859')) {function content_58eddc54858f17_59577859($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <base href="/" />
    <title>Cười cái coi</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/mobile-angular-ui-hover.min.css" />
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/mobile-angular-ui-base.min.css" />
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/mobile-angular-ui-desktop.min.css" />
    <link rel="stylesheet" href="/assets/funny/funny.css" />
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.0/angular.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.0/angular-route.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/libraries/mobile-angular/dist/js/mobile-angular-ui.min.js"><?php echo '</script'; ?>
>
    <!-- Required to use $touch, $swipe, $drag and $translate services -->
    <?php echo '<script'; ?>
 src="/libraries/mobile-angular/dist/js/mobile-angular-ui.gestures.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="/libraries/mobile-angular/dist/js/angular-toastr.tpls.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/libraries/mobile-angular/dist/css/angular-toastr.css" />

    <?php echo '<script'; ?>
 src="/assets/funny/funny.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/funny/routeProvider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/funny/imageController.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/funny/mainController.js"><?php echo '</script'; ?>
>
  </head>

  <body
    ng-app="MobileAngularUiExamples" 
    ng-controller="MainController"
    ui-prevent-touchmove-defaults
    >

    <!-- Sidebars -->
    <div ng-include="'funny/sidebar.html'" 
        ui-track-as-search-param='true'
        class="sidebar sidebar-left"></div>

    

    <div class="app" 
        ui-swipe-right='Ui.turnOn("uiSidebarLeft")'
        ui-swipe-left='Ui.turnOff("uiSidebarLeft")'>

        <!-- Navbars -->

      
        <ng-view></ng-view>
    </div><!-- ~ .app -->

    <div ui-yield-to="modals"></div>
    
  </body>
</html>
<?php }} ?>
