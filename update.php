<?php 
session_start();
	require_once('config.php');
error_reporting(0);

$i=$_GET['i'];
$n=$_GET['n'];
$p=$_GET['p'];
$a=$_GET['a'];
 ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <center><h2>Updation of Member Information</h2></center>
<form name="form1" action="" method="get" align="center">
<div class="imgcontainer">

<input type="Hidden" name="id"	value="<?php echo $_GET['i'];   ?>">		
<table align="center">
<tr>
<td>Enter name</td>
<td><input type="text" value="<?php echo "$n" ?>" name="name" ></td>
</tr>

<tr>
<td>Enter phone no</td>
<td><input type="tel" value="<?php echo "$p" ?>" name="phone_no" ></td>
</tr>

<tr>
<td>Enter address</td>
<td><input type="text" value="<?php echo "$a" ?>" name="address" ></td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" name="submit1" value="update">
		<button><a href="fetch.php">display</a></button>
		<button><a href="homepage.php">home</a></button>
		<button class="logout_button" action="index.php" type="submit">Log Out</button>	
		
	</td>
</tr>
</table>
 
 
 <?php 
 //insert
 if(isset($_GET["submit1"]))
 {
$id=$_GET['id'];
$nn=$_GET['name'];
$pp=$_GET['phone_no'];
$aa=$_GET['address'];


 	$d=mysqli_query($con,"update members set name='$nn',phone_no='$pp',address='$aa' where id='$id'");
if($d)
{
	echo "<script>alert('record updated')</script>";
header("location:fetch.php");
}
else
{
	echo "failed";
}
header("location:fetch.php");
 }
 
?>
 