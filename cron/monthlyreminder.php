<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Cron Job - Monthly Webmaster Reminder
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/CRON/MONTHLYREMINDER.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	SENDS A REMINDER TO THE SPECIFIED WEBMASTER'S EMAIL
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

echo '<center><h1>Gilman News Online Webmaster Reminders</h1></center>';


//Setting Message Info
$to = 'cajaks2@gmail.com';

$subject="Gilman News Webmaster Monthly Reminders";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: cajaks2@gmail.com <Cooper Jackson>' . "\r\n";
$headers .= 'From: The Gilman News Online <mailman@gilmannews.com>' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$sendmail=false;

//Making Message and pulling data from submit mySQL table
$message="<center><b>Gilman News Online Monthly Reminders</b></center>
For more information, consult the Gilman News Administration Panel.<br><br>

At the end of the every month, you should post the compiled website statistics log from AWstats.  
More information can be found at <a href=\"http://www.gilmannews.com/admin/advertise.php\">the advertise.php page in the Admin Panel.</a>.  <br><br>

If you have created new pages, deleted pages, added videos, images, or audio, or created new issues/articles,
please update the appropriate Google sitemap file to list the new pages.  <br><br>

Make backups of all the databases.  If you have enough time/bandwidth/disk space, save a whole account backup into your local backup folder.  
Backups can be automatically created and downloaded through cPanel.  <br><br>

Remember to archive images, audio, and video clips in the media section of the website.  <br><br>

Log into the Wordpress Blog and make sure that the blog is updated to the current version.  Before updating, make a backup of the blog.  
Do not delete the custom headers or additional media located in the blogs/wp-content/ folder.  <br><br>

Log onto the <a href=\"http://www.hostgator.com/\">Hostgator.com</a> forums and look at the Announcements and Network Status categories.  
Any expected downtimes, upgrades, etc. will be announced there.  <br><br>

Browse through your local copy and the server's copy of the Gilman News files.  Look for \"error_log\" files, unused files, files that you don't remember, and files only on the server.  
If there are any error_log files, download them and view them in a text editor.  Look for recurring errors that may suggest a flaw in the code or a security vulnerability.  <br><br>

<i>To stop/delete further monthly reminders, delete the /home/gnews/public_html/cron/monthlyreminder.php file and delete
the monthlyreminder.php cron job in cPanel.  <br>
To change the e-mail address cron jobs are sent to, open monthlyreminder.php and change the \$to and \$headers information.  <br>
Currently, the e-mail is being sent to $to.  </i>
";


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
