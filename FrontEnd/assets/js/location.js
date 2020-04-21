if ("geolocation" in navigator) {
    var options = {
        enableHighAccuracy: true
    };

    function success(pos) {
        var crd = pos.coords;
        var kms = crd.accuracy / 1000;

        console.log('Your current position is:');
        console.log(`Latitude : ${crd.latitude}`);
        console.log(`Longitude: ${crd.longitude}`);
        console.log(`More or less ${kms} Km's.`);
    }

    function error(err) {
        console.warn(`ERROR(${err.code}): ${err.message}`);
    }

    navigator.geolocation.getCurrentPosition(success, error, options);
} else {
    console.log("Browser doesn't support geolocation!");
}