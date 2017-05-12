<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="restaurant";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

foreach($_POST as $key=>$name)
	$emp_id=$key;

echo $emp_id;

$sql="DELETE FROM employee where emp_id='$emp_id'";
$ret=mysqli_query($conn,$sql);


?>
