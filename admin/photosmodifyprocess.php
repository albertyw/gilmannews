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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/PHOTOSMODIFYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST TO MODIFY A PHOTOS ENTRY FROM PHOTOSMODIFY.PHP
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
Modify Photos</h2></center>
<br>

<?php
$id=$_POST['id'];
$title=$_POST['title'];
$section=$_POST['section'];
$archive=isset($_POST['archive']);
if($archive==true){$archive='1';}else{$archive='0';}
$photographer=$_POST['photographer'];
$date=$_POST['date'];
$filelocation=$_POST['filelocation'];

echo 'Modifying photo entry...<br>';
echo '...<br>...<br>...<br>';


$result = mysql_query("UPDATE photos SET title='$title' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE photos SET section='$section' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE photos SET archive='$archive' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE photos SET photographer='$photographer' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE photos SET date='$date' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE photos SET filelocation='$filelocation' WHERE id='$id'")
or die(mysql_error());




//Display confirmation
echo '<b>Photo Gallery Modified.</b><br><br>';
$query = "SELECT * FROM photos WHERE title='$title'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo '<b>Gallery Information:</b><br>';
echo "<b>ID:</b> ".$row['id']."<br>";
echo '<b>Section</b> '.$row['section'].'<br>';
echo "<b>Title:</b> ".$row['title']."<br>";
echo '<b>Archived:</b> '.$row['archive'].'<br>';
echo '<b>Photographer:</b> '.$row['photographer'].'<br>';
echo '<b>Date:</b> '.$row['date'].'<br>';
echo '<b>File Location:</b> <a href="'.$row['filelocation'].'">'.$row['filelocation'].'</a><br>';



?>
<br><br><br>
<a href="photos.php">Back to Photos</a><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
