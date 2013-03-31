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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ISSUE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	SELECT ISSUE TO MODIFY/DELETE/CREATE
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
Create/Modify/Delete Issues</h2></center>
<br>
<table border="1">
<tr><th>ID</th><th>Issue Table</th><th>PDF Location</th><th>Date</th><th>Year</th><th>Month</th><th>Day</th><th></th><th></th></tr>
<?php
$query = "SELECT * FROM issuelist";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	$id = $row['id'];
	echo '<tr><td>';
	echo $id;
	echo '</td><td>';
	echo $row['issuetable'];
	echo '</td><td>';
	echo $row['pdf'];
	echo '</td><td>';
	echo $row['date'];
	echo '</td><td>';
	echo $row['year'];
	echo '</td><td>';
	echo $row['month'];
	echo '</td><td>';
	echo $row['day'];
	echo '</td><td><a href="issuemodify.php?id='.$id.'">Modify</a></td>';
	echo '<td><a href="issuedelete.php?id='.$id.'">Delete</a></td></tr>';
}
?>
</table>
<br>
<a href="issuecreate.php">Create Issue</a>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
