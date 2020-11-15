/*global console , $ */
$(function () {
    
    "use strict";
    
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable .trow").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

});