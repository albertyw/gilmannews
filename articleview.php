<?php include("/home/gnews/public_html/process/headeropen.php");?>
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ARTICLEVIEW.PHP
STATUS:		MAINTANCE NEEDED: DISPLAY OF COMMENTS
LAST MODIFIED:	JUNE 3, 2008 BY ALBERT WANG '08
DESCRIPTION:	SHOWS INDIVIDUAL ARTICLES
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
$articleview_comments=true;
$downloadprintissue=true;
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
echo 'Gilman News Online ~ Read an Article ~ '.$titleBar;


?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>



<div class="downloadprintissue">
Download the whole print issue: <?php downloadissuelink($table); ?> <sub><sub>(PDF Format) </sub></sub>
</div>

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
echo '<div class="articleview_author">'.$row['author'].'</div>';//Author
echo '<div class="articleview_date">'.$row['date'].'</div>';//Date

if($row['pictures']!=null && $row['pictures']!=''){//See if there are pictures
	echo '<div id="articleview_pictures">';
	echo $row['pictures'];//Display Pictures
	echo '</div>';
}
//Link Row
//echo '<div class="articleview_cmid">';
echo '<table border="0"><tr><td>';
echo '<a href="http://www.new.facebook.com/share.php?u=http%3A%2F%2Fwww.gilmannews.com%2Farticleview.php%3Farticle%3D'.$article.'%26table%3D'.$table.'">';
echo '<img src="http://www.gilmannews.com/img/web/facebook.png" border="0"></a></td><td width="10"></td><td>';//Add to Facebook Link
echo '<a href="http://www.gilmannews.com/articleviewemail.php?article='.$article.'&table='.$table.'">';
echo '<img src="http://www.gilmannews.com/img/web/email.png" border="0"></a></td><td width="10"></td><td>';//Email Page Link
echo '<table class="articleview_cmidtable"><tr><td rowspan="2">';
echo '<img src="http://www.gilmannews.com/img/web/print.png" border="0">';
echo '</td><td>';
echo '<a href="http://www.gilmannews.com/articleviewprint.php?article='.$article.'&table='.$table.'&print=full">Text+Pictures</a>';
echo '</td></tr><tr><td>';
echo '<a href="http://www.gilmannews.com/articleviewprint.php?article='.$article.'&table='.$table.'&print=text">Text Only</a>';
echo '</td></tr></table>';
echo '</td></tr></table>';
//echo '</div>'; //class="articleview_cmid"
if($row['pictures']==null && $row['pictures']==''){//If there aren't any pictures, use a two column format
	$text=$row['text'];
	$textlength=strlen($text);
	$firsttext = substr($text, 0, floor($textlength/2));
	$secondtext = substr($text, floor($textlength/2), ceil($textlength/2));
	$firsttextreverse = strrev($firsttext);
	$closestfirsttext = strpos($firsttextreverse, '>p/<');
	$closestsecondtext = strpos($secondtext, '<p>');
	if($closestfirsttext<=$closestsecondtext){
		echo '<table border="0"><tr><td>';
		echo strrev(stristr($firsttextreverse, '>p/<'));
		echo '</td><td>';
		echo strrev(str_replace(stristr($firsttextreverse, '>p/<'), '', $firsttextreverse));
		echo $secondtext;
		echo '</td></tr></table>';
	}else{
		echo '<table border="0"><tr><td>';
		echo $firsttext;
		echo str_replace(stristr($secondtext, '<p>'), '', $secondtext);
		echo '</td><td>';
		echo stristr($secondtext, '<p>');
		echo '</td></tr></table>';
	}
}else{
	echo $row['text'];//Display Article Text Regularly
}
echo '<br><br>';
?>

<br><br>
<div id="articleview_endpictures">
<?php /* Make Sure Pictures don't overflow */ ?>
<hr>
</div>


<center><h3>Comments</h3></center>
<div id="articleview_comments">
<?php
$query = "SELECT * FROM comments";//Select Article
$result = mysql_query($query) or die(mysql_error());//Get Article From mySQL
while($row = mysql_fetch_array($result)){
	if($article==$row['article'] && $table==$row['issuetable'] && $row['approval']=='1'){
		echo '<b>Name:</b> '.$row['name'].'<br>';
		echo $row['comment'];
		echo '<br><br>';
		$commentsexist=true;
	}
}
if($commentsexist==false){
	echo 'There have been no comments.  Submit one yourself.<br>';
}
?>
</div>
<center><h3>Add Your Comments</h3></center>
<div class="articleview_comments">
<?php
echo '<form action="process/articleviewprocess.php" method="POST">';//Send the Form Input to articleviewprocess.php to process
echo '<table border="0"><tr><td>Name:</td><td><input type="text" name="name" size="20"></td></tr>';
echo '<tr><td>Comment:</td><td><textarea cols="70" rows="5" name="comment"></textarea></td></tr></table>';
echo '<input type="hidden" name="issue" value="'.$table.'">';
echo '<input type="hidden" name="article" value="'.$article.'">';
require_once('process/recaptchalib.php');
$publickey = "6LdqOQAAAAAAANyeh6IlS-WNbARnGbWGcQM0j7YX";
echo recaptcha_get_html($publickey);
echo '<input type="submit" value="Submit">';
echo '</form>';
?>
</div>

<hr>
<center><h3>Other Articles in this Edition</h3></center>
<?php
$query = "SELECT * FROM $table";
$result = mysql_query($query) or die(mysql_error());
echo '<ul>';
while($row = mysql_fetch_array($result)){
	echo '<li><a href="articleview.php?article='.$row['article'].'&table='.$table.'">'.$row['title'].'</a></li>';
}
echo '</ul>';
?>

<?php include("/home/gnews/public_html/process/footer.php");?>










<?php
function titleBar($article, $table){
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
	}
	$query = "SELECT * FROM issuelist";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		if($row['issuetable']==$table){
			$tableFound=true;
		}
	}
	if(!$tableFound){
		
		return false;
	}
	
	$query = "SELECT * FROM $table";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		if($row['article']==$article){
			$articleFound=true;
		}
	}
	if(!$articleFound){
		return false;
	}
	if($articleFound && $tableFound){
		return true;
	}
}


?>
