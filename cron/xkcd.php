<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~ Cron Jobs ~ XKCD Cartoon Download
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/CRON/XKCD.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	COPIES CURRENT XKCD CARTOON TO WEBSERVER THEN UPDATES LINK ON CARTOON.PHP
USAGE:		SERVER
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<center><h1>XKCD CARTOON DOWNLOAD</h1>
For Server Use Only</center>

<?php
//CANCEL THIS RUN IF CARTOON HAS ALREADY BEEN DOWNLOADED
$query = "SELECT * FROM xkcd";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	if($row['day']==date("d") && $row['month']==date("m") && $row['year']==date("Y")){//If an entry is already on there for today
		echo "Already Run";
		include("/home/gnews/public_html/process/footer.php");
		die();
	}
	$lastURL = $row['file'];
}


//READ XKCD.COM HTML
$handle = fopen("http://www.xkcd.com/index.html", "rb");
while (!feof($handle)) {
  $contents .= fread($handle, 8192);
}
fclose($handle);
if($contents==null || $contents==''){		//Make sure xkcd.com is working
	die();
}

//FIND CURRENT CARTOON URL
//Finds the beginning of the cartoon url
$cartoonURLposition=strpos($contents, "http://imgs.xkcd.com/comics/");
$cartoonURL=substr($contents, $cartoonURLposition, 100);
//Finds the end of the cartoon url
$cartoonURLposition=strpos($cartoonURL, "\"");
$cartoonURL=substr($cartoonURL, 0, $cartoonURLposition);
//Displays img url to be downloaded
echo 'XKCD URL: '.$cartoonURL.'<br>';
//Finds file name
$cartoonURLposition=strpos($cartoonURL, "comics/");
$cartoonFileName=substr($cartoonURL, $cartoonURLposition+7, strlen($cartoonURL));
echo 'File Name: '.$cartoonFileName.'<br><br>';

$cartoonFullLocalFileName="http://www.gilmannews.com/img/cartoons/xkcd/".$cartoonFileName;
//CHECK TO FIND IF CARTOON HAS CHANGED
if($lastURL==$cartoonFullLocalFileName){
	die("SAME CARTOON AS PREVIOUSLY DOWNLOADED.  NO CARTOON DOWNLOADED ON THIS RUN.");
}

//FIND CURRENT CARTOON TITLE
//Find <h1> and </h1> (Title is between these two tags)
$titlepositionstart=strpos($contents, "<h1>");
$titlepositionend=strpos($contents, "</h1>");
$title = substr($contents, $titlepositionstart+4,$titlepositionend-$titlepositionstart-4);
echo "Title of Cartoon: $title<br><br>";


//FIND CURRENT CARTOON SUBTEXT
//Find text between title=" and alt=" tags
$subtextpositionstart=strpos($contents, "title=", $titlepositionend);
$subtextpositionend=strpos ($contents, " alt=", $titlepositionend);
$subtext = substr($contents, $subtextpositionstart+7,$subtextpositionend-$subtextpositionstart-8);
$subtext=mysql_real_escape_string($subtext);
echo "Subtext: $subtext<br><br>";


//DOWNLOADS CARTOON IMAGE
if(fopen($cartoonURL,"r")){	//Checks that the cartoon exists
	$cartoonNewURL="../img/cartoons/xkcd/".$cartoonFileName;
	echo 'Copying from: '.$cartoonURL.'<br>';
	echo 'Copying to: '.$cartoonNewURL.'<br>';
	copy($cartoonURL , $cartoonNewURL);
	
//UPDATE XKCD DATABASE WITH NEW CARTOON
	$day=date("d");
	$month=date("m");
	$year=date("Y");
	$cartoonAccessURL="http://www.gilmannews.com/img/cartoons/xkcd/".$cartoonFileName;
	mysql_query("INSERT INTO xkcd
		(file, title, subtext, day, month, year)
		VALUES('$cartoonAccessURL', '$title', '$subtext', '$day', '$month', '$year') ") 
		or die(mysql_error());
}else{
	die('File Not Openable');	//Can't open xkcd.com cartoon file
}
echo 'FILE SUCCESSFULLY COPIED';

?>

<?php include("/home/gnews/public_html/process/footer.php");?>
