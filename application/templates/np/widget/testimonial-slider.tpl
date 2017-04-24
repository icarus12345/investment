                <div class="owl-carousel" id="owl-testimonial" role="dot-orange">
                    [{foreach from=$testimonials item=foo}]
                    <div class="item">
                        <div class="que">
                            <p class="line-clamp-f-5">[{$foo->_data.desc}]</p>
                        </div>
                        <span>[{$foo->_data.position}]</span>
                    </div>
                    [{/foreach}]
                </div>