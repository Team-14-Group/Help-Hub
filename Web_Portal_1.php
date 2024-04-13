<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE Web_Portal_1";
if ($conn->query($sql) === TRUE) {
echo "Database creation is successful";
} else {
echo "Database creating issue: " . $conn->error;
}
$conn->close();
?>
</body>
</html>