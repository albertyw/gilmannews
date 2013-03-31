<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~ Cron Jobs ~ Penny Arcade Cartoon Download
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/CRON/PENNYARCADE.PHP
STATUS:		MAINTENANCE NEEDED; SEE NOTE
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	DOWNLOADS CURRENT CARTOON FROM PENNYARCADE.COM AND ADDS AN ENTRY TO PENNYARCADE TABLE
USAGE:		SERVER
NOTE:		USING THE CURRENT CODE CREATES VERY LARGE ERROR_LOG FILES WHEN CARTOONS AREN'T FOUND.  ADD ERROR HANDLING TO LINES 48 AND 72
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls

?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<?php
/*
COPIES PENNY ARCADE CARTOON TO WEBSERVER
THEN UPDATES LINK
*/

//MANAGE REPEAT RUNS
$query = "SELECT * FROM pennyarcade"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	if($row['day']==date("d") && $row['month']==date("m") && $row['year']==date("Y")){
		die("ALREADY RUN");
	}
}


//Example cartoon URL: http://www.penny-arcade.com/images/2007/20070810.jpg

/*************		CHECK PREVIOUS DAY	 */
$fileURL="http://www.penny-arcade.com/images/".date("Y");
$day=date("d")-1;
if($day<10){
	$day = "0"+$day;
}
$fileURL=$fileURL."/".date("Ym").$day.".jpg";
echo $fileURL.'<br>';
$fileNewURL="img/cartoons/pennyarcade/cartoon".date("Ymd").".jpg";
$fileNewURL2="../".$fileNewURL;
if(fopen($fileURL,"r")){
	copy($fileURL,$fileNewURL2);
	
	//UPDATE DATABASE WITH NEW FILE
	$fileNewURL = mysql_real_escape_string($fileNewURL);
	$day=date("d");
	$month=date("m");
	$year=date("Y");
	mysql_query("INSERT INTO pennyarcade
		(file, day, month, year)
		VALUES('$fileNewURL', '$day', '$month', '$year') ") 
		or die(mysql_error());
}else{
	echo 'No File';
}




/************** 	 CHECK CURRENT DAY */
//GET FILE
$fileURL="http://www.penny-arcade.com/images/".date("Y");
$fileURL=$fileURL."/".date("Ymd").".jpg";
echo $fileURL.'<br>';
$fileNewURL="img/cartoons/pennyarcade/cartoon".date("Ymd").".jpg";
$fileNewURL2="../".$fileNewURL;
if(fopen($fileURL,"r")){
	copy($fileURL,$fileNewURL2);
	
	//UPDATE DATABASE WITH NEW FILE
	$fileNewURL = mysql_real_escape_string($fileNewURL);
	$day=date("d");
	$month=date("m");
	$year=date("Y");
	mysql_query("INSERT INTO pennyarcade
		(file, day, month, year)
		VALUES('$fileNewURL', '$day', '$month', '$year') ") 
		or die(mysql_error());
}else{
	die("No File");
}

?>

<?php include("/home/gnews/public_html/process/footer.php");?>
