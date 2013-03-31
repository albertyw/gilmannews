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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/COMMENTSMODIFY.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	MODIFY AND/OR APPROVE A COMMENT AFTER SELECTION IN COMMENTS.PHP
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
Modify Comment</h2></center>
<br>
<?php
$id = $_GET['id'];

//Read Article
$query = "SELECT * FROM comments WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
?>


<form action="commentsmodifyprocess.php" method="POST">

<b>ID: </b><?php echo $id ?><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<i>Selected Automatically</i><br>
<br>

<b>Issue: </b><?php echo $row['issuetable'] ?><br>
<i>Selected Automatically</i><br>
<br>

<b>Article: </b><?php echo $row['article'] ?><br>
<i>Selected Automatically</i><br>
<br>

<b>Approval: </b><input type="checkbox" name="approval" 
<?php if($row['approval']=='1') echo 'checked';?>
><br>
<br>

<b>Name: </b><input type="text" size="20" name="name" value="<?php echo $row['name'];?>"><br>
<br>

<b>Comment: </b><textarea cols="50" rows="3" name="comment"><?php echo $row['comment'] ?></textarea><br>
<br>

<input type="submit" value="Modify Comment">
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
