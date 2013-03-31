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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/VIDEODELETE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES DELETE REQUEST FROM VIDEODELETE.PHP
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
Delete Video</h2></center>
<br>
<?php
//READ POST VARIABLES SENT FROM FORM
$id = $_POST['id'];
$password = $_POST['password'];

//CHECK PASSWORD/CONFIRM DELETE
$query = "SELECT * FROM administration";
$result = mysql_query($query) or die(mysql_error());
$attempt=false;
while($row=mysql_fetch_array($result)){
	if($login==$row['login'] && $password==$row['password']){
		$attempt=true;
	}
}


if($attempt == true){//CONFIRMATION PASSWORD CORRECT
	
	//READ TABLE DATA
	$query = "SELECT * FROM videos WHERE id = $id";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	echo 'You are deleting this video:<br><br>';
	echo '<b>ID:</b> '.$row['id'].'<br>';
	echo '<b>Section:</b> '.$row['section'].'<br>';
	echo '<b>Browser Title:</b> '.$row['browsertitle'].'<br>';
	echo '<b>Title:</b> '.$row['title'].'<br>';
	echo '<b>Flv Location:</b> '.$row['flvlocation'].'<br>';
	echo '<b>Download Location:</b> '.$row['downloadlocation'].'<br>';
	echo '<b>Description:</b> '.$row['description'].'<br>';
	echo '<b>Archived:</b> '.$row['archive'].'<br>';
	echo '<b>Width:</b> '.$row['height'].'<br>';
	echo '<b>Height:</b> '.$row['width'].'<br>';
	echo '<b>Day:</b> '.$row['day'].'<br>';
	echo '<b>Month:</b> '.$row['month'].'<br>';
	echo '<b>Year:</b> '.$row['year'].'<br>';
	echo '<b>Date:</b> '.$row['date'].'<br>';
	echo '...<br>...<br>...<br>';
	
	//DELETE VIDEO ENTRY
	mysql_query("DELETE FROM videos WHERE id= $id") 
	or die(mysql_error());  
	echo 'Video has successfully been deleted from the Video Table.<br>';
	echo 'You will need to manually delete the video file from public_html/videos/ using an ftp client.<br>';
		
}else{//CONFIRMATION PASSWORD INCORRECT
	echo 'Error: The confirmation password is wrong.  <br>';
	echo 'The Issue was not deleted.';
}
?>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
