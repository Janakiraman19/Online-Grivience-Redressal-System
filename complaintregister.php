<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	 p
	 {
	 	font-family: times new roman;
	 	font-size: 18px;
	 	color: black;

	 }
.img
{  
	background: url("aaaa.jpg");
    background-size: cover;
    height: 1000px;
	background-repeat:no-repeat;
	background-attachment:scroll;
	background-position:center;
	
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


      .box
      {
      	width: 75%;
	  height: 970px;
	  background:transparent;
	color: black;
	top:110%;
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
.box input[type=text],[type=date]
{
	height: 30px;
	width: 50%;
	border:2px solid black;
	border-radius: 25px;
	font-family: bradley-hand;
	font-size: 23px;
	padding-left: 20px;
}
select
{
	height: 30px;
	width: 50%;
	border:2px solid black;
	border-radius: 25px;
	font-family: bradley-hand;
	font-size: 23px;
	padding-left: 20px;
}
</style>
</head>

<body>
	<?php
	require 'session.php';
	require 'connect.php';
	if (!empty($_POST))
	 {
		$date=$_POST['dat'];
		$ID=$_POST['ID'];
		$email=$_POST['mail'];
		$hname=$_POST['hname'];
		$subj=$_POST['sub'];
		$details=$_POST['detail'];

        /*$image=$_FILES['image'];		
		$image=$_FILES['image']['tmp_name'];
  $name=$_FILES['image']['name'];
  $image=file_get_contents($image);
  $image=base64_encode($image);*/
		$sql="Insert INTO complaints values('$date','$ID','$email','$hname','$subj','$details')";
		
		 
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
<marquee>ENTER UR COMPLAINTS...TO BE SOLVED</marquee>
<img src="aaaa.jpg" class="img">
<div class="box">
<form method="POST">	
<p>	We are here to assist you!</p>
Please complete the form below for your complaints.<img src="comp.jpg" class="avatar"><br><br>
<div class="h1"></div>
<p>Date of Complaint</p>
<?php
$date=date("Y-m-d");
?>
<input type="text" name="dat" value="<?php echo $date?>">
<p>Complainant's ID:</p>
<input type="text" name="ID" required placeholder="ID ">
<p>Email-Id</p>
<input type="text" name="mail" required placeholder="Email-Id"><br>
<br>
<div class="h1"></div>
<p>Department against the complaint is filed:</p>
<?php
$result=$connect->query("SELECT deptname FROM dept");
echo "<select name='hname'>SELECT";
while ($row=$result->fetch_assoc()) 
{
	$hname=$row['deptname'];
	echo '<option value="'.$hname.'" >'.$hname.'</option>';
}
echo "</select>";
 ?>
<p>The Complaint is Regarding...</p>
<textarea name="sub" required placeholder="Enter text"></textarea>
<p>Nature of Complaint...</p>
<textarea name="detail" required placeholder="Enter text"></textarea><br><br>
<center><input type="submit" name="" value="File Complaint"></center>
</div>
</form>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>