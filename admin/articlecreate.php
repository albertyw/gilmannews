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
ADDRESS: HTTP://WWW.GILMANNEWS.COM/ADMIN/ARTICLECREATE.PHP
STATUS: FINISHED
LAST MODIFIED: JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION: CREATE ARTICLE AFTER SELECTING ISSUE IN ARTICLE.PHP AND ARTICLE2.PHP
USAGE: PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h2>Administration Panel<br>
Create Article</h2></center>
<br>
<?php
$issuetable = $_GET['issuetable'];

//FIND MAX ID IN TABLE TO FIND NEW ARTICLE'S ID
$query = "SELECT MAX(id) FROM $issuetable";
$result= mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$articleid=$row['MAX(id)']+1;

?>
<form action="articlecreateprocess.php" method="POST">

<b>Issue Table: </b><?php echo $issuetable ?><br>
<input type="hidden" name="issuetable" value="<?php echo $issuetable ?>">
<i>As previously selected by you</i><br>
<br>

<b>ID: </b><?php echo $articleid ?><br>
<input type="hidden" name="articleid" value="<?php echo $articleid ?>">
<i>Selected Automatically</i><br>
<br>

<b>Section: </b><br>
<input type="radio" name="section" value="frontpage">Front Page<br>
<input type="radio" name="section" value="campus">Campus<br>
<input type="radio" name="section" value="oped">Op/Ed<br>
<input type="radio" name="section" value="sports">Sports<br>
<input type="radio" name="section" value="letters">Letters to the Editor<br>
<br>

<b>Title: </b><input type="text" size="100" name="title"><br>
<i>Title.  Only characters that can be found on a keyboard.</i><br>
<br>

<b>Article Keywords: </b><input type="text" size="20" name="article"><br>
<i>Code Identifier.  First two words in the title.  Only alphanumeric, no special characters or spaces.</i><br>
<br>

<b>Author: </b><input type="text" size="100" name="author"><br>
<i>First Name, Last Name, Year.  (Albert Wang '08).  Multiple authors are separated by a comma and a space.  Also use "Anonymous" and "Gilman News Staff."  <br>
Names have to be the same so that the website can match multiple articles created by people.</i><br>
<br>

<b>Date: </b><input type="text" size="100" name="date"><br>
<i>Month Day, Year (May 20, 2008)</i><br>
<br>

<b>Text: </b><br>
<textarea cols="100" rows="7" name="text"></textarea><br>
<i>Text of the article.  Only characters that can be found on a keyboard.</i><br>
<br>

<b>Pictures:</b><br>
<textarea cols="100" rows="7" name="pictures">
<a href="img/issues/.jpg">
<img src="img/issues/thumb.jpg">
</a><br>
[Subtitle here]
<br><br>
</textarea><br>
<i>Use the above format.  Link is to the full size image, img is to the thumbnail.  </i><br>
<br>

<b>Comments:</b> N/A<br>
<i>Add comments by going to the article after you've created it.  Review comments through the Comment Administration section.</i>
<br>

<input type="submit" value="Create Article">
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
