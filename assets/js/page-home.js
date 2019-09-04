$(document).ready(function(){
    function adjustBorder(){
        var pageH = $("body").height();
        var trap = $("#trapezoid");
        trap.css("border-bottom", pageH + "px solid #fbc02d")
    }

    $(window).on("resize", function(){
        adjustBorder();
    });

    adjustBorder();

})