<?php
	require_once('auth.php'); // the login system creates a session into which the membersId is put
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Competitors in each category</h1>

<br>

<?php
include("inc/dbconnect.php");
$sql = "SELECT * FROM categories";
$result = mysql_query($sql) or die("Couldn't get file list");
mysql_num_rows($result);
?>

<form name="printOut" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="subForm">
	<label><span>Categories Name</span><select name="catId" class="input_text">
<?php

		while($row = mysql_fetch_array($result))
		{
		echo "<option value='".$row['catId']."'>".$row['catName']."</option>\n";
		}
?>
</select>
	</label>
	<p><input name="Submit" class="button" type="submit" value="submit" /></p>	
</div>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$catId = $_POST["catId"];
echo "<hr>";
echo "<br>";
$sql1 = "SELECT categories.catName, categories.catId, events.catId, members.membersId, names.namesId, names.firstName, members.surName, members.email
FROM (members INNER JOIN names ON members.membersId = names.membersId) INNER JOIN (categories INNER JOIN events ON categories.catId = events.catId) ON names.namesId = events.namesId
WHERE (((categories.catId)=".$catId.") AND ((events.catId)=".$catId."))";

	  $result1 = mysql_query($sql1) or die("Couldn't get file list");
	  
	  $Cat = mysql_fetch_row($result1);
	  echo "<h1>".$Cat[0]."</h1>";
	  
	  $result2 = mysql_query($sql1) or die("Couldn't get file list");

   	  $app = @ mysql_num_rows($result2); 
	  
	   if ($app !=0)
   	  {
	 
		while($row = mysql_fetch_array($result2))
		{
		echo "<p><b>".$row['firstName']." ".$row['surName'].", <a href='mailto:".$row['email']."'>".$row['email']."</a></b></p>\n";
		}
		echo "<br><br><p align='center'><b><a href='excel.php?id=";
		echo $catId;
		echo "'>Print out as a Excel Spreadsheet</a></b></p>";
   	  } // end if $app found !=0
	  else
		{
		echo "<p><b>Nobody has entered the class.</b><br><br></p>";
		} 
} // End of if REQUEST_METHOD
?>

<hr>

<p align='center'><b><a href="staffAdmin.php">Admin</a> | <a href="log_out.php">Log Out</a></b></p>

<?php mysql_close($con); ?>
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


