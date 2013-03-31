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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/COMMENTS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 3, 2008 BY ALBERT WANG
DESCRIPTION:	MODIFY/DELETE COMMENTS
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
Modify/Delete Comments</h2></center>
<br>

<table border="1">
<tr><th>ID</th><th>Issue</th><th>Article</th><th>Approval</th><th>Name</th><th>Comment</th><th></th><th></th></tr>
<?php

$query = "SELECT * FROM comments";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	echo '<tr><td>';
	$id = $row['id'];
	echo $row['id'];
	echo '</td><td>';
	echo $row['issuetable'];
	echo '</td><td>';
	echo $row['article'];
	echo '</td><td>';
	echo $row['approval'];
	echo '</td><td>';
	echo htmlentities($row['name']);
	echo '</td><td>';
	echo htmlentities($row['comment']);
	echo '</td><td>';
	echo '<a href="commentsmodify.php?id='.$id.'">Modify</a>';
	echo '</td><td>';
	echo '<a href="commentsdelete.php?id='.$id.'">Delete</a>';
	echo '</td></tr>';
}
echo '</table>';
echo '<br>';
?>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
