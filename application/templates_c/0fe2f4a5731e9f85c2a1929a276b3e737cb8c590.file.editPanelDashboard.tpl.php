<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-03 16:48:58
         compiled from "application\templates\dashboard\cp\serialize\editPanelDashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7455854adb3722094-17488510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe2f4a5731e9f85c2a1929a276b3e737cb8c590' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\serialize\\editPanelDashboard.tpl',
      1 => 1486115331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7455854adb3722094-17488510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5854adb37f3a63_98552500',
  'variables' => 
  array (
    'action' => 0,
    'item' => 0,
    'type' => 0,
    'cates' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854adb37f3a63_98552500')) {function content_5854adb37f3a63_98552500($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']!=1) {?>
<div class="widget">
    <div class="modal-header">
        <h4>Entry <small><?php if ($_smarty_tpl->tpl_vars['item']->value) {?>Edit Item<?php } else { ?>Add Item<?php }?></small></h4>
        <ul class="navbar-icons" style="position: absolute;right: 0;top:0px;">
            <li><a href="JavaScript:myApp.onSave()" title="Save" onclick=""><i class="fa fa-save"></i></a></li>
            <li><a href="JavaScript:myApp.onCancel()" title="Go Back" onclick=""><i class="fa fa-reply-all"></i></a></li>
        </ul>
    </div>
    <div class="modal-body" >
<?php }?>
        <input 
            type="hidden" 
            value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->_id)===null||$tmp==='' ? '' : $tmp);?>
" 
            id="EntryId"
            />
        <form name="entryForm" id="entryForm" target="integration_asynchronous">
            <input type="hidden" name="_type" 
                value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['item']->value->_type)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['type']->value : $tmp))===null||$tmp==='' ? '' : $tmp);?>
"/>
            <div class="row half">
                <div class="col-mb-6 half">
                    <div class="pull-bottom control-group">
                        <div>Title :(*)</div>
                        <input type="text" 
                            class="form-control validate[required]" 
                            data-prompt-position="topLeft:0,20"
                            placeholder="Title"
                            name="_title"
                            value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_title))===null||$tmp==='' ? '' : $tmp);?>
"
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
                                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['cates']->value)===null||$tmp==='' ? null : $tmp)) {?>
                                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                    <option 
                                        data-data="<span style='padding-left: <?php echo $_smarty_tpl->tpl_vars['c']->value->cat_level*20;?>
px;'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</span>"
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->cat_id==$_smarty_tpl->tpl_vars['item']->value->_category) {?>selected="1"<?php }?>
                                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_id)===null||$tmp==='' ? '' : $tmp);?>
">
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['c']->value->cat_title)===null||$tmp==='' ? '' : $tmp);?>

                                    </option>
                                <?php } ?>
                                <?php }?>
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
                        ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_data['desc']))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                        
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
                        value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->_data['title']))===null||$tmp==='' ? '' : $tmp);?>
"
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

    <?php echo '<script'; ?>
 type="text/javascript">
        var editrow = -1;
        var data = <?php echo json_encode($_smarty_tpl->tpl_vars['item']->value->_data['columns']);?>
;
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
    <?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['action']->value['ispopup']!=1) {?>
    </div>
</div>
<?php }?>
<?php }} ?>
