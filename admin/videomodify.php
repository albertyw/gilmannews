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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/VIDEOMODIFY.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	MODIFY VIDEOS
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
Modify Videos</h2></center>
<br>
<?php
$id = $_GET['id'];

//Read Video Table
$query = "SELECT * FROM videos WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
?>


<form action="videomodifyprocess.php" method="POST">
<b>Issue ID: (Selected Automatically)</b> <?php echo $row['id']; ?><br>
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<br>

<b>Section:</b> <i>(Senior Speech)</i><br>
<input type="text" size="20" name="section" value="<?php echo $row['section']; ?>"><br><br>

<b>Browser Title:</b> <i>(Joe Schmoe '08 Senior Speech)</i><br>
Gilman News Online ~~ Videos ~~ <input type="text" size="50" name="browsertitle" value="<?php echo $row['browsertitle'];?>"><br><br>

<b>Title:</b> <i>(Joe Schmoe '08 Senior Speech)</i><br>
<input type="text" size="50" name="title" value="<?php echo $row['title'];?>"><br><br>

<b>flv Location:</b> <i>(http://www.gilmannews.com/videos/seniorspeech/joeschmoe.flv)</i><br>
<input type="text" size="100" name="flvlocation" value="<?php echo $row['flvlocation']; ?>"><br><br>

<b>Download Location:</b> <i>(http://wwww.gilmannews.com/videos/seniorspeech/joeschmoe.mp4)</i><br>
<input type="text" size="100" name="downloadlocation" value="<?php echo $row['downloadlocation']; ?>"><br><br>

<b>Description:</b> <i>(This is the senior speech of Joe Schmoe '08)</i><br>
<textarea cols="100" rows="10" name="description"><?php echo $row['description']; ?></textarea><br><br>

<b>Archived:</b> <i>(Check for Archived)</i>
<input type="checkbox" name="archive" <?php if($row['archive']=='1') echo 'checked'; ?>><br><br>

<b>Video Width (Pixels):</b> <i>(256)</i><br>
<input type="text" size="5" name="width" value="<?php echo $row['width']; ?>"><br><br>

<b>Video Height (Pixels):</b> <i>(256)</i><br>
<input type="text" size="5" name="height" value="<?php echo $row['height']; ?>"><br><br>

<b>Day:</b> <i>(25)</i><br>
<input type="text" size="2" name="day" value="<?php echo $row['day']; ?>"><br><br>

<b>Month:</b> <i>(3)</i><br>
<input type="text" size="2" name="month" value="<?php echo $row['month']; ?>"><br><br>

<b>Year:</b> <i>(2008)</i><br>
<input type="text" size="2" name="year" value="<?php echo $row['year']; ?>"><br><br>

<input type="submit" value="Modify Video"><br><br><br>
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
