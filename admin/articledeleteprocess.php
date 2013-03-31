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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLEDELETEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUESTS TO DELETE ARTICLES
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
Delete Article</h2></center>
<br>
<?php
//READ POST VARIABLES SENT FROM FORM
$id = $_POST['id'];
$issuetable = $_POST['issuetable'];
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
	
	//READ ARTICLE DATA
	$query = "SELECT * FROM $issuetable WHERE id = $id";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	echo 'You are deleting this article:<br><br>';
	echo '<b>Issue Table:</b> '.$issuetable.'<br>';
	echo '<b>ID:</b> '.$row['id'].'<br>';
	echo '<b>Section:</b> '.$row['section'].'<br>';
	echo '<b>Title:</b> '.$row['title'].'<br>';
	echo '<b>Article Keywords:</b> '.$row['article'].'<br>';
	echo '<b>Author:</b> '.$row['author'].'<br>';
	echo '<b>Date:</b> '.$row['date'].'<br>';
	echo '<b>Text:</b> '.$row['text'].'<br>';
	echo '<b>Pictures:</b> '.$row['pictures'].'<br>';
	echo '<b>Comments:</b> '.$row['comments'].'<br>';
	echo '...<br>...<br>...<br>';
	
	//DELETE ACCOUNT FROM ISSUE TABLE
	mysql_query("DELETE FROM $issuetable WHERE id= $id") 
	or die(mysql_error());  
	echo 'Article has successfully been deleted from the Article Table.<br>';
		
}else{//CONFIRMATION PASSWORD INCORRECT
	echo 'Error: The confirmation password is wrong.  <br>';
	echo 'The Issue was not deleted.';
}
?>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
