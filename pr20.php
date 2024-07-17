<?php
		$con=mysql_connect("localhost","root",""); 	//create connection object  for MySQL
		if(!$con)
		{
			echo "<script> alert('Connection Failed') </script>";
			die('Connection Failed:' . mysql_connect_error());
		}
		$db = mysql_select_db("bank", $con);		 //select the MySQL database 
		//echo "<script> alert('Database Connected!')</script>"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bank Application</title>
</head>

<body>
<center>
	<h1>Welcome to Raosoni Bank</h1>
	<marquee>Web Application for Safe Banking</marquee>
	<hr>

	<form method="POST" id="myform" name="bankform">
	<table>
		<tr>
			<td>Enter Customer Id(Account Number)</td>
			<td><input type="text" value="" name="cid"></td>
		</tr>

		<tr>
			<td>Enter Customer Name</td><td>
			<input type="text" value="" name="cname"></td>
		</tr>
		
		<tr>
			<td>Enter Customer Address </td><td>
			<input type="text" value="" name="caddr"></td>
		</tr>
		<tr>
			<td>Enter Amount </td><td>
			<input type="text" value="" name="cbal"></td>
		</tr>

		<tr>
			<td colspan="2" align="center">
				<input type="button" value="Reset" name="Reset" onclick="resetForm()";> 
				<input type="submit" value="Search" name="Search">
				<input type="submit" value="Delete" name="Delete">
				
			</td>
		</tr>
	</table>
</form>
</center>

<script type="text/javascript">
	function resetForm()
	{
		document.getElementById("myform").reset();
	}
</script>	
</body>
</html>

<?php


if(isset($_POST['Search']))
{
	echo "<h1> Current Records </h1>"."<br><br>";
	$result = mysql_query("select * from cust");
	while($res = mysql_fetch_array($result))
	{
		$d = $res['cid'];
		$m = $res['cname'];
		$a = $res['addr'];
		$b = $res['bal'];
		echo $d." ".$m." ".$a." ".$b."<br>";
	}
	echo "<script> alert('Record Showed successfully!')</script>";
}

if(isset($_POST['Delete']))
{
	$r = $_POST['cid'];
	$result = mysql_query("DELETE FROM cust WHERE cid='$r'");
	echo "<script> alert('Record Deleted successfully!')</script>";
}



mysql_close($con);
?>
