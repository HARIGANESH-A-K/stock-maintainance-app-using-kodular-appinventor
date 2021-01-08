<?php
	session_start();
	require_once('dbconfig/config.php');
	require_once('homepage.php')
	 $a=echo $r['name'];

	$name=$_GET['$a'];
	$phone_no="";
	$address="";
	//phpinfo();
	$s=mysql_query("select * from members where name='$name'")
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<head><title>update operation </title></head>

<?php while($r=mysql_fetch_array($s))
{
	?>
<body>

 <form name="form1" action="" method="post">

<table>
<tr>
<td>Enter name</td>
<td><input type="text" value="<?php echo $r['phone_no']; ?>"</td>
</tr>

<tr>
<td>Enter phone no</td>
<td><input type="tel" name="phone_no"></td>
</tr>

<tr>
<td>Enter address</td>
<td><input type="text" name="address"></td>
</tr>

</table>
</form>
</body>
</html> 
 
 

