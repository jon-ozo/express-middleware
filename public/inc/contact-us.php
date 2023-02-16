<?php

if (isset($_POST['send'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mssg = $_POST['mssg'];
    $subject = "Contact Form: Inquiry Details";
    $to = "info@comeththemancomeththehour.com";
    $txt = "Full Name = " . $fname . "\r\n  Email = " . $email . "\r\n Message =" . $mssg;
    $headers = "From: contact-noreply@comeththemancomeththehour.com";

    if (mail($to, $subject, $txt, $headers)) {
        header("Location:../success.html");
    } else {
        echo 'Something went wrong';
    }

}
