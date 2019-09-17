<?php
	require_once('auth1.php');
?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
   
<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">

 <?php
 $id = $_SESSION['SESS_MEMBER_ID1'];
 include("inc/dbconnect.php");
 $dbQuery = "SELECT * FROM members WHERE members.membersId=$id";
 $result = mysql_query($dbQuery) or die("Couldn't get file list");
 $row = mysql_fetch_array($result);
 ?>
 
 <h1>Edit your details, the <?php echo $row["surName"]; ?> family!</h1>
 <br>
 	
<form name="editMembers" method="POST" onsubmit='return chkForm()' action="edit1.php">
<div class="subForm">
	<label><span>Surname*</span><input name="surName" id='surName' class="input_text" value="<?php echo $row["surName"]; ?>" type="text" /></label>
	<label><span>House name or Number*</span><input name="address1" id='address1' class="input_text" value="<?php echo $row["firstAddress"]; ?>" type="text" /></label>
	<label><span>Street Name*</span> <input name="address2" id='address2' class="input_text" value="<?php echo $row["secAddress"]; ?>" type="text" /></label>
	<label><span>Address 3</span> <input name="address3" class="input_text" value="<?php echo $row["thirdAddress"]; ?>" type="text" /></label>
	<label><span>Town*</span> <input name="town" id='town' class="input_text" value="<?php echo $row["town"]; ?>" type="text" /></label>
	<label><span>County</span> <input name="county" class="input_text" value="<?php echo $row["county"]; ?>" type="text" /></label>
	<label><span>Post Code*</span> <input name="postCode" id='postCode' class="input_text" value="<?php echo $row["postCode"]; ?>" type="text" /></label>
	<label><span>Telephone</span> <input name="phone" class="input_text" value="<?php echo $row["phoneNum"]; ?>" type="text" /></label>
	<label><span>Email*</span> <input name="email" id='email' class="input_text" value="<?php echo $row["Email"]; ?>" type="text" /></label>
	<label><span>User Name*</span> <input name="userName" id='userName' class="input_text" value="<?php echo $row["userName"]; ?>" type="text" /></label>
	<p><input type="submit" class="button" value="Submit"></p>
	</div>
</form>

<?php mysql_close($con); ?>

<hr>
<p align='center'><b><a href="com_admin.php">Admin</a> | <a href="log_out1.php">Log Out</a></b></p>

<!-- end of main -->
</div>

<!-- end of container -->
	
</div>

<?php include 'footer.php'; ?>


