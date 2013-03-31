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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/COMMENTSDELETEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUESTS TO DELETE COMMENT
USAGE:		PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel<br>
Delete Comment</h2></center>
<br>
<?php
//READ POST VARIABLES SENT FROM FORM
$id = $_POST['id'];
$confirmpassword = $_POST['confirmpassword'];

//CHECK PASSWORD/CONFIRM DELETE
$query = "SELECT * FROM administration";
$result = mysql_query($query) or die(mysql_error());
$attempt=false;
while($row=mysql_fetch_array($result)){
	if($login==$row['login'] && $confirmpassword==$row['password']){
		$attempt=true;
	}
}


if($attempt == true){//CONFIRMATION PASSWORD CORRECT	
	//READ ACCOUNT DATA
	$query = "SELECT * FROM comments WHERE id = $id";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	echo 'You are deleting this comment:<br><br>';
	echo "<b>ID:</b> $id<br>";
	echo '<b>Issue:</b> '.$row['issuetable'].'<br>';
	echo '<b>Article:</b> '.$row['article'].'<br>';
	echo '<b>Approval:</b> '.$row['approval'].'<br>';
	echo '<b>Name:</b> '.$row['name'].'<br>';
	echo '<b>Comment:</b> '.$row['comment'];
	echo '<br><br>';
	echo '...<br>...<br>...<br>';
	
	//DELETE ACCOUNT FROM COMMENT TABLE
	mysql_query("DELETE FROM comments WHERE id= $id") 
	or die(mysql_error());  
	echo 'Comment has successfully been deleted from the Comment Table.<br>';
		
}else{//CONFIRMATION PASSWORD INCORRECT
	echo 'Error: The confirmation password is wrong.  <br>';
	echo 'The Issue was not deleted.';
}
?>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
