<div class="box categories">
    <h4>Categories</h4>
    <ul>
        <li class="[{if $by=='cat' && !isset($category)}]actived[{/if}]"><a href="/blogs">All</a></li>
        [{foreach from=$blog_cates item=foo}]
        <li class="[{if $by=='cat' && isset($category) && $category->cat_id==$foo->cat_id}]actived[{/if}]"><a href="/blogs/[{$foo->cat_alias|escape:'html'}]">[{$foo->cat_title|escape:'html'}]</a></li>
        [{/foreach}]
    </ul>
</div>