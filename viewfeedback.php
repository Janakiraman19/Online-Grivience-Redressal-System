<!DOCTYPE html>
<html>
<head>
	<title>Unsolved</title>
	<style type="text/css">
		header {
  background-color: #666;
  padding: 20px;
  text-align:right;
  font-size:12px;
  color: white;
}
p
{
  font-family: cursive;
  font-size: 30px;
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

/*tr:nth-child(even) {
  background-color: #dddddd;
}*/
	</style>
</head>
<body>
	<header>
<h3>INFOWARE GROUP OF COMPANIES</h3>
</header>
<div id="navbar" >	
 <a href="adminoptions.php">HOME</a>
 <a href="logout.php">LOGOUT</a>	
</div><br><br>
<center><p>FEEDBACK</p></center>
<center>
  <table>
     <thead>
      <th>S.no</th>
      <th>ID</th>
      <th>SUBJECT</th>
      <th>FEEDBACK</th>
     </thead>
      <?php
      $i=0;
         require 'connect.php';
         require 'session.php';
         $query="SELECT * FROM feedback";
         $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
         if($result->num_rows>0)
         {
          while ($row=$result->fetch_assoc())
           {
              $i+=1;
              ?>
              <tr>
              <td><?php echo $i?></td>
              <td><?php echo $row['ID']?></td>
              <td><?php echo $row['sub']?></td>
              <td><?php echo $row['detail']?></td>
            </tr>
           <?php
            }
         }
      ?>
  </table>
</center>
</body>
</html>