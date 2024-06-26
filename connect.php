<?php
$servername = "localhost:3306";
$username = "root";
$password = "Jeeaspirant@123";
$dbname = "clone";

// Create connection
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
    $conn = new mysqli($servername, $username, $password, $dbname);
}


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "success";
}
?>
