$(document).ready(function(){

    function adjustBorder(){
        var pageW = document.body.offsetWidth;

        var triangle = $(".triangle");
        triangle.css("border-left", pageW + "px solid transparent")
    }

    $(window).on("resize", function(){
        adjustBorder();
    });

    adjustBorder();

})