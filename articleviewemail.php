<?php include("/home/gnews/public_html/process/headeropen.php");?>
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ARTICLEVIEWEMAIL.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 1, 2008 BY ALBERT WANG '08
DESCRIPTION:	EMAILS ARTICLES CHOSEN BY ARTICLEVIEW.PHP
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls

//Article Checking
$table=$_GET['table'];//Find Which Table
$article=$_GET['article'];//Find Which Article
if($table==null || $table=='')
	$table = findLatestTable($table);//If Table Isn't Specified, Default to Latest Table
$checkURL=malformedURLChecker($article,$table);//Make Sure Table and Article Exists
if($checkURL){//Table and Article Found
	$titleBar = titleBar($article, $table);
}else{//Table and Article Not Found
	$titleBar = 'Bad Address';
}
//End Article Checking
echo 'Gilman News Online ~ E-mail an Article ~ '.$titleBar;


?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<?php
if(!$checkURL){//Cannot find table or article
	echo '<center>Wrong Address<br>';
	echo '<a href="http://www.gilmannews.com/">Back to Home</a>';
	include("/home/gnews/public_html/process/footer.php");//Include the footer
	die();//End Document
}


$query = "SELECT * FROM $table WHERE article='$article'";//Select Article
$result = mysql_query($query) or die(mysql_error());//Get Article From mySQL
$row = mysql_fetch_array($result);

echo '<div class="articleview_title">'.$row['title'].'</div>';//Title
echo '<h2>E-mail</h2>';
echo '<form action="process/articleviewemailprocess.php" method="post">';
echo 'Recipient E-mail Address: <input type="text" name="to" size="20"><br>';//Recipient
echo 'Your E-mail Address: <input type="text" name="from" size="20"><br>';//Sender
echo 'Subject: <input type="text" name="subject" size="80" value="'.$row['title'].'"><br>';//Subject
echo 'Message:<br>';//Message
echo '<textarea name="message" rows="30" cols="100">';
echo $row['title']."\n";
echo $row['author']."\n";
echo $row['date']."\n";
echo 'http://www.gilmannews.com/articleview.php?article='.$article.'&table='.$table."\n\n";
$text = str_replace("<p>", "", $row['text']);
$text = str_replace("</p>", "\n\n", $text);
echo $text;
echo '</textarea><br>';
echo 'Send a copy to yourself: <input type="checkbox" name="sendback"><br>';
require_once('process/recaptchalib.php');//reCAPTCHA
$publickey = "6LdqOQAAAAAAANyeh6IlS-WNbARnGbWGcQM0j7YX";
echo '<input type="hidden" name="table" value="'.$table.'">';
echo '<input type="hidden" name="article" value="'.$article.'">';
require_once('process/recaptchalib.php');//ReCAPTCHA
$publickey = "6LdqOQAAAAAAANyeh6IlS-WNbARnGbWGcQM0j7YX";
echo recaptcha_get_html($publickey);
echo '<input type="submit" value="Send"><br>';//Submit
echo '</form>';
echo '<br><br><br>';
echo "<a href=\"http://www.gilmannews.com/articleview.php?article=$article&table=$table \">Back to the article</a><br>";
?>

<?php include("/home/gnews/public_html/process/footer.php");?>










<?php
//FUNCTIONS START HERE
function titleBar($article, $table){
	//Searches the issue and finds the title of the article and returns it as a variable
	findLatestTable($table);
	$query = "SELECT * FROM $table";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		if($article==$row['article']){
			return $row['title'];
		}
	}
}

function malformedURLChecker($article, $table){
	//Returns true if $article and $table point to an article
	//Returns false if $article and $table don't point to an article
	
	if(($table==null || $table=='') && ($article!=null || $article!='')){
		$table = findLatestTable($table);
	}//If the table isn't found, go with the default table (the latest table)
	$query = "SELECT * FROM issuelist";//Search the issuelist table
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		if($row['issuetable']==$table){
			$tableFound=true;
		}
	}
	if(!$tableFound){//The Table isn't found, so URL is wrong
		return false;
	}
	
	$query = "SELECT * FROM $table";//Search the target table
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		if($row['article']==$article){
			$articleFound=true;
		}
	}
	if(!$articleFound){//The Article isn't found so the URL is wrong
		return false;
	}
	if($articleFound && $tableFound){//Both the article and the table are found so the URL is right
		return true;
	}
}


?>
