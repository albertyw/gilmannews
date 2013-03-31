<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News ~ Letters to the Editor
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/TOEDITOR.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 7, 2008 BY ALBERT WANG '08
DESCRIPTION:	SHOWS LETTERS TO THE EDITOR FROM SELECTED ISSUE
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
$table = $_GET['table'];
$table = findLatestTable($table);
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<center><h1>Letters To The Editor</h1>
<br><br>
<h2>In the Print Version of the News</h2></center>
<?php

$query = "SELECT * FROM $table"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	if($row['section']=='Letters to the Editor'){
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
		$somethinghere=true;
	}
}
if($somethinghere==false){
	echo '<i>Sorry, we do not have any letters to the editor<br>Why don\'t you submit one yourself?</i>';
}
?>
<br><br><br><br>
<center><h2>Submitted Online</h2></center>

<?php

$query = "SELECT * FROM toeditor"; 
$result = mysql_query($query) or die(mysql_error());
$nomessage=true;
while($row = mysql_fetch_array($result)){
	echo '<b>From: '.$row['submiter'].'<br>';
	echo 'Date: '.$row['date'].'</b><br>';
	echo $row['message'].'<br>';
	echo '<br><br>';
	$nomessage=false;
}
if($nomessage==true){echo '<i>There have been no letters to the editor submitted online.  </i><br>';}
?>
<h3><center><a href="submit.php">Submit</a> a Letter to the Editor yourself.  </h3></center>


<?php include("/home/gnews/public_html/process/footer.php");?>
