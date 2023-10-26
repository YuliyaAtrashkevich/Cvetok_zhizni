<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.8.1\src\Exception.php';
require 'PHPMailer-6.8.1\src\PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language');
$mail->IsHTML(true);

//От кого письмо
$mail->setFrom('trafimava@gmail.com', 'Кадырова Юлька');
//Кому отправить
$mail->addAddress('trafimava@gmail.com');
//Тема письма
$mail->Subject = 'Заказ обратного звонка';

//Тело письма
$body = '<h1>Встречайте суперписьмо!</h2>';

$mail->Body = $body;

//Отправляем
if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>