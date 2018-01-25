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
                window.location.href = "/cpanel/projects";
            }
        });

    });

});


$("#form").bind("submit", function () {
    //console.log($(this).attr('action'));

    var formData = new FormData(this);

    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend : function () {
            swal({
                text : 'Actualizando datos',
                timer : 3000,
                onOpen : function () {
                    swal.showLoading();
                }
            });
            //console.log("enviando");
        },
        success: function (response) {
            //alert(response);
            if (response === "true"){
                swal({
                    title: 'Datos actualizados',
                    text: "",
                    type: 'success',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                }).then(function (result) {
                    if (result.value) {
                        window.location.href = '/cpanel/projects';
                    }
                });
                //console.log("se envio sms");
            }
            else if(response === "img-size"){
                swal({
                    title: 'Imagen',
                    text: "El peso de una imagen supera los 500kb",
                    type: 'error',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                });
                //console.log("no se pudo enviar envio sms");
            }
            else if(response === "img-ext"){
                swal({
                    title: 'Imagen',
                    text: "Solo se permiten exteniones png o jpg",
                    type: 'error',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                });
                //console.log("no se pudo enviar envio sms");
            }
            else if(response === "false"){
                swal({
                    title: 'Error al actualizar los datos.',
                    text: "",
                    type: 'error',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                });
                //console.log("no se pudo enviar envio sms");
            }
        },
        error: function () {
            swal({
                title: 'Error al actualizar los datos',
                text: "",
                type: 'error',
                confirmButtonColor: '#E19D9D',
                confirmButtonText: 'Aceptar'
            });
        }
    });

    return false;

});

function previewImage3() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("input-img-3").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("img-3").src = oFREvent.target.result;
        document.getElementById("lbl-img-3").innerText = "Imagen Elegida";
    };
};

function previewImage2() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("input-img-2").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("img-2").src = oFREvent.target.result;
        document.getElementById("lbl-img-2").innerText = "Imagen Elegida";
    };
};

function previewImage1() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("input-img-1").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("img-1").src = oFREvent.target.result;
        document.getElementById("lbl-img-1").innerText = "Imagen Elegida";
    };
};

