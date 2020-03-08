<?php	
	session_start();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body> 
	<center>
	<h1>
		Login Page 
	</h1>
	<fieldset>
	<legend>Login Admin</legend>
	<table>
	<form method="POST" action="logCheck.php">
		Username:     <input type="text" name="uname" value=""> <br>
		<br>
		Password: <input type="password" name="password" value=""><br>

		<br>
		<input type="submit" name="submit" value="submit">
				<td align="left">
				<a href="Adminreg.php">Register</a>
				
			</td>
		</tr>
	
		
		
	</form>
	</table>
	</fieldset>
	</center>
</body>
</html>
