
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
                    [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/cp/serializedata/pageheader.tpl"}]
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
                    <div id="subentry-list" style="display: none">
                        <div class="widget" style="width:100%;height:100%;-position:absolute;top:0;left:0">
                            <div class="modal-header">
                                <h4>List <small></small></h4>
                                <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
                                    <li><a href="JavaScript:myApp.addSubItem()" title="Add" onclick=""><i class="fa fa-plus"></i></a></li>
                                    <li><a href="JavaScript:$('#subentry-list').hide()" title="Go Back" onclick=""><i class="fa fa-reply-all"></i></a></li>
                                </ul>
                            </div>
                            <div style="position: absolute;top:40px;left:0;width:100%;bottom:0;">
                                <div id="jqwidget-subentry-list" style="border:0"></div>
                            </div>
                        </div>
                    </div>
                    <div id="subentry-container" style="display: none"></div>
                    <div>
                        <script type="text/javascript" src="/libraries/ckeditor/ckeditor.js" ></script>
                        <link href='/libraries/jqwidgets/styles/jqx.base.css' rel='stylesheet' type='text/css'>
                        <link href='/libraries/jqwidgets/styles/jqx.metro.css' rel='stylesheet' type='text/css'>
                        <script type="text/javascript" src="/libraries/jqwidgets/jqx-all.js"></script>
                        <script type="text/javascript" src="/dashboard/cp/serializedata/loadscript/app/[{$unit}]"></script>
                        <script type="text/javascript">
                            var myApp;
                            $(document).ready(function(){
                                myApp = new APP();
                                myApp.sid='[{$sid|default:0}]';
                                myApp.ctype='[{$ctype|default:''}]';
                                myApp.entryType='[{$type|default:''}]';
                                myApp.subsid='[{$subsid|default:''}]';
                                myApp.subctype='[{$subctype|default:''}]';
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
                                        <span class="lock-menu-label"><i class="fa fa-lock"></i> Lock Entry</span>
                                    </li>
                                    [{/if}]
                                    <li data-action="view" id="jqxViewAction"><i class="fa fa-eye"></i> View Entry</li>
                                    <li data-action="seo" id="jqxSeoAction"><i class="fa fa-share-alt"></i> SEO</li>
                                    [{if $data}]
                                        [{foreach from=$data item=i name=foo}]
                                    <li data-action="[{$smarty.foreach.foo.index}]" id="jqxSubAction[{$smarty.foreach.foo.index}]"><i class="fa fa-list"></i> [{$i->title}]</li>
                                        [{/foreach}]
                                    [{/if}]
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
        <div class="pull-bottom control-group">
            <div>Valid :(*)</div>
            <input type="text" 
                class="form-control" 
                placeholder="Valid"
                id="dashboard_valid"
                />
            <div class="code">required, minSize[120], maxSize[120], custom[email], custom[url], custom[onlyLetterNumber]</div>
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
            </div>
        </div>
        <div class="control-group">
            <button type="button" class="btn btn-default btn-sm" onclick="jqxColumnSave()"><i class="fa fa-save"></i> Save</button>
            <button type="button" class="btn btn-default btn-sm" id="jqxcancel"><i class="fa fa-close"></i> Cancel</button>
        </div>
    </div>
</div>
</body>
<!-- END BODY -->
</html>