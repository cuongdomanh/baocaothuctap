function addMoreAnswerItem(ctrl) {
    var count = $(ctrl).data('order');
    var tag = $(ctrl).parent();
    var position = $(tag).find('li').length;
    var newNum = new Number(position + 1);
    $(tag).find('ol').append(
        '<li>' +
        '   <input type="text" name="answer[' + count + '][]">' +
        '       <input type="checkbox" name="answerCorrect[' + count + '][]" value="' + newNum + '">' +
        '</li>'
    );
}

function replaceAll(find, replace, str) {
    while (str.indexOf(find) > -1) {
        str = str.replace(find, replace);
    }
    return str;
}
$(document).ready(function () {
    $('#btnAdd').on('click', function () {
        var item = $('#answerList .answer:eq(0)').html();
        var count = $('#answerList .answer').length;
        item = replaceAll("answer[0][]", "answer[" + count + "][]", item);
        $('#answerList').append('<div class="answer" >' + item + '</div>');
        $('#answerList .control-label').each(function (idx) {
            var index = idx + 1;
            $(this).attr('placeholder', 'Đáp án ' + 1).val('Đáp án ' + index);
        });
        $('#answerList .addMore').each(function (idx) {
            $(this).data('order', idx);
        });
    });
});
