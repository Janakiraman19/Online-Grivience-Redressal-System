<?php 
            if (isset($_POST['fg']))
             {
                 
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
                      echo "<script type='text/javascript'>alert('Reply sent Successfully!!!!')</script>";
                      }
                  }}
?>
