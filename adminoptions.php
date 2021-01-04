<!DOCTYPE html>
<html>
<head>
	<title>Admin options</title>
	<style type="text/css">
		button
		{
			border: none;
	height: 45px;
	outline: none;
	background: #44ad48;
	color: #fff;
	font-size: 18px;
	border-radius: 10px;
	width: 60%;

		}
		button:hover
		{
			cursor: pointer;
	background: #ffc107;
	color: #000;
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

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
a{
	text-decoration: none;
}
h1
{
	font-family: algerian;
	font-size: 25px;

}

	</style>
</head>
<body>
<?php
require 'connect.php';
require 'session.php';
?>
<div class="header1">
<h3>INFOWARE GROUP OF COMPANIES</h3>
</div>
<div id="navbar" >	
 <a href="#">HOME</a>
 <a href="logout.php">LOGOUT</a>	
</div><br><br>
<center>
	<h1>ONLINE GREVANCE REDRESSAL SYSTEM</h1><br>
<button><a href="adddept.php">CREATE DEPARTMENT/ADD MEMBERS</a></button><br><br><br><br>
<button><a href="unsolvedcomplaints.php">UNSOLVED COMPLAINTS</a></button><br><br><br><br>
<button><a href="solvedcomplaints.php">SOLVED COMPLAINTS</a></button><br><br><br><br>
<button><a href="viewfeedback.php">VIEW FEEDBACK</a></button><br><br><br><br>
</center>
</body>
</html>