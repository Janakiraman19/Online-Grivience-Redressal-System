<!DOCTYPE html>
<html>
<head>
	<title>adminlogin</title>
	<style type="text/css">
		header {
  background-color: #666;
  padding: 20px;
  text-align:right;
  font-size:12px;
  color: white;
}
.avatar{
	width: 80px;
	height: 80px;
	border-radius: 50%;
	position: absolute;
	top:-50px;
	left: 36%;
	
}
.loginbox{
	width: 335px;
	height: 400px;
	background:transparent;
	color: black;
	top:60%;
	left:50%;
	bottom:15%;
	position:absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 50px 40px;
	border-radius:25px;
	border-style:dotted;
	border-color: black;
}
.loginbox input[type="text"],input[type="password"]
{
	border:none;
	border-bottom: 1px solid black;
	background: transparent;
	outline: none;
	height: 40px;
	color: black;
	font-size: 20px;
	font-family: times new roman;
}
input[type="text"]:focus, input[type="password"]:focus
 {
	border-bottom: 2px solid #16a085;
	color: black;
	transition: 0.2s ease;
}
.loginbox input[type="submit"]
{
	border: none;
	height: 45px;
	outline: none;
	background: #44ad48;
	color: #fff;
	font-size: 18px;
	border-radius: 10px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
body
{  
	background: url("x.jpg");
	background-repeat:no-repeat;
	background-attachment:scroll;
	height: 650px;
	background-position: center;
	background-size: cover;
}
	</style>
</head>
<body>
	<?php

require('connect.php');
session_start();
if (isset($_POST['username']) and isset($_POST['password'])) {

$user = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admintable WHERE username='$user' and password='$password'";
 
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);

if ($count == 1) {
$_SESSION['user'] = $user;
}
else {
echo "<script type='text/javascript'>alert('Incorrect User Credentials, Try Again!')</script>";
}
}

if (isset($_SESSION['user'])) {

$user = $_SESSION['user'];
 
header('Location: adminoptions.php');
 
}
?>
<header>
<h3>INFOWARE GROUP OF COMPANIES</h3>
</header>
<center><h2>ADMIN AUTHENTICATION</h2></center>
<div class="loginbox">
	<img src="b1.png" class="avatar">
	<form method="POST">
		        
				<p>USERID</p>
				<font color="black"><input type="text" name="username" placeholder="USERID"></font>
				<P>PASSWORD</P>
				<font color="black"><input type="password" name="password" placeholder="PASSWORD"></font><br><br><br>
				<input type="submit" name="" value="LOGIN">
				</form>
			</div>
</body>
</html>