<?php
//CHECK ADMIN CREDENTIALS
session_start();
if(!isset($_SESSION['login'])){//IF LOGIN IS INCORRECT, REDIRECT TO LOGIN PAGE
	echo '<script type="text/javascript">
	<!--
	window.location = "http://www.gilmannews.com/admin/login.php"
	//-->
	</script>';
	echo 'Bad Login<br>';
	echo '<a href="http://www.gilmannews.com/admin/login.php">';
	die();
}//REMEMBER LOGIN
$login=$_SESSION['login'];
?>

<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/PHOTOSADDPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST FROM PHOTOS.PHP TO ADD TO PHOTOS GALLERY
USAGE:		PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h1>Administration Panel</h1>
<h2>Adding Photo Galleries</h2>
</center>

<?php
//Save variables from photos.php
$title=$_POST['title'];
$section=$_POST['section'];
$archive=isset($_POST['archive']);
if ($archive==true){$archive='1';}else{$archive='0';}
$photographer=$_POST['photographer'];
$date=$_POST['date'];
$filelocation=$_POST['filelocation'];


echo 'Adding gallery to database...<br>';
echo '...<br>...<br>...<br>';

//Add values to photos table
mysql_query("INSERT INTO photos
 (section,
 title,
 archive,
 photographer,
 date,
 filelocation)
VALUES
('$section',
'$title',
'$archive',
'$photographer',
'$date',
'$filelocation') ") or die(mysql_error());

//Display confirmation
echo '<b>Gallery Created.</b><br><br>';
$query = "SELECT * FROM photos WHERE title='$title'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo '<b>Gallery Information:</b><br>';
echo "<b>ID:</b> ".$row['id']."<br>";
echo '<b>Section</b> '.$row['section'].'<br>';
echo "<b>Title:</b> ".$row['title']."<br>";
echo '<b>Archive:</b> '.$row['archive'].'<br>';
echo '<b>Photographer:</b> '.$row['photographer'].'<br>';
echo '<b>Date:</b> '.$row['date'].'<br>';
echo '<b>File Location:</b> <a href="'.$row['filelocation'].'">'.$row['filelocation'].'</a><br>';

?>
<br><br>
<a href="photos.php">Back to Photos</a><br>
<a href="admin.php">Back to Admin</a><br>

<?php include("/home/gnews/public_html/process/footer.php");?>
