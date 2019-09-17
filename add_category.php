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
<h1>Add Categories</h1>

<?php
   	  include("inc/dbconnect.php");

   	  //$sql = "SELECT * FROM categories ORDER BY catId ASC";
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
		
		<hr>
		
		<p><b>Enter your new category and the type of exhibit</b></p>
		
<form action="add_category1.php" method="post">
	<div class="subForm2">
	<label><span>Category Name:</span> <input name="catName" type="text" class="input_text" id='catName' /></label>
	<label><span>Type of Exhibit:</span> <select name="ex" class="input_text" id='type' />
	<option>Flowers</option>
	<option>Fruit</option>
	<option>Vegetables</option>
	</select>
	</label>	
	<p><input type="submit" class="button" value="Submit"></p>
	</div>
</form>

<hr>
<p align='center'><b><a href="staffAdmin.php">Admin</a> | <a href="log_out.php">Log Out</a></b></p>
 
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


