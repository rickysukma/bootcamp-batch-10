<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real-count";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE canditates SET perolehan= perolehan + 1 WHERE id=$_GET[id]";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
header('location:index.php');
?>