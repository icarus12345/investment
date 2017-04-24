                <div class="sub-box">
                    <ul class="right-bar-list">
                        [{foreach from=$services item=foo}]
                        <li class="[{if $entrydetail->_id == $foo->_id}]active[{/if}]"><a href="/services/[{$foo->_alias|escape:'html'}]">[{$foo->_title|escape:'html'}]</a></li>
                        [{/foreach}]
                    </ul>
                </div>