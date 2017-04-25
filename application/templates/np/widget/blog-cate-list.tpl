                <div class="sub-box">
                    <ul class="right-bar-list">
                        <li class="[{if !$catdetail}]active[{/if}]"><a href="/blogs">All Blogs</a></li>
                        [{foreach from=$categorys item=foo}]
                        <li class="[{if $catdetail->cat_id == $foo->cat_id}]active[{/if}]"><a href="/blogs/[{$foo->cat_alias|escape:'html'}]">[{$foo->cat_title|escape:'html'}]</a></li>
                        [{/foreach}]
                    </ul>
                </div>