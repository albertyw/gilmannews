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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ACCOUNTSMODIFY.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	MODIFY AN ACCOUNT AFTER SELECTION IN ACCOUNTS.PHP WITHOUT SHOWING PASSWORD
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
Modify Account</h2></center>
<br>
<?php
$id = $_GET['id'];

//Read Article
$query = "SELECT * FROM administration WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
?>


<form action="accountsmodifyprocess.php" method="POST">

<b>ID: </b><?php echo $id ?><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<i>Selected Automatically</i><br>
<br>

<b>User Name: </b><input type="text" size="20" name="login" value="<?php echo $row['login'];?>"><br>
<br>

<b>Password: </b><input type="text" size="20" name="password"><br>
<br>

If you want to delete this article, please type in YOUR password again to confirm:
<input type="password" length="20" name="confirmpassword"><br>

<input type="submit" value="Modify Account">
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
