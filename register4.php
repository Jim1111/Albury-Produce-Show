
<?php
	require_once('auth1.php'); // the login system creates a session into which the membersId is put
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<?php
$mId = $_SESSION['SESS_MEMBER_ID1'];
$nm = $_GET["nm"];
$nId = $_GET["nId"];
?>
   
<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Confirmation of Entrance</h1>
<br>
<h2><?php echo $nm; ?>, you are entering the:</h2>

<?php

	  include("inc/dbconnect.php");	  
	  
	  $sql2 = "SELECT categories.catName, events.catId FROM categories INNER JOIN events ON categories.catId = events.catId WHERE (((events.namesId)='$nId'))";

   	  $result1 = mysql_query($sql2) or die("Couldn't get file list");

   	  $app = @ mysql_num_rows($result1);

	  if ($app !=0)
   	  {
		while($row = mysql_fetch_array($result1))
		{
		echo "<p><b>".$row["catName"]." Class</b></p>\n";	
		}
	  echo "<p>Good Luck, the Show is on the 25 July 2015!</p>\n";
	   } // end if $app found !=0
	   
	  else
		{
		echo "<p><b>No categories entered yet!</b></p>\n";
		echo "<p><a href='register5.php?nId=";
		echo "$nId";
		echo "&nm=";
		echo "$nm";
		echo "'>";
		echo "Click here";
		echo "</a> to enter.</p>\n";
		} 
		
		mysql_close($con);
?>
<br>
<script type="text/javascript">
    function confirm_delete() {
        return confirm("Are you sure you wish to delete that?");
    }
</script>
<?php
echo "<p align='center'><b><a href='Delete1.php?nId=" .$nId."' onclick='return confirm_delete();'>Delete ".$nm. "</a></b></p>\n";
?>

<br>
<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


