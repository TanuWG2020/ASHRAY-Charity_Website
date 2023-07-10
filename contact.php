
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "vendor/autoload.php";

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->Username = "aparna230402@gmail.com";
    $mail->Password = "yhek ltns ddbv velb";

    $mail->setFrom($visitor_email, $name);
    $mail->addAddress($visitor_email);

    $subject = "Welcome to my website";
    $mail->Subject = $subject;

    $mail->Body = $message;

    $mail->send();

    echo "Email sent successfully";
} catch (Exception $e) {
    echo "Email could not be sent. Error message: ", $mail->ErrorInfo;
}
?>