<?php
session_start();
?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
//Nifty Corners Cube Javascript Calls
$footer=true;
//End Nifty Corners Cube

$login=$_POST['login'];
$password=$_POST['password'];

?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES LOGIN REQUEST
USAGE:		PUBLIC/PASSWORDED
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Gilman News Online Administration Panel</h2></center>

<?php

//INPUT DISINFECTION BELOW
//reCAPTCHA STUFF    DO NOT CHANGE
require_once('/home/gnews/public_html/process/recaptchalib.php');
$privatekey = "6LdqOQAAAAAAAI5vd_fWfwXnxKi7uPCE-xL2TY3a";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {//ReCAPTCHA not correct
	echo "The reCAPTCHA wasn't entered correctly. Go back and try it again.";
	include("/home/gnews/public_html/process/footer.php");
	die();
	//FOR DEBUGGING USE:
	//echo "(reCAPTCHA said: " . $resp->error. ")";
}//End reCAPTCHA

//HTML Entities -- Removes HTML and displays code
$login=htmlentities($login);
$password=htmlentities($password);

//mySQL injection
$login=mysql_real_escape_string($login);
$password=mysql_real_escape_string($password);
//INPUT DISINFECTION COMPLETE
//VARIABLES CAN BE USED NOW


$query = "SELECT * FROM administration";//Read the administration table and search for login/password combination
$result = mysql_query($query) or die(mysql_error());
$attempt=false;
while($row=mysql_fetch_array($result)){
	if($login==$row['login'] && $password==$row['password']){
		$attempt=true;
		$_SESSION['login']=$row['login'];//Add login to Server Session to move between pages
	}
}
if($attempt==false){//Combination not found.  Rejected
	echo 'Login incorrect.  <br>';
	echo '<a href="http://www.gilmannews.com/admin/login.php">Gilman News Online Administration Panel Login</a><br><br>';
}
if($attempt==true){//Combination found.  Accepted
	echo 'Login correct.  <br>';
	echo 'Login: '.$_SESSION['login'].'<br><br>';
	echo '<a href="admin.php">Your Gilman Administration Panel</a>';
	echo '<script type="text/javascript">
	<!--
	window.location = "admin.php"
	//-->
	</script>';
	
	//UPDATE LAST LOGIN DATE
	$lastlogin=date("F j, Y - g:i:s A T");
	$login=$_SESSION['login'];
	$result = mysql_query("UPDATE administration SET lastlogin='$lastlogin' WHERE login='$login'")
	or die(mysql_error());
}

?>

<?php include("/home/gnews/public_html/process/footer.php");?>
