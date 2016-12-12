<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 20:43:43
         compiled from "application\templates\investment\blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22499584bb79dd089e1-54539839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0827a26d7e866ea520a84cf8dbe4763222ccc027' => 
    array (
      0 => 'application\\templates\\investment\\blog.tpl',
      1 => 1481463821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22499584bb79dd089e1-54539839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79de63e65_99490551',
  'variables' => 
  array (
    'by' => 0,
    'category' => 0,
    'time' => 0,
    'list_blogs' => 0,
    'foo' => 0,
    'paging' => 0,
    'site' => 0,
    'settting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79de63e65_99490551')) {function content_584bb79de63e65_99490551($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\investment\\application\\third_party\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">BLOG</div>
        <ul>
            <li>Home</li>
            <?php if ($_smarty_tpl->tpl_vars['by']->value=='cat'&&isset($_smarty_tpl->tpl_vars['category']->value)) {?>
            <li>Blog</li>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['category']->value->cat_title;?>
</a></li>
            <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['by']->value=='time'&&isset($_smarty_tpl->tpl_vars['time']->value)) {?>
            <li>Blog</li>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</a></li>
            <?php } else { ?>
            <li><a href="#">Blog</a></li>
            <?php }?>
            <?php }?>
        </ul>
    </div>
</div>
<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-bottom pull-top right-blog">
                <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                <div class="blog-item">
                    <a href="<?php echo base_url(htmlspecialchars(('blogs/').($_smarty_tpl->tpl_vars['foo']->value->content_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="blog-thumb cover" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_thumb, ENT_QUOTES, 'UTF-8', true);?>
)">
                        <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['foo']->value->content_insert,'%B<br/>%e');?>
</span>
                    </a>
                    <div class="info">
                        <div class="count cls row">
                            <div class="col-sm-6">
                                <span><i class="fa fa-user"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_author, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <span><i class="fa fa-eye"></i> 0</span>
                                <span><i class="fa fa-comments"></i> 0</span>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div style="display:inline-block">
                                        <span class="fb-like">
                                            <div class="fb-like" data-href="<?php echo base_url(htmlspecialchars(('blogs/').($_smarty_tpl->tpl_vars['foo']->value->content_alias), ENT_QUOTES, 'UTF-8', true));?>
" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                                        </span>
                                        <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
                                        <span class="google-plus pull-left">
                                            <div class="g-plusone" data-href="<?php echo base_url(htmlspecialchars(('blogs/').($_smarty_tpl->tpl_vars['foo']->value->content_alias), ENT_QUOTES, 'UTF-8', true));?>
" data-size="medium"></div>
                                        </span>
                                        <span class="google-plus pull-left">
                                            <div class="g-plus" data-action="share"  data-annotation="bubble"></div>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url(htmlspecialchars(('blogs/').($_smarty_tpl->tpl_vars['foo']->value->content_alias), ENT_QUOTES, 'UTF-8', true));?>
" class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_title, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <div class="desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->content_desc, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    </div>
                </div>
                <?php }
if (!$_smarty_tpl->tpl_vars['foo']->_loop) {
?>
                <div class="text-center" style="padding:80px 0">No data to display.</div>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['paging']->value) {?>
                <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
                <?php }?>
                <!-- Đặt thẻ này sau thẻ Nút +1 cuối cùng. -->
                <?php echo '<script'; ?>
 type="text/javascript">
                  window.___gcfg = {lang: 'vi'};

                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/platform.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                <?php echo '</script'; ?>
>
                <div id="fb-root"></div>
                <?php echo '<script'; ?>
>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=707642035948105&version=v2.3";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
            </div>
            <div class="col-md-3 pull-bottom pull-top">
                <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/left-category.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/left-recent.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/left-archives.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/left-tags.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/left-subcribe.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class="box categories">
                    <h4>Linked Websites</h4>
                    <ul>
                        <li>
                            <div>
                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['keyword'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settting_data']->value['link-websites'] : $tmp);?>

                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
