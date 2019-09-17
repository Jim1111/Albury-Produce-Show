
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<?php
$name = $_GET["n"];
?>
   
<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

  <h1>Edit your details, <?php echo $name; ?></h1>
  
  <br>
  
<!-- start of main -->
<div class="main">

<p align="center"><b>You have Entered the classes for:</b></p>

 <?php $id=$_GET["m"];
 
  include("inc/dbconnect.php");

$dbs = "SELECT names.namesId AS n, names.firstName AS fn, events.namesId, categories.* FROM categories INNER JOIN (names INNER JOIN events ON names.namesId = events.namesId) ON categories.catId = events.catId WHERE (((names.namesId)=$id) AND ((events.namesId)=$id))";

$res = mysql_query($dbs) or die("Couldn't get file list");
 $app = @ mysql_num_rows($res);
 
 if ($app !=0)
   	  {
		while($row = mysql_fetch_array($res))
		{	
	
		echo '<p align="center"><b>';
        echo $row['catName'];
		echo "</b> <input type='checkbox' checked='yes' name='";
		echo $row['catName'];
		echo "' value='";
		echo $row['catName'];
		echo "'></p>\n";	

		}
   } // end if $app found !=0
	  
	  else
		{
		echo "<p align='center'><b>No choices yet</b></p>";
		}
		
//echo $dbs;
 
?>

<?php mysql_close($con); ?>

<!-- end of main -->
</div>

<!-- end of container -->
	
</div>

<?php include 'footer.php'; ?>


