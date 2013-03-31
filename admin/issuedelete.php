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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ISSUEDELETE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	DELETE ISSUE
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
Delete Issue</h2></center>
<br>


<?php
//READ "GET" VARIABLES SENT FROM FORM
$id = $_GET['id'];

//READ ISSUE DATA, CONFIRM WITH USER
$query = "SELECT * FROM issuelist WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo 'You are about to delete this issue:<br><br>';
echo 'ID: '.$row['id'].'<br>';
echo 'Issue Table: '.$row['issuetable'].'<br>';
echo 'PDF Location: '.$row['pdf'].'<br>';
echo 'Date: '.$row['date'].'<br>';
echo 'Year: '.$row['year'].'<br>';
echo 'Month: '.$row['month'].'<br>';
echo 'Day: '.$row['day'].'<br>';
echo '<br><br>';

//DELETE CONFIRMATION FORM WITH PASSWORD
echo '<form action="issuedeleteprocess.php" method="POST">';
echo 'If you want to delete this issue, please type in your password again to confirm: ';
echo '<input type="password" length="20" name="password"><br>';
echo '<input type="hidden" name="id" value="'.$id.'">';
echo '<input type="submit" value="Delete">';
echo '</form>';

?>
<br>
Deleting the issue will also delete all articles associated with the issue.  
<br>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
