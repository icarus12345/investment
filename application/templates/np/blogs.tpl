[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
<div class="banner box-main cover" style="background-image:url(/assets/np/images/Layer-36.jpg)">
    <div class="container">
        <div class="box-title">
            <div>BLOGS</div>
            <span>follow our blogs.</span>
        </div>
        <div class="breadcum">
            <span>You are here:</span>
            <span>Blogs</span>
        </div>
    </div>
</div>
<div class="white-box space-linex3-before space-linex1-after">
    <div class="container">
        <div class="row">
            <div class="pull-right col-md-9 space-linex2-after col-xs-12">
                [{foreach from=$blogs item=foo}]
                <div class="blog-item">
                    <a href="/blogs/[{$foo->cat_alias}]/[{$foo->_alias}]/" class="blog-thumb cover" style="background-image:url([{$foo->_data.image}])">
                        <span>[{$foo->_insert|date_format:'%B<br/>%e'}]</span>
                    </a>
                    <div class="info">
                        <div class="count cls row">
                            <div class="col-sm-6">
                                <span><i class="fa fa-user"></i> [{$foo->_data.author|default:'N&P'}]</span>
                                <span><i class="fa fa-eye"></i> [{$foo->_view}]</span>
                                <span><i class="fa fa-comments"></i> [{$foo->_like}]</span>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div style="display:inline-block">
                                        <span class="fb-like">
                                            <div class="fb-like" data-href="[{''|base_url}]blogs/[{$foo->cat_alias}]/[{$foo->_alias}]" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                                        </span>
                                        <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
                                        <span class="google-plus pull-left">
                                            <div class="g-plusone" data-href="[{''|base_url}]blogs/[{$foo->cat_alias}]/[{$foo->_alias}]" data-size="medium"></div>
                                        </span>
                                        <span class="google-plus pull-left">
                                            <div class="g-plus" data-action="share"  data-annotation="bubble"></div>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/blogs/[{$foo->cat_alias}]/[{$foo->_alias}]/" class="tit">[{$foo->_title}]</a>
                        <div class="desc">[{$foo->_data.desc}]</div>
                    </div>
                </div>
                [{foreachelse}]
                <h2 class="text-center" style="padding:80px 0">No data to display.</h2>
                [{/foreach}]
                <div class="text-center">
                    [{$paging}]
                </div>
                <!-- Đặt thẻ này sau thẻ Nút +1 cuối cùng. -->
                <script type="text/javascript">
                  window.___gcfg = {lang: 'vi'};

                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/platform.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=707642035948105&version=v2.3";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="clearfix"></div>
            </div>
            <div class="right-bar col-md-3 pull-left col-xs-12 space-linex2-after">
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/blog-cate-list.tpl"}]
                <div class="cover" style="background-image:url(/assets/np/images/Layer-21.jpg">
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/testimonial-slider.tpl"}]
                </div>
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/download.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/contact.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/np/widget/business-hour.tpl"}]
            </div>
        </div>
    </div>
</div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]