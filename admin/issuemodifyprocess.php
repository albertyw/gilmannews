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
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/ISSUEMODIFYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 3, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUESTS TO MODIFY ISSUES
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
$issueid = $_POST['issueid'];
$issuetable = $_POST['issuetablenew'];
$issuetableold = $_POST['issuetableold'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$pdf = $_POST['pdf'];
$date = date("F j, Y", mktime(0,0,0,$month,$day,$year));

echo 'Modifying issue...<br>';
echo '...<br>...<br>...<br>';

//CHANGE MYSQL TABLE'S NAME
$result = mysql_query("ALTER TABLE $issuetableold RENAME $issuetablenew")
or die(mysql_error());

//ALTER ISSUE INFORMATION
$result = mysql_query("UPDATE issuelist SET issuetable='$issuetable' WHERE id='$issueid'")
or die(mysql_error());
$result = mysql_query("UPDATE issuelist SET pdf='$pdf' WHERE id='$issueid'")
or die(mysql_error());
$result = mysql_query("UPDATE issuelist SET date='$date' WHERE id='$issueid'")
or die(mysql_error());
$result = mysql_query("UPDATE issuelist SET year='$year' WHERE id='$issueid'")
or die(mysql_error());
$result = mysql_query("UPDATE issuelist SET month='$month' WHERE id='$issueid'")
or die(mysql_error());
$result = mysql_query("UPDATE issuelist SET day='$day' WHERE id='$issueid'")
or die(mysql_error());



echo '<b>Issue Changed.</b><br><br>';
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

echo 'You may want to update about.php with new contributors and/or authors.<br><br>';
?>

<a href="admin.php">Back to Gilmannews.com Administrator Panel</a><br><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
