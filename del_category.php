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
<script type="text/javascript">
    function confirm_delete() {
        return confirm("Are you sure you wish to delete that catergory?");
    }
</script>
<br>

<?php

	 include("inc/dbconnect.php");
	 
	 $sql = "SELECT * FROM `categories`";

	 $result = mysql_query($sql) or die("Couldn't get file list");

	       while($row = mysql_fetch_array($result))
	       {
	         echo "<p><a href='del_category1.php?Id=";
	         echo $row["catId"];
	         echo "' onclick='return confirm_delete();'>";
	 	     echo $row["catName"];
   	         echo "</a>";
             echo "</p>\n";
	       }
		   
		   echo $row;

	       mysql_close($con);
	   ?>

<hr>
<p align='center'><b><a href="staffAdmin.php">Admin</a> | <a href="log_out.php">Log Out</a></b></p>
 
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


