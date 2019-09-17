<?php
	require_once('auth1.php');
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<?php
$membersId = $_SESSION['SESS_MEMBER_ID1'];
?>
 
<!-- start of main -->
<div class="main">
<h1>Step 2</h1>
<br>

<form name="addNames" action="register3.php" method="post" onsubmit='return chkForm1()'>
	<div class="subForm">
	<label><span>First name:</span> <input name="firstName" type="text" class="input_text" id='firstName' /></label>
	<p><input type="submit" class="button" value="Step 3 >>"></p>
	</div>
</form>

<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>
<!-- end of main -->
</div>

<!-- end of container -->
	
</div>

<?php include 'footer.php'; ?>


