<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>REPLY</title>
	<style type="text/css">
		header {
  background-color: #666;
  padding: 20px;
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
.loginbox{
	width: 700px;
	height: 450px;
	background:transparent;
	color: black;
	top:60%;
	left:50%;
	bottom:15%;
	position:absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 40px 30px;
	border-radius:25px;
	border-style:groove;
	border-color: black;
}
p
{
	font-family: algerian;
	font-size: 20px;
	text-align: center;
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
	width: 100%;
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
		
	</style>
</head>
<body>
	<?php
	$to=$_GET['email'];
		$subj=$_GET['subj'];
		$date=$_GET['date'];
		$ID=$_GET['ID'];
		$hname=$_GET['hname'];
		$detail=$_GET['detail'];
	 $too=$_GET['email1'];
	  //$usid=$_SESSION['uid'];
	 
	?>

	
	<header>
	<h3>INFOWARE GROUP OF COMPANIES</h3>
</header>
<div id="navbar" >  
 <a href="adminoptions.php">HOME</a>
 <a href="logout.php">LOGOUT</a>  
</div><br><br>
<form method="POST">
	<div class="loginbox">
	<p>SEND RESPONSE</p>
	TO<br>
   <input type="text" name="too" value="<?php echo $too; ?>"><br><br>
	Comment<br>
	<textarea name="message"></textarea>
	<input type="submit" name="sendmail" value="send"/>
    <?php
    require'connect.php';
    //require 'session.php';
	if (isset($_POST['sendmail']))
	 {
	 	
	   if(mail($too,$sub,$_POST['message']))
	   {

	   	echo "<script type='text/javascript'>alert('Reply sent Successfully!!!!')</script>";
	$sql="Insert INTO solvedcomp values('$date','$ID','$to','$hname','$subj','$detail') ";
	  $query = "DELETE from complaints where ID='$ID' and subj='$subj'";
	   $result1=mysqli_query($connect,$sql)or die (mysqli_error($connect));
	   $result=mysqli_query($connect,$query)or die (mysqli_error($connect));
	   header('Location:unsolvedcomplaints.php');
	   }

	   else
	   {
	   echo "<script type='text/javascript'>alert('Failed,Try again!!!')</script>";
	   }
	}
	?>
</div>
</form>
</body>
</html>