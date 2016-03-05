<?php
$page = $_GET['page'];
$j = json_decode(file_get_contents("config.json"), true);
$j['page'] = $page;
file_put_contents("config.json", json_encode($j));

echo '<script script type="text/javascript">';
echo 'window.location.href ="index.php";'; 
echo '</script>';
?>
