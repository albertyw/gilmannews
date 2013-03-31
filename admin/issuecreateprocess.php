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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ISSUECREATEPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 3, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST TO CREATE ISSUE
USAGE:		PASSWORDED
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h1>Administration Panel<br>
Create New Issue</h1></center>

<?php
//READ POST VALUES FROM FORM
$issuetable=$_POST['issuetable'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$pdf=$_POST['pdflocation'];
$date = date("F j, Y", mktime(0, 0, 0, $month, $day, $year, 1));

//FIND MAX ID IN TABLE TO FIND NEW TABLE'S ID
$query = "SELECT MAX(id) FROM issuelist";
$result= mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$issueid=$row['MAX(id)']+1;

//ADD ISSUE TO ISSUELIST TABLE
mysql_query("INSERT INTO issuelist
(id,
issuetable,
pdf,
date,
year,
month,
day)
VALUES
('$issueid',
'$issuetable', 
'$pdf', 
'$date', 
'$year', 
'$month', 
'$day')") or die(mysql_error());  
echo 'Issue has been successfully added to the Master Issue Table<br><br>';

//DISPLAY MASTER ISSUE TABLE FIELDS
echo '<b>Issue Created.</b><br><br>';
$query = "SELECT * FROM issuelist WHERE issuetable='$issuetable'";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
echo 'Your issue: <br><br>';
echo 'ID: '.$row['id'].'<br>';
echo 'Issue Table: '.$row['issuetable'].'<br>';
echo 'PDF Location: '.$row['pdf'].'<br>';
echo 'Date: '.$row['date'].'<br>';
echo 'Year: '.$row['year'].'<br>';
echo 'Month: '.$row['month'].'<br>';
echo 'Day: '.$row['day'].'<br>';

//CREATE ISSUE TABLE
$query = "CREATE TABLE $issuetable (
id int( 5 ) NOT NULL AUTO_INCREMENT ,
section varchar( 100 ) NOT NULL default '',
title text NOT NULL ,
article varchar( 100 ) NOT NULL default '',
author text NOT NULL ,
date text NOT NULL ,
text text NOT NULL ,
pictures text NOT NULL ,
comments text NOT NULL ,
PRIMARY KEY ( id )
)";
$result = mysql_query($query) or die(mysql_error());
echo 'Issue table has been successfully created.<br>';
echo 'Update the Google Sitemaps with this new issue.<br>';
echo 'You may want to update about.php with new contributors and/or authors.<br><br>';

?>
<br><br>
<a href="admin.php">Back to Gilmannews.com Administrator Panel</a>


<br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>
