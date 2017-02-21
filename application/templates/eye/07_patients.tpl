[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/head.tpl"}]
        <div class="banner-about cover" style="background-image:url(/assets/eye/images/about.jpg)">
            <div class="f40 banner-title">Patients</div>
        </div>
        <div class="becu">
            <div class="container">
            About / Patients
            </div>
        </div>
        <div class="about-list cls">
            <div class="container">
                <div class="row">
                    [{foreach from=$aPatients item=foo key=i}]
                    <div class="item col-sm-6 col-md-4">
                        <div>
                            <div class="num">0[{$i+1}]</div>
                            <div class="tit">[{$foo->_title|escape:'html'}]</div>
                            <p>[{$foo->_data.desc|escape:'html'}]</p>
                            [{if $foo->_id==77}]
                            <a href="[{'patients/meet-the-team'|base_url}]"><div class="btn btn-info">Read more</div></a>
                            [{else}]
                            <a href="[{'patients/'|cat:$foo->_alias|escape:'html'|base_url}]"><div class="btn btn-info">Read more</div></a>
                            [{/if}]
                        </div>
                    </div>
                    [{/foreach}]
                </div>
            </div>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/eye/inc/foot.tpl"}]
