<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Media from the News ~~ Video Archive
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/VIDEOSARCHIVE.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 11, 2008 BY ALBERT WANG '08
DESCRIPTION:	SHOWS VIDEOS THAT ARE ARCHIVED
USAGE:		PUBLIC
*/
//Nifty Cube Corners Javascript Calls
$header=true;
$footer=true;
$photos_sections=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>

<center><h1>Video Archive</h1></center>

<center><h3><a href="media.php">Media</a> --- 
<a href="photoarchive.php">Photo Archive</a> -- 
Video Archive -- 
<a href="audioarchive.php">Audio Archive</a></h3><br>


<br>
To stream videos, it is recommended that you have a high-speed connection (at least 1000kbps/125KBps download speed.)  
You can always download videos through links on the video pages.  <br>
<a href="http://www.gilmannews.com/specials/speedtest/index.php">Test Your Internet Speed</a><br>
<br>
<br>
<br>
<?php
sectionDisplay('videos');
?>
</center>
<br>
<br>


<?php include("/home/gnews/public_html/process/footer.php");?>






<?php
//FUNCTIONS START HERE

//Displays links to the videos
//Depends on function videoSection() to run
//Input: Which section (table) to display
//Output: HTML displayed to the user
function sectionDisplay(){
	while ($newsection!='ALLFINISHED'){//Keep on asking subSectionMaker to find new sections until there aren't any
		$newsection = subSectionMaker($sectionNames);
		$sectionNames[sizeof($sectionNames)]=$newsection;
	}
	$numSections=sizeOf($sectionNames);
	$sectionNumber=0;
	while($numSections>$sectionNumber+1){// +1 is because last entry is "ALLFINISHED"
		echo '<div class="photos_sections">';
		echo '<h3>'.$sectionNames[$sectionNumber].'</h3>';
		echo '<ul>';
		$query = "SELECT * FROM videos WHERE section='$sectionNames[$sectionNumber]'";
		$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($result)){//Reads table and displays links from it
			echo '<li><a href="videos.php?videoId='.$row['id'].'">'.$row['browsertitle'].'</a> -- '.$row['date'].'</li>';
		}
		echo '</ul>';
		echo '</div>';
		echo '<br>';
		$sectionNumber++;
	}
	
}
//Finds sections that aren't already in the $sectionNames array
//function subSectionMaker() depends on this function to run correctly
//Input: array $sectionNames, contains names of sections && $table to find sections
//Output: a section name that isn't in the array
function subSectionMaker($sectionNames){
	$query = "SELECT * FROM videos";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){//Read entries in the table
		$sectionNamesReader=0;
		$sectionNamesUsed=false;
		while($sectionNamesReader<sizeof($sectionNames)){//Reads entries in the $sectionNames array
			if($row['section']==$sectionNames[$sectionNamesReader]){//Compares entries
				$sectionNamesUsed=true;
			}
			$sectionNamesReader++;//Moves to next array entry
		}
		if($sectionNamesUsed==false){//If table entry is not in the array, send it back
			return $row['section'];
		}
		
	}
	return 'ALLFINISHED';//If all table sections and array sections match, then send back a default flag
}

?>
