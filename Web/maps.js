 function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-43.253400, -65.309780),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }