<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-22 11:35:43
         compiled from "application\templates\funny\addImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34965855f49addfe74-80930532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f57dbe934f6f4fe1660500f73d8b04e6a6acf1c1' => 
    array (
      0 => 'application\\templates\\funny\\addImage.tpl',
      1 => 1482380954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34965855f49addfe74-80930532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855f49ae30439_78862276',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855f49ae30439_78862276')) {function content_5855f49ae30439_78862276($_smarty_tpl) {?><div class="navbar navbar-app navbar-absolute-bottom" ui-yield-to="navbar-bottom">
        <div class="btn-group justified">
          <span ng-click="save()" class="btn btn-navbar"><i class="fa fa-save fa-navbar"></i> Đăng bài</span>
          <a href="#/" class="btn btn-navbar"><i class="fa fa-remove fa-navbar"></i> Hủy</a>
        </div>
</div>
<div class="app-body" ng-class="{loading: loading}">
        <div ng-show="loading" class="app-content-loading">
          <i class="fa fa-spinner fa-spin loading-spinner"></i>
        </div>
        <div class="app-content">
<div ui-content-for="title">
  <span>Add Image</span>
</div>
<div class="scrollable" >  
    <div class="scrollable-content">
        <form name="addEntryFrm" 
            id="addEntryFrm" class="frm"
            >
            <div class="">
                <div class="pull-bottom">
                    <label for="frm_title">Tiêu đề</label>
                    <div class=" control-group ">
                        <input 
                            type="text" 
                            ng-model="pdata.title"
                            class="form-control" 
                            placeholder="Tiêu đề"
                            id="frm_title"
                            name="title"
                            required
                            ng-minlength="3"
                            ng-maxlength="100"
                            >
                    </div>
                    <div role="alert" ng-show="!addEntryFrm.title.$valid">
                        <span class="error" ng-show="addEntryFrm.title.$error.required">
                          Không được để trống!</span>
                        <span class="error" ng-show="addEntryFrm.title.$error.minlength">
                          Tiêu đề ngắn quá !</span>
                        <span class="error" ng-show="addEntryFrm.title.$error.maxlength">
                          Tiêu đề dài quá !</span>
                    </div>
                </div>
                <div class="pull-bottom">
                    <label for="frm_url">Hình Ảnh | Video</label>
                    <div class="control-group">
                        <input 
                            type="url" 
                            ng-model="pdata.url"
                            class="form-control" 
                            placeholder="Hình ảnh URL" 
                            name="url" id="frm_url"
                            ng-blur="onPreview()"
                            required
                            ng-maxlength="255"
                            >
                    </div>
                    <div role="alert" ng-show="!addEntryFrm.url.$valid">
                        <span class="error" ng-show="addEntryFrm.url.$error.required">
                          Không được để trống!</span>
                        <span class="error" ng-show="addEntryFrm.url.$error.url">
                          Đường dẫn hình không hợp lệ !</span>
                        <span class="error" ng-show="image_data.url && !image_data.result">
                          Không tải được hình ảnh 1!</span>
                        <span class="error" ng-show="addEntryFrm.url.$error.maxlength">
                          Tiêu đề dài quá !</span>
                    </div>
                    <div role="alert" ng-show="addEntryFrm.url.$valid && !pdata.info">
                        <span class="error">
                          Không tải được hình ảnh/video !</span>
                    </div>
                </div>
                <span style="display:none" >
                    {{ pdata.urlValid = addEntryFrm.url.$valid}}
                    {{ pdata.formValid = addEntryFrm.$valid}}
                </span>
                <div class="preview-box" ng-show="pdata.info.type == 'image' && addEntryFrm.url.$valid">
                    <img src="{{pdata.info.url}}">
                </div>
                <div class="preview-box" ng-show="pdata.info.type == 'video' && addEntryFrm.url.$valid">
                    <video 
                        id="video" 
                        crossOrigin="anonymous"
                        controls autoplay
                        poster="http://img-9gag-fun.9cache.com/photo/a37NgA8_460s.jpg" 
                        style="min-height:280.4347826087px;width: 500px;" 
                        loop
                        muted
                        name="media" >
                        <source src="{{trustSrc(pdata.info.url)}}" type="video/mp4">
                    </video>
                </div>
                <div class="preview-box" ng-show="pdata.info.type == 'youtube' && addEntryFrm.url.$valid">
                    <iframe class="youtube-player" type="text/html" width="640" height="385" ng-src="{{trustSrc(pdata.info.url)}}" allowfullscreen frameborder="0">
                </div>
            </div>
        </form>
    </div>
</div>

</div>
      </div><?php }} ?>
