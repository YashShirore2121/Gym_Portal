<?php
$con=mysqli_connect("localhost","root","","gym");

if(isset($_POST["SubmitBtn"])){

$to = "someone@example.com";
$subject = "Contact mail";
$from=$_POST["email"];
$msg=$_POST["msg"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>