<?php include("/home/gnews/public_html/process/headeropen.php");?>
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ARTICLEVIEWPRINT.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 1, 2008 BY ALBERT WANG '08
DESCRIPTION:	SHOWS A PRINTER FRIENDLY VERSION OF ARTICLEVIEW.PHP
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
//$footer=true;
//$header=true;
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
echo 'Gilman News Online ~ '.$titleBar;

//Select what to print
$print=$_GET['print'];
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<script>
function Print(){document.body.offsetHeight;window.print()}
</script>
<body onload="Print()">
<br>
<center><img src="http://www.gilmannews.com/img/web/gilmannews.gif" alt="The Gilman News Online" border="0"></center>


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

if($row['pictures']!=null && $row['pictures']!='' && $print=='full'){//See if there are pictures
	echo '<div id="articleview_pictures">';
	echo $row['pictures'];//Display Pictures
	echo '</div>';
}
if($print=='text'){
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
		echo '</td><td width="50"></td><td>';
		echo strrev(str_replace(stristr($firsttextreverse, '>p/<'), '', $firsttextreverse));
		echo $secondtext;
		echo '</td></tr></table>';
	}else{
		echo '<table border="0"><tr><td>';
		echo $firsttext;
		echo str_replace(stristr($secondtext, '<p>'), '', $secondtext);
		echo '</td><td width="50"></td><td>';
		echo stristr($secondtext, '<p>');
		echo '</td></tr></table>';
	}
}else{
	echo $row['text'];
}
echo '<br><br>';
?>

<br><br>
<div id="articleview_endpictures">
<?php /* Make Sure Pictures don't overflow */ ?>
</div>
<br><br>
<i>The articles and pictures presented on the Gilman News Online Website (http://www.gilmannews.com/) and the Gilman News Print Edition 
do not necessarily reflect the views of the Gilman School's administration, faculty, or students.</i><br><br>
<center><b>&copy; 2006-2008 The Gilman News</b></center>
</body>
</html>






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
