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
			<tr height="700" width="400">
				<td valign="top"> 
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
				<td  valign="top">
					<br><br><br>
					Current Income : $....Tk
					<br><br><br>
					<form>
						<fieldset>
							<legend>Search</legend>
							<table>
								<tr>
									<td>Search by Name </td>
									<td>:</td>
									<td><input type="text" name="uname"><input type="button" name="search" value="Search"></td>
								</tr>
								
							</table>
						</fieldset>
					</form>
					<br><br><br>
					Promoter Information:
					<input type="button" name="current" value="Current">
					<input type="button" name="history" value="History">
					<br><br>
					<table  style="width:100%">
						<tr>
							<th>UserID</th>
							<th>Name</th>
							<th>Type</th> 
							<th>Joined Date</th>
							<th>Ammount</th>
							<th>Paid status</th>
							<th>Paid Time</th>
						</tr>
						<tr>
							<td>10001</td>
							<td>Jill</td>
							<td>Promoter</td>
							<td>5/6/2018</td>
							<td>1000</td>
							<td>paid</td>
							<td>6/6/2018 2:12:30pm</td>
						</tr>
							<tr>
							<td>10005</td>
							<td>Eve</td>
							<td>Promoter</td>
							<td>5/6/2018</td>
							<td>1500</td>
							<td>paid</td>
							<td>5/6/2018 1:50:10pm</td>
						</tr>
						<tr>
							<td>10009</td>
							<td>John</td>
							<td>Promoter</td>
							<td>5/6/2018</td>
							<td>4500</td>
							<td>Pending</td>
							<td>9/6/2018 11:25:30pm</td>
						</tr>
					</table>
					<br><br>
					<table  style="width:100%">
					
						<tr>
							<td>New incoming Advertize request will be </td>
							<td><img src="pie.png" height="250" width="350"></td>
							
						</tr>
						
					</table>
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




