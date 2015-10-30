<?php
$page = $_GET['page'];
$file = fopen("config.conf","w");
echo fwrite($file,$page);
fclose($file);
echo '<script script type="text/javascript">';
echo 'window.location.href ="index.php";'; 
echo '</script>';
?>