<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 22:40:15
         compiled from "application\templates\funny\sidebarRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319805855593ee71f47-32420951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcf245fbd26d76c52d68e8c0399777a36f49ca88' => 
    array (
      0 => 'application\\templates\\funny\\sidebarRight.tpl',
      1 => 1481989180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319805855593ee71f47-32420951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855593eec4687_87371409',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855593eec4687_87371409')) {function content_5855593eec4687_87371409($_smarty_tpl) {?><div class="scrollable">
  <div class="scrollable-content">
      <div class="list-group" ui-toggle="uiSidebarRight">

          <a class="list-group-item media" href="" ng-repeat="user in chatUsers">
              <div class="pull-left">
                  <i class="fa fa-user chat-user-avatar"></i>
              </div>
              <div class="media-body">
                  <h5 class="media-heading">{{user.name}}</h5>
                  <small ng-switch on="user.online">
                      <span ng-switch-when="true">
                          <span class="label label-success">ONLINE</span>
                      </span>
                      <span ng-switch-default>
                          <span class="label label-default"><i>OFFLINE</i>
                          </span>
                      </span>
                  </small>
              </div>
          </a>

      </div>
  </div>
</div>
<?php }} ?>
