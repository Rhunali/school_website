<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $std = $_POST['std'];
    $dob = $_POST['dob'];
    $fatherName = $_POST['father_name'];
    $fatherProfession = $_POST['father_profession'];
    $mobileNumber = $_POST['mobile_number'];
    $email = $_POST['email'];
    $motherName = $_POST['mother_name'];
    $motherProfession = $_POST['mother_profession'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];


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
        $mail->Subject = 'Admission Form Details' . $name;
        $mail->Body    = "
            <h3>Basic Information</h3>
            <p>Name: $name</p>
            <p>Gender: $gender</p>
            <p>Category: $category</p>
            <p>Class: $std</p>
            <p>Date of Birth: $dob</p>
            <h3>Parent's Information</h3>
            <p>Father's Name: $fatherName</p>
            <p>Father's Profession: $fatherProfession</p>
            <p>Mobile Number: $mobileNumber</p>
            <p>Email: $email</p>
            <p>Mother's Name: $motherName</p>
            <p>Mother's Profession: $motherProfession</p>
            <h3>Correspondence Address</h3>
            <p>Address: $address</p>
            <p>State: $state</p>
            <p>City: $city</p>
            <p>Pincode: $pincode</p>
        ";

        $mail->send();
        echo 'Mail Sent';
    } catch (Exception $e) {
        echo 'Mail not sent: ', $mail->ErrorInfo;
    }
}
?>
<script>
    alert('Email has been sent successfully');
    document.location.href = 'admission.php';
</script>