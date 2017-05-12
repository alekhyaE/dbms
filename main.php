<!DOCTYPE html>
<html>
<?php
$user='root';
$pass='';
$db='restaurant';

$db=new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");


?>
<head>

<style>
	.a
	{
		float:center;
		width:100%;
		height:100px;
		border-style:solid;
		background-color:black;
	}
li.w{display:inline;
  margin:60px;
  color:yellow;
  font-size:18pt;
  border:solid 2px black;
  width:100%;
  float:center;
  }
  .to
  {
	position:absolute;
	top:22px;
	left:200px;
  }
  .to0
  {
	position:absolute;
	top:22px;
	
  }
  .to1
  {
	position:absolute;
	top:22px;
	left:466px;
  }
    .to2
  {
	position:absolute;
	top:22px;
	left:760px;
  }
   .to3
  {
	position:absolute;
	top:22px;
	left:1060px;
  }
  .b
  {
	 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:80px;
	color:pink;
  }
  .c
  {
		position:absolute;
	
		top:315px;
		left:40px;
  }
  .c1
  
  {
		position:absolute;
		
		top:615px;
		left:40px;
		 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:65px;
	color:pink;

  }
  .d
  {
		position:absolute;
	
		top:315px;
		left:490px;
  }
.h11
  {
		
  
  
		position:absolute;
		
		top:690px;
		left:970px;
		 font-style: italic;
		text-align:center;
		font-weight:bold;
		font-size:65px;
		color:pink;

  
  }
   .h12
  
  {
		position:absolute;
		
		top:1220px;
		left:450px;
		 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:95px;
	color:pink;

  }
  .d1
  
  {
		position:absolute;
		
		top:615px;
		left:490px;
		 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:65px;
	color:pink;

  }
  .e
  {
		position:absolute;
		right:0px;
		top:315px;
		left:950px;
  }
  .e1
  
  {
		position:absolute;
		
		top:615px;
		left:970px;
		 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:65px;
	color:pink;

  }
   .f
  {
		position:absolute;
		right:0px;
		top:800px;
		left:40px;
  }
  .f1
  
  {
		position:absolute;
		
		top:1080px;
		left:40px;
		 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:65px;
	color:pink;

  }
  .g
  {
		position:absolute;
	
		top:800px;
		left:490px;
  }
  .g1
  
  {
		position:absolute;
		
		top:1080px;
		left:490px;
		 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:65px;
	color:pink;

  }
   .h
  {
		position:absolute;
	
		top:800px;
		left:915px;
  }
  .h11
  
  {
		position:absolute;
		
		top:1080px;
		left:970px;
		 font-style: italic;
	text-align:center;
	font-weight:bold;
	font-size:65px;
	color:pink;

  }
 .end
	{
		position:absolute;
		float:center;
		width:96%;
		height:100px;
		border-style:solid;
		top:1300px;
		background-color:pink;
	}
	
</style>
<div class="a">

		<ul class="to0">
			<a href="main.php"><li class="w">HOME</li></a>
			
		</ul>
		
		<ul class="to">
			<a href="try31.html"><li class="w">EMPLOYEE_INFO</li></a>
			
		</ul>
		
		<ul class="to1">
			<a href="feedback.html"><li class="w">FEEDBACK</li></a>
			
		</ul>
		<ul class="to2">
			<a href="menu.php"><li class="w">YUMMY_MENU</li></a>
			
		</ul>
		<ul class="to3">
			<a href="aboutus.html"><li class="w">ABOUT US</li></a>
			
		</ul>
		
	</div>
	<div class="b">
		<p class="b">Our menu</p>
	</div>
		<div class="c">
	<img src="f1.jpg" style="width:300px" height="300px">
	</div>
	<div class="c1">
	<p>aloorazala</p>
	</div>
	<div class="d">
	<img src="f2.jpg" style="width:300px" height="300px">
	</div>
	<div class="d1">
	<p>dumaloo</p>
	</div>
	<div class="e">
	<img src="f..jpg" style="width:300px" height="300px">
	</div>
	<div class="e1">
	<p>imarti</p>
	</div>
	<div class="f">
	<img src="f3.jpg" style="width:300px" height="300px">
	</div>
	<div class="f1">
	<p>shahipaneer</p>
	</div>
	<div class="g">
	<img src="f5.jpg" style="width:300px" height="300px">
	</div>
	<div class="g1">
	<p>frenchbean</p>
	</div>
	<div class="h">
	<img src="f4.jpg" style="width:300px" height="300px">
	</div>
	<div class="h11">
	<p>biriyani</p>
	</div>
	
	
	</head>
	</html>