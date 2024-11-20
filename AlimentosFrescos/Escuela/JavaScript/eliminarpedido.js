$(document).ready(function() {
    $('.eliminar').click(function() {
        const idpedido = $(this).data('id');
        if (confirm('¿Estás seguro de que deseas eliminar este pedido?')) {
            $.ajax({
                url: '../PHP/eliminarpedido.php',
                type: 'POST',
                data: { id_pedido: idpedido },                
                success: function(response) {
                    alert(response); // Muestra mensaje de éxito o error
                    location.reload(); // Recarga la página para ver los cambios
                },
                error: function(error) {
                    alert("Error al eliminar el pedido: " + error.responseText);
                }
                });
            }
            });
        });