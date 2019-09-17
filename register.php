
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
   
<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

echo "<h1>Step 1 - confirmation</h1>";

$surName = strip_tags($_POST["surName"]);
$address1 = strip_tags($_POST["address1"]);
$address2 = strip_tags($_POST["address2"]);
$address3 = strip_tags($_POST["address3"]);
$town = strip_tags($_POST["town"]);
$county = strip_tags($_POST["county"]);
$postCode = strip_tags($_POST["postCode"]);
$phone = strip_tags($_POST["phone"]);
$email = strip_tags($_POST["email"]);
$userName = strip_tags($_POST["userName"]);
$password = strip_tags($_POST["password"]);

include("inc/dbconnect.php");
$dbQuery = "INSERT INTO summer_show.members (membersId, surName, firstAddress, secAddress, thirdAddress, town,";
$dbQuery .= "county, postCode, phoneNum, Email, userName, passWord)";
$dbQuery .= "VALUES (0, '$surName', '$address1', '$address2', '$address3', '$town',";
$dbQuery .= "'$county', '$postCode', '$phone', '$email', '$userName','".md5($password)."')";
	
mysql_query($dbQuery) or die("Couldn't add file to database");

echo "<p>Thank you for registering!</p>\n";

mysql_close($con);
	
echo "<p><b><a href='com_login.php'>Click here</a> to log in and go to part 2. Thank you.</b></p>";

} else {

?>

<h1>Registration Form</h1>
<br>
<form name="reg" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit='return chkForm()'>

<div class="subForm">
	<label><span>Surname*</span><input name="surName" type="text" class="input_text" id='surName' /></label>	
	<label><span>House name or Number*</span><input name="address1" type="text" class="input_text" id='address1' /></label>
	<label><span>Street Name*</span><input name="address2" type="text" class="input_text" id='address2' /></label>
	<label><span>Address 3</span><input name="address3" type="text" class="input_text" /></label>
	<label><span>Town*</span><input name="town" type="text" class="input_text" id='town' /></label>
	<label><span>County</span><input name="county" type="text" class="input_text" /></label>
	<label><span>Post Code*</span><input name="postCode" type="text" class="input_text" id='postCode' /></label>
	<label><span>Telephone</span><input name="phone" type="text" class="input_text" /></label>
	<label><span>Email*</span><input name="email" type="text" class="input_text" id='email' /></label>
	<label><span>User Name*</span><input name="userName" type="text" class="input_text" id='userName' /></label>
	<label><span>Password*</span><input name="password" type="password" class="input_text" id='passWord' /></label>
	<p><input type="submit" class="button" value="Step 2 >>"></p>
	
</div>
</form>

<?php } ?>

<!-- end of main -->
</div>

<!-- end of container -->
	
</div>

<?php include 'footer.php'; ?>


