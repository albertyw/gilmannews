<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Submitting
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/PROCESS/SUBMITPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 22, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESS REQUESTS TO SUBMIT TEXT TO THE EDITORS OF THE GILMAN NEWS FROM SUBMIT.PHP
USAGE:		PUBLIC/SERVER
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<center><h1>Submit To the Gilman News</h1></center>

<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$submitdate=date("F j, Y - g:i:s A T");

$name=htmlentities(mysql_real_escape_string($name));
$email=htmlentities(mysql_real_escape_string($email));
$message=htmlentities(mysql_real_escape_string($message));

$name=mysql_real_escape_string($name);
$email=mysql_real_escape_string($email);
$message=mysql_real_escape_string($message);

//reCAPTCHA STUFF
//DO NOT CHANGE
require_once('recaptchalib.php');
$privatekey = "6LdqOQAAAAAAAI5vd_fWfwXnxKi7uPCE-xL2TY3a";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {//ReCAPTCHA not correct
	echo "The reCAPTCHA wasn't entered correctly. Go back and try it again.<br>";
	echo '<a href="http://www.gilmannews.com/submit.php">Submit Again</a><br>';
	echo '<a href="http://www.gilmannews.com/">Home</a><br>';
	//FOR DEBUGGING USE:
	//echo "(reCAPTCHA said: " . $resp->error. ")";
}else{
//END reCAPTCHA


	mysql_query("INSERT INTO submit
	(name,date,email,message)
	VALUES('$name','$submitdate','$email','$message')")
	or die(mysql_error());
	
	echo '<b>You submitted: <br>';
	echo 'Name:</b>'.$name.'<br>';
	echo '<b>E-mail:</b>'.$email.'<br>';
	echo '<b>Date/Time:</b>'.$submitdate.'<br>';
	echo '<b>Message:</b>'.stripslashes($message).'<br><br>';
	echo '<b>If your message is legitimate, the news editors will contact you soon.</b><br><br>';
	echo '<a href="http://www.gilmannews.com/submit.php">Submit Again</a><br>';
	echo '<a href="http://www.gilmannews.com/">Home</a><br>';
}
?>

<?php include("/home/gnews/public_html/process/footer.php");?>
