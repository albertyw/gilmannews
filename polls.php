<?php
/* Include this before your html code */
include "/home/gnews/public_html/polls/poll_cookie.php";
?>

<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Polls
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/POLLS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 7, 2008 BY ALBERT WANG '08
DESCRIPTION:	SHOWS POLLS
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<h1><center>Polls</center></h1>
<center>
<br>
<br>
<?php



//Required PHP Poll code
/* path */
$poll_path = "/home/gnews/public_html/polls";

require $poll_path."/include/config.inc.php";
require $poll_path."/include/$POLLDB[class]";
require $poll_path."/include/class_poll.php";
require $poll_path."/include/class_pollcomment.php";
$CLASS["db"] = new polldb_sql;
$CLASS["db"]->connect();
$php_poll = new pollcomment();

//Find all Polls
$query = "SELECT * FROM poll_index";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	$php_poll->set_template_set("plain");
	$php_poll->set_max_bar_length(125);
	$php_poll->set_max_bar_height(10);
	echo $php_poll->view_poll_result($row['poll_id']);
	echo date("F j, Y",$row['timestamp']);
	echo '<hr>';
	echo '<br>';
}

?>

<?php include("/home/gnews/public_html/process/footer.php");?>
