<!DOCTYPE html>
<html>
<?php
session_start();
$user='root';
$pass='';
$db='restaurant';

$dtb=new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");

if(isset($_POST['ordr_id'])){
	$_SESSION['oid']=$_POST['ordr_id'];
	}

$oid=$_POST['ordr_id'];	
$i=0;
$arr_fname=array();
$arr_qty=array('Array');
$arr_fprice=array('Array');
if(!empty($_POST['check_list'])){

foreach($_POST['check_list'] as $check){
	
	$qty=$_POST["$check"];
	$arr_qty[$i]=$qty;
	$sl="insert into orders(order_no,item_id,no_of_items)values ('".$oid."','".$check."','".$qty."')";
	$res=mysqli_query($dtb,$sl);
	$fnm='select iname,food_id from menu where food_id="'.$check.'"';
	$res=mysqli_query($dtb,$fnm);
	while($row=mysqli_fetch_array($res)){
		$arr_fname[$i]=$row['iname'];
		$cst='select cost from menu where food_id="'.$check.'"';
		$rst=mysqli_query($dtb,$cst);
		$arr_fprice[$i]=$rst;
	
				}
	
	$i=$i+1;
	}

$_SESSION['arr_foodn']=$arr_fname;
$_SESSION['arr_cost']=$arr_fprice;
$_SESSION['arr_quant']=$arr_qty;
}
else{echo "empty list";}

?>


<head>
<style>

.name{	display:inline;}
label{color:#CC0000;}
.sub{
	background-color: #CC0000;
	color: #ffcccc;
	font-family:Century;
	font-size:1em;
	position:relative;
	left:3em;
	top:-2em;
	   }
label,a,center{color:#3EE0B2;
		text-decoration:none;}
#sign{	width:15em;
	height:32em;
	padding-left:15%;
	padding-right:15%;
	position:relative;
	top:1%;
	left:43%;
	font-size:1.2em;
	background-color:rgba(153,153,153,0.8);
	box-shadow:10px 10px 10px 0 rgba(0, 0, 0, 0.2), 15px 15px 20px 0 rgba(0, 0, 0, 0.19);
	}

.box{	border-radius:0.3em;
	width:15em;
	height:2em;
	}
.heading{ text-shadow:0 0 10px orange;}
label,a,center{color:#CC0000;
	font-size:1.2em;
	text-decoration:none;}

</style>
</head>

<body background="hd pics\bg1.jpg" style="font-family:Comic Sans MS;height:50em; background-repeat:no-repeat; background-attachment:fixed;">
<div id="sign"><h1 class='heading' style="color:#CC0000;position:relative;left:30px;">CUSTOMER DETAILS!!!</h1>
<form action="http://localhost/DBMSproject/bill.php" method="post">
<div class="name">
	<label> Cust Id * : <input type="text" class="box" required name="cid" style="position:relative;left:10em;top=-200px;"/></label>
<br/><br/>
	<label> Name : <input type="text" class="box"  name="cname" style="position:relative;left:3em;"/></label>
<br/><br/>
	<label>Ph. No :<input type:"text" class="box" name="cphno"style="position:relative;left:3em;"/></label>
<br/><br/>
	<label>Address :<input type:"text" class="box" name="cadd" style="position:relative;left:3em;width:20em;"/></label>
<br/><br/>
	<label>Bill No :<input type:"text" class="box" name="cbno" style="position:relative;left:3em;width:20em;"/></label>
<br/><br/>
	<?php echo "<p style='color:#CC0000;font-size:1.2em;'>Order Id : " . $oid ."</p>";  ?>
<br/><br/>
</div>
<input class="sub" type="submit" value="Bill"/></div>
<br><br><br>
</form>


</body>
</html>