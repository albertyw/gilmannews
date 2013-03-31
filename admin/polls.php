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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/POLLS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 31, 2008 BY ALBERT WANG '08
DESCRIPTION:	CREATING, POSTING, MANAGING POLLS
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
<h2>Creating/Posting and Managing Polls for Advanced Poll 2.03</h2>
</center>

<b>Directions For Creating New Polls</b>
<ol>
<li>Go to <a href="http://www.gilmannews.com/polls/admin/" target="_blank">http://www.gilmannews.com/polls/admin/</a></li>
<li>Log in with the same username/password as the Gilman News cPanel</li>
<li>In the top panel, click "Create a new poll"</li>
<li>Fill in the question and options</li>
<li>Submit.</li>
<li>Note the poll's ID number</li>
</ol><br>
<br>
<b>Put poll on home (index.php) page</b>
<form action="pollsconfigprocess.php" method="POST">
First poll ID: <input type="text" size="3" name="index_firstpoll"><br>
Second poll ID: <input type="text" size="3" name="index_secondpoll"><br>
<input type="submit" value="Change"><br>
<i>You can put "0" if you don't want to post a poll</i><br>
</form><br>
<b>Locking Polls</b> when polls are finished
<ol>
<li>Go to <a href="http://www.gilmannews.com/polls/admin/" target="_blank">http://www.gilmannews.com/polls/admin/</a></li>
<li>Log in with the same username/password as the Gilman News cPanel</li>
<li>In the poll list, click the poll</li>
<li>In the drop down menu next to the question, select "Disabled"</li>
<li>Unselect "never" next to Expiration</li>
<li>Save Changes</li>
</ol><br>
<br>

<a href="admin.php">Back to Administration Home</a>

<?php include("/home/gnews/public_html/process/footer.php");?>
