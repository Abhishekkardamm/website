<?php
$name = $_REQUEST["name"];
$Email = $_REQUEST["email"];
$Project = $_REQUEST["project"];
$message = $_REQUEST["message"];

// Check inputs

if( empty($name) || empty($Email) || empty($message) )
{
    echo " Please fill all fields";
}

else
{
    mail("abhishakkardamm@gmail.com" , "Message from Website" , $message , "From: $name < $email>");

    echo "<script type = 'text/javascript'> alert('Your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>