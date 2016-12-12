<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 18:10:56
         compiled from "application\templates\investment\blog-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31147584bc22557f233-53963632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f4028eec8cbb381bb8817bdfa09e8d954ecde2' => 
    array (
      0 => 'application\\templates\\investment\\blog-detail.tpl',
      1 => 1481454427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31147584bc22557f233-53963632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bc22566d529_26177366',
  'variables' => 
  array (
    'blog_detail' => 0,
    'category' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bc22566d529_26177366')) {function content_584bc22566d529_26177366($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\investment\\application\\third_party\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                <?php if ($_smarty_tpl->tpl_vars['blog_detail']->value) {?>
                <div class="blog-item">
                    <div class="blog-thumb cover" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_detail']->value->content_thumb, ENT_QUOTES, 'UTF-8', true);?>
)">
                        <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blog_detail']->value->content_insert,'%B<br/>%e');?>
</span>
                    </div>
                    <div class="info">
                        <div class="count cls row">
                            <div class="col-sm-6">
                                <span><i class="fa fa-user"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_detail']->value->content_author, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <span><i class="fa fa-eye"></i> 0</span>
                                <span><i class="fa fa-comments"></i> 0</span>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div style="display:inline-block">
                                        <span class="fb-like">
                                            <div class="fb-like" data-href="<?php echo base_url(htmlspecialchars(('blogs/').($_smarty_tpl->tpl_vars['blog_detail']->value->content_alias), ENT_QUOTES, 'UTF-8', true));?>
" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                                        </span>
                                        <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
                                        <span class="google-plus pull-left">
                                            <div class="g-plusone" data-href="<?php echo base_url(htmlspecialchars(('blogs/').($_smarty_tpl->tpl_vars['blog_detail']->value->content_alias), ENT_QUOTES, 'UTF-8', true));?>
" data-size="medium"></div>
                                        </span>
                                        <span class="google-plus pull-left">
                                            <div class="g-plus" data-action="share"  data-annotation="bubble"></div>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_detail']->value->content_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="desc">Catalogue : <a href="/blogs/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->cat_alias, ENT_QUOTES, 'UTF-8', true);?>
" ><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->cat_title, ENT_QUOTES, 'UTF-8', true);?>
</i></a></div>
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                        <link rel="stylesheet" type="text/css" href="/libraries/ckeditor/contents.css">
                        <div class="ckeditor">
                        <?php echo $_smarty_tpl->tpl_vars['blog_detail']->value->content_content;?>

                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars["tags"])) {$_smarty_tpl->tpl_vars["tags"] = clone $_smarty_tpl->tpl_vars["tags"];
$_smarty_tpl->tpl_vars["tags"]->value = explode(",",$_smarty_tpl->tpl_vars['blog_detail']->value->content_tag); $_smarty_tpl->tpl_vars["tags"]->nocache = null; $_smarty_tpl->tpl_vars["tags"]->scope = 0;
} else $_smarty_tpl->tpl_vars["tags"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['blog_detail']->value->content_tag), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['tags']->value&&$_smarty_tpl->tpl_vars['blog_detail']->value->content_tag) {?>
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                        <div class="blog-tags">Tags : 
                        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                        <span><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</span>
                        <?php } ?>
                        </div>
                        <?php }?>
                        <div class="space-line"></div>
                        <div class="space-line"></div>
                    </div>
                </div>

                <div class="box categories">
                    <h4>Comments</h4>
                    <div>
                        <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/facebook-comment.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                </div>
                <?php } else { ?>
                <h2 class="text-center" style="padding:80px 0">No data to display.</h2>
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

            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
