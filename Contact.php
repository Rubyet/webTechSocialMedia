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
				<td valign="top"  width="400"> 
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
					<form>
						<fieldset>
							<legend>Search</legend>
							<table  style="width:100%">
								<tr>
									<td>Filter </td>
									<td>:</td>
									<td>
										<select>
											<option value="All">All</option>
											<option value="Moderator">Moderator</option>
											<option value="User">User</option>
											<option value="Promoter">Promoter</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Search by Name </td>
									<td>:</td>
									<td>
										<input type="text" name="searchTxt">
										<input type="button" name="search" value="Search">
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									
								</tr>
							</table>
							<table  style="width:100%">
						<tr>
							<th>UserID</th>
							<th>Name</th>
							<th>Type</th> 
							<th>Joined Date</th>
						</tr>
						<tr>
							<td>550</td>
							<td>Jill</td>
							<td>User</td>
							<td>5/6/2018</td>
						</tr>
						<tr>
							<td>652</td>
							<td>Eve</td>
							<td>Moderator</td>
							<td>5/6/2018</td>
						</tr>
						<tr>
							<td>665</td>
							<td>John</td>
							<td>User</td>
							<td>5/6/2018</td>
						</tr>
					</table>
							
						</fieldset>
					</form>
					<br><br><br>
					<form>
						<fieldset>
							<legend>Compose</legend>
							<table  style="width:100%">
								<tr>
									<td>To </td>
									<td>:</td>
									<td>
										Name will be here after selection
									</td>
								</tr>
								<tr>
									<td colspan="3"><input type="text" name="Messege" value="Messege" size="100"></td>
									
								</tr>
								<tr>
									<td><input type="button" name="Attachment" value="Attachment"><input type="button" name="Reset" value="Reset"></td>
									<td colspan="2"><input type="button" name="Send" value="Send"></td>
									
								</tr>
							</table>
						</fieldset>	
					</form>
					
					<br><br><br>
					<form>
						<fieldset>
							<legend>Index</legend>
							<table  border="4"style="width:100%">
								<tr>
									<td>Massage 1 <br> asdgkasdkhakjsdhajlsdlasd</td>
								</tr>
								<tr>
									<td>Massage 2 <br> asdgkasdkhakjsdhajlsdlasd</td>
								</tr>
								<tr>
									<td>Massage 3 <br> asdgkasdkhakjsdhajlsdlasd</td>
								</tr>
							</table>
						</fieldset>	
					</form>
				</td>
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




