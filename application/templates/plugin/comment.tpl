<div>
[{foreach from=$comments item=foo}]
<div class="cmt-item">
    <div class="cmt-avatar"></div>
    <div class="cmt-user">
        <span class="cmt-name">[{$foo->comment_name|escape:'html'}]</span>
        <span class="cmt-time">[{$foo->comment_insert|escape:'html'}]</span>
    </div>
    <p class="cmt-comment">[{$foo->comment_content|escape:'html'}]</p>
</div>
[{/foreach}]
</div>
[{$paging}]