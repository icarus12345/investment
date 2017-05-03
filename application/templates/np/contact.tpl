[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/meta.tpl"}]
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/head.tpl"}]
        <div class="map">
            <div id="map" style=""></div>
            <script type="text/javascript" src="/assets/np/js/map-style.js"></script>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyB6TJrMx3v003kFpoOUSgugZSk8j1WWK_s"></script>
            <script type="text/javascript">
                // When the window has finished loading create our google map below
                google.maps.event.addDomListener(window, 'load', init);
                function init() {
                    var latlon = [10.792048, 106.679982];
                    var lat  = latlon[0], lon = latlon[1];

                    // Basic options for a simple Google Map
                    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                    
                    var mapOptions = {
                        // How zoomed in you want the map to start at (always required)
                        zoom: 17,

                        // The latitude and longitude to center the map (always required)
                        center: new google.maps.LatLng(lat, lon), // New York

                        // How you would like to style the map. 
                        // This is where you would paste any style found on Snazzy Maps.
                        styles: mapstyle,
                        scrollwheel: false,

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
                            '/assets/np/images/logo-foot.png',
                            new google.maps.Size(88, 54),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(44, 27),
                            new google.maps.Size(88, 54)
                        ),
                        title: 'N&P'
                    });
                    // var infowindow = new google.maps.InfoWindow();
                    // var content_info ='\
                    //       <div style="width:360px;font-size:13px;">\
                    //           <img src="images/logo-black.png" style="float:left;margin-right:10px"/>\
                    //           <div><h4 style="margin:0;padding:4px 0;color:#ee4034;font-weight:100">N&P</h4></div>\
                    //           <div>Phone : +61 8 8274 7000 - 1800 809 991<br/>Email: cds@gmail.com</div>\
                    //           <div>Address : <i>215 Greenhill Rd, Eastwood SA 5063, Australia</i></div>\
                    //       </div>';
                    // infowindow.setPosition(new google.maps.LatLng(lat, lon));
                    // infowindow.setContent(content_info);
                    // infowindow.open(map,marker); 
                    // google.maps.event.addListener(marker, 'click', (function(marker) {
                        
                    //     return function() {
                    //         infowindow.open(map, marker);
                    //     };
                    // })(marker));
                }
                
                $(document).ready(function(){
                    
                });
            </script>
        </div>
[{include file=$smarty.const.APPPATH|cat:"templates/np/inc/foot.tpl"}]