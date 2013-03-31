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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ACCOUNTSCREATEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG
DESCRIPTION:	PROCESSES REQUEST TO CREATE ACCOUNT
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
Create Account</h2></center>
<br>

<?php
$id=$_POST['id'];
$login=$_POST['login'];
$password=$_POST['password'];

echo 'Creating account...<br>';
echo '...<br>...<br>...<br>';

mysql_query("INSERT INTO administration
 (id,
login,
password)
VALUES
('$id',
'$login',
'$password') ") or die(mysql_error());

echo '<b>Account Created.</b><br><br>';
$query = "SELECT * FROM administration WHERE id='$id'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo '<b>Account Information:</b><br>';
echo "<b>ID:</b> $id<br>";
echo "<b>Login:</b> $login<br>";
$passlength=strlen($password)-1;
$password=substr($password,0,1);
echo "<b>Password:</b> $password";
for ($passcounter=1; $passcounter<=$passlength; $passcounter++){
	echo '*';
}
?>
<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
