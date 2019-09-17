<?php
	//Start session
	session_start();

	//Include database connection details
	require_once('config.php');

	//Array to store validation errors
	$errmsg_arr = array();

	//Validation error flag
	$errflag = false;

	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}

	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}

$login = $_POST["userName"];

$login = strip_tags($login);

//echo $login;

$pass = $_POST["passWord"];

$pass = strip_tags($pass);

	//Create query
	$qry="SELECT * FROM summer_show.staff WHERE userName='$login' AND passWord='".md5($pass)."'";

//echo $qry;

	$result=mysql_query($qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			//session_id();


			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			//$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
			//$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
			session_write_close();
			header("location: staffAdmin");
			exit();
		}else {
			//Login failed
			header("location: incorrect");
			exit();
		}
	}else {
		die("Query failed");
	}
?>