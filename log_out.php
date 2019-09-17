
<?php
	//Start session
	session_start();

	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	//unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Log out</h1>

<p align="center"><b>You have successfully logged out.</b></p>
 
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


