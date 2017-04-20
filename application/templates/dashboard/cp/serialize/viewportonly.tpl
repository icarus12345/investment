
[{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/meta.tpl"}]
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square page-boxed">
    [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/header.tpl"}]
    <!-- BEGIN CONTAINER -->
    <div class="container">
        <div class="page-container">
            [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/sidebar.tpl"}]
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/content/customizer.tpl"}]
                    [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/cp/content/pageheader.tpl"}]
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
                    <div>[{$formhtml}]</div>
                    <script type="text/javascript" src="/libraries/ckeditor/ckeditor.js" ></script>
                    <script type="text/javascript">
                        var myApp = {};
                        myApp.entryCommitUri = '/dashboard/cp/serialize/oncommit/';
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
                    </script>




                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        [{include file=$smarty.const.APPPATH|cat:"templates/dashboard/inc/footer.tpl"}]

</body>

<!-- END BODY -->
</html>