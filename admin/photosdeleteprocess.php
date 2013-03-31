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
$personallogin=$_SESSION['login'];
?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/PHOTOSDELETEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST TO DELETE PHOTO ENTRY
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
Delete Photo</h2></center>
<br>
<?php
//READ POST VARIABLES SENT FROM FORM
$id = $_GET['id'];

//READ AND DISPLAY PHOTO ENTRY DATA
$query = "SELECT * FROM photos WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo 'You are about to delete this photo entry:<br><br>';
echo '<b>ID:</b> '.$row['id'].'<br>';
echo '<b>Title:</b> '.$row['title'].'<br>';
echo '<b>Photographer:</b> '.$row['photographer'].'<br>';
echo '<b>Section:</b> '.$row['section'].'<br>';
echo '<b>Archive:</b> '.$row['archive'].'<br>';
echo '<b>Date:</b> '.$row['date'].'<br>';
echo '<b>File Location:</b> '.$row['filelocation'].'<br>';
echo '<br><br>';

echo 'Deleting....<br>';

//DELETE ENTRY
mysql_query("DELETE FROM photos WHERE id= $id") 
	or die(mysql_error());
echo 'Deleted.<br><br>';
echo 'You will still need to delete the photo gallery folder at: '.$row['filelocation'].'<br><br>';
?>

<br><br><br>
<a href="photos.php">Back to Photos</a><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
