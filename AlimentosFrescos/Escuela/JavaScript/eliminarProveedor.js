$(document).ready(function() {
    console.log("El documento está listo"); // Verifica si este mensaje aparece
    $('.eliminar').click(function() {
    let idProveedor = $(this).data('id');
    if (confirm("¿Estás seguro de eliminar este proveedor?")) {
        $.ajax({
        type: "POST",
        url: "../PHP/eliminarProveedor.php",
        data: { id_proveedor: idProveedor },
        success: function(response) {
            alert(response); // Muestra mensaje de éxito o error
            location.reload(); // Recarga la página para ver los cambios
        },
        error: function(error) {
            alert("Error al eliminar el producto: " + error.responseText);
        }
        });
    }
    });
});