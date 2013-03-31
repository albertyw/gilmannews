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
$personallogin=$_SESSION['login'];
?>
<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ACCOUNTSDELETEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUESTS TO DELETE ACCOUNTS
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
Delete Accounts</h2></center>
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
	if($personallogin==$row['login'] && $confirmpassword==$row['password']){
		$attempt=true;
	}
}


if($attempt == true){//CONFIRMATION PASSWORD CORRECT	
	//READ ACCOUNT DATA
	$query = "SELECT * FROM administration WHERE id = $id";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	echo 'You are deleting this account:<br><br>';
	echo '<b>ID:</b> '.$row['id'].'<br>';
	echo '<b>Login:</b> '.$row['login'].'<br>';
	$password=$row['password'];
	$passlength=strlen($password)-1;
	$password=substr($password,0,1);
	echo "<b>Password:</b> $password";
	for ($passcounter=1; $passcounter<=$passlength; $passcounter++){
		echo '*';
	}
	echo '<br>';
	echo '<b>Last Login:</b> '.$row['lastlogin'].'<br>';
	echo '...<br>...<br>...<br>';
	
	//DELETE ACCOUNT FROM ADMINISTRATION TABLE
	mysql_query("DELETE FROM administration WHERE id= $id") 
	or die(mysql_error());  
	echo 'Account has successfully been deleted from the Administration Table.<br>';
		
}else{//CONFIRMATION PASSWORD INCORRECT
	echo 'Error: The confirmation password is wrong.  <br>';
	echo 'The Issue was not deleted.';
}
?>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
