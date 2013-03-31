<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Front Page Articles
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/FRONTPAGE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 7, 2008 BY ALBERT WANG '08
DESCRIPTION:	DISPLAYS CARTOONS
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls

$table=$_GET['table'];
$table = findLatestTable($table);
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>
<center><h1>Front Page</h1></center>
<?php

$query = "SELECT * FROM $table"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	if($row['section']=='Front page'){
		echo '<h3><center>'.$row['title'].'</center></h3><br>';
		echo '<i><center>'.$row['author'].'<br>';
		echo $row['date'].'</center></i><br>';
		if($row['pictures']!=''){
			echo '<div id="sections_pictures">';
			echo $row['pictures'];
			echo '</div>';
			echo $row['text'];
			echo '<br><br>';
			echo '<div id="sections_endpictures">';
			echo '</div>';
		}else{
			echo $row['text'];
		}
		echo '<hr>';
	}
}

?>
<?php include("/home/gnews/public_html/process/footer.php");?>
