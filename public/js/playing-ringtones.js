function topRingtonePlay() {
    $('.top-ringtone-items').each(function () {
        $(this).find('.playPause').on('click', function () {
            var parentTag = $(this).parent();
            var playerBest = $(parentTag).find('audio');
            var playerItem = playerBest[0];
            var duration = secondToMinutes(playerItem.duration);
            var time = setInterval(function () {
                var currentTime = secondToMinutes(playerItem.currentTime);
                var percentage = Math.round((playerItem.currentTime/playerItem.duration)*100) + 4;
                $(parentTag).parent().parent().find('.currentTime').html(secondToMinutes(playerItem.currentTime));
                $(parentTag).parent().parent().find('.progress-bar').css({ 'width': percentage + '%'});
            }, 100);
            if (playerItem.paused) {
                $(this).addClass('played');
                playerItem.play();
                $(playerItem).on('ended', function () {
                    $(this).parent().find('.playPause').removeClass('played');
                    clearInterval(time);
                    $(parentTag).parent().parent().find('.currentTime').html('00:00');
                    $(parentTag).parent().parent().find('.progress-bar').css({ 'width': '0%'});
                });
            } else {
                $(this).removeClass('played');
                playerItem.pause();
                clearInterval(time);
            }
            return false;
        });
    });
}

function hotRingtonePlay() {
    $('.play-hot-ringtones').on('click', function () {
        var src = $(this).data('src');
        var title = $(this).data('title');
        var size = $(this).data('size');

        $('.hot-ringtone-items .ringtones li.list-group-item').removeClass('active');
        $(this).parent().parent().addClass('active');
        $(this).parent().parent().parent().addClass('active');

        $('#hot_ringtone_player_title').html(title);
        $('#hot_ringtone_player_size').html('Filesize: ' + size);
        $('#hot_ringtone_player_progress').css({ 'width': '-10%'});
        var playerItem = $('#hot_ringtone_player')[0];
        $(playerItem).attr('src', src);
        var time;

        $(playerItem).on("canplay", function(){
            playerItem.play();
            $('#btnPlayHotRingtone').addClass('played');
            time = setInterval(function () {
                var percentage = Math.round((playerItem.currentTime/playerItem.duration)*100) + 4;
                $("#hot_ringtone_player_duration").text(secondToMinutes(playerItem.currentTime));
                $('#hot_ringtone_player_progress').css({ 'width': percentage + '%'});
            }, 100);
        });

        $('#btnPlayHotRingtone').on('click', function () {
            if (playerItem.paused) {
                $(this).addClass('played');
                playerItem.play();
                time = setInterval(function () {
                    var percentage = Math.round((playerItem.currentTime/playerItem.duration)*100) + 4;
                    $("#hot_ringtone_player_duration").text(secondToMinutes(playerItem.currentTime));
                    $('#hot_ringtone_player_progress').css({ 'width': percentage + '%'});
                }, 100);
            } else {
                $(this).removeClass('played');
                playerItem.pause();
                clearInterval(time);
            }
        });

        $(playerItem).on('ended', function () {
            $('#btnPlayHotRingtone').removeClass('played');
            clearInterval(time);
            $('#hot_ringtone_player_duration').html('00:00');
            $('#hot_ringtone_player_size').css({ 'width': '0%'});
        });
    });
}

function bestRingtonePlay() {
    $('.best-ringtone-items').each(function () {
        $(this).find('.playPause').on('click', function () {
            var parentTag = $(this).parent();
            var playerBest = $(parentTag).find('audio');
            var playerItem = playerBest[0];
            var duration = secondToMinutes(playerItem.duration);
            var time = setInterval(function () {
                var currentTime = secondToMinutes(playerItem.currentTime);
                var percentage = Math.round((playerItem.currentTime/playerItem.duration)*100) + 4;
                $(parentTag).parent().find('.currentTime').html(secondToMinutes(playerItem.currentTime));
                $(parentTag).parent().find('.progress-bar').css({ 'width': percentage + '%'});
            }, 100);
            if (playerItem.paused) {
                $(this).addClass('played');
                playerItem.play();
                $(playerItem).on('ended', function () {
                    $(this).parent().find('.playPause').removeClass('played');
                    clearInterval(time);
                    $(parentTag).parent().find('.currentTime').html('00:00');
                    $(parentTag).parent().find('.progress-bar').css({ 'width': '0%'});
                });
            } else {
                $(this).removeClass('played');
                playerItem.pause();
                clearInterval(time);
            }
            return false;
        });
    });
}

function slideBarRingtone() {
    $('.sidebar-items').on('click', function () {
        var parentTag = $(this).parent();
        var playerBest = $(parentTag).find('audio');
        var playerItem = playerBest[0];
        var duration = secondToMinutes(playerItem.duration);

        var time = setInterval(function () {
            var currentTime = secondToMinutes(playerItem.currentTime);
            var percentage = Math.round((playerItem.currentTime/playerItem.duration)*100);
            $(parentTag).parent().find('.duration').html(secondToMinutes(playerItem.currentTime));
            $(parentTag).parent().find('.show').css({ 'width': percentage + '%'});
        }, 100);

        if (playerItem.paused) {
            $(parentTag).parent().addClass('active');
            playerItem.play();
        } else {
            clearInterval(time);
            playerItem.pause();
            $(parentTag).parent().removeClass('active');
        }

        $(playerItem).on('ended', function () {
            $(parentTag).parent().removeClass('active');
            clearInterval(time);
            $(parentTag).parent().find('.duration').html(secondToMinutes(playerItem.duration));
            $(parentTag).parent().find('.show').css({ 'width': '0%'});
        });

        return false;
    });
}

$(document).ready(function () {
    topRingtonePlay();
    hotRingtonePlay();
    bestRingtonePlay();
    slideBarRingtone();
});
