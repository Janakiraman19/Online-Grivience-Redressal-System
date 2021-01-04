<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
	<title>Form</title>
	<style type="text/css">
    html,
    body{
        min-height: 100%;
    }
    body{
      background-image:url(b.jpg);
  background-repeat:no-repeat;
  background-attachment:scroll;
  background-position: center;
  background-size: cover;

    }
    
header {
  background-color: #666;
  padding: 20px;
  text-align:right;
  font-size:12px;
  color: white;
}
		p
		{
			font-family:bradleyhand;
			font-size:28px;
			color:black;
			padding-left:15%;
		}
		input[type=text],[type=Email-Id],[type=Password]
		 {
               
              width:50%;
              padding: 12px 20px;
              margin: 8px 0;
              font-size: 22px;
              font-family: cursive;
              background-color: transparent;
              border-right: transparent;
              border-left: transparent;
              border-top:transparent;
              border-bottom: 2px solid red;
          }
		 
     input[type=text]:focus,[type=Email-Id]:focus,[type=Password]:focus
     {
              
             width: 60%;
             border-bottom: 2px solid #16a085;
            color: black;
               transition: 0.2s ease;
          }
     
		 .heroimg input[type="submit"]
       {
	border: none;
	height: 45px;
	outline: none;
	background: #44ad48;
	color: #fff;
	font-size: 18px;
	border-radius: 10px;
 }
.heroimg input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
#s
{
  font-family: Alegreya Sans SC;
  font-size: 30px;
  font-weight: 400;
}

	</style>
</head>
<body>
  <?php
  
  require('connect.php');
  if(!empty($_POST))
{
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $idno=$_POST['idno'];
  $email=$_POST['email'];
  $ps1=$_POST['ps1'];
  $sql="Insert INTO sign values('$name','$gender','$idno','$email','$ps1')";
  if($connect->query($sql)==TRUE)
  {
    echo"<script type='text/javascript'>alert('Registered Successfully')</script>";
     echo"<script type='text/javascript'>window.location.href = 'newlogin.php'</script>";

  }
}
  ?>
<header>
<h3>INFOWARE GROUP OF COMPANIES</h3>
</header>
	<div class="heroimg"><br>
		<div id="s"><center>SIGN UP</center></div>
    		   <form name="myForm" method="post">
			  <p><b><i>Name<br>
				<input type="text" id="name" name="name" required><br>
				Gender<br>
				<input type="radio" name="gender" value="m">Male
				<input type="radio" name="gender" value="f">Female<br><br>	
                Identity Number<br>
                <input type="text" name="idno" value="" required=""><br>
                Email-Id<br>
                <input type="Email-Id" name="email" required><br>
                Password<br>
                <input type="Password" name="ps1" required=""><br>
                <center><input type="Submit" name="" value="Submit"></center>
            </i></b>
			</form>
		   
	</div>	

</body>
</html>