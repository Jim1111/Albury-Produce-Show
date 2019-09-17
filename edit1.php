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
<h1>Thank you for editing your details</h1>

 <?php
  $id = $_SESSION['SESS_MEMBER_ID1'];
  $surName = $_POST["surName"];
  $add1 = $_POST["address1"];
  $add2 = $_POST["address2"];
  $add3 = $_POST["address3"];
  $town = $_POST["town"];
  $cou = $_POST["county"];
  $postCode = $_POST["postCode"];
  $tele = $_POST["phone"];
  $email = $_POST["email"];
  $userName = $_POST["userName"];
  
  include("inc/dbconnect.php");
  
  $dbQuery = "UPDATE members SET surName='$surName', firstAddress='$add1', secAddress='$add2', thirdAddress='$add3', town='$town', county='$cou', postCode='$postCode', phoneNum='$tele', Email='$email', userName='$userName' WHERE membersId=$id";

//echo "<p>$dbQuery <p>";

mysql_query($dbQuery) or die("Couldn't add file to database");
 
?>

<p><b>You changed the details to:</b></p>

<?php

$dbQuery = "SELECT * FROM members WHERE members.membersId=$id";
 $result = mysql_query($dbQuery) or die("Couldn't get file list");
 $row = mysql_fetch_array($result);
 ?>

	<p><b>Surname:</b> <?php echo $row["surName"]; ?></p>
	<p><b>House name or Number:</b> <?php echo $row["firstAddress"]; ?></p>
	<p><b>Street Name:</b> <?php echo $row["secAddress"]; ?></p>
	<p><b>Address 3:</b> <?php echo $row["thirdAddress"]; ?></p>
	<p><b>Town:</b> <?php echo $row["town"]; ?></p>
	<p><b>County:</b> <?php echo $row["county"]; ?></p>
	<p><b>Post Code:</b> <?php echo $row["postCode"]; ?></p>
	<p><b>Telephone:</b> <?php echo $row["phoneNum"]; ?></p>
	<p><b>Email:</b> <?php echo $row["Email"]; ?></p>
	<p><b>User Name:</b> <?php echo $row["userName"]; ?></p>

<?php mysql_close($con); ?>

<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>

<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


