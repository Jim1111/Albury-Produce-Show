<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<!-- Container -->
<div class="box">

<?php include 'pics.php'; ?>

<!-- start of main -->
<div class="main">

<h1>Staff Login</h1>
<br>
<form name="login" action="login-exec.php" method="post" onsubmit='return chkForm()'>
<div class="subForm">
	<label><span>User Name</span><input name="userName" type="text" class="input_text" id='staffUserName' /></label>
	<label><span>Password</span><input name="passWord" type="password" class="input_text" id='staffPassWord' /></label>
	<p><input name="Submit1" class="button" type="submit" value="submit" /></p>
</div>
</form>

<!-- end of main -->
</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>


