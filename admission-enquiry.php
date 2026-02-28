<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $contact    = $_POST['contact'];
    $email      = $_POST['email'];
    $query      = $_POST['query'];

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'lcgpolytechnic@gmail.com'; // your gmail
        $mail->Password   = 'YOUR_APP_PASSWORD'; // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom('lcgpolytechnic@gmail.com', 'LCG Admission Enquiry');
        $mail->addAddress('lcgpolytechnic@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Admission Enquiry 2026';

        $mail->Body = "
        <h3>New Admission Enquiry 2026</h3>
        <p><strong>First Name:</strong> $first_name</p>
        <p><strong>Last Name:</strong> $last_name</p>
        <p><strong>Contact:</strong> $contact</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Query:</strong><br>$query</p>
        ";

        $mail->send();

        echo "<script>
                alert('Enquiry submitted successfully!');
                window.location.href='index.php';
              </script>";

    } catch (Exception $e) {
        echo "<script>
                alert('Mailer Error: {$mail->ErrorInfo}');
                window.history.back();
              </script>";
    }
}
?>