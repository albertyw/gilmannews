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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/AUDIOMODIFYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUESTS TO MODIFY AUDIO ENTRIES
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
Modify Audio</h2></center>
<br>

<?php
$id = $_POST['id'];
$section = $_POST['section'];
$browsertitle=$_POST['browsertitle'];
$title=$_POST['title'];
$filelocation=$_POST['filelocation'];
$description=$_POST['description'];
$archive=isset($_POST['archive']);
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$date = date("F j, Y", mktime(0, 0, 0, $month, $day, $year, 1));

echo 'Modifying Audio Entry...<br>';
echo '...<br>...<br>...<br>';

//ALTER AUDIO INFORMATION
$result = mysql_query("UPDATE audio SET section='$section' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET browsertitle='$browsertitle' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET title='$title' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET filelocation='$filelocation' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET description='$description' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET archive='$archive' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET year='$year' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET month='$month' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET day='$day' WHERE id='$id'")
or die(mysql_error());
$result = mysql_query("UPDATE audio SET date='$date' WHERE id='$id'")
or die(mysql_error());



echo '<b>Audio Information Changed.</b><br><br>';
$query = "SELECT * FROM audio WHERE id='$id'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo 'Audio information: ';
echo 'Audio ID: '.$row['id'].'<br>';
echo 'Section: '.$row['section'].'<br>';
echo 'Browser Title: '.$row['section'].'<br>';
echo 'Title: '.$row['title'].'<br>';
echo 'File Location: <a href='.$row['filelocation'].'>'.$row['filelocation'].'</a><br>';
echo 'Description: '.$row['description'].'<br>';
echo 'Archive: '.$row['archive'].'<br>';
echo 'Day: '.$row['day'].'<br>';
echo 'Month: '.$row['month'].'<br>';
echo 'Year: '.$row['year'].'<br>';
echo 'Date: '.$row['date'].'<br>';


?>

<a href="audio.php">Back to Audio</a><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
