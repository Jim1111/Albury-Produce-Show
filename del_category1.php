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
<h1>Delete Category</h1>

<?php

	 include("inc/dbconnect.php");
	 
	 $id = $_GET["Id"];
	 
	 $dbQuery = "DELETE FROM categories WHERE catId=$id";

//echo "$dbQuery <br><br>";

mysql_query($dbQuery) or die("Couldn't add file to database");

echo "<p><b>The item was deleted.</b></p>"; 

//////////////////////////////////////////////////
///// New categories ///////////////////////////

?>

<p><b>The Categories list is now:</b></p>

<?php

 $sql = "SELECT * FROM `categories` WHERE `typeOfEx` = 'Flowers'";
	  $sql1 = "SELECT * FROM `categories` WHERE `typeOfEx` = 'Vegetables'";
	  $sql2 = "SELECT * FROM `categories` WHERE `typeOfEx` = 'Fruit'";

   	  //echo "$sql <br><br>";
	  
	  echo "<h2>Flowers</h2>";

   	  $result = mysql_query($sql) or die("Couldn't get file list");

   	  $app = @ mysql_num_rows($result);

	  if ($app !=0)
   	  {
		while($row = mysql_fetch_array($result))
		{
		echo '<p>';
        echo $row['catName'];
		echo "</p>\n";
		}
   	  } // end if $app found !=0
	  
	  else
		{
		echo "<p>No results found.</p>";
		} 
		
		 echo "<h2>Vegetables</h2>";

   	  $result1 = mysql_query($sql1) or die("Couldn't get file list");

   	  $app = @ mysql_num_rows($result1);

	  if ($app !=0)
   	  {
		while($row = mysql_fetch_array($result1))
		{
		echo '<p>';
        echo $row['catName'];
		echo "</p>\n";
		}
   	  } // end if $app found !=0
	  
	  else
		{
		echo "<p>No results found.</p>";
		} 
		
		 echo "<h2>Fruit</h2>";

   	  $result2 = mysql_query($sql2) or die("Couldn't get file list");

   	  $app = @ mysql_num_rows($result2);

	  if ($app !=0)
   	  {
		while($row = mysql_fetch_array($result2))
		{
		echo '<p>';
        echo $row['catName'];
		echo "</p>\n";
		}
   	  } // end if $app found !=0
	  
	  else
		{
		echo "<p>No results found.</p>";
		} 
		
	 mysql_close($con);

	   ?>
	   
<br>
<hr>
<p align='center'><b><a href="staffAdmin.php">Admin</a> | <a href="log_out.php">Log Out</a></b></p>
 
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


