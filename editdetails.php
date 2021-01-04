<!DOCTYPE html>
<html>
<head>
	<title>Add Department</title>
	<style type="text/css">
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
	  height: 72%;
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
  select
  {
  	border-radius: 20px;
	background: transparent;
	outline: none;
	height: 40px;
	width: 100%;
	color: black;
	font-size: 20px;
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
$EID=$_GET['EID'];
if (!empty($_POST)) 
{
	
	//$EID=$_POST['EID'];
	$name1=$_POST['name1'];
	$email1=$_POST['email1'];

	$sql="UPDATE `adddept` SET `name1`='$name1',`email1`='$email1' WHERE `EID`='$EID'" ;

			 if($connect->query($sql)==TRUE)
  {
    echo"<script type='text/javascript'>alert('Updated Successfully')</script>";
   echo"<script type='text/javascript'>window.location.href = 'adddept.php'</script>";
  }
}

?>
<div class="header1">
<h3>INFOWARE GROUP OF COMPANIES</h3>
</div>
<div id="navbar" >	
 <a href="adminoptions.php">HOME</a>
 <a href="logout.php">LOGOUT</a>	
</div><br><br>
<div class ="box">
<form method="Post">
 MEMBER ID:<br>
<input type="text" name="EID" required placeholder="ID" value="<?php echo $EID;?>"><br><br><br>
MEMBER NAME:<br>
<input type="text" name="name1" required placeholder="NAME"><br><br><br>
MEMBER Email:<br>
<input type="Email" name="email1" required placeholder="Enter Email"><br><br><br>
<center>
<input type="submit" name="submit" value="ADD"></center>	
</div>
</form>
</body>
</html>53
