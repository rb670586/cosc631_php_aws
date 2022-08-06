//Leaflet map API
var map = L.map('map').setView([39.960890661156675, -95.08150535069461], 3);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);


//Geocoding (Address to lat/long coordinates) provided by geoapify https://www.geoapify.com/geocoding-api/
function geocodeAddress() {
    const address = document.getElementById("plot-address").value;
    if (!address || address.length < 3) {
        console.log("The address string is too short. Enter at least three symbols");
        return;
    }
    var myAPIKey = '666d9911f5ec4e49a89892fe53d462d1'
    const geocodingUrl = `https://api.geoapify.com/v1/geocode/search?text=${encodeURIComponent(address)}&apiKey=${myAPIKey}`;

    fetch(geocodingUrl).then(result => result.json())
        .then(featureCollection => {
            if (featureCollection.features.length === 0) {
                document.getElementById("status").textContent = "The address is not found";
                return;
            }
            const foundAddress = featureCollection.features[0];
            marker = L.marker(new L.LatLng(foundAddress.properties.lat, foundAddress.properties.lon)).addTo(map);
            map.panTo(new L.LatLng(foundAddress.properties.lat, foundAddress.properties.lon));
        });
}