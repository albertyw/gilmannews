<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Videos ~~ 
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/VIDEOS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 9, 2008 BY ALBERT WANG '08
DESCRIPTION:	DISPLAYS SELECTED VIDEOS TO DOWNLOAD
USAGE:		PUBLIC
*/
$videoId=$_GET['videoId'];

$videoInfo=findVideoInfo($videoId);
displayBrowserTitle($videoInfo);
//Nifty Corners Cube Javascript Calls
$header=true;
$footer=true;
//End Nifty Cube

$downloads=returnDownloads($videoInfo)+1;
//Increase the number of downloads for this audio file by one
$result = mysql_query("UPDATE videos SET downloads='$downloads' WHERE id='$videoId'")
or die(mysql_error());
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>

<center><h1>Photo, Video And Audio</h1></center>
<center><h3><?php displayTitle($videoInfo); ?></h3></center>
<br>
<br>
<object type="application/x-shockwave-flash" width="<?php displayWidth($videoInfo); ?>" height="<?php displayHeight($videoInfo); ?>"
wmode="transparent" data="http://www.gilmannews.com/videos/flvplayer.swf?file=<?php displayFlvLocation($videoInfo); ?>&autoStart=true">
<param name="movie" value="http://www.gilmannews.com/videos/flvplayer.swf?file=<?php displayFlvLocation($videoInfo); ?>&autoStart=true" />
<param name="wmode" value="transparent" />
</object>
<br>
<br>
<br>
<?php displayDescription($videoInfo); ?><br><br>
Date: <?php displayDate($videoInfo); ?><br>
Views/Downloads: <?php echo returnDownloads($videoInfo); ?><br>

<a href="http://www.gilmannews.com/videos/forcedownload.php?id=<?php echo $videoId ?>">Download the video (MP4 Format)</a><br>
<br>
<br>
<a href="http://www.gilmannews.com/media.php#videos">View Other Videos</a><br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>


<?php
//FUNCTIONS
function findVideoInfo($videoId){
	$query = "SELECT * FROM videos WHERE id='$videoId'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	return $row;
}
function displayBrowserTitle($videoInfo){
	echo $videoInfo['browsertitle'];
}
function displayTitle($videoInfo){
	echo $videoInfo['title'];
}
function displayFlvLocation($videoInfo){
	echo $videoInfo['flvlocation'];
}
function displayDescription($videoInfo){
	echo $videoInfo['description'];
}
function displayDate($videoInfo){
	echo $videoInfo['date'];
}
function displayDownloadLocation($videoInfo){
	echo $videoInfo['downloadlocation'];
}
function displayHeight($videoInfo){
	echo $videoInfo['height'];
}
function displayWidth($videoInfo){
	echo $videoInfo['width'];
}
function returnDownloads($videoInfo){
	return $videoInfo['downloads'];
}
?>
