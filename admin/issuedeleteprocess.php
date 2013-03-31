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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ISSUEDELETEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST TO DELETE ISSUE
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
Delete Issue</h2></center>
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
	
	//READ ISSUE DATA
	$query = "SELECT * FROM issuelist WHERE id = $id";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	echo 'You are deleting this issue:<br><br>';
	echo 'ID: '.$row['id'].'<br>';
	echo 'Issue Table: '.$row['issuetable'].'<br>';
	$issuetable=$row['issuetable'];
	echo 'PDF Location: '.$row['pdf'].'<br>';
	echo 'Date: '.$row['date'].'<br>';
	echo 'Year: '.$row['year'].'<br>';
	echo 'Month: '.$row['month'].'<br>';
	echo 'Day: '.$row['day'].'<br>';
	echo '...<br>...<br>...<br>';
	
	//DELETE ISSUE FROM ISSUELIST
	mysql_query("DELETE FROM issuelist WHERE id= $id") 
	or die(mysql_error());  
	echo 'Issue has successfully been deleted from the Master Issue Table.<br>';
	
	//DELETE ISSUE TABLE
	mysql_query("DROP TABLE if exists $issuetable") or die(mysql_error());
	echo 'Issue table has been successfully been deleted.<br>';
	
}else{//CONFIRMATION PASSWORD INCORRECT
	echo 'Error: The confirmation password is wrong.  <br>';
	echo 'The Issue was not deleted.';
}
?>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
