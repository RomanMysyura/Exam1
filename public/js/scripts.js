$(document).ready( function () {
    $('#apartmentsTable').DataTable();
});


function doLogin() {
    var formData = $('#loginForm').serialize();

    $.ajax({
        type: 'POST',
        url: 'index.php?r=dologin',
        data: formData,
        success: function(response) {
            // Handle the response here, e.g., redirect or show a messagee
            window.location.href = 'index.php?r=';
            console.log(response);
        },
        error: function(error) {
            console.log(error);
            
        }
    });
}
