<?php
//CHECK ADMIN CREDENTIALS
session_start();
if(!isset($_SESSION['login'])){//IF LOGIN IS INCORRECT, REDIRECT TO LOGIN PAGE
	echo '<script type="text/javascript">
	<!--
	window.location = "http://www.gilmannews.com/admin/login.php"
	//-->
	</script>';
	echo 'Bad Login<br>';
	echo '<a href="http://www.gilmannews.com/admin/login.php">';
	die();
}//REMEMBER LOGIN
$login=$_SESSION['login'];
?>

<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/POLLSCONFIGPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 29, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST TO CHANGE INDEX.PHP'S POLLS
USAGE:		PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h1>Administration Panel</h1>
<h2>Creating/Posting and Managing Polls for Advanced Poll 2.03</h2>
</center>

<?php
$index_firstpoll=$_POST['index_firstpoll'];
$index_secondpoll=$_POST['index_secondpoll'];

echo "First Poll ID: $index_firstpoll<br>";
echo "Second Poll ID: $index_secondpoll<br>";
echo '<br>';
$result = mysql_query("UPDATE configuration SET configvalue='$index_firstpoll' WHERE configitem='index_firstpoll'")
or die(mysql_error());
$result = mysql_query("UPDATE configuration SET configvalue='$index_secondpoll' WHERE configitem='index_secondpoll'")
or die(mysql_error());
echo 'Updated.<br>';
echo '<br>';
?>

<a href="admin.php">Back to Administration Home</a>

<?php include("/home/gnews/public_html/process/footer.php");?>
