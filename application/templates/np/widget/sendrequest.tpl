        
        <form id="sendRequestFrm" name="sendRequestFrm" class="validationFrm">
            <input type="hidden"  name="contact_type" value="contact" />
            <div class="pull-top pull-bottom">
                <div class=" control-group ">
                    <input type="text" class="form-control validate[required,maxSize[50]]" placeholder="Name" name="contact_name">
                </div>
            </div>
            <div class="pull-bottom pull-top">
                <div class="control-group">
                    <input type="text" class="form-control validate[required,custom[email],maxSize[100]]" placeholder="Email" name="contact_email">
                </div>
            </div>

            <div class="pull-bottom pull-top">
                <div class="control-group">
                    <input type="text" class="form-control validate[required,maxSize[250]]" placeholder="Subject" name="contact_subject">
                </div>
            </div>

            <div class="pull-bottom pull-top">
                <div class="control-group">
                    <textarea rows="10" class="form-control validate[required]" placeholder="Your message..." name="contact_message"></textarea>
                </div>
            </div>
            <div class=" pull-top">
                <button type="button" onclick="sendRequest()" class="btn btn-orange pull-right" style="padding: 8px 40px"><span>SEND</span></button>
            </div>
        </form>