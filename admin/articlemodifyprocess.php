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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLEMODIFYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUESTS TO MODIFY ARTICLES
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
Modify Article</h2></center>
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
$comments = $_POST['comments'];

echo 'Modifying article...<br>';
echo '...<br>...<br>...<br>';


$result = mysql_query("UPDATE $issuetable SET section='$section' WHERE id='$articleid'")
or die(mysql_error());
$result = mysql_query("UPDATE $issuetable SET title='$title' WHERE id='$articleid'")
or die(mysql_error());
$result = mysql_query("UPDATE $issuetable SET article='$article' WHERE id='$articleid'")
or die(mysql_error());
$result = mysql_query("UPDATE $issuetable SET author='$author' WHERE id='$articleid'")
or die(mysql_error());
$result = mysql_query("UPDATE $issuetable SET date='$date' WHERE id='$articleid'")
or die(mysql_error());
$result = mysql_query("UPDATE $issuetable SET text='$text' WHERE id='$articleid'")
or die(mysql_error());
$result = mysql_query("UPDATE $issuetable SET pictures='$pictures' WHERE id='$articleid'")
or die(mysql_error());
$result = mysql_query("UPDATE $issuetable SET comments='$comments' WHERE id='$articleid'")
or die(mysql_error());



echo '<b>Article Modified.</b><br><br>';
$query = "SELECT * FROM $issuetable WHERE id='$id'";
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
echo '<a href="article2.php?issuetable='.$issuetable.'">Modify Another Article</a><br>';

?>

<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
