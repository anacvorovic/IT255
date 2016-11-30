$(document).ready(function() {
    $.ajax({
        url: "http://jsonip.com"
    }).then(function(data) {
       $('.json-ip').append(data.ip);
    });
});