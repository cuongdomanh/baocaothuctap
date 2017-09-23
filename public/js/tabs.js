$(document).ready(function () {

    $('ul.tabs-links a').on('click', function (e) {
        e.preventDefault();
        var tag = $(this).attr('href');
        $('.tabs-links li').removeClass('active');
        $('.content .list-ringtones').removeClass('active');
        $(this).parent().addClass('active');
        $(tag).addClass('active');
    });

});

