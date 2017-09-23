var singleFile = $('#musicPlaying');
var singlePlayer = singleFile[0];
var time, duration;

window.onload = function () {
    $('#play-music-file').on('click', function (e) {
        e.preventDefault();

        duration = secondToMinutes(singlePlayer.duration);
        time = setInterval(function () {
            var currentTime = secondToMinutes(singlePlayer.currentTime);
            var percentage = Math.round((singlePlayer.currentTime / singlePlayer.duration) * 100);
            $('#playing-timer').css({'width': percentage + '%'});
            $('#duration').html(secondToMinutes(singlePlayer.currentTime));
        }, 100);

        if (singlePlayer.paused) {
            $(this).addClass('played');
            singlePlayer.play();
        } else {
            $(this).removeClass('played');
            singlePlayer.pause();
            clearInterval(time);
        }
    });

    $(singlePlayer).on('ended', function () {
        clearInterval(time);
        $('#play-music-file').removeClass('played');
        $('#playing-timer').css({'width': '0%'});
        $('#duration').html($('#duration').data('time'));
    });
};
