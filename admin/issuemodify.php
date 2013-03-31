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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ISSUEMODIFY.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	MODIFY NEWSPAPER ISSUES
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
Modify Issue</h2></center>
<br>
<?php
$issueid = $_GET['id'];

//Read Article
$query = "SELECT * FROM issuelist WHERE id = $issueid";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
?>


<form action="issuemodifyprocess.php" method="POST">
<b>Issue ID:</b> <?php echo $row['id']; ?><br>
<input type="hidden" name="issueid" value="<?php echo $row['id'];?>">
<i>Selected Automatically</i><br>
<br>

<b>Issue table:</b>
<input type="text" name="issuetablenew" size="20" value="<?php echo $row['issuetable'];?>"><br>
<i>Each issue is given a MySQL table such as 2008marcharticles.  </i><br>
<br>
<input type="hidden" name="issuetableold" value="<?php echo $row['issuetable'];?>">

<b>Month:</b>
<input type="text" name="month" size="2" value="<?php echo $row['month'];?>"><br>
<i>Month the issue is published.  Use numbers.  (e.g. 3)</i><br>
<br>

<b>Day:</b>
<input type="text" name="day" size="2" value="<?php echo $row['day'];?>"><br>
<i>Day the issue is published.  Use numbers.  (e.g., 4)</i><br>
<br>

<b>Year:</b>
<input type="text" name="year" size="4" value="<?php echo $row['year'];?>"><br>
<i>Year the issue is published.  Use numbers.  (e.g. 2008)</i><br>
<br>

<b>PDF Address:</b>
<input type="text" name="pdf" size="100" value="<?php echo $row['pdf'];?>"><br>
<i>Location of the print issue pdf.  (e.g., http://www.gilmannews.com/2007-2008/GNewsApril_25_2008Issue.pdf)</i><br>
<br>

<input type="submit" value="Modify Issue"><br><br><br>
</form>

<br><br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
