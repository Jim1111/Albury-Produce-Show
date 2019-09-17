<?php
	require_once('auth.php');
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">

<?php

$cat = $_POST["catName"];
$ex = $_POST["ex"];

//echo $cat;
//echo $ex;

include("inc/dbconnect.php");

$sql = "INSERT INTO summer_show.categories (catId, catName, typeOfEx) VALUES (0, '$cat', '$ex')";

//echo "$sql <br><br>";			
	
mysql_query($sql) or die("Couldn't add file to database");

echo "<h1>Thank you, your category is added</h1>\n";

echo "<br>\n";

echo "<p><b>You have added " .$cat. " as the category name and " .$ex. " as the type of exhibit.</b></p>";

?>

<p><b>Thank you.</b></p>

<hr>
<p align='center'><b><a href="staffAdmin.php">Admin</a> | <a href="log_out.php">Log Out</a></b></p>
 
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


