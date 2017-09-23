$(document).ready(function () {
    $('.btnPlayingItems').on('click', function (e) {
        e.preventDefault();

        var parentTag = $(this).parent();
        var playerBest = $(parentTag).find('audio');
        var playerItem = playerBest[0];
        var duration = secondToMinutes(playerItem.duration);

        var time = setInterval(function () {
            var currentTime = secondToMinutes(playerItem.currentTime);
            var percentage = Math.round((playerItem.currentTime / playerItem.duration) * 100);
            $(parentTag).parent().find('.time-counter').html(secondToMinutes(playerItem.currentTime));
            $(parentTag).parent().find('.time-line').css({'width': percentage + '%'});
        }, 100);

        if (playerItem.paused) {
            $(parentTag).parent().addClass('active');
            playerItem.play();
        } else {
            $(parentTag).parent().removeClass('active');
            playerItem.pause();
            clearInterval(time);
        }

        $(playerItem).on('ended', function () {
            clearInterval(time);
            $(parentTag).parent().removeClass('active');
            $(parentTag).parent().find('.time-counter').html(secondToMinutes(playerItem.currentTime));
            $(parentTag).parent().find('.time-line').css({'width': '0%'});
        });
    });
});