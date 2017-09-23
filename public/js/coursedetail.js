function showDetail(id){
	$.ajax({
		url: APP_URL + 'admin/course/' + id,
		type: 'GET',
		success: function(data){
			$('#detailModal .modal-body').html(data);
			$('#detailModal').modal('show');
		},
		error: function(xhr){
			console.log(xhr.message);
		}
	});
}