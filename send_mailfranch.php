<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $city = $_POST['city'];



    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'patilkarishma346@gmail.com'; // SMTP username
        $mail->Password = 'dxwu jkyz brpq ubes';   // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('patilkarishma346@gmail.com', 'Gurutech');
        $mail->addAddress('patilkarishma346@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Get started by sharing your details ' . $name;
        $mail->Body = 'Franchise Form
            <br><br>
            <b> Name: </b>' . $name . '<br>
            <b> Email: </b>' . $email . '<br>
            <b> Mobile no: </b>' . $mobileno . '<br>
            <b>Center: </b>' . $city . '<br>
            ';

        $mail->send();
        echo 'Mail Sent';
    } catch (Exception $e) {
        echo 'Mail not sent: ', $mail->ErrorInfo;
    }
}
?>
<script>
    alert('Email has been sent successfully');
    document.location.href = 'franchisee.php';
</script>