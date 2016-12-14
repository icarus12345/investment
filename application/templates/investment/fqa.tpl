[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">FQA</div>
        <ul>
            <li>Home</li>
            <li><a href="#">FQA</a></li>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-bottom pull-top right-blog">
                <div class="blog-item">
                    <div class="tit-h1">PROPERTY INVESTMENT <span>FQAs</span></div>
                    <div class="gray container">
                        <div class="col-sm-12 pull-bottom">
                            <div class="space-line"></div>
                            <div class="hr2"></div>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                            <i>We answer your frequently asked questions about property investment below. To discuss your individual circumstances, your local Mortgage Choice broker is always happy to chat with you.</i>
                            <div class="space-line"></div>
                            <div class="space-line"></div>
                        </div>
                    </div>
                    <div class="fqa-arcoding">
                        [{foreach from=$fqa_data item=foo}]
                        <div class="[{if $foo->data_id == $fqa_data[0]->data_id}]actived[{/if}]"
                            >
                            <div class="head-collapse">
                                [{$foo->data_title|escape:'html'}]
                            </div>
                            <div class="body-collapse">
                                [{$foo->data_content|escape:'html'}]
                            </div>
                        </div>
                        [{/foreach}]
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $('.fqa-arcoding .head-collapse').click(function(){
                            $('.fqa-arcoding .actived').removeClass('actived');
                            $(this).parent().addClass('actived');
                        })
                    })
                    </script>
                </div>
            </div>
            <div class="col-md-3 pull-bottom pull-top">
                [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/left-recent.tpl"}]
            </div>
        </div>
    </div>
</div>


[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]