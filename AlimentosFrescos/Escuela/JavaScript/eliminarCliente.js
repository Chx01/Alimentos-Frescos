$(document).ready(function() {
    $('.eliminar').click(function() {
        const carnet = $(this).data('id');
        if (confirm('¿Estás seguro de que deseas eliminar este cliente?')) {
            $.ajax({
                url: '../PHP/eliminarCliente.php',
                type: 'POST',
                data: { carnet: carnet },                
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