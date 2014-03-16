
$(function() {

    var apiUrl = "http://192.168.1.108/raspi-dioda/api";

    $(document).on("click", ".diodeOn", function(e) {
        var $that = $(this);
        return $.ajax({
            type: 'POST',
            url: apiUrl + '/diode/on',
            data: {}
        }).done(function() {
            $(".button").removeClass("selected");
            $that.addClass("selected");
        });
    });

    $(document).on("click", ".diodeOff", function(e) {
        var $that = $(this);
        return $.ajax({
            type: 'POST',
            url: apiUrl + '/diode/off',
            data: {}
        }).done(function() {
            $(".button").removeClass("selected");
            $that.addClass("selected");
        });
    });

    $(document).on("click", ".diodeFlashing", function(e) {
        var $that = $(this);
        return $.ajax({
            type: 'POST',
            url: apiUrl + '/diode/flashing',
            data: {}
        }).done(function() {
            $(".button").removeClass("selected");
            $that.addClass("selected");
        });
    });
    
});