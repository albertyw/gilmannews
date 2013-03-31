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
$personallogin=$_SESSION['login'];
?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ACCOUNTSMODIFYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES ACCOUNT MODIFY REQUEST
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
Modify Account</h2></center>
<br>

<?php
$id=$_POST['id'];
$login=$_POST['login'];
$password=$_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

//CHECK PASSWORD/CONFIRM DELETE
$query = "SELECT * FROM administration";
$result = mysql_query($query) or die(mysql_error());
$attempt=false;
while($row=mysql_fetch_array($result)){
	if($personallogin==$row['login'] && $confirmpassword==$row['password']){
		$attempt=true;
	}
}
if($attempt!=true){
	echo 'Your confirmation password is not correct.  No changes have been made.<br>';
	echo '<a href="admin.php">Administration Panel</a><br><br>';
	include("/home/gnews/public_html/process/footer.php");
	die();
}

echo 'Modifying account...<br>';
echo '...<br>...<br>...<br>';


$result = mysql_query("UPDATE administration SET login='$login' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE administration SET password='$password' WHERE id='$id'")
or die(mysql_error());



echo '<b>Account Modified.</b><br><br>';
$query = "SELECT * FROM administration WHERE id='$id'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
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
