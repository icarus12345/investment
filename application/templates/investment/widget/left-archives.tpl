                <div class="box categories">
                    <h4>Archives</h4>
                    <ul>
                        [{for $n=0 to 5}]
                        <li class="[{if $by=='time' && 'Y-m'|date:(('-'|cat:$n|cat:' months')|strtotime) == $time}]actived[{/if}]"><a href="/blogs/[{'Y-m'|date:(('-'|cat:$n|cat:' months')|strtotime)}]">[{'F Y'|date:(('-'|cat:$n|cat:' months')|strtotime)}]</a></li>
                        [{/for}]
                    </ul>
                </div>