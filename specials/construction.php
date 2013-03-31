<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Construction Photos
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/SPECIALS/CONSTRUCTION.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 8, 2008 BY ALBERT WANG
DESCRIPTION:	ALLOWS USERS TO SELECT AND VIEW CONSTRUCTION PHOTOS BASED ON THE DAY
USAGE:		PUBLIC
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>

<?php
$yearrequest=$_POST['year'];
$monthrequest=$_POST['month'];
$dayrequest=$_POST['day'];
?>
<center><h2>CONSTRUCTION PHOTOS</h2></center>
Choose a date for the photo:
<form action="construction.php" method="POST">

Year:<select name="year">
<option <?php yearoption($yearrequest, 2007);?>>2007</option>
<option <?php yearoption($yearrequest, 2008);?>>2008</option>
</select> --- 

Month:<select name="month">
<?php
months($monthrequest);
?>
</select> --- 

Day:<select name="day">
<?php
days($dayrequest);
?>
</select>

<input type="submit" value="View">
</form>
<br>
<br>
<center>
<?php
if($yearrequest!=0 && $monthrequest!=0 && $dayrequest!=0){
	$proposedFileName="../img/construction/dayphotos/";
	$directFileName="http://www.gilmannews.com/img/construction/dayphotos/";
	$localFileName="/home/gnews/public_html/img/construction/dayphotos/";
	$proposedFileName=$proposedFileName.$yearrequest.'-'.$monthrequest.'-'.$dayrequest.'.jpg';
	$directFileName=$directFileName.$yearrequest.'-'.$monthrequest.'-'.$dayrequest.'.jpg';
	if(file_exists($localFileName.$yearrequest.'-'.$monthrequest.'-'.$dayrequest.'.jpg')){
		echo '<h3>'.$monthrequest.'-'.$dayrequest.'-'.$yearrequest;
		echo '</h3><img src="'.$proposedFileName.'"><br>'.$directFileName;
	}else{
		echo 'Sorry.  There is no picture for that day.';
	}
}
?>
</center>
<?php include("/home/gnews/public_html/process/footer.php");?>


<?php
//FUNCTIONS
function months($monthrequest){
	$month=1;
	while($month<=12){
		if($month<10){
			$month='0'.$month;
		}
		if($month==$monthrequest){
			echo '<option selected="yes">'.$month.'</option>';
		}else{
			echo '<option>'.$month.'</option>';
		}
		$month++;
	}
}
function days($dayrequest){
	$day=1;
	while($day<=31){
		if($day<10){
			$day='0'.$day;
		}
		if($day==$dayrequest){
			echo '<option selected="yes">'.$day.'</option>';
		}else{
			echo '<option>'.$day.'</option>';
		}
		$day++;
	}
}

function yearoption($yearrequest, $yeardisplayed){
	if ($yearrequest==$yeardisplayed){
		echo 'selected="yes"';
	}
}
?>
