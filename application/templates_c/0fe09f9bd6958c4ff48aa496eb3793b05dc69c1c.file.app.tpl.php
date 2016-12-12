<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:03:58
         compiled from "application\templates\dashboard\so\setting\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18972584bb6ee0bf521-85244093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe09f9bd6958c4ff48aa496eb3793b05dc69c1c' => 
    array (
      0 => 'application\\templates\\dashboard\\so\\setting\\app.tpl',
      1 => 1436337420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18972584bb6ee0bf521-85244093',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb6ee11ad63_21210923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb6ee11ad63_21210923')) {function content_584bb6ee11ad63_21210923($_smarty_tpl) {?><?php if (false) {?><?php echo '<script'; ?>
 type="text/javascript"><?php }?>
var myApp = {
	onCommit : function(Url,Params, Id,callback) {
        httpRequest({
            'url': Url,
            'data': {
                'Id': Id,
                'Params': Params
            },
            'callback': function(rsdata) {
                if (rsdata.result < 0) {
                    addNotice(rsdata.message,'error');
                } else {
                    addNotice(rsdata.message,'success');
                    if (typeof callback == 'function') {
                        callback(rsdata);
                    }
                }
            }
        }).call();
    },
	validForm:function(Id){
		$('#entryForm'+Id).validationEngine({
		    'scroll': false,
		    'prettySelect' : true,
		    'isPopup' : false,
		    validateNonVisibleFields:true
		});
	},
	saveForm:function(Id){
		var frm = $('#entryForm'+Id);
		if( frm.validationEngine('validate') === false){
    		addNotice('Please complete input data.','warning');
    		return false;
    	}
    	var Params = frm.serializeObject();
    	this.onCommit('/dashboard/so/data/oncommit/',Params,Id,function(rsdata){
            if(rsdata.result>0){
                
            }
        });
	}
};

$(document).ready(function(){
	$('.forms-entry-list form').each(function(){
		myApp.validForm($(this).data('id'));
	})
})<?php }} ?>
