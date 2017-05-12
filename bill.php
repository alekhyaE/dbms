<!DOCTYPE html>
<html>
<?php
session_start();
$user='root';
$pass='';
$db='restaurant';

$db=new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");

if(isset($_SESSION['oid'])){
		$ordid=$_SESSION['oid'];
	}

$id=$_POST['cid'];
$name=$_POST['cname'];
$phno=$_POST['cphno'];
$add=$_POST['cadd'];
$bill=$_POST['cbno'];

$sl="Insert into customer(customer_id,name,phno,address,o_id) values ('".$id."','".$name."','".$phno."','".$add."','".$ordid."')";
$res=mysqli_query($db,$sl);


?>
<head>
<style>
</style>
</head>
<body background="hd pics\bg4.jpg" style="font-family:Comic Sans MS;height:50em; background-attachment:fixed;background-size:fill;">
<form action="http://localhost/DBMSproject/main.php">
<div id="sign"><h1 class='heading' style="color:#CC0000;position:relative;left:30px;">THE BILL!!!</h1>
<?php


if(isset($_SESSION['oid'])){
echo "<table><tr><th>Food-Name</th><th> Cost</th><th>Quantity</th><th>total</th></tr>";
$i=0;
$ia=0;

foreach($_SESSION['arr_foodn'] as $fdarr){
		echo "<tr><td>".$fdarr."</td></tr>";
		$i=$i+1;
		}
echo "</table>";
}

?>
<input type="submit" value="OK"/>
</form>
</body>
</html>