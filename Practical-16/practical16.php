<?php
$host   = "localhost";
$user   = "root";
$pass   = "";           // Default XAMPP/WAMP password
$dbname = "college_db";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Connected to MySQL Database Successfully!<br>";
echo "Host Info: " . mysqli_get_host_info($conn) . "<br>";
echo "Server Version: " . mysqli_get_server_info($conn) . "<br>";

mysqli_close($conn);
echo "Connection Closed.";
?>