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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLE2.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG
DESCRIPTION:	AFTER SELECTION OF ISSUE IN ARTICLE.PHP, SELECT ARTICLE TO MODIFY/DELETE OR CREATE NEW ARTICLE
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
Create/Modify/Delete Articles</h2></center>
<br>

<h3>Change or Delete Articles</h3>

<table border="1">
<tr><th>ID</th><th>Section</th><th>Title</th><th>Article</th><th>Author</th><th>Date</th><th>Text</th><th>Pictures</th><th>Comments</th></tr>
<?php
$issuetable = $_GET['issuetable'];

$query = "SELECT * FROM $issuetable";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	echo '<tr><td>';
	$id = $row['id'];
	echo $row['id'];
	echo '</td><td>';
	echo $row['section'];
	echo '</td><td>';
	echo $row['title'];
	echo '</td><td>';
	echo $row['article'];
	echo '</td><td>';
	echo $row['author'];
	echo '</td><td>';
	echo $row['date'];
	echo '</td><td>';
	echo htmlentities(substr($row['text'], 0, 100).'.....');
	echo '</td><td>';
	echo htmlentities(substr($row['pictures'],0,100).'.....');
	echo '</td><td>';
	echo htmlentities(substr($row['comments'],0,100).'.....');	
	echo '</td><td>';
	echo '<a href="articlemodify.php?issuetable='.$issuetable.'&id='.$id.'">Modify</a>';
	echo '</td><td>';
	echo '<a href="articledelete.php?issuetable='.$issuetable.'&id='.$id.'">Delete</a>';
	echo '</td></tr>';
}
echo '</table>';
echo '<br>';
echo '<h3><a href="articlecreate.php?issuetable='.$issuetable.'">Create Article</a></h3>';
?>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
