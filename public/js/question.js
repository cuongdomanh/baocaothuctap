$(document).ready(function () {
    $(".show-report-form").click(function () {
        $('#answerId').val($(this).data('id')); ///////LAY MA ID CAU HOI
        $('#reportModal').modal('show');
    });

    $('#questionReporting').on('submit', function (e) {
        e.preventDefault(); ///// DAY GIU LIEU DI NHUNG KO F5 TRANG
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: $('#questionReporting').serialize(),
            success: function (data) {
                $('#reportModal').modal('hide');
                $('#questionComment-' + $('#answerId').val()).prepend(data);
                $('#answerId').val('');
                $('#exampleTextarea').val('');
            },
            error: function (xhr) {
                console.log(xhr.message);
            }
        });
    });

    $(".showReporting .flip").on('click', function () {
        $(this).parent().find('.panela').slideToggle("slow");
    });

    // CLICK MOUSE
    $(document).on('click', 'a[href^="#"]', function (e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $id.offset().top - 200;
        console.log(pos);
        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });
});
