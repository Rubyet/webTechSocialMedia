<?php
	session_start();

	if(isset($_REQUEST['submit']))
	{

		$name = trim($_REQUEST['uname']);
		$pass = trim($_REQUEST['pass']);
		
		if($name == ""){
			echo "invalid or empty name..<br>";
		}else if($pass == ""){
			echo "invalid or empty password..";
		}else{
			
			$myfile = fopen('admin.txt', 'r');
			$data = fread($myfile, filesize('admin.txt'));
			$admin = explode('|', $data);

			if(trim($admin[0]) == $name && trim($admin[1]) == $pass){

				$_SESSION['name']=$name;
				header('location: HomeAdmin.php');
			}else{
				echo "invalid username/password.";
			}
		}

	}else{
		header('location: LoginAdmin.php');
	}
?>
