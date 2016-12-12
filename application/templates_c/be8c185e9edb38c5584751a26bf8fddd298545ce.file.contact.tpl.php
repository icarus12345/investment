<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-11 20:55:58
         compiled from "application\templates\investment\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10983584bea01cdc220-85795190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be8c185e9edb38c5584751a26bf8fddd298545ce' => 
    array (
      0 => 'application\\templates\\investment\\contact.tpl',
      1 => 1481464548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10983584bea01cdc220-85795190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bea01d4bb87_25726013',
  'variables' => 
  array (
    'settting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bea01d4bb87_25726013')) {function content_584bea01d4bb87_25726013($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/meta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/head.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="banner-box">
    <div class="tit">
        <div class="f32">CONTACT US</div>
        <ul>
            <li>Home</li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
</div>
<div class="white-box">
    <div class="container">
        <div class="space-line"></div>
        <div class="space-line"></div>
        <div class="text-center">
            <button class="btn btn-default">OFFICE</button>
            <h3 class="h3">Our Location</h3>
            <img src="/assets/investment/images/hr.png">
            <p class="gray pull-top pull-bottom">People are choosing "VIETNAM PROPERTY INVESTMENT" throught your website : http://www.linkedproperties.net/.<br/>We are moving over &pound;340 million every month globally, saving people like you &pound;12m in hidden changes.</p>
        </div>
        <div id="map-img">
            <img src="/assets/investment/images/map.jpg">
            <button 
                role="button" 
                data-toggle="popover" 
                title="VIETNAM OFFICE"
                data-content="<div class='balloon' style='width: 320px'><h3>Ho Chi Minh</h3><div>TP.HCM<br/>Vung Tau</div></div>" 
                data-placement="top"
                class="marker" 
                style="top: 55%;left: 76%;"
                >
                
            </button>
            <button 
                role="button" 
                data-toggle="popover" 
                title="AUSTRALIAN OFFICE" 
                data-content="<div class='balloon'><h3>Sydney</h3><div>Mauris<br/>Dapibusnunc<br/>Convallis</div></div>" 
                data-placement="top"
                class="marker" 
                style="top:77%;left:83%;">
                
            </button>
            <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function(){
                $('.marker').popover({html:true})
            })
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>

<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 pull-bottom">
                <h3 class="h3-1">GET IN TOUCH WIDTH US</h3>
                <div class="space-line"></div>
                <p class="gray pull-top pull-bottom">Linkedproperties provides advice, professional services and networking to fulfill your investment needs to the VietNam Marker</p>
                <p class="gray pull-top pull-bottom">Please contact us for more information on our service and requests. We endeavor to get back to you within 48 hours.</p>

                <?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/widget/sendrequest.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="col-sm-6 pull-bottom">
                <h3 class="h3-1">CONTACT LINKEDPROPERTIES</h3>
                <div class="space-line"></div> 
                <div class="pull-top">- Our email contact</div>

                <p class="gray pull-top pull-bottom">Info@linkedproperties.net</p>
                <div class="pull-top">- We are location in</div>

                <p class="gray pull-top pull-bottom">Australia - Sydney<br/>Vietnam - Ho Chi Minh</p>
                <div class="g-map">
                    <div id="map" style="width:100%;height:100%;"></div>
                    <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyB6TJrMx3v003kFpoOUSgugZSk8j1WWK_s"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/investment/js/map_style.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 type="text/javascript">
                        google.maps.event.addDomListener(window, 'load', init);
                        function init() {
                            var latlon = [-33.8688197, 151.2092955]; // 151.20929550000005&lat=-33.8688197
                            var lat  = latlon[0], lon = latlon[1];
                            // Basic options for a simple Google Map
                            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                            
                            var mapOptions = {
                                zoom: 16,
                                center: new google.maps.LatLng(lat, lon),
                                styles: map_style
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
                                    '/assets/investment/images/pin_happy.png',
                                    new google.maps.Size(30, 42),
                                    new google.maps.Point(0, 0),
                                    new google.maps.Point(15, 21),
                                    new google.maps.Size(30, 42)
                                ),
                                title: 'Investment In VietNam !'
                            });
                            var infowindow = new google.maps.InfoWindow();
                            var content_info ='\
                              <div style="width:360px;font-size:13px;">\
                                  <div><h4 style="margin:0;padding:4px 0;color:#ee4034">Investment In VietNam</h4></div>\
                                  <div>Phone : <?php echo $_smarty_tpl->tpl_vars['settting_data']->value['phone'];?>
<br/>Email: <?php echo $_smarty_tpl->tpl_vars['settting_data']->value['email'];?>
</div>\
                                  <div>Address : <i><?php echo $_smarty_tpl->tpl_vars['settting_data']->value['address'];?>
</i></div>\
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
                    <?php echo '</script'; ?>
>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ((@constant('APPPATH')).("templates/investment/inc/foot.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
