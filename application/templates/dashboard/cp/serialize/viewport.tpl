
[{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/meta.tpl"}]
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square page-boxed" oncontextmenu="return false">
    [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/header.tpl"}]
    <!-- BEGIN CONTAINER -->
    <div class="container">
        <div class="page-container">
            [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/sidebar.tpl"}]
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/content/customizer.tpl"}]
                    [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/cp/serialize/pageheader.tpl"}]
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
                        <script type="text/javascript" src="/libraries/ckeditor/ckeditor.js" ></script>
                        <link href='/libraries/jqwidgets/styles/jqx.base.css' rel='stylesheet' type='text/css'>
                        <link href='/libraries/jqwidgets/styles/jqx.metro.css' rel='stylesheet' type='text/css'>
                        <script type="text/javascript" src="/libraries/jqwidgets/jqx-all.js"></script>
                        <script type="text/javascript" src="/dashboard/cp/serialize/loadscript/app/[{$unit}]"></script>
                        <script type="text/javascript">
                            var myApp;
                            $(document).ready(function(){
                                myApp = new APP();
                                myApp.sid='[{$sid|default:0}]';
                                myApp.entryType='[{$type|default:''}]';
                                [{if $action.add!=false}]
                                    myApp.isAddItem = true;
                                [{/if}]
                                [{if $action.edit!=false}]
                                    myApp.isEditItem = true;
                                [{/if}]
                                [{if $action.delete!=false}]
                                    myApp.isDeleteItem = true;
                                [{/if}]
                                [{if $action.ispopup==true}]
                                    myApp.isEntryDialog = true;
                                [{/if}]
                                    myApp.onInit();
                            })
                        </script>
                        <div style="display:none">
                            <div id='contextMenu' class="jqx-contextMenu">
                                <ul>
                                    <li data-action="add" id="jqxAddAction"><i class="fa fa-plus"></i> Add new Entry</li>
                                    <li data-action="edit" id="jqxEditAction"><i class="fa fa-pencil-square"></i> Edit Entry</li>
                                    <li data-action="status" id="jqxStatusAction">
                                        <i class="fa fa-toggle-off"></i> Status
                                        <ul>
                                            <li data-action="statuson" id="jqxStatusActionOn"><i class="fa fa-check-square-o"></i> Enable</li>
                                            <li data-action="statusoff" id="jqxStatusActionOff"><i class="fa fa-square-o"></i> Disable</li>
                                        </ul>
                                    </li>
                                    <li data-action="delete" id="jqxDeleteAction"><i class="fa fa-trash-o"></i> Delete Entry</li>
                                    [{if $smarty.session.auth.user->ause_authority=='Administrator'}]
                                    <li data-action="lock" id="jqxLockAction">
                                        <i class="fa fa-lock"></i> Lock Entry
                                        <ul>
                                            <li data-action="lockon" id="jqxLockActionOn"><i class="fa fa-lock"></i> Lock</li>
                                            <li data-action="lockoff" id="jqxLockActionOff"><i class="fa fa-unlock-alt"></i> Unlock</li>
                                        </ul>
                                    </li>
                                    [{/if}]
                                    <li data-action="view" id="jqxViewAction"><i class="fa fa-eye"></i> View Entry</li>
                                    <li data-action="seo" id="jqxSeoAction"><i class="fa fa-share-alt"></i> SEO</li>

                                </ul>
                            </div>
                        </div>



                        <div class="widget" id="entry-list">
                            <div class="modal-header">
                                <h4>[{$entry_setting->_title|default:'Serialize'}] List</h4>
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
        [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/footer.tpl"}]

</body>
<div id="popupWindow" style="display:none">
    <div>Edit</div>
    <div style="overflow: hidden;">
        <div class="pull-bottom control-group">
            <div>Column :(*)</div>
            <input type="text" 
                class="form-control" 
                placeholder="Column"
                id="dashboard_column"
                />
        </div>
        <div class="pull-bottom control-group">
            <div>Title :(*)</div>
            <input type="text" 
                class="form-control" 
                placeholder="Column"
                id="dashboard_title"
                />
        </div>
        <div class="row half">
            <div class="col-xs-6 half">
                <div class="pull-bottom control-group">
                    <div>Type :(*)</div>
                    <select id="dashboard_type" class="form-control">
                        <option value="string">String</option>
                        <option value="text">Text</option>
                        <option value="html">Html</option>
                        <option value="bool">Bool</option>
                        <option value="image">Image</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 half">
                <div class="pull-bottom control-group">
                    <div>Require :(*)</div>
                    <select id="dashboard_required" class="form-control">
                        <option value="1">true</option>
                        <option value="0">false</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="control-group">
            <button type="button" class="btn btn-default btn-sm" onclick="jqxColumnSave()"><i class="fa fa-save"></i> Save</button>
            <button type="button" class="btn btn-default btn-sm" id="jqxcancel"><i class="fa fa-close"></i> Cancel</button>
        </div>
    </div>
</div>
<!-- END BODY -->
</html>