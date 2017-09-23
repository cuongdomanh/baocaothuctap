function showDetail(id) {
    $.ajax({
        url: 'admin/video/' + id,
        type: 'GET',
        success: function (data) {
            $('#detailModal .modal-body').html(data);
            $('#detailModal').modal('show');
        },
        error: function (xhr) {
            console.log(xhr.message);
        }
    })
}
