<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:04:05
         compiled from "application\templates\dashboard\cp\data\viewport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:763584bb6f50345d7-06488789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea5a416800d466d912479d8cec503f6b478adf50' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\data\\viewport.tpl',
      1 => 1436511060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '763584bb6f50345d7-06488789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unit' => 0,
    'type' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb6f50e5f25_24005467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb6f50e5f25_24005467')) {function content_584bb6f50e5f25_24005467($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square page-boxed" oncontextmenu="return false">
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/header.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- BEGIN CONTAINER -->
    <div class="container">
        <div class="page-container">
            <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/sidebar.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/content/customizer.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/cp/data/pageheader.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <!-- BEGIN PAGE CONTENT-->
                    <!-- <div class="row">
                            <div class="col-md-12">
                                    <div class="note note-danger">
                                            <p>
                                                     NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
                                            </p>
                                    </div>
                                    
                            </div>
                    </div> -->
                    <!-- END PAGE CONTENT-->
                    <div id="entry-container" style="display: none"></div>
                    <div>
                        <?php echo '<script'; ?>
 type="text/javascript" src="/libraries/ckeditor/ckeditor.js" ><?php echo '</script'; ?>
>
                        <link href='/libraries/jqwidgets/styles/jqx.base.css' rel='stylesheet' type='text/css'>
                        <link href='/libraries/jqwidgets/styles/jqx.metro.css' rel='stylesheet' type='text/css'>
                        <?php echo '<script'; ?>
 type="text/javascript" src="/libraries/jqwidgets/jqx-all.js"><?php echo '</script'; ?>
>
                        <?php echo '<script'; ?>
 type="text/javascript" src="/dashboard/cp/data/loadscript/app/<?php echo $_smarty_tpl->tpl_vars['unit']->value;?>
"><?php echo '</script'; ?>
>
                        <?php echo '<script'; ?>
 type="text/javascript">
                            var myApp;
                            $(document).ready(function(){
                                myApp = new APP();
                                myApp.entryType='<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
                                <?php if ($_smarty_tpl->tpl_vars['action']->value['add']!=false) {?>
                                    myApp.isAddItem = true;
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value['edit']!=false) {?>
                                    myApp.isEditItem = true;
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value['delete']!=false) {?>
                                    myApp.isDeleteItem = true;
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']==true) {?>
                                    myApp.isEntryDialog = true;
                                <?php }?>
                                    myApp.onInit();
                            })
                        <?php echo '</script'; ?>
>
                        <div style="display:none">
                            <div id='contextMenu' class="jqx-contextMenu">
                                <ul>
                                    <li data-action="add" id="jqxAddAction"><i class="fa fa-plus"></i> Add new Record</li>
                                    <li data-action="edit" id="jqxEditAction"><i class="fa fa-pencil-square"></i> Edit Entry</li>
                                    <li data-action="status" id="jqxStatusAction">
                                        <i class="fa fa-toggle-off"></i> Status
                                        <ul>
                                            <li data-action="statuson" id="jqxStatusActionOn"><i class="fa fa-check-square-o"></i> Enable</li>
                                            <li data-action="statusoff" id="jqxStatusActionOff"><i class="fa fa-square-o"></i> Disable</li>
                                        </ul>
                                    </li>
                                    <?php if ($_SESSION['auth']['user']->ause_authority=='Administrator') {?>
                                    <li data-action="lock" id="jqxLockAction">
                                        <i class="fa fa-lock"></i> Lock Entry
                                        <ul>
                                            <li data-action="lockon" id="jqxLockActionOn"><i class="fa fa-lock"></i> Lock</li>
                                            <li data-action="lockoff" id="jqxLockActionOff"><i class="fa fa-unlock-alt"></i> Unlock</li>
                                        </ul>
                                    </li>
                                    <?php }?>
                                    <li data-action="delete" id="jqxDeleteAction"><i class="fa fa-trash-o"></i> Delete Entry</li>
                                    <li data-action="view" id="jqxViewAction"><i class="fa fa-eye"></i> View Entry</li>
                                </ul>
                            </div>
                        </div>



                        <div class="widget" id="entry-list">
                            <div class="modal-header">
                                <h4>Data List</h4>
                                <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
                                    <li>
                                        <a href="JavaScript:myApp.addItem()" title="Add Item" onclick=""><i class="fa fa-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:myApp.refreshList()" title="Refresh List" onclick=""><i class="fa fa-refresh"></i></a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:myApp.setting()" title="Setting" onclick=""><i class="fa fa-cogs"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="">
                                <div id="entry-setting" style="display:none"><div id="jqxListBoxSetting" style="height:200px"></div></div>
                                <div style="height:400px;position:relative">
                                    <div id= "jqwidget-entry-list" style="border:0"></div>
                                </div>
                                
                            </div>
                        </div>

                    </div>




                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/footer.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>

<!-- END BODY -->
</html><?php }} ?>
