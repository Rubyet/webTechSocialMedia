<?php
	session_start();
	if(isset($_SESSION['name'])){ 
	$name=$_SESSION['name'];
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Admin Control</title>
	</head>
	<body>

		<table border="1" style="width:100%">
		<tr>>
			<tr >
				<td colspan="3"><h2 text-align: center>Social Media(Name Dei nai)</h2></td>
			</tr>
			<tr>
				<td><a href="AdminHome.php">Home</a>  <a href="NotificationAdmin.php">Notification</a></td>
				<td></td>
				<td>"Welcome <?php echo $_SESSION['name']?></td>
			</tr>
			<tr>
				<td><img src="AdminPic.png" height="100" width="100"></td>
				<td colspan="3"><a href="logoutAdmin.php">logout</a></td>
			</tr>
			
		</table>
			
	</body>
	</html>

<?php }else{
	header("location: LoginAdmin.php");
} ?>




