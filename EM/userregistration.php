<?php	
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<center>
	<h1>User Registration</h1>


	<form>
	<fieldset>
		<legend>Registration</legend>
	<table border="2">
		<tr>
			<td>Username:</td>
			<td><input type="text" name="" value="" size="" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td> <input type="text" name="email" > </td>
		</tr>
		<tr>
			<td>ID: </td>
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="" value=""/></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		</tr>
		<tr>
			<td>Department:</td>
			<td>
				<input type="checkbox" name="">CS
				<input type="checkbox" name="">CSE
				<input type="checkbox" name="">CSSE
			</td>
		</tr>
		<tr>
			<td>BG:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td> Msg: </td>
			<td>
				<textarea> </textarea>
			</td>
		</tr>
		
			<td colspan="2">
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
				<a href="Admininterface.php">Go Back..</a>
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>