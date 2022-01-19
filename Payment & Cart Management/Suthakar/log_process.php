<?php
	
	session_start();

	require 'config.php';

	$errormsg = array();

    //Validation error flag
	$errflag = false;

	$username = $_POST['username'];
	$password = $_POST['password'];

	//Input Validations
	if($username == '') {
		$errmsg[] = 'Please provide a username.';
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
		header("location: login.php");
		exit();
	}


	$sql="SELECT * FROM user WHERE username='$username' AND password='".md5($_POST['password'])."'";
	$result=mysqli_query($con,$sql);

    //Checking query (success)
	if($result) 
	{
		if(mysqli_num_rows($result) == 1) 
		{
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_USER_ID'] = $member['user_id'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_IS_ADMIN'] = $member['is_admin'];
			$_SESSION['SESS_IS_ARTIST'] = $member['is_artist'];
			session_write_close();
			header("location: ../MR/Homepage.php");
			exit();
		}
		else 
		{
			//Login failed
			$_SESSION['ERRMSG_ARR'] = array('Incorrect username or password. Please try again.');
			session_write_close();
			header("location: login.php");
			exit();
		}
	}
    else 
	{
		die("Query failed: ".mysqli_error($con));
	}

?>