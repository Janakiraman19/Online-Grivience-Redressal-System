<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <title>My Complaints</title>
  <style type="text/css">
    header {
  background-color:#666;
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
p
{
  font-family: Alegreya Sans SC;
  font-size: 30px;
  font-weight: 900;
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
 <a href="useroptions.php">HOME</a>
 <a href="logout.php">LOGOUT</a>  
</div><br><br>
<center><p>MY COMPLAINTS</p></center>
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
              require('connect.php');
              require('session.php');
              $user=$_SESSION['user'];
              $query = "SELECT * from complaints where ID='$user'";
               $sql = "SELECT * from solvedcomp where ID='$user'";
              $result=mysqli_query($connect,$query)or die (mysqli_error($connect));
               $result1=mysqli_query($connect,$sql)or die (mysqli_error($connect));
              if($result->num_rows >0)
              {
                while ($row = $result->fetch_assoc()) 
                {
                  $i+=1;
                  $date=$row['date'];
                  ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row ['date'];?></td>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row ['email'];?></td>
                    <td><?php echo $row ['hname'];?></td>
                    <td><?php echo $row ['subj'];?></td>
                    <td><?php echo $row ['detail'];?></td>
                    
                    <?php
                  }
                }
                ?>
                                                                                                                                                                                        
              <?php
               if($result1->num_rows >0)
              {
                while ($row1= $result1->fetch_assoc()) 
                {
                  $i+=1;
                  $date=$row1['date'];
                  ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row1['date'];?></td>
                    <td><?php echo $row1['ID'];?></td>
                    <td><?php echo $row1['email'];?></td>
                    <td><?php echo $row1['hname'];?></td>
                    <td><?php echo $row1['subj'];?></td>
                    <td><?php echo $row1 ['detail'];?></td>
                    
                  </tr>
                <?php
                }
              }
              ?>
              
      
                
      </tbody>
  </table>
</center>
</body>

</html>