<?php
	
	session_start();

	require 'config.php';

	$errmsg = array();

    //Validation error flag
	$errflag = false;

	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	//Input Validations
	if($user_name == '') {
		$errmsg[] = 'Please provide an e_mail.';
		$errflag = true;
	}
	if($password == '') {
		$errmsg[] = 'Please enter the password.';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg;
		session_write_close();
		header("location: sign_in.php");
		exit();
	}


	$sql="SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
	$result=mysqli_query($con,$sql);

    //Checking query (success)
	if($result) 
	{
		if(mysqli_num_rows($result) == 1) 
		{
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			// $_SESSION['SESS_USER_ID'] = $member['user_id'];
			$_SESSION['SESS_USERNAME'] = $member['user_name'];
			// $_SESSION['SESS_IS_ADMIN'] = $member['is_admin'];
			// $_SESSION['SESS_IS_ARTIST'] = $member['is_artist'];
			session_write_close();
			header("Location: ../praveen/IWT/home page/index.html");
			exit();
		}
		else 
		{
			//Login failed
			$_SESSION['ERRMSG_ARR'] = array('Incorrect username or password. Please try again.');
			session_write_close();
			header("location: sign_in.php?password=error");
			exit();
		}
	}
    else 
	{
		die("Query failed: ".mysqli_error($con));
	}

?>