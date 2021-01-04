<!DOCTYPE html>
<html>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
<head>
	<title>adminoptions</title>
	<style type="text/css">
		p
		{
			font-family: Alegreya Sans SC;
			font-size: 30px;
		}
		header {
  background-color: #666;
  padding: 20px;
  text-align:right;
  font-size:12px;
  color: white;
}
table {
  
  border-collapse: collapse;
  width: 80%;
  align-content: center;
  
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
input[type="text"]
{
	border:none;
	border-bottom: 1px solid black;
	background: transparent;
	outline: none;
	height: 40px;
	width: 30%;
	color: black;
	font-size: 20px;
	font-family: times new roman;
	margin-left:10%;
}
input[type="text"]:focus
 {
	border-bottom: 2px solid #16a085;
	color: black;
	width: 34%;
	transition: 0.2s ease;
}
button
{
	border:none;
	background-color: transparent;
	margin-left:-2%;
}
	</style>
</head>
<body>
	<header>
<h3>INFOWARE GROUP OF COMPANIES</h3>
</header>
<link rel="stylesheet" type="text/css" href="vp.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="navbar" >	
 <a href="adminoptions.php">HOME</a>
 <a href="logout.php">LOGOUT</a>	
</div><br><br>
<center><p>SOLVED COMPLAINTS</p></center>
<?php
  require 'connect.php';
  if(isset($_POST['search'])){
     
    
    $valueToSearch = $_POST['valueToSearch'];
    
    $sql="SELECT * FROM `solvedcomp` WHERE CONCAT(`date`,   `ID`, `email`, `hname`, `subj`, `detail`)LIKE '%".$valueToSearch."%'";
    
    $result=filtertable($sql);
  
  }
  else{
      $sql="SELECT * FROM complaints";

      $result=filtertable($sql);
  }
  
  function filtertable($query)
  {
       require('connect.php'); 
       $filter_result=mysqli_query($connect,$query);
       return $filter_result;
  } 

  ?>

	 <form  method="post">
            <input type="text" name="valueToSearch" placeholder="Search"></ensp>
          <button name="search"><i class="fa fa-search"></i></button>
          <br><br>
<center>
	<table>
		<thead>
		<th>Sno</th>
		<th>Date</th>
		<th>ID</th>
		<th>Email-Id</th>
		<th>Against</th>
		<th>Subject</th>
		<th>Detail</th>
		</thead>
	    <tbody>
	    	<?php
	    		$i=0;
	    	     
	    	     /* $query = "SELECT * from solvedcomp";
	    	      $result=mysqli_query($connect,$query)or die (mysqli_error($connect));*/
	    	      if($result->num_rows >0)
	    	      {
	    	      	while ($row = $result->fetch_assoc()) 
	    	      	{
	    	      		$i+=1;
	    	      		?>
	    	      		<tr>
	    	      			<td><?php echo $i;?></td>
	    	      			<td><?php echo $row ['date'];?></td>
	    	      			<td><?php echo $row ['ID'];?></td>
	    	      			<td><?php echo $row ['email'];?></td>
	    	      			<td><?php echo $row ['hname'];?></td>
	    	      			<td><?php echo $row ['subj'];?></td>
	    	      			<td><?php echo $row ['detail'];?></td>
	    	      	      		</tr>
	    	     		<?php
	    	      	}
	    	      }
	    	      ?>
	    </tbody>
	</table>
	</form>
</center>
</body>
</html>