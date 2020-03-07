<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<center>
	<h1>Edit Employee Profile</h1>


	<form>
	<fieldset>
		<legend>Edit Profile</legend>
	<table>
		<tr>
			<td>User ID: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		
		<tr>
			<td>New User ID:</td>
		</tr>
		<tr>
			<td> <input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>User Name: </td>
		</tr>
		<tr>	
			<td><input type="name" name="" value=""/></td>
		</tr>
		
		<tr>
			<td>New User Name:</td>
		</tr>
		<tr>
			<td> <input type="name" name="" value=""/></td>
		</tr>
		
		
			<tr>
			
			<td align="left">
				<input type="button" onclick="location.href='Admininterface.php';" value="Change" />
				
				
			</td>
		</tr>
		<tr>
			
			<td align="left">
				
				<a href="Admininterface.php">Go Back..</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>