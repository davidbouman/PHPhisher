<?php
$file = fopen("config.conf","w");
echo fwrite($file,"0");
fclose($file);
echo '<script script type="text/javascript">';
echo 'window.location.href ="index.php";'; 
echo '</script>';
?>