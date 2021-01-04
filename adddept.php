<!DOCTYPE html>
<html>
<head>
	<title>Add Department</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		p
		{
			font-family: Alegreya Sans SC;
			font-size: 30px;
			font-weight:900;
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
      	width: 	50%;
	  height: 200px;
	  background:transparent;
	color: black;
	top:63%;
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
.box input[type="text"],input[type="email"]
{
	border:none;
	border-bottom: 1px solid black;
	background: transparent;
	outline: none;
	height: 40px;
	width: 100%;
	color: black;
	font-size: 20px;
	font-family: times new roman;
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
.box a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color:black;
}
.box a:hover
{
	cursor: pointer;
	color: red;
}
h
{
font-size: 13px;
font-color:blue;
}

	</style>
</head>
<body>
<?php
require 'connect.php';
require 'session.php';
if (!empty($_POST)) 
{
	$deptname=$_POST['deptname'];


	$sql="Insert INTO dept values('$deptname')";

			 if($connect->query($sql)==TRUE)
  {
    echo"<script type='text/javascript'>alert('Created Successfully')</script>";
   echo"<script type='text/javascript'>window.location.href = 'adddept.php'</script>";
  }
}

?>
<div class="header1">
<h3>INFOWARE GROUP OF COMPANIES</h3>
</div>
<div id="navbar" >	
 <a href="adminoptions.php">HOME</a>
 <a href="adddetails.php">ADD MEMBERS</a>
 <a href="editmembers.php">EDIT MEMBERS</a>
  <a href="logout.php">LOGOUT</a>
</div><br><br>
	<center><p>ADD DEPARTMENT</p></center>

<div class ="box">
<form method="Post">
NAME OF DEPARTMENT:<br>
<input type="text" name="deptname" required placeholder="NAME"><br><br><br>
<center>
<input type="submit" name="submit" value="ADD"></center>	
</div>
</form>
</body>
</html>