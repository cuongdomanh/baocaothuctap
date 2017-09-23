function cartajax() {
    $.ajax({
        type:'post',
        url:APP_URL+$(this).val(),
        success:function(data){

        },
        error:function(xhr){
            alert(xhr);
        }
    });

}