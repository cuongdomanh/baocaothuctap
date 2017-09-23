window.AudioContext = window.AudioContext || window.webkitAudioContext;
var ctx = new window.AudioContext();
var buffer, sourceNode, files, fileReader, paused, timer, timeCounter, minTime, maxTime;
var firstTime = 0;

function loadingResource(file) {
    fileReader = new FileReader();
    fileReader.onload = function (e) {
        ctx.decodeAudioData(e.target.result, function (b) {
            buffer = b;
            sourceNode = ctx.createBufferSource();
            sourceNode.connect(ctx.destination);
            sourceNode.buffer = buffer;
            paused = true;
            minTime = (buffer.duration * (20/100));
            maxTime = (buffer.duration * (80/100));
            $("#splitting-range").slider('option', { min: 0, max: (buffer.duration * 100), values: [ (minTime * 100), (maxTime * 100)] });
            $('#timer span').text(secondToMinutes(minTime));
            var percent = ((minTime / buffer.duration) * 100) - 4;
            $('#timer').css({'left': percent + '%'});
        }, onBufferError);
    };
    fileReader.readAsArrayBuffer(file);
}

function play() {
    sourceNode = ctx.createBufferSource();
    sourceNode.connect(ctx.destination);
    sourceNode.buffer = buffer;
    paused = false;
    sourceNode.start(0, minTime);
    timeCounter = minTime + 0.1;
    timer = setInterval(function () {
        if (timeCounter <= (maxTime) && timeCounter <= buffer.duration) {
            timeCounter += 0.1;
            $('#timer span').text(secondToMinutes(timeCounter));
        } else {
            paused = true;
            sourceNode.stop(0);
            clearInterval(timer);
            $('#btnPlayOriginalSound').removeClass('sound-played');
            timeCounter = minTime;
        }
        var percent = ((timeCounter / buffer.duration) * 100) - 4;
        $('#timer').css({'left': percent + '%'});

    }, 100);
};

function stop() {
    sourceNode.stop(0);
    paused = true;
    clearInterval(timer);
    var percent = ((minTime / buffer.duration) * 100) - 4;
    $('#timer').css({'left': percent + '%'});
};

function onBufferError(e) {
    console.log('onBufferError', e);
};

function openStepOne() {
    if (fileReader != null && !paused) {
        stop();
        $('#btnPlayOriginalSound').removeClass('sound-played');
    }
    $('.split-step, #header-tab-cut, #header-tab-save').removeClass('active');
    $('.open-step, #header-tab-open').addClass('active');
}

function openStepTwo() {
    if (fileReader != null && !paused) {
        stop();
        $('#btnPlayOriginalSound').removeClass('sound-played');
    }
    $('.split-step, #header-tab-open, #header-tab-save').removeClass('active');
    $('.cut-step, #header-tab-cut').addClass('active');
}

function openStepThree() {
    if (fileReader != null && !paused) {
        stop();
        $('#btnPlayOriginalSound').removeClass('sound-played');
    }
    hideProgressBar();
    $('.split-step, #header-tab-open, #header-tab-cut').removeClass('active');
    $('.save-step, #header-tab-save').addClass('active');
}

function showProgressBar() {
    $('#waveBlock').addClass('splitting-step');
    $('#timer').hide();
    $('#splitting-range').hide();
    $('#btnSplitSound').hide();
    $('#splitProgress').show();
}

function hideProgressBar() {
    $('#splitProgress').hide();
    $('#waveBlock').removeClass('splitting-step');
    $('#timer').show();
    $('#splitting-range').show();
    $('#btnSplitSound').show();
}

$(window).on('load', function () {
    $('#btnOpenForm').on('click', function () {
        openStepOne();
    });

    $('#btnOpenFile').on('click', function () {
        if (fileReader != null && !paused) {
            stop();
            $('#btnPlayOriginalSound').removeClass('sound-played');
        }
        $('#musicFile').trigger('click');
    });

    $('#musicFile').change(function (e) {
        files = e.target.files;
        if (files[0] != null) {
            firstTime = 0;
            loadingResource(files[0]);
            $('.split-step').removeClass('active');
            $('.cut-step').addClass('active');
            $('#header-tab-open, #header-tab-save').removeClass('active');
            $('#header-tab-cut').addClass('active');
        }
    });

    $('#btnPlayOriginalSound').on('click', function () {
        if (fileReader != null) {
            if (paused) {
                play();
                $('#btnPlayOriginalSound').addClass('sound-played');
            } else {
                stop();
                $('#btnPlayOriginalSound').removeClass('sound-played');
            }
        }
    });

    $("#splitting-range").slider({
        range: true,
        min: 0,
        max: 1000,
        values: [200, 800],
        change: function (event, ui) {
            minTime = ui.values[0] / 100;
            maxTime = ui.values[1] / 100;
            if(!paused) {
                stop();
                $('#btnPlayOriginalSound').removeClass('sound-played');
            }
            if (firstTime > 1) {
                play();
                $('#btnPlayOriginalSound').addClass('sound-played');
            }
            firstTime++;
            $('#startTime').val(minTime);
            $('#endTime').val(maxTime);
        }
    });

    $('#oneMoreFile').on('click', function () {
        $('#musicFile').trigger('click');
        openStepOne();
    });

    $('#btnCutStep').on('click', function () {
        if (files != null) {
            openStepTwo();
        } else {
            openStepOne();
        }
    });

    $('#btnSaveStep').on('click', function () {
        if ($('#downloadLink').attr('href') != '#') {
            openStepThree();
        }
    });

    $('#btnSplitSound').on('click', function () {
        if (files[0] != null && minTime > 0 && maxTime > minTime) {
            if(!paused) {
                stop();
                $('#btnPlayOriginalSound').removeClass('sound-played');
            }
            showProgressBar();
            $('#frmSplitFile').submit();
        } else {
            console.log('Moi chon file nhac..........');
        }
    });

    var bar = $('#splitBar');
    var percent = $('#splitPercent');
    $('#frmSplitFile').ajaxForm({
        dataType:  'json',
        beforeSend: function () {
            var percentVal = '0%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        uploadProgress: function (event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
        success: function (data) {
            openStepThree();
            if (data != undefined && data.status == 'success') {
                $('#downloadLink').attr('href', APP_URL + 'ringtone/download/' + data.output);
            }
        }
    });

});
