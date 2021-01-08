<?php
	session_start();
	require_once('config.php');
	//phpinfo();
	$s=mysqli_query($con,"select * from members");
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>database insert operation </title>
<style>
.left, .right {
  float: left;
  width: 20%; /* The width is 20%, by default */
}

.main {
  float: left;
  width: 60%; /* The width is 60%, by default */
}

/* Use Media Query to add a breakpoint at 800px: */
@media screen and (max-width:800px) {
  .left , .main, .right {width:100%;}
}
</style>
</head>

<body>
 <div id="main-wrapper">
		<center><h2>Member Information</h2></center>
		<center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>

 <form name="form1" action="" method="post" align="center">
<div class="imgcontainer">
				
<table align="center">
<tr>
<td>Enter name</td>
<td><input type="text" name="name" ></td>
</tr>

<tr>
<td>Enter phone no</td>
<td><input type="tel" name="phone_no" ></td>
</tr>

<tr>
<td>Enter address</td>
<td><input type="text" name="address" ></td>
</tr><tr></tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" name="submit1" value="insert">
		
		<button  ><a href="fetch.php">display</a></button>
		<input type="submit" name="submit5" value="search">
	</td>
</tr>
</table>
 
 <br>
<br>
<br>
<br>
<br>

 <?php 
 //insert
 if(isset($_POST["submit1"]))
 {
 	mysqli_query($con,"INSERT INTO `members`( `name`, `phone_no`, `address`) VALUES ('$_POST[name]','$_POST[phone_no]','$_POST[address]')");
 	echo"Record inserted successfully";
 }
 if(isset($_POST["submit2"]))
 {
 	mysqli_query($con,"delete from members where name='$_POST[name]' ");
 	mysqli_query($con,"delete from members where address='$_POST[address]' ");
 	echo"deleted successfully";
   
 }

if (isset ($_POST["submit5"]))
{
 $res=mysqli_query($con, "select * from members where name='$_POST[name]'");
 
echo"<table border=1 align='center'>";

echo"<tr>";

echo"<th>"; echo"name"; echo"</th>";

echo"<th>"; echo"phone_no"; echo"</th>";

echo"<th>"; echo"address"; echo"</th>"; 
echo "</tr>";	

while ($row=mysqli_fetch_array($res))
{
echo"<tr>";

echo"<td>"; echo $row["name"]; echo"</td>";

echo"<td>"; echo $row["phone_no"]; echo"</td>";

echo"<td>"; echo $row["address"]; echo"</td>";

echo"</tr>";
}
echo"</table>"; } 

 ?>
			</div>
			<br><br>
			<div class="inner_container">
				<button class="logout_button" action="index.php" type="submit">Log Out</button>	
			</div>
		</form>
	</div>
</body>
</html>