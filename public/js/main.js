/**
 * Scroll up event.
 */
$(document).ready(function () {
    $('#coursetagcheckbox').hide();
    $('#booktagcheckbox').hide();
    $('#booktag').click(function(){
        $('#booktagcheckbox').show();
        $('#coursetagcheckbox').hide();
    });
    $('#coursetag').click(function(){
        $('#coursetagcheckbox').show();
        $('#booktagcheckbox').hide();
    });
});
if($("#Ccheckbox").is(":checked")){
    $("#Cshow").show();
}
$( "#Ccheckbox" ).on( "click", function(){
    if ( $(this).is(":checked") ){
        $("#Cshow").show();
    }
    else{
        $("#Cshow").hide();
    }
} );


$(document).ready(function(){

    var x=$('#cprice').val();
    var y=$('#cdiscount').val();
    $("#btstatus").change(function(){
    if($('#btstatus').val==1){
        console.log('cuongdomanh') ;
        $('#cprice').val=0;
        $('#cdiscount').val=0;
    }
    else{

        $('#cprice').val=x;
        $('#cdiscount').val=y;
    }
    });
});

function secondToMinutes(seconds) {
    var numMinutes = Math.floor((((seconds % 31536000) % 86400) % 3600) / 60),
        numSeconds = (((seconds % 3153600) % 86400) % 3600) % 60;
    numMinutes = numMinutes >= 10 ? numMinutes : ('0' + numMinutes);
    numSeconds = Math.round(numSeconds);

    return (numSeconds < 10) ? numMinutes + ':0' + numSeconds : numMinutes + ':' + numSeconds;
}

$(function () {
    var scrollUp = $('#scrollUp');
    var offsetTop = $(window).scrollTop();

    $('#scrollUp').click(function () {
        var scrollUp = $(this);

        $("html, body").stop().animate({scrollTop: 0}, 1000, 'swing');
    });
});

/**
 * Toggle navbar search
 */
$(function () {
    $('[data-toggle="search-field-button"]').click(function () {
        $(this).parent().find('.search-field-input').toggle().focus();
    });
});

/**
 * Home header radio change status.
 */
$(function () {
    $('.header .radio-item .actions > .fades > .item > label').click(function () {
        var change = $(this).find('.change');
        var left = $(this).find('.change').css('left');

        if (change.css('left') == '-3px') {
            change.animate({left: '19px'}, 150);
        } else {
            change.animate({left: '-3px'}, 150);
        }
    });
});

/**
 * Home top ringtones carousel.
 */
$(function () {
    $('#top-ringtones').owlCarousel({
        // autoplay: true,
        items: 4,
        dotsEach: 1,
        loop: true,
        nav: true,
        margin: 10,

        responsive: {
            320: {
                items: 1
            },

            480: {
                items: 1
            },

            640: {
                items: 2
            },

            1024: {
                items: 3
            },

            1200: {
                items: 4
            }
        }
    });

    $('#top-ringtones .owl-nav .owl-prev').html('<p>P</p><p>R</p><p>E</p><p>V</p>');
    $('#top-ringtones .owl-nav .owl-next').html('<p>N</p><p>E</p><p>X</p><p>T</p>');
});

/**
 * Sidebar slim scroll.
 */
$(function () {
    $('ul.sidebar-tune-categories-content-list').slimScroll({
        height: 282,
        distance: 10,
        alwaysVisible: true
    });

    $('.sidebar-search-selection').slimScroll({
        height: 145
    });

    $('.sidebar-search-input').focus(function () {
        $('.sidebar-search-selection').show();
    }).focusout(function () {
        $('.sidebar-search-selection').hide();
    });
});

