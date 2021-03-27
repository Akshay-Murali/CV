<?php
//get data from form  

$name = $_POST['Name'];
$email= $_POST['Email'];
$message= $_POST['message'];

$to = "m.akshay1998@gmail.com";

$subject = "Mail From website";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: m.akshay1998@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>