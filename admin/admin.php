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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ADMIN.PHP
STATUS:		MAINTANANCE NEEDED: UPDATE SUBSECTIONS, FINISH TASKS
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	HOME PAGE FOR GILMAN NEWS WEBSITE ADMINISTRATION PANEL
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
<?php echo 'Server Time: '.date("F j, Y - g:i:s A T"); ?>
</center>


<h2>News Issues/Articles Stuff</h2>

<a href="issue.php">Issues</a><br>
Create, modify, or delete issues.  An issue must be created to add articles to it and for the pdfs to be displayed on the website.  <br>
<i>-- Create: Finished -- Modify: Finished -- Delete -- Finished</i><br>

<a href="article.php">Articles.  </a><br>
Create, modify, or delete articles.  <br>
<i>-- Create: Finished -- Modify: Finished -- Delete: Finished</i><br>

<a href="comments.php">Comments</a><br>
Delete or Modify Comments.  <br>
<i>-- Modify: Finished -- Delete: Finished</i><br>

<br>
<br>


<h2>Media</h2>

<a href="photos.php">Photo Galleries</a><br>
Add, modify, archive, or delete photo galleries from the media section.  <br>
<i>-- Add: Finished -- Modify/Archive -- Not Finished -- Delete -- Not Finished</i><br>

<a href="video.php">Videos</a><br>
Submit, modify, archive, or delete videos from the media section.  <br>
<i>-- Submit: Finished -- Archive/Modify: Finished -- Delete: Finished</i><br>

<a href="audio.php">Audio</a><br>
Submit, archive, or delete audio files from the media section.  <br>
<i>-- Submit: Finished -- Archive/Modify: Finished -- Delete: Finished</i><br>


<br>
<br>

<h2>Home Page</h2>
<a href="announcements.php">Announcements</a><br>
Put Announcements on the Home Page<br>
<i>-- Finished</i><br>
<a href="polls.php">Polls</a><br>
Directions for creating/posting and managing polls.<br>
<i>-- Finished</i><br>

<br>
<br>

<h2>Advertise</h2>

<a href="advertise.php">Monthly/Yearly Statistics</a>
Add or delete Monthly Statistics, downloaded from awstats in cPanel<br>
<i>-- Finished</i><br>

<br>
<br>


<h2>Other</h2>
<a href="accounts.php">Administration Accounts</a><br>
<i>-- Submit: Finished -- Modify: Finished -- Delete: Finished</i><br>

<a href="http://www.gilmannews.com/securecontrolpanel">gilmannews.com cPanel</a><br>
<i>-- Finished</i><br>

<a href="mailto:aywang31@gmail.com">Contact the Webmaster Webmaster</a><br>
<i>-- Finished</i><br>

<a href="logout.php">LOG OUT</a><br>
<i>-- Finished</i><br>


<br>
<br>
<br>
<h2>To Do List</h2>
<ul>
<li><del>All pages: Standardize headeropen, Nifty Cube, headermiddle, header on all pages<br>
//Nifty Cube Corners Javascript Calls  $header=true; $footer=true;<br>
Use /home/gnews/public_html/gilmannews/</del>
</li>
<li><del>All pages: Clean/optimize code</del></li>
<li><del>Add Announcements section in Administration Panel</del></li>
<li><del>Sections: Clean up blog</del></li>
<li><del>Use "findLatestTable()" for News Section pages</del></li>

<li><del>Sections: Include video dimensions into video database and page displays</del></li>
<li><del>Sections: Add Cynosure</del></li>
<li><del>Update .htaccess<br>
Create 401, 402, 403, 404 pages</del></li> 
<li><del>Update robots.txt<br>
Don't read Administration Pages</del></li>
<li><del>Add March and April Issues</del></li>
<li><del>Google Sitemaps</del></li>
<li><del>Add to Social Networking Site link</del></li>
<li><del>Fix IE bug in displaying navigation bar -- Replace with Nifty Cube</del></li>
<li><del>Create auto-emailing using phplist</del></li>
<li><del>Create "contact" form for submit.php</del></li>
<li><del>E-mail articles</del></li>
<li><del>All pages: Comment all code</del></li>
<li><del>All pages: Standardize use of h1, h2, h2<br>
h1 at the top of all pages<br>
h2 for all subheaders<br>
h3 used sparingly</del></li>
<li><del>Add print function</del></li>
<li><del>Update old.php for dynamic updating</del></li>
<li><del>Sections: Integrate Chris Hepner Photo Gallery Code into Media section<br>
Convert current galleries</del></li>
<li><del>Add reCAPTCHA to admin login</del></li>
<li><del>Sections: Articleview.php<br>
Refine Comments Viewing<br>
Change CAPTCHA form<br>
Create an administrative review section</del></li>
<li><del>Sections: Create Archive Sections<br>
Photos<br>
Videos<br>
Audio</del></li>
<li><del>Sections: Finish Administration Panel</del></li>
<li><del>Add Cron Job Reminders for googlesitemaps</del></li>
<li></li>



<li>Sections: Include article-writer matching</li>
<li>Clean up CSS</li>
<li>Sections: Finish Radio Section</li>
</ul>


<?php include("/home/gnews/public_html/process/footer.php");?>
