<?php
	require 'connect.php';

	$EID= $_GET['EID'];
	$query = "DELETE FROM adddept WHERE EID='$EID'";
	if(mysqli_query($connect,$query)) {
	echo "<script type='text/javascript'>alert('Member Deleted Successfully!')</script>";
	echo "<script type='text/javascript'>window.location.href = 'editmembers.php'</script>";
	}	
	else {
    echo "Error: " . $query . "<br>" . $connect->error;
	}
?>