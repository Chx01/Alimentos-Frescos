$(document).ready(function() {
    $('.eliminar').click(function() {
        const idfecha = $(this).data('id');
        if (confirm('¿Estás seguro de que deseas eliminar esta compra?')) {
            $.ajax({
                url: '../PHP/eliminarcompra.php',
                type: 'POST',
                data: { id_fecha: idfecha },                
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