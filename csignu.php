<html>
<body>
<?php

$user="root";
$password="";
$dbname="restaurant";

$conn = mysqli_connect("localhost",$user,$password,$dbname);
if(!$conn){
	die("connection failed : ".mysqli_connect_error());
	  }
//extract($_POST);

$id=$_POST['cid'];
$name=$_POST['cname'];
$phno=$_POST['cphno'];
$add=$_POST['cadd'];
$oid=$_POST['coid'];

$sl="Insert into customer(customer_id,name,phno,address,o_id) values ('".$id."','".$name."','".$phno."','".$add."','".$oid."')";

$res=$conn->query($sl);
if($res===TRUE)
	echo "insertion successful";
else
	echo $conn->error;
/*
if($res->num_rows>0){
	$row=$res->fetch_assoc();
	echo "<p name=''".$row['cid']."</p>";
		}
*/


?>
</body>
</html>