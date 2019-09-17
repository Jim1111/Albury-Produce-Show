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
<h1>Competitors Admin</h1>
<br>

<?php
$id = $_SESSION['SESS_MEMBER_ID1'];

 include("inc/dbconnect.php");
 $dbQuery = "SELECT * FROM members WHERE members.membersId=$id";
 $result = mysql_query($dbQuery) or die("Couldn't get file list");
 $row = mysql_fetch_array($result);
 ?>
 
 <h1>Welcome back the <?php echo $row["surName"]; ?> family!</h1>
 	
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
	
	<hr>
	
	<p><b>Your family members are:</b></p>

<?php

	  $sql2 = "SELECT * FROM names WHERE membersId='$id'";

   	  $result1 = mysql_query($sql2) or die("Couldn't get file list");

   	  $app = @ mysql_num_rows($result1);

	  if ($app !=0)
   	  {
		while($row = mysql_fetch_array($result1))
		{
		echo "<p>First Name: <b><a href='register4.php?nId=";
		echo $row['namesId'];
		echo "&nm=";
		echo $row['firstName'];
		echo "'>";
		echo $row['firstName'];
		echo "</a></b></p>\n";
		
		}
   	  } // end if $app found !=0
	  
	  else
		{
		echo "<p>No Family Members yet.</p>";
		} 

mysql_close($con);

?>

<hr>

<p><b><a href="edit.php">Edit your Family Details</a></b></p>

<p><b><a href="register2.php">Add a Family Member Name</a></b></p>

<hr>

<p align='center'><b><a href="log_out1.php">Log Out</a></b></p>

 
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


