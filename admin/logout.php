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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/LOGOUT.PHP
STATUS:		MAINTANANCE NEEDED: UPDATE SUBSECTIONS, FINISH TASKS
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES LOGOUT REQUEST
USAGE:		PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h1>Administration Panel</h1></center>
<?php
session_destroy();
echo 'You have been logged out.  <br>';
echo 'Return to <a href="http://www.gilmannews.com/">The Gilman News</a><br><br>';
?>

<?php include("/home/gnews/public_html/process/footer.php");?>

