[{if $action.ispopup!=1}]
<div class="widget">
    <div class="modal-header">
        <h4>Entry <small>[{if $item}]Edit Item[{else}]Add Item[{/if}]</small></h4>
        <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
            <li><a href="JavaScript:myApp.onSave()" title="Save" onclick=""><i class="fa fa-save"></i></a></li>
            <li><a href="JavaScript:myApp.onCancel()" title="Go Back" onclick=""><i class="fa fa-reply-all"></i></a></li>
        </ul>
    </div>
    <div class="modal-body" >
[{/if}]
        <input 
            type="hidden" 
            value="[{$item->_id|default:''}]" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="_type" 
                value="[{$item->_type|default:$type|default:''}]"/>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Title :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="Title"
                            name="_title"
                            value="[{$item->_title|quotes_to_entities|default:''}]"
                            />
                    </div>
                </div>
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Category :(*)</div>
                        <div class="row-fluid">
                            <select 
                                name="_category" 
                                class="form-control selectpicker validate[required]"
                                data-prompt-position="topLeft:0,20"
                                data-putto="#frm-err-category"
                                data-live-search="true"
                                data-size="10"
                                >
                                <option value="">Nothing Selected</option>
                                [{if $cates|default:null}]
                                [{foreach from=$cates item=c}]
                                    <option 
                                        data-data="<span style='padding-left: [{$c->cat_level*20}]px;'>[{$c->cat_title|escape}]</span>"
                                        [{if $c->cat_id == $item->_category}]selected="1"[{/if}]
                                        value="[{$c->cat_id|default:''}]">
                                            [{$c->cat_title|default:''}]
                                    </option>
                                [{/foreach}]
                                [{/if}]
                            </select>
                        </div>
                        <div id="frm-err-category"></div>
                    </div>
                </div>
            </div>
            <div class="control-group pull-bottom">
                <div>
                    Desc (*):
                </div>
                <textarea class="form-control validate[required]" 
                        rows="3"
                        name="_data[desc]"
                        >[{$item->_data.desc|quotes_to_entities|default:''}]</textarea>
                        
            </div>
            <fieldset>
                <legend>Information</legend>
                <div class="pull-bottom control-group">
                    <div>Title :(*)</div>
                    <input type="text" 
                        class="form-control validate[required]" 
                        data-prompt-position="topLeft:0,20"
                        placeholder="Title"
                        name="_data[title]"
                        value="[{$item->_data.title|quotes_to_entities|default:''}]"
                        />
                </div>
                <div id='jqxWidget'>
                    <div id="jqxgridColumns"></div>
                    <div style="margin-top: 30px;">
                        <div id="cellbegineditevent"></div>
                        <div style="margin-top: 10px;" id="cellendeditevent"></div>
                    </div>
                </div>
            </fieldset>
            
            <div class="control-group">
                <button type="button" class="btn btn-default" onclick="myApp.onSave()"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-default" onclick="myApp.onCancel()"><i class="fa fa-close"></i> Cancel</button>
            </div>
        </form>

    <script type="text/javascript">
        var editrow = -1;
        var data = [{$item->_data.columns|json_encode}];
        var columnSource;
        $(document).ready(function () {
            // prepare the data
            columnSource =
            {
                localdata: data,
                datatype: "array",
                datafields:
                [
                    { name: 'column', type: 'string' },
                    { name: 'title', type: 'string' },
                    { name: 'type', type: 'string' },
                    { name: 'valid', type: 'string' }
                ],
                updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
                    // call commit with parameter true if the synchronization with the server is successful 
                    // and with parameter false if the synchronization failder.
                    commit(true);
                }
            };
            // initialize the input fields.
            var dataAdapter = new $.jqx.dataAdapter(columnSource);
            // initialize jqxGrid
            $("#jqxgridColumns").jqxGrid(
            {
                theme: 'metro',
                width: '100%',
                height: 240,
                source: dataAdapter,
                pageable: false,
                // autoheight: true,
                columns: [
                  { text: 'Column', datafield: 'column', width: 120 },
                  { text: 'Title', datafield: 'title', minWidth: 120 },
                  { text: 'Type', datafield: 'type', width: 80 },
                  { text: 'Valid', datafield: 'valid', width: 120 },
                  { 
                      text: 'Edit', datafield: 'Edit', columntype: 'button', 
                      width: 60,
                      cellsrenderer: function () {
                         return "Edit";
                      }, buttonclick: function (row) {
                         // open the popup window when the user clicks a button.
                         editrow = row;
                         var offset = $("#jqxgridColumns").offset();
                         // $("#popupWindow").jqxWindow();
                         // get the clicked row's data and initialize the input fields.
                         var dataRecord = $("#jqxgridColumns").jqxGrid('getrowdata', editrow);
                         $("#dashboard_column").val(dataRecord.column);
                         $("#dashboard_title").val(dataRecord.title);
                         $("#dashboard_type").val(dataRecord.type);
                         $("#dashboard_valid").val(dataRecord.valid||'');
                         // show the popup window.
                         $("#popupWindow").jqxWindow('open');
                     }
                 }
                ],
                showtoolbar: true,
                rendertoolbar: function (toolbar) {
                    var me = this;
                    var container = $("<div style='margin: 5px;'></div>");
                    toolbar.append(container);
                    container.append('<input id="addrowbutton" type="button" value="Add New Row" />');
                    container.append('<input style="margin-left: 5px;" id="deleterowbutton" type="button" value="Delete Selected Row" />');
                    $("#addrowbutton").jqxButton({theme: 'metro'});
                    $("#deleterowbutton").jqxButton({theme: 'metro'});
                    // update row.
                    // create new row.
                    $("#addrowbutton").on('click', function () {
                        editrow = undefined;
                        $("#dashboard_column").val('');
                         $("#dashboard_title").val('');
                         $("#dashboard_type").val('string');
                         $("#dashboard_valid").val('1');
                         // show the popup window.
                         $("#popupWindow").jqxWindow('open');
                        
                    });
                    // create new rows.
                    $("#deleterowbutton").on('click', function () {
                        var selectedrowindex = $("#jqxgridColumns").jqxGrid('getselectedrowindex');
                        var rowscount = $("#jqxgridColumns").jqxGrid('getdatainformation').rowscount;
                        if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
                            var id = $("#jqxgridColumns").jqxGrid('getrowid', selectedrowindex);
                            var commit = $("#jqxgridColumns").jqxGrid('deleterow', id);
                        }
                    });
                },
            });
            // initialize the popup window and buttons.
            $("#popupWindow").jqxWindow({
                width: 320, resizable: false,  isModal: true, autoOpen: false, cancelButton: $("#jqxcancel"), modalOpacity: 0.1 ,theme: 'metro',
            });
            $("#popupWindow").on('open', function () {
                // $("#firstName").jqxInput('selectAll');
            });
            // update the edited row when the user clicks the 'Save' button.
        });
        function jqxColumnSave() {
            var row = { 
                column: $("#dashboard_column").val(), 
                title: $("#dashboard_title").val(), 
                type: $("#dashboard_type").val(), 
                valid: $("#dashboard_valid").val(), 
            };
            if (editrow >= 0) {
                var rowID = $('#jqxgridColumns').jqxGrid('getrowid', editrow);
                $('#jqxgridColumns').jqxGrid('updaterow', rowID, row);
                console.log(row,rowID)
            }else{
                var commit = $("#jqxgridColumns").jqxGrid('addrow', null, row);
            }
            $("#popupWindow").jqxWindow('hide');
        }
    </script>
[{if $action.ispopup!=1}]
    </div>
</div>
[{/if}]
