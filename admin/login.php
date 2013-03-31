<?php

?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/LOGIN.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	LOGIN FOR ADMINISTRATION PANEL
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel Login</h2></center>
<b>Log in With Your Gilman News Online Account</b><br>
<form action="loginprocess.php" method="POST">
Login: <input type="text" length="20" name="login"><br>
Password: <input type="password" length="20" name="password"><br>
<?php //reCAPTCHA
require('/home/gnews/public_html/process/recaptchalib.php');
$publickey = "6LdqOQAAAAAAANyeh6IlS-WNbARnGbWGcQM0j7YX";
echo recaptcha_get_html($publickey);
?>
<input type="submit" value="Login">
</form>

<br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>
