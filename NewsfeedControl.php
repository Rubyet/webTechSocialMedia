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
		<tr>
			<tr >
				<td colspan="2"><h2 align="center"><img src="logo.png" height="50" width="50">Social Media(Name Dei nai)</h2></td>
			</tr>
			<tr>
				<td>
					<a href="HomeAdmin.php">Home</a>  
					<a href=#>Notification</a>
					<a href="Control.php">Control</a>
				</td>
				<td>Welcome <?php echo $_SESSION['name']?> <a href="logoutAdmin.php" >logout</a></td>
			</tr>
			<tr height="700">
				<td valign="top" width="400"> 
					<h4>Features</h4>
					<ul>
					  <li><a href="Control.php">Users</a></li>
					  <li><a href="FinancialControl.php">Financial</a></li>
					  <li><a href="NewsfeedControl.php">Newsfeed</a></li>
					  <li><a href="Feedback.php">Feedback & Review</a></li>
					  <li><a href="Contact.php">Contact</a></li>
					  <li><a href="Applications.php">Applications</a></li>
					</ul>
				</td>
				<td  valign="top"></td>
					
			</tr>
			<tr>
				<td colspan="2" align="center"> Copyright  other links <a href="www.google.com">Google</a> </td>
			</tr>
			
		</table>
			
	</body>
	</html>

<?php }else{
	header("location: LoginAdmin.php");
} ?>




