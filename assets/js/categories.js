$('.btn-view').on('click',function (){
        var id = $(this).val();
        $.ajax({
            url: base_url+'categorias/detalles/'+id,
            type:"post",
            success:function (response){
                $('#modalInfoCategorie .modal-body').html(response);             
        }
    });        
    });
    $('.btn-remove').on('click',function (e){
        e.preventDefault();
        var ruta = $(this).attr("href");
        $.ajax({
            url: ruta,
            type:'post',
            success: function (response){
               window.location.href = base_url + response;
            }            
        });
    });