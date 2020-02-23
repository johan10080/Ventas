$('.btn-viewProducts').on('click',function (){
        var id = $(this).val();
        $.ajax({
            url: base_url+'productos/detalles/'+id,
            type:"post",
            success:function (response){
                $('#modalInfoProducts .modal-body').html(response);             
        }
    });        
    });
    $('.btn-removeProducts').on('click',function (e){
        e.preventDefault();
        var ruta = $(this).attr("href");
        console.log(ruta);
        $.ajax({
            url: ruta,
            type:'post',
            success: function (response){
               window.location.href = base_url + response;
            }            
        });
    });