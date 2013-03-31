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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/PHOTOSMODIFY.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	MODIFY A GALLERY ENTRY CHOSEN AT PHOTOS.PHP
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
Modify Photo Gallery Entry</h2></center>
<br>
<?php
$id = $_GET['id'];

//Read Article
$query = "SELECT * FROM photos WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
?>


<form action="photosmodifyprocess.php" method="POST">

<b>ID: </b><?php echo $id ?><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<i>Selected Automatically</i><br>
<br>
Name/Title: <input type="text" name="title" size="100" value="<?php echo $row['title'];?>"><br>

Section: <input type="text" name="section" size="100" value="<?php echo $row['section'];?>"><br>

Archive: <input type="checkbox" name="archive" <?php if ($row['archive']=='1'){echo 'checked';}?>><br>

Photographer: <input type="text" name="photographer" size="100" value="<?php echo $row['photographer'];?>"><br>

Date: <input type="text" name="date" size="100" value="<?php echo $row['date'];?>"><br>

Location: <input type="text" name="filelocation" size="100" value="<?php echo $row['filelocation'];?>"><br>

<input type="submit" value="Modify Photos">
</form>

<br><br><br>
<a href="photos.php">Back to Photos</a><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
