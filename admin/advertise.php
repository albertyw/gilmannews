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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ADVERTISE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 17, 2008 BY ALBERT WANG '08
DESCRIPTION:	INFORMATION ON POSTING AWSTAT SITE VISIT INFORMATION
USAGE:		PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h1>Administration Panel</h1>
<h2>Posting Awstat Site Visit Information</h2>
</center>

At the beginning of every month, site visit information must be posted.  
The server automatically records hits and displays them in cPanel.  
The server page must be downloaded, modified, then uploaded to the public section of the server.  <br>
<br>
Directions:<br>
<ol>
<li>Log into cPanel</li>
<li>Click on Web/FTP Stats</li>
<li>Click on Awstats</li>
<li>Have the page report the previous full month's statistics</li>
<li>Right click and save the right-side frame (not the whole page)</li>
<li>Save the page as [month][year]stats.htm (example: July2008stats.htm) along with the page's images</li>
<li>Save the page in the adverts folder</li>
<li>Open up the .htm file in a text editor</li>
<li>Delete the Authenticated Users section between <?php echo htmlentities('"<a name="logins">&nbsp;</a><br>" and "</tbody></table></td></tr></tbody></table><br>"'); ?></li>
<li>Delete Miscellaneous and HTTP Error Codes Sections between <?php echo htmlentities('"<a name="other">&nbsp;</a>" and "included in other charts.</span><br>"'); ?></li>
<li>Upload the page and pictures via FTP to the adverts folder</li>
<li>Open advert.php in the adverts folder</li>
<li>Add the new month's statistics page to the list (e.g., <?php echo htmlentities('<a href="June2008stats.htm" target="_blank">June 2008 Page Views</a><br>') ?>)</li>
<li>Re-upload the advert.php page to the adverts folder</li>
</ol>

<?php include("/home/gnews/public_html/process/footer.php");?>
