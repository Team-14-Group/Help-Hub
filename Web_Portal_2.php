 <!DOCTYPE html>
<html>
<body>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Web_Portal_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Table creation using sql
$sql = "CREATE TABLE Details_of_volunteers (
V_id CHAR(10) NOT NULL PRIMARY KEY,
NIC CHAR(10) NOT NULL,
L_name VARCHAR(10) NOT NULL,
F_name VARCHAR(10) NOT NULL,
Date_of_birth DATE NOT NULL,
Email CHAR(20) NOT NULL,
Gender CHAR(1)NOT NULL,
V_tel CHAR(10) NOT NULL,
V_isAvailable CHAR(5) NOT NULL,
V_address CHAR(20) NOT NULL 
)";


if ($conn->query($sql) === TRUE) {
  echo "Table Details of volunteers created successfully";
} else {
  echo "Table creating issue: " . $conn->error;
}

$conn->close();
?>
</body>
</html>