<?php

if (isset($_POST['send'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $occupation = $_POST['occupation'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $state = $_POST['state'];
    $local_govt = $_POST['local_govt'];
    $subject = "Registration Form: Applicant Details";
    $to = "info@comeththemancomeththehour.com";
    $txt = "First Name = " . $fname . "\r\n  Last Name = " . $lname . "\r\n Email = " . $email . "\r\n Phone Number = " . $num . "\r\n Occupation = " . $occupation . "\r\n . Date of Birth = " . $date . "\r\n Location = " . $location . "\r\n State of Origin = " . $state . "\r\n Local Government = " . $local_govt;
    $headers = "From: register-noreply@comeththemancomeththehour.com";

    if (mail($to, $subject, $txt, $headers)) {
        header("Location:../success.html");
    } else {
        echo 'Something went wrong';
    }

}
