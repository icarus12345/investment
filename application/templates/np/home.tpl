[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/widget/slider.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]

<div class="container">
    <div class="welcome">
        <div class="row">
            <div class="col-sm-8 col-md-8 pull-right">
                <div class="orange-box">
                    <div class="title">[{$welcome->_title}]</div>
                    <div class="sub-title">[{$welcome->_data.title}]</div>
                </div>
                <div>
                    [{$welcome->_data.desc}]
                </div>
            </div>
            <div class="col-sm-4 col-md-4 thumb">
                <img src="[{$welcome->_data.image}]"/>
            </div>
        </div>
    </div>
</div>