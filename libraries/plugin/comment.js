$(document).ready(function(){
    
    function loadComment(){
        $('#lstComment').load('/frontend/excution/loadComment')
    }
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
                document.cmtFrm.reset();
                loadComment();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert('Sorry. Your request could not be completed. Please check your input data and try again.');
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