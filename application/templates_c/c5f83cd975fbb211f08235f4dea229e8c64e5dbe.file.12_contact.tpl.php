<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-19 12:52:54
         compiled from "application\templates\eye\12_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3144958a90823dd0261-20670313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f83cd975fbb211f08235f4dea229e8c64e5dbe' => 
    array (
      0 => 'application\\templates\\eye\\12_contact.tpl',
      1 => 1487483550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3144958a90823dd0261-20670313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a90823e4f942_17067126',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a90823e4f942_17067126')) {function content_58a90823e4f942_17067126($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="map">
            <div id="map"></div>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyB6TJrMx3v003kFpoOUSgugZSk8j1WWK_s"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
            var latlon = [-34.940685, 138.621633];
            var lat  = latlon[0], lon = latlon[1];
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 16,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(lat, lon), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                
            };
            
            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, lon),
                map: map,
                icon: new google.maps.MarkerImage(
                    '/assets/eye/images/pin_happy.png',
                    new google.maps.Size(30, 42),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(15, 21),
                    new google.maps.Size(30, 42)
                ),
                title: 'ADELAIDE EYE & LASER'
            });
            var infowindow = new google.maps.InfoWindow();
            var content_info ='\
                  <div style="width:360px;font-size:13px;">\
                      <div><h4 style="margin:0;padding:4px 0;color:#ee4034">ADELAIDE EYE & LASER</h4></div>\
                      <div>Phone : +61 8 8274 7000 - 1800 809 991<br/>Email: eye@gmail.com</div>\
                      <div>Address : <i>215 Greenhill Rd, Eastwood SA 5063, Australia</i></div>\
                  </div>';
            infowindow.setPosition(new google.maps.LatLng(lat, lon));
            infowindow.setContent(content_info);
            infowindow.open(map,marker); 
            google.maps.event.addListener(marker, 'click', (function(marker) {
                
                return function() {
                    infowindow.open(map, marker);
                };
            })(marker));
        }
        
        $(document).ready(function(){
            
        });
    <?php echo '</script'; ?>
>
        </div>
        <div class="wrap">
            <div class="container">
            <div class="col-sm-4 left-bar">
                <div class="tit3">ADELAIDE EYE & LASER CENTRE</div>
                215 Greenhill Road<br/>
                Eastwood, South Australia 5063.<br/><br/>
                Phone: <strong>+61 8 8274 7000</strong><br/>
                FAX: <strong>+61 8 8274 7099</strong><br/><br/>
                For Laser Vision Telephone:<br/>
                <strong>1300 366 564</strong><br/><br/>
                Free call: (Excluding Adelaide Metro Area)<br/>
                <strong>1800 809 991</strong><br/><br/>
                <img src="/assets/eye/images/fb.jpg"> AE&LC on Facebook<br/><br/>
                <div class="tit3">ADELAIDE EYE & LASER CENTRE</div>
                <div class="f16">Underground Car park</div>
                <p>Car parking is available for patients and visitors underneath and at the rear of the building. Please use clearly marked 'Adelaide Eye&Laser Center' parks.</p>
                <img src="/assets/eye/images/ct.jpg" style="max-width:100%;margin-top:30px">
            </div>
            <div class="col-sm-8 right-bar">
                <div class="tit3">TO CONTACT US VIA EMAIL PLEASE FILL IN THE FORM BELLOW</div>
                <p>One of our friendly staff members would be happy to discuss any further questions you may have or to arrange a pre-operative assessment for you to see the clinical optometrist and surgeon.</p>
                <form id="sendRequestFrm" name="sendRequestFrm" class="validationFrm pull-bottom">
                    <input type="hidden"  name="contact_type" value="contact" />
                    <div class="row pull-top ">
                        <div class="col-sm-6">
                            <div class="pull-top pull-bottom">
                                <div class=" control-group ">
                                    <input type="text" class="form-control validate[required,maxSize[50]]" placeholder="Full Name" name="contact_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pull-bottom pull-top">
                                <div class="control-group">
                                    <input type="text" class="form-control validate[required,maxSize[100]]" placeholder="Email Address" name="contact_email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  pull-bottom" >
                        <div class="col-sm-6">
                            <div class="pull-top pull-bottom">
                                <div class=" control-group ">
                                    <input type="text" class="form-control validate[required,maxSize[12]]" placeholder="Contact Phone No" name="contact_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pull-bottom pull-top">
                                <div class="control-group">
                                    <input type="text" class="form-control validate[required,maxSize[12]]" placeholder="Mobile Phone No" name="contact_email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        * I Would Like Adelaide Eye & Laser Centre To Contact Me About My Questions Or To Make An Appointment.
                    </div>
                    <div class=" pull-top">
                        <input name="chk" type="radio" checked=""> Yes
                        <input name="chk" type="radio"> No
                    </div>
                    <div class="tit4">
                        AE&LC and your privacy
                    </div>
                    <div style="font-size:13px"><i>AE&LC value your privacy, we will not use your information for any other purpose other than stated and we will not disclose it without your consent.To view our privacy policy click here</i></div>
                    <div class=" pull-top">
                        <button type="button" onclick="sendRequest()" class="btn btn-info btn-block" style="padding: 8px 40px"><span>SEND</span></button>
                    </div>
                </form>
                            <div class="tit3">Access</div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="pull-top pull-bottom">
                            <h4 class="pull-top pull-bottom">Public Transport</h4>
                            Should you require public transport our reception staff can assist you with bus timetables.
                            <h4 class="pull-top pull-bottom">Taxis</h4>
                            For your convenience our reception desk has a direct dial service to a taxi network. Our staff are happy to assist you. 

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-top pull-bottom">
                            <h4 class="pull-top pull-bottom">Lift Operations</h4>
        Lift access is available from the car park.
        For after hours lift access (before 8:15am and after 5:30pm), please use the intercom button located on the right-hand side of the lift.


                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/eye/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
