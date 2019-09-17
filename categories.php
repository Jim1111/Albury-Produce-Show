<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Categories</h1>
<br>

<?php
include("inc/dbconnect.php");
$sql = "SELECT * FROM categories";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["catName"]."</td><td>".$row["catName"]." ".$row["catName"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$con->close();
?> 

   	 <!-- 


	  
	  $sql = mysqli_query($con,"SELECT * FROM categories WHERE typeOfEx = Flowers");
	  $sql1 = mysqli_query($con,"SELECT * FROM categories WHERE typeOfEx = Vegetables");
	  $sql2 = mysqli_query($con,"SELECT * FROM categories WHERE typeOfEx = Fruit");
	  //$sql = "SELECT * FROM `categories` WHERE `typeOfEx` = 'Flowers'";

	  
   	  //echo "$sql <br><br>";
	  
	  echo "<h2>Flowers</h2>";

   	  $result = mysql_query($sql) or die("Couldn't get file list");

   	  //$app = @ mysql_num_rows($result); 
	  
	  if ($app !=0) // if there are results, print here

   	  {
		while($row = mysql_fetch_array($result))
		{
		echo '<p>';
        echo $row['catName'];
		echo "</p>\n";
		}
   	  } 
	  
	  else // else there's no results (!=0) print:
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
		
	 //mysql_close($con);
	 mysqli_close($con);
	
?>
-->
<hr>
<p><b><a href="register.php">Register Now!</a></b></p>
 
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


