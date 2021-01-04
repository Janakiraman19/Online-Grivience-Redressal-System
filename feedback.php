<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
	<style type="text/css">
	 p
	 {
	 	font-family: Alegreya Sans SC;
	 	font-size: 22px;
	 	color: black;

	 }
	 .header1 
	  {
       background-color: #666;
       padding: 15px;
       text-align:right;
      font-size:12px;
      color: white;
      }
      
#navbar {
  overflow: hidden;
  background-color: #333;
  z-index: 1;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}
      .box
      {
      	width: 75%;
	  height: 560px;
	  background:transparent;
	color: black;
	top: 75%;
	left:50%;
	bottom:15%;
	position:absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 30px 30px;
	border-radius:25px;
	border-style:groove;
	border-color: black;
      }
      .h1
      {
      	border-top:1px solid grey;

      }
      textarea
      {
  width: 100%;
  height: 100px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  
}
.box input[type="submit"]
{
	border: none;
	height: 45px;
	outline: none;
	background: #44ad48;
	color: #fff;
	font-size: 18px;
	border-radius: 10px;
}
.box input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.avatar{
	width: 250px;
	height: 90px;
	position: absolute;
	background-color: transparent;
	border-radius: 50%;
	top:15px;
	right: 20px;
}
.box input[type=text]
{
	height: 30px;
	width: 30%;
	border-style: none;
	border-bottom:2px solid black;
	font-family: bradley-hand;
	font-size: 23px;
	padding-left: 20px;
}
.box input[type=text]:focus
{
	height: 30px;
	width: 40%;
	border-bottom: 2px solid #16a085;
	color: black;
	transition: 0.2s ease;
	
}
</style>
</head>

<body>
	<?php
	require 'session.php';
	require 'connect.php';
	if (!empty($_POST))
	 {
		$ID=$_POST['ID'];
		$subj=$_POST['sub'];
		$detail=$_POST['detail'];
		$sql="Insert INTO feedback values('$ID','$subj','$detail')";
			 
	 if($connect->query($sql)==TRUE)
       {
       echo"<script type='text/javascript'>alert('Registered Successfully')</script>";
    echo"<script type='text/javascript'>window.location.href = 'useroptions.php'</script>";
      }
}
	
	?>

<div class="header1">
<h3>INFOWARE GROUP OF COMPANIES</h3>
</div>
<div id="navbar" >	
 <a href="useroptions.php">HOME</a>
 <a href="logout.php">LOGOUT</a>	
</div><br><br>
<marquee>ENTER UR VALUABLE FEEDBACKS</marquee>
<div class="box">
<form method="POST">	
<p>ID:</p>
<input type="text" name="ID" required placeholder="ID ">
<p>SUBJECT</p>
<textarea name="sub" required placeholder="Enter text"></textarea>
<p>FEEDBACK</p>
<textarea name="detail" required placeholder="Enter text"></textarea><br><br>
<center><input type="submit" name="" value="Send Feedback"></center>
</div>
</form>
</body>
</html>