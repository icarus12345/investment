                <div class="box categories">
                    <h4>Recent Posts</h4>
                    <ul>
                        
                        [{foreach from=$feature_blogs item=foo}]
                        <li>
                            <div class="small-item-post">
                                <a href="/blogs/[{$foo->content_alias|escape:'html'}]">
                                    <div class="nailthumb">
                                        <div class="nailthumb-figure-square">
                                            <div class="nailthumb-container">
                                                <img class="lazy" src="[{$foo->content_thumb|escape:'html'}]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <p class="line-clamp-f-3">[{$foo->content_title|escape:'html'}]</p>
                                        <span>Post date: [{$foo->content_insert|date_format}]</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        [{foreachelse}]
                        <li><div>No data to display.</div></li>
                        [{/foreach}]
                    </ul>
                </div>