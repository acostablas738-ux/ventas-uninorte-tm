$(document).on("click","#btnNuevo", function(){
    $('#mdltitulo').html('Nuevo Registro');
    $('#modalmantenimiento').modal('show');
});
$(document).on("click","#btnEditar", function(){
    $('#mdltitulo').html('Editar Registro');
    $('#modalmantenimiento').modal('show');
});
function eliminar(prod_id){
    swal.fire({
        title: 'Eliminar',
        text: "Desea Eliminar el Registro?",
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {

            // $.post("../../controller/producto.php?op=eliminar",{prod_id:prod_id},function (data) {
            // $('#producto_data').DataTable().ajax.reload();	

            swal.fire(
                'Eliminado!',
                'El registro se elimino correctamente.',
                'success'
            )
            // });


        }
    })
}
