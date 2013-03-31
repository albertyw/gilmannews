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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ANNOUNCEMENTS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 17, 2008 BY ALBERT WANG
DESCRIPTION:	MODIFY ANNOUNCEMENTS POSTED ON THE HOME PAGE
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
Modify Announcements</h2></center>
<br>

<form action="announcementsprocess.php" method="POST">
<?php
$query = "SELECT * FROM configuration";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	echo '<b>'.$row['configitem'].':</b>';
	echo '<input type="text" name="'.$row['id'].'" size="100" value="'.$row['configvalue'].'"><br>';
	echo '<i>'.$row['description'].'</i><br>';
	echo '<br>';
}
?>
<input type="submit" value="Change">
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
