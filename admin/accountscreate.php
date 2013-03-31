<?php
session_start();
if(!isset($_SESSION['login'])){
	echo '<script type="text/javascript">
	<!--
	window.location = "http://www.gilmannews.com/admin/login.php"
	//-->
	</script>';
	echo 'Bad Login<br>';
	echo '<a href="http://www.gilmannews.com/admin/login.php">';
	die();
}
$login=$_SESSION['login'];
?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS: HTTP://WWW.GILMANNEWS.COM/ADMIN/ACCOUNTSCREATE.PHP
STATUS: FINISHED
LAST MODIFIED: JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION: CREATE ADMINISTRATION ACCOUNT
USAGE: PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel<br>
Create Account</h2></center>
<br>
<?php

//FIND MAX ID IN TABLE TO FIND NEW ARTICLE'S ID
$query = "SELECT MAX(id) FROM administration";
$result= mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$id=$row['MAX(id)']+1;

?>
<form action="accountscreateprocess.php" method="POST">

<b>ID: </b><?php echo $id ?><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<i>Selected Automatically</i><br>
<br>

<b>Login: </b><input type="text" size="20" name="login"><br>
<br>

<b>Password: </b><input type="text" size="20" name="password"><br>
<br>

<input type="submit" value="Create Account">
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
