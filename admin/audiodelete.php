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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/AUDIODELETE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	DELETE AUDIO SELECTED FROM AUDIO.PHP
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
Delete Audio</h2></center>
<br>


<?php
//READ "GET" VARIABLES SENT FROM FORM
$id = $_GET['id'];

//READ ISSUE DATA, CONFIRM WITH USER
$query = "SELECT * FROM audio WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo 'You are about to delete this audio entry:<br><br>';
echo '<b>ID:</b> '.$row['id'].'<br>';
echo '<b>Section:</b> '.$row['section'].'<br>';
echo '<b>Browser Title:</b> '.$row['browsertitle'].'<br>';
echo '<b>Title:</b> '.$row['title'].'<br>';
echo '<b>File Location:</b> '.$row['filelocation'].'<br>';
echo '<b>Description:</b> '.$row['description'].'<br>';
echo '<b>Archived:</b> '.$row['archive'].'<br>';
echo '<b>Day:</b> '.$row['day'].'<br>';
echo '<b>Month:</b> '.$row['month'].'<br>';
echo '<b>Year:</b> '.$row['year'].'<br>';
echo '<b>Date:</b> '.$row['date'].'<br>';
echo '<br><br>';

//DELETE CONFIRMATION FORM WITH PASSWORD
echo '<form action="audiodeleteprocess.php" method="POST">';
echo 'If you want to delete this audio entry, please type in your password again to confirm: ';
echo '<input type="password" length="20" name="password"><br>';
echo '<input type="hidden" name="id" value="'.$id.'">';
echo '<input type="submit" value="Delete">';
echo '</form>';

?>
<br>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
