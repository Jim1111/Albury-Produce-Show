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

$login = strip_tags($login); // xss vulnerability

$login = mysql_real_escape_string($login); // SQL injection preventation

////////////////////////////////////////////////////////////

$pass = $_POST["passWord"];

$pass = strip_tags($pass); // xss vulnerability

$pass = mysql_real_escape_string($pass); // SQL injection preventation
	
	$qry="SELECT * FROM summer_show.members WHERE userName='$login' AND passWord='".md5($pass)."'";
	

//echo $qry;

	$result=mysql_query($qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			//session_id();


			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID1'] = $member['membersId'];
			//$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
			//$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
			session_write_close();
			header("location: com_admin.php");
			exit();
		}else {
			//Login failed
			header("location: incorrect.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>