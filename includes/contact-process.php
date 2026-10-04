<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Get form data

    $name = htmlspecialchars($_POST['name']);

    $phone = htmlspecialchars($_POST['phone']);

    $email = htmlspecialchars($_POST['email']);

    $service = htmlspecialchars($_POST['service']);

    $message = htmlspecialchars($_POST['message']);



    // Your Email Address

    $to = "info@digigrowth.com";


    // Email Subject

    $subject = "New Website Enquiry - " . $service;



    // Email Body

    $email_content = "

    Name: $name

    Phone: $phone

    Email: $email

    Service: $service


    Message:

    $message

    ";



    // Email Headers

    $headers = "From: ".$email."\r\n";

    $headers .= "Reply-To: ".$email."\r\n";

    $headers .= "Content-Type: text/plain; charset=UTF-8";



    // Send Email

    if(mail($to, $subject, $email_content, $headers)){


        echo "

        <script>

        alert('Thank you! Your enquiry has been sent successfully.');

        window.location.href='../contact.php';

        </script>

        ";


    }

    else{


        echo "

        <script>

        alert('Sorry! Something went wrong. Please try again.');

        window.location.href='../contact.php';

        </script>

        ";


    }



}

else{


    header("Location: ../contact.php");

    exit();


}

?>