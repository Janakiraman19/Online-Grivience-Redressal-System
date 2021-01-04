<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
.box input[type="text"],input[type="password"]
{
	border:none;
	border-bottom: 1px solid black;
	background: transparent;
	outline: none;
	height: 40px;
	width: 70%;
	color: black;
	font-size: 20px;
	font-family: times new roman;
}
.box input[type="text"],input[type="password"]:focus
{
  width: 75%;
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
$uid=$_SESSION['user'];
if (!empty($_POST)) 
{

 // $ID=$_POST['ID'];
  $password=$_POST['password'];
  $newpassword=$_POST['newpassword'];
  $confirmnewpassword=$_POST['confirmnewpassword'];
  $query="SELECT ps1 FROM sign WHERE idno='$uid'";
  $result=mysqli_query($connect,$query);
  $row=$result->fetch_assoc();
  $oldpassword=$row['ps1'];
  if (!$result)
   {
     echo"<script type='text/javascript'>alert('USERID Mismatch')</script>";
  }
  if ($password==$oldpassword)
   {
   	
   if($newpassword!=$confirmnewpassword)
   {
   	 echo"<script type='text/javascript'>alert('Confirm Passwords Mismatch')</script>";
   	}
   	 else if($newpassword==$confirmnewpassword)
   	 {
        $sql="UPDATE sign SET ps1='$newpassword' where idno='$uid'";
         //$result1=mysqli_query($connect,$sql)
        if($connect->query($sql)==TRUE)
        {
     echo"<script type='text/javascript'>alert('Passwords Changed Successfully')</script>";
        }
    }
      }
      else
      {
      	
  	echo"<script type='text/javascript'>alert('Passwords Mismatch')</script>";
  	echo"<script type='text/javascript'>window.location.href = 'changepass.php'</script>";
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
<div class ="box">
<form method="Post">
 ID:<br>
<input type="text" name="ID" required placeholder="ID" value=<?php echo "$uid";?>><br><br><br>
ENTER YOUR EXISTING PASSWORD:<br>
<input type="PASSWORD" name="password" required placeholder="OLD PASSWORD"><br><br><br>
ENTER YOUR NEW PASSWORD:<br>
<input type="PASSWORD" name="newpassword" required placeholder="NEW PASSWORD"><br><br><br>
CONFIRM NEW PASSWORD:<br>
<input type="PASSWORD" name="confirmnewpassword" required placeholder="CONFIRM NEW PASSWORD"><br><br><br>
<center>
<input type="submit" name="submit" value="UPDATE"></center>	
</div>
</form>
</body>
</html>