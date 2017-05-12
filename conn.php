<?php
session_start();
$user='root';
$pass='';
$db='restaurant';

$db=new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");
echo "great";

if(isset($_SESSION['oid'])){
		$ordid=$_SESSION['oid'];
	}

$id=$_POST['cid'];
$name=$_POST['cname'];
$phno=$_POST['cphno'];
$add=$_POST['cadd'];

echo  $id;
$sl="Insert into customer(customer_id,name,phno,address,o_id) values ('".$id."','".$name."','".$phno."','".$add."','".$ordid."')";
$res=mysqli_query($db,$sl);


?>