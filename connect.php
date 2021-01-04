<?php
$connect = mysqli_connect('localhost','root','');
if(!$connect){
	die("MYSQL CONNECTION FAILED" . mysqli_error($connect));
}
$select_db= mysqli_select_db($connect, 'complaint');
if(!$select_db){
	die("DATABASE SELECTION FAILED" . mysql_error($connect));
}
?>