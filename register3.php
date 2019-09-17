<?php
	require_once('auth1.php');
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
   
<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Step 2 - confirmation</h1>
<br>
<?php

$membersId = $_SESSION['SESS_MEMBER_ID1'];
$firstName = strip_tags($_POST["firstName"]);

include("inc/dbconnect.php");

$sql = "INSERT INTO summer_show.names (namesId, membersId, firstName) VALUES (0, '$membersId', '$firstName')";
//echo "$sql <br><br>";		

mysql_query($sql) or die("Couldn't add file to database");

echo "<p><b>Thank you " .$firstName. " for registering!</b></p>";
mysql_close($con);

?>

<p>To go and select your produce categories <a href="com_admin.php">click here</a>.</p>

<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>
<!-- end of main -->
</div>

<!-- end of container -->
	
</div>

<?php include 'footer.php'; ?>


