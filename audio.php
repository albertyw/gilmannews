<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Audio ~~ 
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/AUDIO.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	DISPLAYS AUDIO FILES
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$header=true;
$footer=true;
//End Nifty Cube

//Read table
$id=$_GET['id'];
$query = "SELECT * FROM audio WHERE id='$id'";
$result= mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$downloads=$row['downloads']+1;

//Write Database table's variable to the browser titlebar
echo $row['browsertitle'];

//Increase the number of downloads for this audio file by one
$result = mysql_query("UPDATE audio SET downloads='$downloads' WHERE id='$id'")
or die(mysql_error());
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>

<center><h1>Media -- Audio</h1></center>
<center><h3><?php echo $row['title']; ?></h3></center>
<br>
<br>
<?php /* Embed code */ ?>
<script language="JavaScript" src="http://www.gilmannews.com/audio/audio-player.js"></script>
<object type="application/x-shockwave-flash" data="http://www.gilmannews.com/audio/player.swf" id="audioplayer1" height="24" width="290">
<param name="movie" value="http://www.gilmannews.com/audio/player.swf">
<param name="FlashVars" value="playerID=1&amp;soundFile=<?php echo $row['filelocation']; ?>">
<param name="quality" value="high">
<param name="menu" value="false">
<param name="wmode" value="transparent">
</object>
<?php /* End Embed code */ ?>
<br>
<br>
<br>
<?php echo $row['description']; ?><br><br>
Date: <?php echo $row['date']; ?><br>
Downloads: <?php echo $row['downloads']; ?><br>

<a href="http://www.gilmannews.com/audio/forcedownload.php?id=<?php echo $id ?>">Download the audio file (MP3 Format)</a><br>
<br>
<br>
<a href="http://www.gilmannews.com/media.php#audio">View Other Audio Files</a><br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>
