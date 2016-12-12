<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 22:33:54
         compiled from "application\templates\dashboard\content\helper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1321584c2062857772-60351087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd56ba95b8d71d27b39e15cac01f535f549c9521e' => 
    array (
      0 => 'application\\templates\\dashboard\\content\\helper.tpl',
      1 => 1436154060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321584c2062857772-60351087',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584c2062876548_34149827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584c2062876548_34149827')) {function content_584c2062876548_34149827($_smarty_tpl) {?><br/>
<div class="portlet light bg-inverse">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-question"></i>Manual
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
            <a href="javascript:;" class="remove">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <ul>
            <li>
                Right-Click on a Grid Row to open a Context Menu.<br/>
                <img src="/libraries/images/help/context-menu.jpg">
            </li>
            <li>
                In Grid row, 'double click' on a Grid cell to edit.<br/>
                <img src="/libraries/images/help/cell-edit.jpg">
            </li>
        </ul>
    </div>
</div>
<div class="portlet light bg-inverse">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-question"></i>Keyboard Navigation
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
            <a href="javascript:;" class="remove">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div>
        If the user starts typing text, the cell's content is replaced with the text entered from the user.
        </div>
        <ul>
            <li>Left Arrow key is pressed - Selects the left cell, when the Grid is not in edit
            mode. Otherwise, the key stroke is handled by the editor.</li>
            <li>Right Arrow key is pressed - Selects the right cell, when the Grid is not in edit
            mode. Otherwise, the key stroke is handled by the editor.</li>
            <li>Up Arrow key is pressed - Selects the cell above, when the Grid is not in edit mode.
            Otherwise, the key stroke is handled by the editor.</li>
            <li>Down Arrow key is pressed - Selects the cell below, when the Grid is not in edit
            mode. Otherwise, the key stroke is handled by the editor.</li>
            <li>Page Up/Down is pressed - Navigate Up or Down with one page, when the Grid is not
            in edit mode. Otherwise, the key stroke is handled by the editor.</li>
            <li>Home/End is pressed - Navigate to the first or last row, when the Grid is not in
            edit mode. Otherwise, the key stroke is handled by the editor.</li>
            <li>Enter key is pressed - Shows the selected cell's editor. If the cell is in edit
                mode, hides the cell's editor and saves the new value. The editor's value is equal
            to the cell's value.</li>
            <li>Esc key is pressed - Hides the cell's editor and cancels the changes.</li>
            <li>Tab key is pressed - Selects the right cell. If the Grid is in edit mode, saves
            the edit cell's value, closes its editor, selects the right cell and opens its editor.</li>
            <li>Shift+Tab keys are pressed - Selects the left cell. If the Grid is in edit mode,
                saves the edit cell's value, closes its editor, selects the left cell and opens
            its editor.</li>
            <li>F2 key is pressed - shows the selected cell's editor when the Grid is in edit mode.</li>
            <li>Space key is pressed - Toggles the checkbox editor's check state when the selected
            cell's column is a checkbox column and the Grid is editable.</li>
            <li>Ctrl key is pressed - in 'multiplecellsextended and multiplerowsextended' selection
            mode, extends the selection when the user clicks on a cell or row. </li>
            <li>Ctrl+ARROW KEY - moves to an edge. </li>
            <li>SHIFT+ARROW KEY extends the selection.</li>
            <li>Page Down - Moves one screen down</li>
            <li>Page Up - Moves one screen up</li>
            <li>Home - Moves to the beginning</li>
            <li>End - Moves to the end</li>
        </ul>
    </div>
</div><?php }} ?>
