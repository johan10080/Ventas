$(document).ready(function () {
    $('.btn-view').on('click',function (){
        var base_url = "<?= base_url() ?>";
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
        var base_url = "<?= base_url() ?>";
        $.ajax({
            url: ruta,
            type:'post',
            success: function (response){
               window.location.href = base_url + response;
            }            
        });
    });
$('.sidebar-menu').tree();
$('#example1').DataTable({
    "language": {
            "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
    });
}); 

