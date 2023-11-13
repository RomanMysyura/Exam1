$(document).ready( function () {
    $('#subscribersTable').DataTable();
} );


function checkCode() {
    var code = $("#code").val();

    $.ajax({
        type: "POST",
        url: "index.php?r=dologin",
        data: { code: code },
        dataType: 'json', // Esperamos recibir JSON como respuesta
        success: function(response) {
            if (response && response.status === "success") {
                $("#login-message").html('<div class="alert alert-success" role="alert">' + response.message + '</div>');
            } else {
                $("#login-message").html('<div class="alert alert-danger" role="alert">Respuesta del servidor no válida</div>');
            }
        },
        
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("Error en la solicitud Ajax:", textStatus, errorThrown);
            $("#login-message").html('<div class="alert alert-danger" role="alert">Error en la solicitud Ajax</div>');
        }
        
    });
}
