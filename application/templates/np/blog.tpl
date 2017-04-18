[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">BLOG</div>
        <ul>
            <li>Home</li>
            [{if $by=='cat' && isset($category)}]
            <li>Blog</li>
            <li><a href="#">[{$category->cat_title}]</a></li>
            [{else}]
            [{if $by=='time' && isset($time)}]
            <li>Blog</li>
            <li><a href="#">[{$time}]</a></li>
            [{else}]
            <li><a href="#">Blog</a></li>
            [{/if}]
            [{/if}]
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-bottom pull-top right-blog">
                [{foreach from=$list_blogs item=foo}]
                <div class="blog-item">
                    <a href="[{'blogs/'|cat:$foo->content_alias|escape:'html'|base_url}]" class="blog-thumb cover" style="background-image:url([{$foo->content_thumb|escape:'html'}])">
                        <span>[{$foo->content_insert|date_format:'%B<br/>%e'}]</span>
                    </a>
                    <div class="info">
                        <div class="count cls row">
                            <div class="col-sm-6">
                                <span><i class="fa fa-user"></i> [{$foo->content_author|escape:'html'}]</span>
                                <span><i class="fa fa-eye"></i> 0</span>
                                <span><i class="fa fa-comments"></i> 0</span>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div style="display:inline-block">
                                        <span class="fb-like">
                                            <div class="fb-like" data-href="[{'blogs/'|cat:$foo->content_alias|escape:'html'|base_url}]" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                                        </span>
                                        <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
                                        <span class="google-plus pull-left">
                                            <div class="g-plusone" data-href="[{'blogs/'|cat:$foo->content_alias|escape:'html'|base_url}]" data-size="medium"></div>
                                        </span>
                                        <span class="google-plus pull-left">
                                            <div class="g-plus" data-action="share"  data-annotation="bubble"></div>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="[{'blogs/'|cat:$foo->content_alias|escape:'html'|base_url}]" class="tit">[{$foo->content_title|escape:'html'}]</a>
                        <div class="desc">[{$foo->content_desc|escape:'html'}]</div>
                    </div>
                </div>
                [{foreachelse}]
                <div class="text-center" style="padding:80px 0">No data to display.</div>
                [{/foreach}]
                [{if $paging}]
                <div class="text-center">[{$paging}]</div>
                [{/if}]
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
            </div>
            <div class="col-md-3 pull-bottom pull-top">
                [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/left-category.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/left-recent.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/left-archives.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/left-tags.tpl"}]
                [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/left-subcribe.tpl"}]
                <div class="box categories">
                    <h4>Linked Websites</h4>
                    <ul>
                        <li>
                            <div>
                                [{$site.keyword|default:$settting_data['link-websites']}]
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>


[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]