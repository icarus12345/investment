[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/head.tpl"}]
<div class="banner-box">
    <div class="tit">
        <div class="f32">BLOG</div>
        <ul>
            <li>Home</li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-bottom pull-top right-blog">
                [{if $blog_detail}]
                <div class="blog-item">
                    <div class="blog-thumb cover" style="background-image:url([{$blog_detail->content_thumb|escape:'html'}])">
                        <span>[{$blog_detail->content_insert|date_format:'%B<br/>%e'}]</span>
                    </div>
                    <div class="info">
                        <div class="count cls row">
                            <div class="col-sm-6">
                                <span><i class="fa fa-user"></i> [{$blog_detail->content_author|escape:'html'}]</span>
                                <span><i class="fa fa-eye"></i> 0</span>
                                <span><i class="fa fa-comments"></i> 0</span>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div style="display:inline-block">
                                        <span class="fb-like">
                                            <div class="fb-like" data-href="[{'blogs/'|cat:$blog_detail->content_alias|escape:'html'|base_url}]" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                                        </span>
                                        <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
                                        <span class="google-plus pull-left">
                                            <div class="g-plusone" data-href="[{'blogs/'|cat:$blog_detail->content_alias|escape:'html'|base_url}]" data-size="medium"></div>
                                        </span>
                                        <span class="google-plus pull-left">
                                            <div class="g-plus" data-action="share"  data-annotation="bubble"></div>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tit">[{$blog_detail->content_title|escape:'html'}]</div>
                        <div class="desc">Catalogue : <a href="/blogs/[{$category->cat_alias|escape:'html'}]" ><i>[{$category->cat_title|escape:'html'}]</i></a></div>
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                        <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
                        <div class="ckeditor">
                        [{$blog_detail->content_content}]
                        </div>
                        [{assign "tags" explode(",",$blog_detail->content_tag)}]
                        [{if $tags && $blog_detail->content_tag}]
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                        <div class="blog-tags">Tags : 
                        [{foreach $tags 'tag'}]
                        <span>[{$tag}]</span>
                        [{/foreach}]
                        </div>
                        [{/if}]
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                    </div>
                </div>

                <div class="box categories">
                    <h4>Comments</h4>
                    <div>
                        [{include file=$smarty.const.APPPATH|cat:"templates/investment/widget/facebook-comment.tpl"}]
                    </div>
                </div>
                [{else}]
                <h2 class="text-center" style="padding:80px 0">No data to display.</h2>
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
            </div>
        </div>
    </div>
</div>


[{include file=$smarty.const.APPPATH|cat:"templates/investment/inc/foot.tpl"}]