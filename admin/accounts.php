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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ACCOUNTS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG
DESCRIPTION:	CREATE/DELETE/MODIFY ADMINISTRATION ACCOUNTS
USAGE:		PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel<br>
Create/Modify/Delete Administration Accounts</h2></center>
<br>

<h3>Change or Delete Accounts</h3>

<table border="1">
<tr><th>ID</th><th>Username</th><th>Last Login</th><th></th><th></th></tr>
<?php

$query = "SELECT * FROM administration";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	echo '<tr><td>';
	$id = $row['id'];
	echo $row['id'];
	echo '</td><td>';
	echo $row['login'];
	echo '</td><td>';
	echo $row['lastlogin'];
	echo '</td><td>';
	echo '<a href="accountsmodify.php?id='.$id.'">Modify</a>';
	echo '</td><td>';
	echo '<a href="accountsdelete.php?id='.$id.'">Delete</a>';
	echo '</td></tr>';
}
echo '</table>';
echo 'Passwords are not shown but may be changed by modifying accounts.<br>';
echo '<br>';
echo '<a href="accountscreate.php">Create Account</a>';
?>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
