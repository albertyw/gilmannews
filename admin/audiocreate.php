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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/AUDIOCREATE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	CREATE AUDIO ENTRIES
USAGE:		PASSWORDED
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel<br>
Create Audio Entry</h2></center>

<?php
//FIND MAX ID IN VIDEO TABLE TO FIND NEW VIDEO'S ID
$query = "SELECT MAX(id) FROM audio";
$result= mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$id=$row['MAX(id)']+1;

?>


<form action="audiocreateprocess.php" method="POST">
<b>ID: </b><?php echo $id ?><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<i>Selected Automatically</i><br>
<br>

<b>Section:</b> <i>(Senior Speech)</i><br>
<input type="text" size="20" name="section"><br><br>

<b>Browser Title:</b> <i>(Joe Schmoe '08 Senior Speech)</i><br>
Gilman News Online ~~ Audio ~~ <input type="text" size="50" name="browsertitle"><br><br>

<b>Title:</b> <i>(Joe Schmoe '08 Senior Speech)</i><br>
<input type="text" size="50" name="title"><br><br>

<b>File Location:</b> <i>(http://www.gilmannews.com/audio/seniorspeech/joeschmoe.mp3)</i><br>
<input type="text" size="100" name="flvlocation" value="http://www.gilmannews.com/audio/"><br>
<i>The embedded audio player will only accept mp3 files.  Do not use other audio formats.</i><br>

<b>Description:</b> <i>(This is the senior speech of Joe Schmoe '08)</i><br>
<textarea cols="100" rows="10" name="description"></textarea><br><br>

<b>Archived:</b> <i>(Check for Archived)</i>
<input type="checkbox" name="archive"><br><br>

<b>Day:</b> <i>(25)</i><br>
<input type="text" size="2" name="day"><br><br>

<b>Month:</b> <i>(3)</i><br>
<input type="text" size="2" name="month"><br><br>

<b>Year:</b> <i>(2008)</i><br>
<input type="text" size="2" name="year"><br><br>
<input type="submit" value="SUBMIT">
</form>

<br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a>

<br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>
