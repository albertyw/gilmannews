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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/VIDEOMODIFYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUESTS TO MODIFY VIDEOS
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
$id = $_POST['id'];
$section = $_POST['section'];
$browsertitle=$_POST['browsertitle'];
$title=$_POST['title'];
$flvlocation=$_POST['flvlocation'];
$downloadlocation=$_POST['downloadlocation'];
$description=$_POST['description'];
$archive=isset($_POST['archive']);
$height = $_POST['height'];
$width = $_POST['width'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$date = date("F j, Y", mktime(0, 0, 0, $month, $day, $year, 1));

echo 'Modifying video...<br>';
echo '...<br>...<br>...<br>';

//ALTER VIDEO INFORMATION
$result = mysql_query("UPDATE videos SET section='$section' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET browsertitle='$browsertitle' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET title='$title' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET flvlocation='$flvlocation' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET downloadlocation='$downloadlocation' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET description='$description' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET archive='$archive' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET height='$height' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET width='$width' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET year='$year' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET month='$month' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET day='$day' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE videos SET date='$date' WHERE id='$id'")
or die(mysql_error());



echo '<b>Video Information Changed.</b><br><br>';
$query = "SELECT * FROM videos WHERE id='$id'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo '<a href="http://www.gilmannews.com/videos.php?videoId='.$row['id'].'">View the video page</a><br><br>';
echo 'Video information: <br>';
echo 'Video ID: '.$row['id'].'<br>';
echo 'Section: '.$row['section'].'<br>';
echo 'Browser Title: '.$row['section'].'<br>';
echo 'Title: '.$row['title'].'<br>';
echo 'Flv File Location: <a href='.$row['flvlocation'].'>'.$row['flvlocation'].'</a><br>';
echo 'Download File Location: <a href='.$row['downloadlocation'].'>'.$row['downloadlocation'].'</a><br>';
echo 'Description: '.$row['description'].'<br>';
echo 'Archive: '.$row['archive'].'<br>';
echo 'Height: '.$row['height'].'<br>';
echo 'Width: '.$row['width'].'<br>';
echo 'Day: '.$row['day'].'<br>';
echo 'Month: '.$row['month'].'<br>';
echo 'Year: '.$row['year'].'<br>';
echo 'Date: '.$row['date'].'<br>';


?>

<a href="video.php">Back to Videos</a><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
