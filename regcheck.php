<?php
	session_start();

	if(isset($_REQUEST['submit']))
	{

		$name = trim($_REQUEST['uname']);
		$pass = trim($_REQUEST['pass']);
		$repass = trim($_REQUEST['repass']);
		$email = trim($_REQUEST['email']);
		
		if($name == ""){
			echo "invalid or empty name..<br>";
		}else if($pass == ""){
			echo "invalid or empty password..";
		}else{
			
			if($pass == $repass){

				$data = $name."|".$pass."|".$email;

				$myfile = fopen('admin.txt', 'w');
				fwrite($myfile, $data);
				fclose($myfile);

				header('location: LoginAdmin.php');
			}else{
				echo "password and repassword error!";
			}			
		}

	}else{
		header('location: RegAdmin.php');
	}

?>
