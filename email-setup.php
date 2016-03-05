<?php
$emaila = $_GET['email'];
$j = json_decode(file_get_contents("config.json"), true);
$j['email'] = $emaila;
file_put_contents("config.json", json_encode($j));
echo '<script script type="text/javascript">';
echo 'window.location.href ="install/index3.html";'; 
echo '</script>';
?>