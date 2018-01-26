<?php

header('Content-type: application/json'); // importanto to return json files


if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])){

    //$to = 'jose95sp@outlook.com';
    $to = 'edusernav@gmail.com';

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $from = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
        return print(json_encode("false"));
    }

    $title = 'Consulta de Lazos';
    $message = $message . "\r\n" . 'Mi telefono es ' . $phone;
    $header = 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header.= 'To: Eduardo <'. $to .'>' . "\r\n";
    $header.= 'From: ' . $name .' <' . $from . '>' . "\r\n";

    mail($to, $title, $message, $header);

    //se le envia un email al cliente como respuesta

    $title = 'Lazos';
    $message = 'Gracias por conectarse con nosotros, en breves momentos su consulta será atendida por nuestros colaboradores. Tenga buen día';
    $header = 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header.= 'To: ' . $name .'<' . $from . '>' . "\r\n";
    $header.= 'From: Lazos<' . $to . '>' . "\r\n";

    mail($from, $title, $message, $header);

    return print(json_encode("true"));
}
else{
  return print(json_encode("false"));
}


/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
*/