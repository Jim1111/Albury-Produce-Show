
<?php
	require_once('auth1.php');
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<?php
$nId = $_GET["nId"];
$nm = $_GET["nm"];
$mId = $_SESSION['SESS_MEMBER_ID1'];
?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">
<h1>Step 3</h1>

<h2>Please select all your categories, <?php echo $nm; ?></h2>
  <form name="cag" action="register6.php" method="post" onsubmit='return chkForm()'>
  <div class='subForm1'>
<?php
 include("inc/dbconnect.php");
   	  $sql = "SELECT * FROM categories ORDER BY catId ASC";

   	  //echo "$sql <br><br>";

   	  $result = mysql_query($sql) or die("Couldn't get file list");
		while($row = mysql_fetch_array($result))
		{
		echo "<label><span>" .$row['catName'];
		echo "</span><input name='reg[]'"; // array of catId
		echo " class='input_text' type='checkbox' id='checkBox' value='".$row['catId']."'></label>\n";	
		}
?>
<input type="hidden" name="namesId" value="<?php echo $nId; ?>">
<input type="hidden" name="firstName" value="<?php echo $nm; ?>">
<p><input name="Submit1" class="button" type="submit" value="submit" /></p>
</div>
</form>

<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>
<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


