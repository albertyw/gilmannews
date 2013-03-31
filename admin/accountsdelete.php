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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ACCOUNTSDELETE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	DELETE ACCOUNT
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
Delete Account</h2></center>
<br>


<?php
//READ "GET" VARIABLES SENT FROM FORM
$id = $_GET['id'];

//READ AND DISPLAY ACCOUNT DATA
$query = "SELECT * FROM administration WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
echo 'You are about to delete this account:<br><br>';
echo '<b>ID:</b> '.$row['id'].'<br>';
echo '<b>Login:</b> '.$row['login'].'<br>';
$password=$row['password'];
$passlength=strlen($password)-1;
$password=substr($password,0,1);
echo "<b>Password:</b> $password";
for ($passcounter=1; $passcounter<=$passlength; $passcounter++){
	echo '*';
}
echo '<br>';
echo '<b>Last Login:</b> '.$row['lastlogin'].'<br>';
echo '<br><br>';

//DELETE CONFIRMATION FORM WITH PASSWORD
echo '<form action="accountsdeleteprocess.php" method="POST">';
echo 'If you want to delete this article, please type in YOUR password again to confirm: ';
echo '<input type="password" length="20" name="confirmpassword"><br>';
echo '<input type="hidden" name="id" value="'.$id.'">';
echo '<input type="submit" value="Delete">';
echo '</form>';

?>
<br>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
