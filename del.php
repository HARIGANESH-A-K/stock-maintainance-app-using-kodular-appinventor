<?php 
$id=$_GET['i']; 
session_start();
	require_once('config.php');
	mysqli_query($con,"delete from members where id='$id'"); 
	header("location:fetch.php");
?>
