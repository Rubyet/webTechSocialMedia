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

		<table border="3" style="width:100%">
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
			
			<tr>
				<td><img src="AdminPic.png" height="100" width="100"></td>
				<td >
					<h5>Information</h5><br>
					<input type="button" name="Edit" value="Edit">
				
				</td>
			</tr>
			
			<tr height="700">
				<td valign="top"  width="400"> 
					<h4>Recent Massages</h4>
					<table border="1" style="width:100%">
						<tr>
							<td>Massage 1</td>
						</tr>
						<tr>
							<td>Massage 2</td>
						</tr>
						<tr>
							<td>Massage 3</td>
						</tr>
					</table>
				</td>
				<td  valign="top">
					<h4>Latest News</h4>
					<p>News will be here..... with text and img both divided <br>
						<img src="sample1.jpg" height="400" width="600">
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2"> Copyright  other links <a href="www.google.com">Google</a> </td>
			</tr>
			
		</table>
			
	</body>
	</html>

<?php }else{
	header("location: LoginAdmin.php");
} ?>




