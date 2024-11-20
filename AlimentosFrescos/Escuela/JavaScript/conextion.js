$(document).ready(function() {
    console.log("El documento está listo"); // Verifica si este mensaje aparece
    $('.eliminar').click(function() {
    let idProducto = $(this).data('id');
    if (confirm("¿Estás seguro de eliminar este producto?")) {
        $.ajax({
        type: "POST",
        url: "../PHP/eliminarProductos.php",
        data: { id_producto: idProducto },
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