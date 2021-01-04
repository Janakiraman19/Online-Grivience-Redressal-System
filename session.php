<?php
session_start();
if(!isset($_SESSION['user'])){
header('Location: newlogin.php');
exit(); }

?>
