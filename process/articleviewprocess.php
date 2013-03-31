<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~ Read an Article ~~ Add A Comment
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/PROCESS/ARTICLEVIEWPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 3, 2008 BY ALBERT WANG '08
DESCRIPTION:	PROCESSES REQUEST TO ADD COMMENT TO ARTICLES
USAGE:		SERVER/PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>



<center><h1>Comments</h1>
<?php
//VARIABLE LOADING FROM ARTICLEVIEW.PHP FORM
$issue=$_POST['issue'];
$article=$_POST['article'];
$name=$_POST['name'];
$comment=$_POST['comment'];

//TITLE OF ARTICLE
echo '<h2>'.$title.'</h2></center>';
echo '<br>';

//reCAPTCHA STUFF
//DO NOT CHANGE
require_once('recaptchalib.php');
$privatekey = "6LdqOQAAAAAAAI5vd_fWfwXnxKi7uPCE-xL2TY3a";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {//ReCAPTCHA not correct
	echo "The reCAPTCHA wasn't entered correctly. Go back and try it again.";
	//FOR DEBUGGING USE:
	//echo "(reCAPTCHA said: " . $resp->error. ")";
}
//END reCAPTCHA


//DESANITIZING USER INPUT, MAKING SURE NO MALICIOUS CODE IS ENTERED
//HTML INJECTION PREVENTION
$name=htmlentities($name);
$comment=htmlentities($comment);

//TOO LONG INPUT LENGTH PREVENTION
if(strlen($comment)>1000){
	echo "Sorry, the comment is too long";
	include("/home/gnews/public_html/process/footer.php");
	die();
}
if(strlen($name)>100){
	echo "Sorry, the name is too long";
	include("/home/gnews/public_html/process/footer.php");
	die();
}


//MYSQL INJECTION PREVENTION
$name=mysql_real_escape_string($name);
$comment=mysql_real_escape_string($comment);
//END DESANTIZATION
//ALL VARIABLES CAN BE CONSIDERED CLEAN AFTER HERE


//CAN CHANGE AFTER HERE
if($resp->is_valid){//RECAPTCHA IS CONFIRMED
	//DATABASE UPDATING
	
	//FIND MAX ID IN TABLE TO FIND NEW ARTICLE'S ID
	$query = "SELECT MAX(id) FROM comments";
	$result= mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$id=$row['MAX(id)']+1;
	
	//Send Update to database
	mysql_query("INSERT INTO comments
		(id,
		issuetable,
		article,
		approval,
		name,
		comment)
		VALUES
		('$id',
		'$issue',
		'$article',
		'0',
		'$name',
		'$comment') ") or die(mysql_error());
	
	//USER OUTPUT
	echo 'You have submitted: <br>';
	echo '<b>'.$name.'<br>'.
		date("l, F d, Y").'</b><br>'.
		$comment;
	echo '<br>';
	echo 'The Gilman News Online Editor will review your comment before it is posted.  Thank you.<br><br>';
	echo '<a href="http://www.gilmannews.com/articleview.php?article='.$article.'&table='.$issue.'">Back to the Article</a>';
}
?>

<?php include("/home/gnews/public_html/process/footer.php");?>
