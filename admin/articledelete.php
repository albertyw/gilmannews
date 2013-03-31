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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLEDELETE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	DELETE ARTICLE
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
Delete Article</h2></center>
<br>


<?php
//READ "GET" VARIABLES SENT FROM FORM
$issuetable = $_GET['issuetable'];
$id = $_GET['id'];

//READ AND DISPLAY ACCOUNT DATA, CONFIRM WITH USER
$query = "SELECT * FROM $issuetable WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo 'You are about to delete this article:<br><br>';
echo '<b>Issue Table:</b> '.$issuetable.'<br>';
echo '<b>ID:</b> '.$row['id'].'<br>';
echo '<b>Section:</b> '.$row['section'].'<br>';
echo '<b>Title:</b> '.$row['title'].'<br>';
echo '<b>Article Keywords:</b> '.$row['article'].'<br>';
echo '<b>Author:</b> '.$row['author'].'<br>';
echo '<b>Date:</b> '.$row['date'].'<br>';
echo '<b>Text:</b> '.$row['text'].'<br>';
echo '<b>Pictures:</b> '.$row['pictures'].'<br>';
echo '<b>Comments:</b> '.$row['comments'].'<br>';
echo '<br><br>';

//DELETE CONFIRMATION FORM WITH PASSWORD
echo '<form action="articledeleteprocess.php" method="POST">';
echo 'If you want to delete this article, please type in your password again to confirm: ';
echo '<input type="password" length="20" name="password"><br>';
echo '<input type="hidden" name="issuetable" value="'.$issuetable.'">';
echo '<input type="hidden" name="id" value="'.$id.'">';
echo '<input type="submit" value="Delete">';
echo '</form>';

?>
<br>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
