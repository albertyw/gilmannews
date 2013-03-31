<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ E-mail an Article
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/PROCESS/ARTICLEVIEWEMAIL.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 1, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST TO SEND EMAIL FROM ARTICLEVIEWEMAIL.PHP
USAGE:		SERVER/PUBLIC
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<?php

echo '<center><h1>E-mail an Article</h1></center>';

//Input data from previous page's submission
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sendback = isset($_POST['sendback']);
$table = $_POST['table'];
$article = $_POST['article'];

//CHECK FOR AUTOMATED SCRIPTS, SPAMMING, VIRUSES, HACKING, ETC.

//Check for html
$to=htmlentities($to);
$from=htmlentities($from);
$subject=htmlentities($subject);
$message=htmlentities($message);

//Check for mySQL
$to=mysql_real_escape_string($to);
$from=mysql_real_escape_string($from);
$subject=mysql_real_escape_string($subject);
$message=mysql_real_escape_string($message);

//Check the email addresses
if (!preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $to)){
	echo 'The to e-mail address is invalid';
	include("/home/gnews/public_html/process/footer.php");
	die();
}
if (!preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $from)){
	echo 'The from e-mail address is invalid';
	include("/home/gnews/public_html/process/footer.php");
	die();
}

//Check for string spoofs
function str_checker($str_to_test) {//Returns false if suspicious strings are found
  $bad_strings = array(
                "content-type:","mime-version:","multipart/mixed","Content-Transfer-Encoding:","bcc:","cc:","to:"
  );  
  foreach($bad_strings as $bad_string) {
    if(eregi($bad_string, strtolower($str_to_test))) return false;
  }
  return true;
}
if (!str_checker($to) || !str_checker($from) || !str_checker($subject) || !str_checker($message)){
	echo 'Suspicious Strings in Message.  The message will not be sent.';
	include("/home/gnews/public_html/process/footer.php");
	die();
}

//Check for new lines in to, from subject
function newline_checker($str_to_test) {//Returns false if new lines are found
   if(preg_match("/(%0A|%0D|\\n+|\\r+)/i", $str_to_test) != 0) {
	   return false;
   }
   return true;
}
if (!newline_checker($to) || !newline_checker($from) || !newline_checker($subject)){
	echo 'Suspicious lines in the To, From, or Subject.  The message will not be sent.';
	include("/home/gnews/public_html/process/footer.php");
	die();
}

//reCAPTCHA STUFF
//DO NOT CHANGE
require_once('recaptchalib.php');
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
}
//MESSAGE CHECKING COMPLETE
//SUBJECT INPUT FREE FROM HACKING, SPOOFS, VIRUSES, AUTOMATED SCRIPTS



//START MESSAGE ASSEMBLY
$headers = 'To: '.$to. "\r\n";
$headers .= 'Reply-To: '.$from. "\r\n" .
$headers .= 'From: The Gilman News Online <DoNotReply@gilmannews.com>'. "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

//Displaying Message Info
echo '<b>To:</b> '.$to.'<br>';
echo '<b>From:</b> '.$from.'<br>';
echo '<b>Subject:</b> '.$subject.'<br>';
echo '<b>Message:</b> '.nl2br(stripslashes($message)).'<br>';

echo 'Sending...<br>...<br>';
// Mail it
mail($to, $subject, stripslashes($message), $headers);
echo '<h3>Sent</h3><br><br>';


//IF USER HAS CHOSEN TO SEND A COPY TO HIMSELF
if($sendback==true){
	$headers = 'To: '.$from. "\r\n";
	$headers .= 'Reply-To: '.$from. "\r\n" .
	$headers .= 'From: The Gilman News Online <DoNotReply@gilmannews.com>'. "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();
	
	//Displaying Message Info
	echo '<b>To:</b> '.$from.'<br>';
	echo '<b>From:</b> '.$from.'<br>';
	echo '<b>Subject:</b> '.$subject.'<br>';
	echo '<b>Message:</b> '.nl2br(stripslashes($message)).'<br>';
	
	echo 'Sending...<br>...<br>';
	// Mail it
	mail($from, $subject, stripslashes($message), $headers);
	echo '<h3>Sent</h3><br><br>';
}

echo 'All Messages have been sent.<br><br>';

echo "<a href=\"http://www.gilmannews.com/articleview.php?article=$article&table=$table \">Back to the article</a><br>";

include("/home/gnews/public_html/process/footer.php");
?>
