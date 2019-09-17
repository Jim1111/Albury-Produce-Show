<?php
	//Start session
	session_start();

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID1']) || (trim($_SESSION['SESS_MEMBER_ID1']) == '')) {
		header("location: comlogin");
		exit();
	}

?>

