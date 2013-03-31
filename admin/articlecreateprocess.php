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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLECREATEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 3, 2008 BY ALBERT WANG
DESCRIPTION:	PROCESSES REQUEST TO CREATE ARTICLE
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
Create Article</h2></center>
<br>

<?php
$issuetable = $_POST['issuetable'];
$articleid = $_POST['articleid'];
$section = $_POST['section'];
if($section=='frontpage') $section = 'Front page';
if($section=='campus') $section = 'Campus';
if($section=='oped') $section = 'Op/Ed';
if($section=='sports') $section = 'Sports';
if($section=='letters') $section = 'Letters to the Editor';
$title = $_POST['title'];
$article = $_POST['article'];
$author = $_POST['author'];
$date = $_POST['date'];
$text = $_POST['text'];
$pictures = $_POST['pictures'];
$comments = '';

echo 'Creating article...<br>';
echo '...<br>...<br>...<br>';

mysql_query("INSERT INTO $issuetable
 (id,
section,
title,
article,
author,
date,
text,
pictures,
comments)
VALUES
('$articleid',
'$section',
'$title',
'$article',
'$author',
'$date',
'$text',
'$pictures',
'$comments') ") or die(mysql_error());

echo '<b>Article Uploaded.</b><br><br>';
$query = "SELECT * FROM $issuetable WHERE title='$title'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo '<b>Article Information:</b><br>';
echo "<b>Issue:</b> $issuetable<br>";
echo "<b>Article ID:</b> $articleid<br>";
echo "<b>Section:</b> $section<br>";
echo "<b>Title:</b> $title<br>";
echo "<b>Article:</b> $article<br>";
echo "<b>Author:</b> $author<br>";
echo "<b>Date:</b> $date<br>";
echo "<b>Text:</b> $text<br>";
echo "<b>Pictures:</b> $pictures<br>";
echo "<b>Comments:</b> $comments<br>";





echo '<br><br><br>';
echo 'You may want to update about.php with new contributors and/or authors.<br><br>';
echo '<a href="articlecreate.php?issuetable='.$issuetable.'">Create Another Article</a><br>';

?>

<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
