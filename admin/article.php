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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	SELECT ISSUE TO MODIFY ARTICLES
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


<b>Choose Issue:</b><br>
<br>
<table border="1">
<tr><th>ID</th><th>Issue Table</th><th>Date</th><th></th></tr>
<?php
$query = "SELECT * FROM issuelist";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	echo '<tr><td>';
	echo $row['id'];
	echo '</td><td>';
	$issuetable = $row['issuetable'];
	echo $row['issuetable'];
	echo '</td><td>';
	echo $row['date'];
	echo '</td><td>';
	echo '<a href="article2.php?issuetable='.$issuetable.'">Select</a></td></tr>';
}
?>
</table>


<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
