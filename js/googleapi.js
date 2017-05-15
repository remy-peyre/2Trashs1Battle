


function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 48.8637569, lng: 2.3371260999999777},
        // Set mapTypeId to SATELLITE in order
        // to activate satellite imagery.
        //mapTypeId: 'satellite',
        scrollwheel: true,
        disableDefaultUI: true,
        zoom: 12
    });
    var republique = new google.maps.Marker({
        position: {lat: 48.867503, lng: 2.3638109999999415},
        map: map,
        title: 'République'
    });
    var cite = new google.maps.Marker({
        position: {lat: 48.8548825, lng: 2.3474928000000546},
        map: map,
        title: 'Cité'
    });
    var tuillerie = new google.maps.Marker({
        position: {lat: 48.8634916, lng: 2.327494300000012},
        map: map,
        title: 'Jardin des tuilleries'
    });
}

