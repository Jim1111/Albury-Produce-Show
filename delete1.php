<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<?php
$nId = $_GET["nId"];
?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Deleted</h1>
<br>

<?php
	  include("inc/dbconnect.php");	  
	  
	  $sql2 = "DELETE events, names FROM names INNER JOIN events ON names.namesId = events.namesId ";
	  $sql2 .= "WHERE (((names.namesId)='$nId') AND ((events.namesId)='$nId'))";

   	  $result1 = mysql_query($sql2) or die("Couldn't  delete.");
	  
	  echo "<p><b>Your entry has been deleted, thank you for letting us know.</b></p>";
		
	  mysql_close($con);
?>
<br>

<br>
<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


