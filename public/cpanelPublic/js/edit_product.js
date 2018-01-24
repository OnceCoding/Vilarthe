$(function () {

    $("#cancel").click(function () {

        swal({
            title: '¿Estás Seguro?',
            text: "¡No se guardarán los cambios realizados!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
        }).then(function (result) {
            if (result.value) {
                window.location.href = "/cpanel/products";
            }
        });

    });

});