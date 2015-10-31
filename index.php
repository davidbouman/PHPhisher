<?php 
$myfile = "config.conf";
$content = file_get_contents($myfile,filesize("config.yml"));
switch ($content) {
    case "1":
        echo '<script script type="text/javascript">';
		echo 'window.location.href ="pages/office365/index.html";'; 
		echo '</script>';
		break;
    case "2":
        echo '<script script type="text/javascript">';
		echo 'window.location.href ="pages/connection_reset/index.html";'; 
		echo '</script>';
		break;
    case "3":
        echo '<script script type="text/javascript">';
		echo 'window.location.href ="pages/minimal/index.html";'; 
		echo '</script>';
		break;
    default:
        echo '<script script type="text/javascript">';
		echo 'window.location.href ="AvailableTe.html";'; 
		echo '</script>';
}
fclose($myfile);
?>