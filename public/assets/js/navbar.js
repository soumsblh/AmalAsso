$(document).ready(function(){
    $(".menu").hide();
    $(".hamburger").click(function(){
        $(".menu").fadeIn(500);
    });
    $(".closeBtn").click(function(){
        $(".menu").fadeOut(500);
    });
});