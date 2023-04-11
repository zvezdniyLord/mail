<?php
/*use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.elesy.ru';
    $mail->Port = 25;
    $mail->SMTPAuth = false;
    $mail->Username = '';
    $mail->Password = '';
    $mail->setFrom('noreply.scadaint@scadaint', 'test');
    $mail->addAddress('int@scadaint.ru', 'work mail');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
Company: {$_POST['company']}
Tel: {$_POST['tel']}
EOT;
        if (!$mail->send()) {
            $msg = 'dont send';
        } else {
            $msg = 'MESAGE YSHLO';
        }
    } else {
        $msg = 'che galko chtole?';
    }
?>*/

<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$mail->isHTML(true);
$mail->setFrom('aadavidenkoweb@yandex.ru', 'заказчик');
$mail->addAddress('4neroq4@gmail.com');
$body = "<h1>SEND</h1>";
if(trim(!empty($_POST['name']))) {
    $body.='<p><strong>FIO:</strong>' .$_POST['name'].'</p>';
}
if(trim(!empty($_POST['email']))) {
    $body.='<p><strong>FIO:</strong>' .$_POST['email'].'</p>';
}
if(trim(!empty($_POST['message']))) {
    $body.='<p><strong>FIO:</strong>' .$_POST['message'].'</p>';
}
if(trim(!empty($_POST['company']))) {
    $body.='<p><strong>FIO:</strong>' .$_POST['company'].'</p>';
}
if(trim(!empty($_POST['tel']))) {
    $body.='<p><strong>FIO:</strong>' .$_POST['tel'].'</p>';
}
if(trim(!empty($_POST['select']))) {
    $body.='<p><strong>FIO:</strong>' .$_POST['select'].'</p>';
}

$mail->Body = $body;
if(!mail->send()) {
    $message = "Error";
} else {
    $message = "Data sends";
}

$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);
?>

