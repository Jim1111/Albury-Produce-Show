<?php
	require_once('auth1.php');
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<?php
$firstName = $_POST["firstName"];
$membersId = $_SESSION['SESS_MEMBER_ID1'];
$namesId = $_POST["namesId"];

?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Step 3 - Confirmation</h1>

<br>

<h2>Thank you, <?php echo $firstName; ?></h2>

<?php
include("inc/dbconnect.php");
$reg = $_POST["reg"]; // Array of categories 

if (count($reg) > 0) {
foreach ($reg as $cId) { // split up the categories

$dbQuery = "INSERT INTO summer_show.events(EventsId, year, namesId, catId) VALUES (0, 0, '$namesId', '$cId')";
//echo "$dbQuery <br><br>";	
mysql_query($dbQuery) or die("Couldn't add file to database");
}
} 

echo "<p><b>The produce categories that you have chosen are:</b></p>\n";
	  
	  $sql2 = "SELECT categories.catName FROM categories INNER JOIN events ON categories.catId = events.catId WHERE (((events.namesId)='$namesId'))";

   	  $result1 = mysql_query($sql2) or die("Couldn't get file list");

   	  $app = @ mysql_num_rows($result1);

		while($row = mysql_fetch_array($result1))
		{
		echo "<p><b>".$row["catName"]." Class</b></p>";	
		}	  

mysql_close($con);
?>

<br>
<p align="center"><b>Good Luck, the Show is on the 25 July 2015!</b><p>

<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>
<!-- end of main -->
</div>

<!-- end of container -->
	
</div>

<?php include 'footer.php'; ?>


