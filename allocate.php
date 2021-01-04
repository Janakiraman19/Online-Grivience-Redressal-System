<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
	<title>Allocate</title>
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


table {
  
  border-collapse: collapse;
  width: 80%;
  align-content: center;
  
}
 select
  {
  	border-radius: 20px;
	background: transparent;
	outline: none;
	height: 40px;
	width: 25%;
	color: black;
	font-size: 20px;
  }
th{
	font-family: algerian;
	font-size: 15px;
	border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}

td{
  font-family: times new roman;
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.box input[type="submit"]
{
	border: none;
	height: 45px;
	outline: none;
	background: #44ad48;
	color: #fff;
	font-size: 18px;
	margin-left: 40%;
	margin-top: -20%;
	border-radius: 10px;
}

/*tr:nth-child(even) {
  background-color: #dddddd;
}*/
	</style>
</head>
<body>
	<?php
     require 'connect.php';
     //require 'session.php';
        $to=$_GET['email'];
		$subj=$_GET['subj'];
		$date=$_GET['date'];
		$ID=$_GET['ID'];
		$hname=$_GET['hname'];
		$detail=$_GET['detail'];
	//	$_SESSION['uid']=$ID;

	?>
<header>
<h3>INFOWARE GROUP OF COMPANIES</h3>
</header>
<div id="navbar" >	
 <a href="adminoptions.php">HOME</a>
 <a href="logout.php">LOGOUT</a>	
</div><br><br>
<form method="POST" action="#">
DEPARTMENT<br><br>
<select id="hna" name="hna">
<?php
$result=$connect->query("SELECT deptname FROM dept");

while ($row=$result->fetch_assoc()) 
{
	$hnames=$row['deptname'];
	echo '<option value="'.$hnames.'" >'.$hnames.'</option>';
}

 ?>
</select><br><br>
<div class="box">
 	<input type="submit" name="list" value="List" /></div>
     <br><br><center>
 <table>
		<thead>
		<th>Sno</th>
		<th>ID</th>
		<th>DEPT</th>
		<th>Name</th>
		<th>Email</th>
		<th>Response</th>
	    </thead>
	    <tbody>
	    	<?php
	    	   if (isset($_POST['list'])) 
	    	   {

	    	   	$mem=$_POST['hna'];
	    	   	echo $mem;
	    	   	    		$i=0;
	    	      $query = "SELECT * from adddept where deptname='$mem'";
	    	      $result=mysqli_query($connect,$query)or die (mysqli_error($connect));
	    	      if($result->num_rows >0)
	    	      {
	    	      	while ($row = $result->fetch_assoc()) 
	    	      	{
	    	      		$i+=1;
	    	      		?>
	    	      		<br>
	    	      		<tr>
	    	      			<td><?php echo $i;?></td>
	    	      			 <td><?php echo $row['EID'];?></td>
	    	      			<td><?php echo $row ['deptname'];?></td>
	    	      			<td><?php echo $row ['name1'];?></td>
	    	      			<td><?php echo $row ['email1'];?></td>
	    	      			<td><a href="reply.php?email=<?php echo $to;?>
	    	      			&subj=<?php echo $subj; ?>&date=<?php echo $date; ?>&hname=<?php echo  $hname; ?>&detail=<?php echo $detail; ?>&ID=<?php echo $ID;?>&email1=<?php echo $row['email1'];?>">REPLY</a></td>
	    	      		</tr>
	    	      		<?php
	    	      	}
	    	      }
	    	  }
	    	  ?>
 </tbody>
</table>
 </form>
 </body>
</html>