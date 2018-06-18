$('.lock').click(function(){
    $('.top').css('top',($('.top').height()*-1)+10);
    $('.bottom').css('bottom',($('.bottom').height()*-1)+10);
    setTimeout( function(){
        $('.nav').show();
    },350);

    $(this).fadeOut();
    $('.lockBack').fadeOut();
});

causeRepaintsOn = $("h1, h2, h3, p");

$(window).resize(function() {
    causeRepaintsOn.css("z-index", 1);
});