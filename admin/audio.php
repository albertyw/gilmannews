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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/AUDIO.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	ADMINISTRATION PANEL TO CREATE/MODIFY/ARCHIVE/DELETE AUDIO
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
Create/Modify/Archive/Delete Audio</h2><br>
<a href="http://www.gilmannews.com/media.php#audio">View the Audio Section</a></center>
<br>
<table border="1">
<tr><th>ID</th><th>Section</th><th>Title</th><th>File Location</th><th>Description</th><th>Archived</th><th>Year</th><th>Downloads</th><th></th><th></th><th></th></tr>
<?php
$query = "SELECT * FROM audio";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	$id = $row['id'];
	echo '<tr><td>';
	echo $id;
	echo '</td><td>';
	echo $row['section'];
	echo '</td><td>';
	echo $row['title'];
	echo '</td><td>';
	echo $row['filelocation'];
	echo '</td><td>';
	echo htmlentities(substr($row['description'], 0,50).'...');
	echo '</td><td>';
	echo $row['archive'];
	echo '</td><td>';
	echo $row['year'];
	echo '</td><td>';
	echo $row['downloads'];
	echo '</td><td><a href="audiomodify.php?id='.$id.'">Modify</a></td>';
	echo '<td><a href="audiodelete.php?id='.$id.'">Delete</a></td>';
	echo '<td><a href="http://www.gilmannews.com/audio.php?id='.$id.'">View</a></td></tr>';
}
?>
</table>
<br>
<a href="audiocreate.php">Create Audio Entry</a>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>

<?php include("/home/gnews/public_html/process/footer.php");?>
