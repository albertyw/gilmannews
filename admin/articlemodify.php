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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLEMODIFY.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	MODIFY ARTICLE AFTER SELECTION OF ISSUE IN ARTICLE.PHP
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
Modify Article</h2></center>
<br>
<?php
$articleid = $_GET['id'];
$issuetable = $_GET['issuetable'];

//Read Article
$query = "SELECT * FROM $issuetable WHERE id = $articleid";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
?>


<form action="articlemodifyprocess.php" method="POST">


<b>Issue Table: </b><?php echo $issuetable ?><br>
<input type="hidden" name="issuetable" value="<?php echo $issuetable ?>">
<i>As previously selected by you</i><br>
<br>

<b>ID: </b><?php echo $articleid ?><br>
<input type="hidden" name="articleid" value="<?php echo $articleid ?>">
<i>Selected Automatically</i><br>
<br>

<b>Section: </b><br>
<input type="radio" name="section" value="frontpage" <?php if($row['section']=='Front page') echo 'checked="yes"'; ?>>Front Page<br>
<input type="radio" name="section" value="campus" <?php if($row['section']=='Campus') echo 'checked="yes"'; ?>>Campus<br>
<input type="radio" name="section" value="oped" <?php if($row['section']=='Op/Ed') echo 'checked="yes"'; ?>>Op/Ed<br>
<input type="radio" name="section" value="sports" <?php if($row['section']=='Sports') echo 'checked="yes"'; ?>>Sports<br>
<input type="radio" name="section" value="letters" <?php if($row['section']=='Letters to the Editor') echo 'checked="yes"'; ?>>Letters to the Editor<br>
<br>

<b>Title: </b><input type="text" size="100" name="title" value="<?php echo $row['title']; ?>"><br>
<i>Title.  Only characters that can be found on a keyboard.</i><br>
<br>

<b>Article Keywords: </b><input type="text" size="20" name="article" value="<?php echo $row['article'];?>"><br>
<i>Code Identifier.  First two words in the title.  Only alphanumeric, no special characters or spaces.</i><br>
<br>

<b>Author: </b><input type="text" size="100" name="author" value="<?php echo $row['author'];?>"><br>
<i>First Name, Last Name, Year.  (Albert Wang '08).  Multiple authors are separated by a comma and a space.  Also use "Anonymous" and "Gilman News Staff."  <br>
Names have to be the same so that the website can match multiple articles created by people.</i><br>
<br>

<b>Date: </b><input type="text" size="100" name="date" value="<?php echo $row['date']; ?>"><br>
<i>Month Day, Year (May 20, 2008)</i><br>
<br>

<b>Text: </b><br>
<textarea cols="100" rows="7" name="text"><?php echo $row['text'];?></textarea><br>
<i>Text of the article.  Only characters that can be found on a keyboard.</i><br>
<br>

<b>Pictures:</b><br>
<textarea cols="100" rows="7" name="pictures">
<?php echo $row['pictures']; ?>
</textarea><br>
<br>

<b>Comments:</b><br>
<input type="hidden" name="comments" value="<?php echo $row['comments'];?>">
<?php echo $row['comments']; ?><br>
<i>Add comments by going to the article after you've created it.  Review comments through the Comment Administration section.</i>
<br>

<input type="submit" value="Modify Article">
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
