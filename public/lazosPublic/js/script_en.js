//email

$(".contact-form").bind("submit", function () {
    //console.log($(this).attr('action'));
    $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),
        beforeSend : function () {
            swal({
                text : 'Sending message',
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
                    title: 'Message sent',
                    text: "",
                    type: 'success',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Ok'
                });
                //console.log("se envio sms");
            }
            else{
                swal({
                    title: 'Message not sent',
                    text: "",
                    type: 'error',
                    confirmButtonColor: '#E19D9D',
                    confirmButtonText: 'Ok'
                });
                //console.log("no se pudo enviar envio sms");
            }
        },
        error: function () {
            swal({
                title: 'Message not sent',
                text: "",
                type: 'error',
                confirmButtonColor: '#E19D9D',
                confirmButtonText: 'Ok'
            });
        }
    });

    return false;

});
