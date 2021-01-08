<?php
	session_start();
	require_once('config.php');
	//phpinfo();
	$s=mysqli_query($con,"select * from members");
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center><h2>Member Information</h2></center>
<table border=1 align="center">
	<tr>
		<th> NAME</th>
		<th>PHONE_NO</th>
		<th>ADDRESS</th>
		
		<th>UPDATE</th>
		<th>DELETE</th>
	</tr>

	<?php 

while ($r=mysqli_fetch_array($s))	 
{
	?>


<tr> 
	<td><?php echo $r['name']; ?></td>
	<td><?php echo $r['phone_no']; ?></td>
	<td><?php echo $r['address']; ?></td>
	<td><a href="update.php?i=<?php echo $r['id'] ?>  & n=<?php echo $r['name'] ?> & p=<?php echo $r['phone_no'] ?> & a=<?php echo $r['address'] ?>">update</a></td>
	<td><a href="del.php?i=<?php echo $r['id']; ?>">delete</a></td>
</tr>
<?php }  ?> 
</table><center>
<button class="logout_button" action="index.php"  type="submit">Log Out</button>	
<button><a href="homepage.php">back</a></button>	</center>
