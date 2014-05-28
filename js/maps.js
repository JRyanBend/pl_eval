//Google Maps js

          function initialize() {
            var myLatlng = new google.maps.LatLng(32.904993, -97.017933);
            var attr1 = new google.maps.LatLng(32.920359, -97.020807);
            var attr2 = new google.maps.LatLng(32.919243, -97.020292);
            var attr3 = new google.maps.LatLng(32.918234, -97.019391);
            var attr4 = new google.maps.LatLng(32.916433, -97.013297);
            var attr5 = new google.maps.LatLng(32.913334, -97.008447);
            var attr6 = new google.maps.LatLng(32.915964, -97.008404);
            var attr7 = new google.maps.LatLng(32.916721, -97.007846);
            var attr8 = new google.maps.LatLng(32.914595, -97.005572);
            var attr9 = new google.maps.LatLng(32.895211, -97.044153);
            var attr10 = new google.maps.LatLng(32.896652, -97.037544);
            var attr11 = new google.maps.LatLng(32.895373, -97.037072);
            
            var mapOptions = {
              zoom: 13,
              center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
          
            var marker = new google.maps.Marker({
                position: attr1,
                map: map,
                title: 'Attraction 1'
            });
            
            var marker2 = new google.maps.Marker({
                position: attr2,
                map: map,
                title: 'Attraction 2'
            });
            
            var marker3 = new google.maps.Marker({
                position: attr3,
                map: map,
                title: 'Attraction 3'
            });
            
            var marker4 = new google.maps.Marker({
                position: attr4,
                map: map,
                title: 'Attraction 4'
            });
            
            var marker5 = new google.maps.Marker({
                position: attr5,
                map: map,
                title: 'Attraction 5'
            });
            
            var marker6 = new google.maps.Marker({
                position: attr6,
                map: map,
                title: 'Attraction 6'
            });
            
            var marker7 = new google.maps.Marker({
                position: attr7,
                map: map,
                title: 'Attraction 7'
            });
            
            var marker8 = new google.maps.Marker({
                position: attr8,
                map: map,
                title: 'Attraction 8'
            });
            
            var marker9 = new google.maps.Marker({
                position: attr9,
                map: map,
                title: 'Attraction 9'
            });
            
            var marker10 = new google.maps.Marker({
                position: attr10,
                map: map,
                title: 'Attraction 10'
            });
            
            var marker11 = new google.maps.Marker({
                position: attr11,
                map: map,
                title: 'Attraction 11'
            });
            
          }
          
          google.maps.event.addDomListener(window, 'load', initialize);
    
