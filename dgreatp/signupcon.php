<?php
	require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($conn,$username);
		$email = stripslashes($email);
		$email = mysqli_real_escape_string($conn,$email);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($conn,$password);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `user` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3> </div>";
			header("location: php/default.php");
        }
    }else{
		
	}
?>