<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Cron Job - Emailing submit.php
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/CRON/SUBMITPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 24, 2008 BY ALBERT WANG '08
DESCRIPTION:	READS SUBMIT TABLE AND EMAILS DATA GATHERED FROM SUBMIT.PHP
USAGE:		SERVER
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<?php

echo '<center><h1>Gilman News Online User Submitted Text Cron Job</h1></center>';


//Setting Message Info
$to = 'thegilmannews@gmail.com';
$subject="Gilman News Online User Submitted Text";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: The Gilman News <thegilmannews@gmail.com>' . "\r\n";
$headers .= 'From: The Gilman News Online <mailman@gilmannews.com>' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$sendmail=false;

//Making Message and pulling data from submit mySQL table
$message = 'These are the submissions from <a href="http://www.gilmannews.com/submit.php">the Gilman News Online</a>.  <br><br><br>';
$query = "SELECT * FROM submit WHERE sent = '0'";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	$sendmail=true;
	$message .= '<b>Name:</b> '.$row['name'].'<br>';
	$message .= '<b>Date:</b> '.$row['date'].'<br>';
	$message .= '<b>Email:</b> '.$row['email'].'<br>';
	$message .= '<b>Message:</b> '.$row['message'].'<br><br><br>';
}

if($sendmail==true){
	//Displaying Message Info
	echo '<b>To:</b> '.$to.'<br><br>';
	echo '<b>From:</b> The Gilman News Online <mailman@gilmannews.com><br><br>';
	echo '<b>Subject:</b> '.$subject.'<br><br>';
	echo '<b>Message:</b> '.stripslashes($message).'<br><br><br>';
	
	echo 'Sending...<br>...<br>';
	// Mail it
	mail($to, $subject, stripslashes($message), $headers);
	echo '<h3>Sent</h3><br><br>';
}

//Marking all messages as having already been sent
$result = mysql_query("UPDATE submit SET sent='1'")
or die(mysql_error());


echo 'Cron Job Finished.';

include("/home/gnews/public_html/process/footer.php");
?>
