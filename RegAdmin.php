<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

		<h1>Registration Page</h1>

	<form method="post" action="regcheck.php">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Username </td>
					<td>:</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Email </td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td>:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>Re-Password </td>
					<td>:</td>
					<td><input type="password" name="repass"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>