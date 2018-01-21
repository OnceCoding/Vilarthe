//email

$(".contact-form").bind("submit", function () {
    //console.log($(this).attr('action'));
    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),
        beforeSend : function () {
            swal({
                text : 'Enviando mensaje a Lazos',
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
                    title: 'Mensaje Enviado',
                    text: "",
                    type: 'success',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Aceptar'
                });
                //console.log("se envio sms");
            }
            else{
                swal({
                    title: 'Mensaje No Enviado',
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
                title: 'Mensaje No Enviado',
                text: "",
                type: 'error',
                confirmButtonColor: '#E19D9D',
                confirmButtonText: 'Aceptar'
            });
        }
    });

    return false;

});
