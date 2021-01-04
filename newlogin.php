<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

	html,
body{
	min-height: 100%;
}
body
{  
	background: url("x.jpg");
	background-repeat:no-repeat;
	background-attachment:scroll;
	background-position: center;
	background-size: cover;
}
#navbar {
  overflow: hidden;
  background-color: #333;
  z-index: 1;
  float: center;
  display: block;
  color: lightgrey;
  font-family: Alegreya Sans SC;
  text-align: center;
  padding-top: 1%;	
  padding-left: 35%;
  text-decoration: none;
  font-size: 15px;
  margin-left: -1%;
  margin-right: -1%;

}

header {
  background-color: #666;
  padding: 20px;
  margin-top:-1%;
  margin-left: -1%;
  margin-right: -1%;
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
	left: 50%;
	
}
.loginbox{
	width: 1000px;
	height: 500px;
	background:transparent;
	color: black;
	top:70%;
	left:50%;
	bottom:15%;
	position:absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
	border-radius:25px;
	border-style:groove;
	border-color: black;
}
#leftBox {
  float:left;
  height:300px;
  width: 490px;
  margin:0;
}
#rightBox {
  float:right;
  height:300px;
  width: 390px;
  
}
.v1 {
  border-left: 3px solid grey;
  height: 390px;
  position: absolute;
  left: 57%;
  margin-left: -3px;
  top: 8%;
  bottom: 2%;
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: left;
	font-size: 22px; 
}
.loginbox p{
	width: 0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
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
.b1
{
	border: none;
	height: 45px;
	width: 100%;
	outline: none;
	background: #44ad48;
	color: #fff;
	font-size: 18px;
	border-radius: 10px;
	display: block;
}
.b1:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.b2
{
	margin-top: 28px;
	width: 72%;
	height: 42px;
	font-size:15px;
	background:#F44336;
	border: none;
	font-weight: 900;
	border-radius:6px;
	color:black;
	font-family:times new roman;
	cursor: pointer;
}
.b2:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color:black;
}
.loginbox a:hover
{
	cursor: pointer;
	color: red;
}
#rightbox button
{
    margin-top: 28px;
	width: 78%;
	height: 42px;
	font-size:25px;
	background:#F44336;
	border: none;
	font-weight: 900;
	border-radius:6px;
	color: #FFF;
	font-family:times new roman;
	cursor: pointer;
}
#rightbox button:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
</style>

<body>
<?php
require('connect.php');
session_start();
if (isset($_POST['submit'])) {

$user = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM sign WHERE idno='$user' and ps1='$password'";
 
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);

if ($count == 1) {
$_SESSION['user'] = $user;

}
else {

echo "<script type='text/javascript'>alert('You Havent Logged in, Try Again!')</script>";
}
}

if (isset($_SESSION['user'])) {

$_SESSION['user']= $user;
 
header('Location: useroptions.php');
 
}
?>


<?php 
            if (isset($_POST['fg']))
             {
                 $user = $_POST['username'];
                  $query = "SELECT * FROM `sign` WHERE idno='$user' ";
                  $result = mysqli_query($connect,$query) or die(mysql_error());
                  $rows = mysqli_num_rows($result);
                  $data = mysqli_fetch_assoc($result);
                  $mail_id=$data['email'];
                  $name=$data['name'];
                  $password=$data['ps1'];
     
              if($rows == 1)
              {
                  if(mail($mail_id, "INFOWARE GROUP OF COMPANIES",
                  	'USERID: '.$name.
                  	'password: '.$password))
                     {
                      echo "<script type='text/javascript'>alert('Password Has been send to your Registered Mail ID!!')</script>";
                      }
                  }}
?>


<header>
<h3>INFOWARE GROUP OF COMPANIES</h3>
</header>
<div id="navbar">
		<h1>ONLINE GREVANCE REDRESSAL SYSTEM</h1>
	</div>
<div class="heroimg">
<div class="loginbox">
	
<img src="b1.png" class="avatar">
    <div id="leftBox">
			<h1 text-align="left">USER AUTHENTICATION</h1>
			<form method="POST">
				<p>USERID</p>
				<font color="black"><input type="text" name="username" placeholder="USERID/NEW ID"></font>
				<P>PASSWORD</P>
				<font color="black"><input type="password" name="password" placeholder="PASSWORD"></font>
				<button name="submit" class="b1" value="LOGIN">LOGIN</button>
				<button name="fg" class="b2">FORGET PASSWORD</button>
				</form>
				</div>
				<div class="v1"></div>
		<div id="rightBox">
		<h1>MORE WAYS...</h1>
		<center>
				<button ><a href="signup.php">REGISTER</a></button>
				<br><br><br><br>
				<button><a href="adminlogin.php">LOGIN AS ADMIN</a></button>
				<br><br><br><br>
				</center>
			</div>
		</div>
</div>		
</body>
</head>
</html>