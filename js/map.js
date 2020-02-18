var map;
var map_container = document.getElementById('map');
DG.then(function () {
    if(map_container){
        map = DG.map('map', {
            center: [52.282839, 104.254349],
            zoom: 16,
            dragging : false,
            touchZoom: false,
            scrollWheelZoom: false,
            doubleClickZoom: false,
            boxZoom: false,
            geoclicker: false,
            zoomControl: false,
            fullscreenControl: false
        });
        DG.marker([52.282839, 104.254349]).addTo(map);
    }
});