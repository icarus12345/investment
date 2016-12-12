
        <form id="subcribeFrm" name="subcribeFrm" class="validationFrm">
            <div class="pull-top pull-bottom">
                <div class=" control-group ">
                    <input type="text" class="form-control validate[required,maxSize[50]]" placeholder="Name">
                </div>
            </div>
            <div class="pull-bottom pull-top">
                <div class="control-group">
                    <input type="text" class="form-control validate[required,custom[email]]" placeholder="Email" >
                </div>
            </div>

            <div class="pull-bottom pull-top">
                <div class="control-group">
                    <input type="text" class="form-control validate[required,maxSize[250]]" placeholder="Subject" >
                </div>
            </div>

            <div class="pull-bottom pull-top">
                <div class="control-group">
                    <textarea rows="10" class="form-control validate[required]" placeholder="Your message..." ></textarea>
                </div>
            </div>
            <div class=" pull-top">
            <button type="submit" class="btn btn-orange pull-right" style="padding: 8px 40px"><span>SEND</span></button>
            </div>
        </form>