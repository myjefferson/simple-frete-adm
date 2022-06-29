var onChangeHandler;
function initMap() {
    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();

    const map = new google.maps.Map(document.getElementById("map-view-direction"), {
        zoom: 4.2,
        center: { lat: -14.16, lng: -53.00 },
    });

    directionsRenderer.setMap(map);

    onChangeHandler = function (origem, destino) {
        calculateAndDisplayRoute(directionsService, directionsRenderer, origem, destino);
    };
}

function calculateAndDisplayRoute(directionsService, directionsRenderer, origem, destino) {
    directionsService.route({
        origin: {
            query: origem,
        },
        destination: {
            query: destino,
        },
        travelMode: google.maps.TravelMode.DRIVING,
        })
    .then((response) => {
        directionsRenderer.setDirections(response);
        })
    // .catch((e) => window.alert("A procura pela direção falhou: " + status));
}

window.initMap = initMap