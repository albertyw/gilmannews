<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~ Cron Jobs ~ Times Magazine Cartoon Download
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/CRON/TIMECARTOON.PHP
STATUS:		MAINTENANCE NEEDED; SEE NOTE
LAST MODIFIED:	JUNE 7, 2008 BY ALBERT WANG '08
DESCRIPTION:	DOWNLOADS NEWEST CARTOONS FROM TIME.COM AND ADDS CARTOONS TO TIMECARTOON TABLE
USAGE:		SERVER
NOTE:		USING THE CURRENT CODE CREATES VERY LARGE ERROR_LOG FILES.  ADD ERROR HANDLING/OPTIMIZATION AT LINES 71, 70 AND 52
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
COPIES TIME MAGAZINE CARTOON TO WEBSERVER
THEN UPDATES LINK in "timecartoon" TABLE
*/


//MANAGE REPEAT RUNS
$checkday=date("d");
$checkmonth=date("m");
$checkyear=date("Y");
if (checkRepeatRun($checkday, $checkmonth, $checkyear)==true){
	die("ALREADY RUN");
}


//LOOP SETUP
$datemodifier=0;
while($datemodifier<=10){
	$datemodifier++;
	$day = date("d")-$datemodifier;
	if($day==0){
		$monthmodifier++;
	}
	if($day<=0){
		$day=$day+31;
	}
	$month = date("m")-$monthmodifier;
	$year = date("Y");
	
	$cartoonnum=1;
	$firsttime=true;
	while((fopen($fileURL,"r") && !checkRepeatRun($day0, $month, $year)) || $firsttime==true || (fopen($fileURL, "r") && $cartoonnum!=1)){
		$firsttime=false;
		//GET FILE
		if($day>=1 && $day<10){
			$day0='0'.$day;
		}else{
			$day0=$day;
		}
		if(strlen($month)<2){
			$month='0'.$month;
		}
		echo '<br>month='.$month.'<br>';
		echo 'day='.$day0.'<br>';
		$fileURL="http://img.timeinc.net//time/cartoons/".$year.$month.$day0;
		$fileURL=$fileURL."/cartoons_0".$cartoonnum.".jpg";
		echo $fileURL.'<br>';
		$fileNewURL="img/cartoons/times/cartoons_".$year.$month.$day0."_".$cartoonnum.".jpg";
		$fileNewURL2="../".$fileNewURL;
		copy($fileURL,$fileNewURL2);
		if (fopen($fileURL,"r")){
			//UPDATE DATABASE WITH NEW FILE
			$fileNewURL = mysql_real_escape_string($fileNewURL);
			mysql_query("INSERT INTO timescartoons
				(file, day, month, year)
				VALUES('$fileNewURL', '$day0', '$month', '$year') ") 
				or die(mysql_error());
			$cartoonnum++;
		}else{$cartoonnum=1;}
	}
}

function checkRepeatRun($checkday, $checkmonth, $checkyear){
	//MANAGE REPEAT RUNS
	$query = "SELECT * FROM timescartoons"; 
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		if($row['day']==$checkday && $row['month']==$checkmonth && $row['year']==$checkyear){
			return true;
		}
	}
	return false;
}

?>

<?php include("/home/gnews/public_html/process/footer.php");?>
