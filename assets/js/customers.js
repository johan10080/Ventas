$('.btn-viewCustomer').on('click',function (){
        var id = $(this).val();
        $.ajax({
            url: base_url+'customers/detalles/'+id,
            type:"post",
            success:function (response){
                $('#modalInfoCategorie .modal-body').html(response);             
        }
    });        
    });
    $('.btn-removeCustomer').on('click',function (e){
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