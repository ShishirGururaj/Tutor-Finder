<?php 

$host="localhost";
$username="root";
$password="";
$dbName="bdtutor";


$conn = mysqli_connect($host, $username, $password);

// Check connection
$conn = new mysqli($host, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

