function initialize() {


    var mapOptions = {
        center: new google.maps.LatLng(-43.253400, -65.309780),
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var firstmap = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);


    var point = new google.maps.LatLng(-43.253400, -65.309780);
    var marker = new google.maps.Marker({
        position: point,
        map: firstmap,
        tittle: 'Elije tu lugar',
        draggable: true


    });
    document.getElementById('lati').value = marker.getPosition().lat();
    document.getElementById('longi').value = marker.getPosition().lng();
    google.maps.event.addListener(marker, 'dragend', function () {
        
        document.getElementById('lati').value = marker.getPosition().lat();
        document.getElementById('longi').value = marker.getPosition().lng();
    });
    

}

function mapamod(latitud,longitud) {


    var mapOptions = {
        center: new google.maps.LatLng(latitud, longitud),
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var firstmap = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);


    var point = new google.maps.LatLng(latitud, longitud);
    var marker = new google.maps.Marker({
        position: point,
        map: firstmap,
        tittle: 'Elije tu lugar',
        draggable: true


    });
    document.getElementById('lati').value = marker.getPosition().lat();
    document.getElementById('longi').value = marker.getPosition().lng();
    google.maps.event.addListener(marker, 'dragend', function () {
        
        document.getElementById('lati').value = marker.getPosition().lat();
        document.getElementById('longi').value = marker.getPosition().lng();
    });
    

}
