<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Cartoons
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/CARTOONS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	DISPLAYS CARTOONS
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$header=true;
$footer=true;
$cartoongrey=true;
$cartoonblue=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>

<center><h1>Cartoons</h1></center>

<div class="cartoongrey">
<h2>Times Magazine Cartoon</h2>
<?php
timeCartoon();
?>
<br>
<a href="http://www.time.com/time/cartoonsoftheweek/" target="_blank">Time Cartoons of the Week</a><br>
<br>
<br>
</div>
<br>

<div class="cartoonblue">
<h2>Calvin and Hobbes</h2>
Cartoon published exactly 20 years ago.  <br>
<?php
calvinAndHobbes();
?>
<br><br>
</div>
<br>


<div class="cartoongrey">
<h2>XKCD</h2>
<?php
xkcd();
?>
<br>
<a href="http://www.xkcd.com/" target="_blank">xkcd Website</a><br>
<br><br>
</div>
<br>

<?php
//PENNY ARCADE
/*
<div class="cartoongrey">
<h2>Penny Arcade</h2>
<?php
pennyArcade();
?>
<br>
<a href="http://www.penny-arcade.com/comic" target="_blank">Penny Arcade Website</a><br>
<br><br>
</div>
<br>
*/
?>

<?php include("/home/gnews/public_html/process/footer.php");?>








<?php 
//--------------	GET CARTOON FUNCTIONS 		------------------
?>
<?php
function timeCartoon(){
	/*    					---TIMES MAGAZINE---    			  */
	//DATABASE CONNECTION
	
	//FIND LAST CARTOON
	$found=false;
	$year=date("Y");
	$month=date("m");
	$day=date("d");
	while ($found==false){
		$found=true;
		if($day==0){
			$month--;
			$day=31;
			if($month<=10){
				$month="0".$month;
			}
		}
		if($month==0){
			$year--;
			$month=12;
		}
		$result = mysql_query("SELECT * FROM timescartoons WHERE year='".$year."' AND month='".$month."' AND day='".$day."'")or die(mysql_error());
		$row=mysql_fetch_array($result);
		if($row['file']==null){
			$found=false;
		}
		$day--;
		if($day<=10){
			$day="0".$day;
		}
	}
	$file=$row['file'];
	echo '<img src="'.$file.'">';
}
?>
<?php
function calvinAndHobbes(){
	/*				CALVIN AND HOBBES			*/
	$date = date("Y")-20;
	$filepath='img/cartoons/calvinandhobbes/'.$date.'/';
	$year=date("y")+80;
	$date = 'ch'.$year.date("md");
	$filepath=$filepath.$date;
	echo '<img src="'.$filepath.'.gif"><br>';
	$date=date("Y")-20;
	echo date("F j").', '.$date;
}
?>
<?php
function pennyArcade(){
	/*				PENNY ARCADE				*/
	
	//FIND LAST CARTOON
	$found=false;
	$year=date("Y");
	$month=date("m");
	$day=date("d");
	$row=null;
	$file=null;
	while ($found==false){
		$found=true;
		if($day==0){
			$month--;
			$day=31;
			if($month<=10){
				$month="0".$month;
			}
		}
		if($month==0){
			$year--;
			$month=12;
		}
		$result = mysql_query("SELECT * FROM pennyarcade WHERE year='".$year."' AND month='".$month."' AND day='".$day."'")or die(mysql_error());
		$row=mysql_fetch_array($result);
		if($row['file']==null){
			$found=false;
		}
		$day--;
		if($day<=10){
			$day="0".$day;
		}
	}
	$file=$row['file'];
	echo '<img src="'.$file.'">';
}
?>
<?php
function xkcd(){
	/*					XKCD				*/
	//FIND LAST CARTOON
	$found=false;
	$year=date("Y");
	$month=date("m");
	$day=date("d");
	$row=null;
	$file=null;
	while ($found==false){
		$found=true;
		if($day==0){
			$month--;
			$day=31;
			if($month<=10){
				$month="0".$month;
			}
		}
		if($month==0){
			$year--;
			$month=12;
		}
		$result = mysql_query("SELECT * FROM xkcd WHERE year='".$year."' AND month='".$month."' AND day='".$day."'")or die(mysql_error());
		$row=mysql_fetch_array($result);
		if($row['file']==null){
			$found=false;
		}
		$subtext=$row['subtext'];
		$title=$row['title'];
		$day--;
		if($day<=10){
			$day="0".$day;
		}
	}
	$file=$row['file'];
	echo "<b>$title</b><br>";
	echo '<img src='.$file.'><br>';
	echo $subtext;
}
?>
