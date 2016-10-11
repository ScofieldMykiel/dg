<?php
error_reporting(0);
	if(!isset($_SESSION)) 
    { 
        session_start();
		
    } 
$var_value = $_SESSION['varname']; 

	include("config.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["email"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
			echo $error;
		}else
		{
			// Define $username and $password
			$username=$_POST['email'];
			$password=$_POST['password'];

			// To protect from MySQL injection
			//$username = stripslashes($username);
			//$password = stripslashes($password);
			//$username = mysqli_real_escape_string($conn, $username);
			//$password = mysqli_real_escape_string($conn, $password);
			//$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT * FROM user WHERE email='$username' and password='$password'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{
				
				$_SESSION['email'] = $username; // Initializing Session
				
					if (!isset($var_value)){
						header("location: php/default.php");
						}else{
				header("location: $var_value.php"); // Redirecting To Other Page
				
					
				}
			}else
			{
				//header("location: signup.php");
				//echo "<script type='text/javascript'>alert('Invalid username or password!')
				$error = "Incorrect username or password.";
				echo $error;
				
			}

		}
	}

?>