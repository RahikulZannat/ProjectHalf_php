<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Projects</title>
</head>
<body>
	<center>
	<h1>Manage Projects</h1>


	<form>
	<fieldset>
		<legend>Manage Projects</legend>
	<table>
		<h4>Project Theme List</h4>
		<tr>
			<td><ol>
				<li>Modern style Wedding</li>
				<a href="https://www.google.com/">Edit Theme</a>
				<li>Boomarang style Wedding</li>
				<a href="https://www.google.com/">Edit Theme</a>
				<li>Vintage style Wedding</li>
				<a href="https://www.google.com/">Edit Theme</a>
				
			</ol></td>
		</tr>
		
			
			<td align="left">
				<a href="Admininterface.php">Go Back...</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>