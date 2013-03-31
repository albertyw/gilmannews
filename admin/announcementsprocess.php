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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ANNOUNCEMENTSPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 17, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES ANNOUNCEMENTS MODIFY REQUEST
USAGE:		PASSWORDED
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel<br>
Modify Announcements</h2></center>
<br>

<?php
$id1=$_POST['1'];
$id2=$_POST['2'];

echo 'Modifying announcements...<br>';
echo '...<br>...<br>...<br>';


$result = mysql_query("UPDATE configuration SET configvalue='$id1' WHERE id='1'")
or die(mysql_error());
$result = mysql_query("UPDATE configuration SET configvalue='$id2' WHERE id='2'")
or die(mysql_error());



echo '<b>Announcements Modified.</b><br><br>';
$query = "SELECT * FROM configuration";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	echo '<b>'.$row['configitem'].':</b>';
	echo $row['configvalue'].'<br>';
	echo '<i>'.$row['description'].'</i><br>';
	echo '<br>';
}


?>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
