<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 19:13:52
         compiled from "application\templates\dashboard\cp\cdata\viewportonly.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11936584d3ed22c89e1-94321015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'becc7637bf650013fb4f5396a129db3e01fa66b5' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\cdata\\viewportonly.tpl',
      1 => 1481458386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11936584d3ed22c89e1-94321015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584d3ed2391a97_92078229',
  'variables' => 
  array (
    'formhtml' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584d3ed2391a97_92078229')) {function content_584d3ed2391a97_92078229($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square page-boxed">
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/header.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- BEGIN CONTAINER -->
    <div class="container">
        <div class="page-container">
            <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/sidebar.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/content/customizer.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/cp/content/pageheader.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <div><?php echo $_smarty_tpl->tpl_vars['formhtml']->value;?>
</div>
                    <?php echo '<script'; ?>
 type="text/javascript" src="/libraries/ckeditor/ckeditor.js" ><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 type="text/javascript">
                        var myApp = {};
                        myApp.entryCommitUri = '/dashboard/cp/entry/oncommit/';
                        myApp.onCommit = function(Url,Params, Id,callback) {
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
                        };
                        myApp.onSave = function(){
                            
                            if($('textarea[data-isEditor="true"]').length>0){
                                $('textarea[data-isEditor="true"]').each(function(){
                                    var editorId = $(this).attr('id');
                                    $(this).val(CKEDITOR.instances[editorId].getData());
                                })
                                
                            }
                            if( $('#entryForm').validationEngine('validate') === false){
                                addNotice('Please complete input data.','warning');
                                return false;
                            }
                            var Id = $('#EntryId').val();
                            var Params =$('#entryForm').serializeObject();
                            myApp.onCommit(myApp.entryCommitUri,Params,Id,function(rsdata){
                                if(rsdata.result>0){
                                    
                                }
                            });
                        };
                        $(document).ready(function(){
                            $('#entryForm').validationEngine({
                                'scroll': false,
                                'isPopup' : false,
                                validateNonVisibleFields:true
                            });
                            $('#entryForm .selectpicker').selectpicker();
                            $('#entryForm [data-toggle="popover"]').popover({
                                html:true
                            })
                            if($('textarea[data-isEditor="true"]').length>0){
                                $('textarea[data-isEditor="true"]').each(function(){
                                    addEditorFeature($(this).attr('id'),240);
                                })
                                
                            }
                        })
                    <?php echo '</script'; ?>
>




                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/dashboard/inc/footer.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>

<!-- END BODY -->
</html><?php }} ?>
