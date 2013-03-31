<?php
session_start();
if(!isset($_SESSION['login'])){
	echo '<script type="text/javascript">
	<!--
	window.location = "http://www.gilmannews.com/admin/login.php"
	//-->
	</script>';
	echo 'Bad Login<br>';
	echo '<a href="http://www.gilmannews.com/admin/login.php">';
	die();
}
$login=$_SESSION['login'];
?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/VIDEOCREATE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	CREATE VIDEO
USAGE:		PASSWORDED
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel<br>Create Videos</h2></center>

<?php
//FIND MAX ID IN VIDEO TABLE TO FIND NEW VIDEO'S ID
$query = "SELECT MAX(id) FROM videos";
$result= mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$id=$row['MAX(id)']+1;

?>





<form action="videocreateprocess.php" method="POST">
<b>ID: </b><?php echo $id ?><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<i>Selected Automatically</i><br>
<br>

<b>Section:</b> <i>(Senior Speech)</i><br>
<input type="text" size="20" name="section"><br><br>

<b>Browser Title:</b> <i>(Joe Schmoe '08 Senior Speech)</i><br>
Gilman News Online ~~ Videos ~~ <input type="text" size="50" name="browsertitle"><br><br>

<b>Title:</b> <i>(Joe Schmoe '08 Senior Speech)</i><br>
<input type="text" size="50" name="title"><br><br>

<b>flv Location:</b> <i>(http://www.gilmannews.com/videos/seniorspeech/joeschmoe.flv)</i><br>
<input type="text" size="100" name="flvlocation" value="http://www.gilmannews.com/videos/"><br><br>

<b>Download Location:</b> <i>(http://wwww.gilmannews.com/videos/seniorspeech/joeschmoe.mp4)</i><br>
<input type="text" size="100" name="downloadlocation" value="http://www.gilmannews.com/videos/"><br><br>

<b>Description:</b> <i>(This is the senior speech of Joe Schmoe '08)</i><br>
<textarea cols="100" rows="10" name="description"></textarea><br><br>

<b>Archived:</b> <i>(Check for Archived)</i>
<input type="checkbox" name="archive"><br><br>

<b>Video Height (Pixels):</b> <i>(256)</i><br>
<input type="text" size="5" name="height"><br><br>

<b>Video Width (Pixels):</b> <i>(256)</i><br>
<input type="text" size="5" name="width"><br><br>

<b>Day:</b> <i>(25)</i><br>
<input type="text" size="2" name="day"><br><br>

<b>Month:</b> <i>(3)</i><br>
<input type="text" size="2" name="month"><br><br>

<b>Year:</b> <i>(2008)</i><br>
<input type="text" size="2" name="year"><br><br>

<font color="red">Make sure you have permission to post videos</a><br>
<input type="submit" value="SUBMIT">
</form>
<br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a>

<br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>
