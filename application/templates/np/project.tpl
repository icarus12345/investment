[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>Project</div>
            <span>Let look at our project</span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            <span>Project</span>
        </div>
    </div>
</div>
<div class="gray-box space-linex3-before space-linex3-after">
    <div class="">
        <div class="box-title text-center">
            <div>OUR FEATURED WORKS</div>
            <span>Our Proud Projects</span>
        </div>
        <div class="space-linex2-before">
            <div id="container2" class="boxs hasgutter"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/libraries/plugin/masonry.js"></script>

<script type="text/javascript">
    var featuredwork2 = [{$featuredwork2|json_encode}]
</script>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]