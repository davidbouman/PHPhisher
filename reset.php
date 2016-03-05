<?php
$j = json_decode(file_get_contents("config.json"), true);
$j['page'] = 0;
file_put_contents("config.json", json_encode($j));
echo '<script script type="text/javascript">';
echo 'window.location.href ="index.php";'; 
echo '</script>';
?>