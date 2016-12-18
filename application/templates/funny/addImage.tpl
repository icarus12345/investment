<div ui-content-for="title">
  <span>Add Image</span>
</div>
<div ui-content-for="navbar-bottom">
    <div class="btn-group justified">
      <span ng-click="save()" class="btn btn-navbar"><i class="fa fa-save fa-navbar"></i> Đăng bài</span>
      <a href="#/" class="btn btn-navbar"><i class="fa fa-remove fa-navbar"></i> Hủy</a>
    </div>
</div>
<div class="scrollable" >  
    <div class="scrollable-content">
        <form name="addImageFrm" 
            id="addImageFrm" class="frm"
            >
            <div class="">
                <div class="pull-bottom">
                    <label for="image_title">Tiêu đề</label>
                    <div class=" control-group ">
                        <input 
                            type="text" 
                            ng-model="image_data.title"
                            class="form-control" 
                            placeholder="Tiêu đề"
                            id="image_title"
                            name="title"
                            required
                            ng-minlength="4"
                            ng-maxlength="100"
                            >
                    </div>
                    <div role="alert" ng-show="!addImageFrm.title.$valid">
                        <span class="error" ng-show="addImageFrm.title.$error.required">
                          Không được để trống!</span>
                        <span class="error" ng-show="addImageFrm.title.$error.minlength">
                          Tiêu đề ngắn quá !</span>
                        <span class="error" ng-show="addImageFrm.title.$error.maxlength">
                          Tiêu đề dài quá !</span>
                    </div>
                </div>
                <div class="pull-bottom">
                    <label for="image_url">Hình Ảnh</label>
                    <div class="control-group">
                        <input 
                            type="url" 
                            ng-model="image_data.image"
                            class="form-control" 
                            placeholder="Hình ảnh URL" 
                            name="image" id="image_url"
                            ng-blur="previewInage()"
                            required
                            ng-maxlength="255"
                            >
                    </div>
                    <div role="alert" ng-show="!addImageFrm.image.$valid">
                        <span class="error" ng-show="addImageFrm.image.$error.required">
                          Không được để trống!</span>
                        <span class="error" ng-show="addImageFrm.image.$error.url">
                          Đường dẫn hình không hợp lệ !</span>
                        <span class="error" ng-show="image_data.image && !image_data.result">
                          Không tải được hình ảnh!</span>
                        <span class="error" ng-show="addImageFrm.image.$error.maxlength">
                          Tiêu đề dài quá !</span>
                    </div>
                    <div role="alert" ng-show="addImageFrm.image.$valid && !image_data.image_src">
                        <span class="error">
                          Không tải được hình ảnh !</span>
                    </div>
                </div>
                <span style="display:none" >
                    {{ image_data.urlValid = addImageFrm.image.$valid}}
                    {{ image_data.formValid = addImageFrm.$valid}}
                </span>
                <div class="text-center" ng-show="image_data.image_src && addImageFrm.image.$valid">
                    <img src="{{image_data.image_src}}">
                </div>
            </div>
        </form>
    </div>
</div>