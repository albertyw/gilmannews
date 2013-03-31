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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/COMMENTSSMODIFYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES COMMENTS MODIFY REQUEST
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
Modify Comment</h2></center>
<br>

<?php
$id=$_POST['id'];
$approval=isset($_POST['approval']);
$name=$_POST['name'];
$comment=$_POST['comment'];

echo 'Modifying comment...<br>';
echo '...<br>...<br>...<br>';


$result = mysql_query("UPDATE comments SET approval='$approval' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE comments SET name='$name' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE comments SET comment='$comment' WHERE id='$id'")
or die(mysql_error());



echo '<b>Comment Modified.</b><br><br>';
$query = "SELECT * FROM comments WHERE id='$id'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo "<b>ID:</b> $id<br>";
echo '<b>Issue:</b> '.$row['issuetable'].'<br>';
echo '<b>Article:</b> '.$row['article'].'<br>';
echo '<b>Approval:</b> '.$row['approval'].'<br>';
echo "<b>Name:</b> $name<br>";
echo "<b>Comment:</b> $comment";


?>
<br><br><br>
<a href="comments.php">Modify/Delete More Comments</a><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
