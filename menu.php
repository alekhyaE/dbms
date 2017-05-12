<?php

session_start();

?>
<!DOCTYPE html>
<head>
<title>
MENU
</title>
<style type="text/css">

#hicon
	{
		border-radius:50%;
		position:relative;
		top:15px;
		float: right;
		height:50px;
		width:50px;
	}
#site{	position: absolute;
	top:0px;
	font-family: Courier, Monaco, monospace;
	font-size: 50px;
	-webkit-animation: mov 10s infinite ;
	color:rgba(128,223,0,255);
	}

@-webkit-keyframes mov{	0% {	left: 30%;}
			50%{	left:50%;}
			100% {    left: 70%;}
		      }

input[type="checkbox"]{width:20px;height:20px;}

#m1{
	position: relative;
	top:35px;
	left:12px;
	background-color:rgba(255,255,255, 0.3);
	border-radius: 10px;
	height: 200px;
	width:690px;
	}

.item{
	width:20em;
	height:15em;
	
	}		
div.scroll1{
	background-color:orange;
	overflow-y:scroll;
	overflow-x:hidden;
	height:500px;
	width:330px;
	position:absolute;
	top:8em;
	left:5em;
	margin:1em;
	}
div.scroll2{
	background-color:orange;
	overflow-y:scroll;
	overflow-x:hidden;
	height:500px;
	width:330px;
	position:absolute;
	top:8em;
	left:40em;
	margin:1em;
	}
.fdname{
	background-color:black;
	color:white;
	position:absolute;
	top:250px;
	height:25px;
}
</style>
</head>


<body  style="background-image:url('hd pics\bg3.jpg');opacity:0.8;">
<h1 id="site">MENU</h1>

<a href="main.html"><img src="hd pics\logo.jpg" id="hicon"></a>

<form action="http://localhost/DBMSproject/login.php" method="post">
<input type="button" value="signup" onclick="loction.href= 'http://localhost/DBMSproject/login.html' ;" style="position:absolute;left:94%;top:15em;color:green;width:5em;height:2em;font-size:1em;"/>
<input type="button" value="order" style="position:absolute;left:94%;top:20em;color:green;width:5em;height:2em;font-size:1em;"/>
<input type="button" value="get-bill" style="position:absolute;left:94%;top:25em;color:green;width:5em;height:2em;font-size:1em;"/>

<label style="position:absolute;left:92%;top:30em;color:green;width:5em;height:2em;font-size:1em;">Enter_Order_id:<input type="text" name="ordr_id" style="width:90px;"/></label>
<input type="submit" value="OK" style="position:absolute;left:94%;top:35em;color:green;width:5em;height:2em;font-size:1em;"/>

<div id="main">
	<div class="scroll1" style:"float:left;">
		
		<div><img class="item" src="C:\xampp\htdocs\DBMSproject\foodpics\aloorazala.jpg" ><div><p>"ALOO REZALA"</p><input type="checkbox" name="check_list[]" value="f09" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f09" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src="C:\xampp\htdocs\DBMSproject\foodpics\bhatura.jpg" ><div><p>"BHATURA"</p><input type="checkbox" name="check_list[]" value="f03" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f03" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\biriyani.png"><div><p>"BIRIYANI"</p><input type="checkbox" name="check_list[]" value="f01" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f01" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\Channa-masala.jpg"><div><p>"CHANNA MASALA"</p><input type="checkbox" name="check_list[]" value="f08" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f08" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\dosa.jpg"><div><p>"DOSA"</p><input type="checkbox" name="check_list[]" value="f05" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f05" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\dum aloo.jpg"><div><p>"DUM ALOO"</p><input type="checkbox" name="check_list[]" value="f10" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f10" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\frenchbeanaloo.jpg"><div><p>"FRENCH BEAN ALOO"</p><input type="checkbox" name="check_list[]" value="f12" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f12" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src="C:\xampp\htdocs\DBMSproject\foodpics\gajarkahalwa.jpg" ><div><p>"GAJARKA HALWA"</p><input type="checkbox" name="check_list[]" value="f13" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f13" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\imarti.jpg"><div><p>"IMARTI"</p><input type="checkbox" name="check_list[]" value="f14" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f14" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\jalebi.jpg"><div><p>"JALEBI"</p><input type="checkbox" name="check_list[]" value="f15" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f15" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
	
	</div>

	<div class="scroll2" style:"float:right;">
		
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\kachori.jpg"><div><p>"KACHORI"</p><input type="checkbox" name="check_list[]" value="f16" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f16" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\kheer.jpg"><div><p>"KHEER"</p><input type="checkbox" name="check_list[]" value="f17" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f17" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\kofta.jpg"><div><p>"KOFTA"</p><input type="checkbox" name="check_list[]" value="f18" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f18" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\mughlai rice.jpg"><div><p>"MUGHLI RICE"</p><input type="checkbox" name="check_list[]" value="f04" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f04" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\paneer masala.jpg"><div><p>"PANEER MASALA"</p><input type="checkbox" name="check_list[]" value="f19" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f19" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\paneer-tikka.jpg"><div><p>"PANEER TIKKA"</p><input type="checkbox" name="check_list[]" value="f02" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f02" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\panipuri.jpg"><div><p>"PANI PURI"</p><input type="checkbox" name="check_list[]" value="f20" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f20" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\pasta.jpg"><div><p>"PASTA"</p><input type="checkbox" name="check_list[]" value="f06" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f06" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\poha.jpg"><div><p>"POHA"</p><input type="checkbox" name="check_list[]" value="f11" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f11" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
		<div><img class="item" src= "C:\xampp\htdocs\DBMSproject\foodpics\Shahi-Paneer.jpg"><div><p>"SHAHI PANEER"</p><input type="checkbox" name="check_list[]" value="f07" style="position:relative;left:17em;top:-2.5em;"><p style="position:relative; top:-3em; left:12em;">Qty: </p><input type="text" name="f07" style="position:relative;left:17em;top:-6.5em;width:40px;"></div></div>
	</div>
</div>
</form>
</body>
</html>
