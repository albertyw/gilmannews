<?php
//Creates a cookie to stop multiple poll submissions from one computer
include_once "/home/gnews/public_html/polls/poll_cookie.php";
?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Home
<?php
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
$downloadprintissue=true;
$index_poll=true;
$index_articlesrightleft=true;
$index_inthisissue=true;
$index_sections=true;
//End Nifty Cube

//Looks at configuration table and finds whether a message is to be displayed
$query = "SELECT * FROM configuration WHERE configitem='index_firstmessage'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$index_firstmessage = $row['configvalue'];
if($index_firstmessage!='' && $index_firstmessage!=null){
	$index_messages=true;
	echo $index_firstmessage;
}else{
	$index_messages=false;
}

//Determines which issue to display
$table=$_GET['table'];
$table = findLatestTable($table);
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include ("/home/gnews/public_html/process/header.php");?>


<?php
/* Looks for "index_firstmessage" and displays it */
if($index_firstmessage!='' && $index_firstmessage!=null){
	echo '<center>';
	echo '<div class="index_messages">';
	echo $index_firstmessage;
	echo '</div></center><br><br>';
}
?>

<table border="0" width="100%">
<?php /*Outer Table, includes "In This Issue", Article List, Download Issue, Polls*/?>
<tr><td valign="top"><?php /* Outer Table "In This Issue", Article List, Download Issue*/ ?>

<table border="0" width="100%">
<?php/* Inner Table, includes "In This Issue", Article List*/?>
<tr><td valign="top" colspan="2"><?php /* "In This Issue" */ ?>

<div class="index_inthisissue">In This Issue of <i>The Gilman News</i> - 
<?php tableReader($table); ?>
</div>

<br>
<center>
<?php
echo '<div id="index_sections">';
/* Looks for "index_secondmessage" and displays it */
$query = "SELECT * FROM configuration WHERE configitem='index_secondmessage'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$index_secondmessage = $row['configvalue'];
if($index_secondmessage!='' && $index_secondmessage!=null){
	echo '<font color="red">'.$index_secondmessage.'</font><br>';
}

/* Displays Sections */
$sectionArgument='?table='.$table;
echo '<a href="http://www.gilmannews.com/frontpage.php'.$sectionArgument.'">Front Page</a>';
echo '<a href="http://www.gilmannews.com/campus.php'.$sectionArgument.'">Campus</a>';
echo '<a href="http://www.gilmannews.com/oped.php'.$sectionArgument.'">Op/Ed</a>';
echo '<a href="http://www.gilmannews.com/sports.php'.$sectionArgument.'">Sports</a>';
echo '<a href="http://www.gilmannews.com/toeditor.php'.$sectionArgument.'">Letters to the Editor</a><br><br>';
echo '</div>';
?>

</center>

</td> <?php /* Close "In This Issue" */ ?>
</tr>
<tr> <?php /* Article List */ ?>
<div id="index_articles">
<td valign=top>
<?php
$query = "SELECT * FROM $table";
$result = mysql_query($query) or die(mysql_error());
$articlenum=0;
$halfwayarticle = halfWayArticle($table);

echo '<div id="index_articlesleft">';
while($row = mysql_fetch_array($result)){
	$articlenum++;
	echo '<a href="articleview.php?article='.$row['article'].'&table='.$table.'">'.$row['title'].'</a><br>';
	echo '<div class="index_author">By '.$row['author'].'</div>';
	if ($articlenum==$halfwayarticle){
		echo '</div></td><td><div id="index_articlesright">';
	}
}
echo '</div>';
?>
</td></div></tr> <?php /* Close Article List */ ?>
</table> <?php /* Close Inside Table */ ?>
<center>
<div class="downloadprintissue">
Download the whole current issue: <?php downloadissuelink($table);?> <sub><sub>(PDF Format) </sub></sub>
</div>
</center>

<td align=right>
<div id="index_poll"><br>
<a href="polls.php">View Poll Results</a><br><br>
<?php
/* Polls go here  */
$pollid=polls('index_firstpoll');
if($pollid!='0' && $pollid!=null){
	include_once "/home/gnews/public_html/polls/booth.php";
	echo $php_poll->poll_process($pollid);
}
echo '<br><br>';
$pollid=polls('index_secondpoll');
if($pollid!='0' && $pollid!=null){
	include_once "/home/gnews/public_html/polls/booth.php";
	echo $php_poll->poll_process($pollid);
}
?><br><br>
</div>
</td></tr> <?php /* Close Poll */ ?>
</table> <?php /* Close Outer Table */ ?>
<?php include("/home/gnews/public_html/process/footer.php");
/*  END OF PAGE */?>





<?php 
// FUNCTIONS START HERE

function tableReader($table){
	//Called in the "In This Issue" line, echos the date of the latest issue
	$query = "SELECT * FROM issuelist WHERE issuetable='$table'";//Select specified table row
	$result = mysql_query($query) or die(mysql_error());//send request to mysql
	$row = mysql_fetch_array($result);//create array from mysql
	echo '('.$row['date'].')';//echo date
}


function halfWayArticle($table){
	//Called before article list, returns when the article list should restart 
	$query = "SELECT * FROM $table";//connects to the specified table
	$result = mysql_query($query) or die(mysql_error());//send request to mysql
	$numrows = mysql_num_rows($result);
	return round($numrows/2);//Return number of rows divided by 2
}


function polls($whichpoll){
	//Reads database for polls and posts polls
	//Connect to gnews_gilmannews database
	$dbh=mysql_connect("localhost", "gnews_gilman","") or die(mysql_error());
	mysql_select_db ("gnews_gilmannews") or die(mysql_error());
	//Read poll id from configuration database
	$query = "SELECT * FROM configuration WHERE configitem='$whichpoll'";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	//Return poll id
	return $row['configvalue'];
}
?>
