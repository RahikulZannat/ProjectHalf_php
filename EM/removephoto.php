<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove Photographer</title>
</head>
<body>
	<center>
	<h1>Remove Photographer</h1>


	<form>
	<fieldset>
		<legend>Remove</legend>
	<table>
		<tr>
			<td>Remove Photographer ID: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
				<tr>
			
			<td align="left">
				<input type="button" onclick="location.href='Admininterface.php';" value="Remove" />
				
				
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