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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/PHOTOSDELETE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	DELETE PHOTO GALLERY ENTRY IN PHOTOS TABLE
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
Delete Photo Entry</h2></center>
<br>


<?php
//READ "GET" VARIABLES SENT FROM FORM
$id = $_GET['id'];

//READ AND DISPLAY PHOTO DATA
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

echo '<a href="photosdeleteprocess.php?id='.$row['id'].'">Confirm Deletion</a>';

?>
<br>
<br><br><br>
<a href="photos.php">Back to Photos</a><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
