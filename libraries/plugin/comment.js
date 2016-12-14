    function loadComment(page){
        var key = document.cmtFrm.comment_key.value;
        jQuery.ajax({
            type: "POST",
            cache:false,
            timeout:10000,
            data: {
                key:key,
                page:page
            },
            dataType: 'text',
            url: '/frontend/excution/loadComment',
            success: function(data_result) {
                $('#lstComment').html(data_result)
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $('#lstComment').html('Cant load comments.')
            }
        });
    }
$(document).ready(function(){
    
    $('#cmtSubmit').click(function(){
        if( $('#cmtFrm').validationEngine('validate') === false){
            alert('Please complete input data.');
            return false;
        }
        var params =$('#cmtFrm').serializeObject();
        jQuery.ajax({
            type: "POST",
            cache:false,
            timeout:10000,
            data: {params:params},
            dataType: 'json',
            url: '/frontend/excution/addComment',
            success: function(data_result) {
                if(data_result.result>0){
                    document.cmtFrm.reset();
                    loadComment();
                } else {
                    if(toastr)
                        toastr['warning'](data_result.message, 'Warning !');
                    else alert(data_result.message)
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                if(toastr)
                    toastr['warning']('Sorry. Your request could not be completed. Please check your input data and try again.', 'Warning !');
                else('Sorry. Your request could not be completed. Please check your input data and try again.');
            }
        });
        
    });
    if($('#cmtFrm').length>=1){
        $('#cmtFrm').validationEngine({
            'scroll': false
        });
        loadComment();
    }
});