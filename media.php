<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Media from the News
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/MEDIA.PHP
STATUS:		MAINTANANCE NEEDED: UPDATE PHOTO SECTION TO USE DATABASES
LAST MODIFIED:	JUNE 4, 2008 BY ALBERT WANG '08
DESCRIPTION:	HOME PAGE FOR PHOTOS, VIDEO AND AUDIO
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

<center><h1>Photo, Video, and Audio</h1><br>


<center><h3>Media --- 
<a href="photoarchive.php">Photo Archive</a> -- 
<a href="videosarchive.php">Video Archive</a> -- 
<a href="audioarchive.php">Audio Archive</a></h3><br>

<b><a href="#videos">Current Videos</a> - <a href="#audio">Current Audio</a></b></center>
<br><br><br>
<center><h2>Photo Galleries</h2></center>
<center><b><a href="photoarchive.php">Photo Archive</a></b>
<br>
<br>
<?php
sectionDisplay('photos');
?>
</center>
<br>
<br>


<a name="videos"></a>
<hr>
<center><h2>Videos</h2></center>
To stream videos, it is recommended that you have a high-speed connection (at least 1000kbps/125KBps download speed.)  
You can always download videos through links on the video pages.  <br>
<a href="http://www.gilmannews.com/specials/speedtest/index.php">Test Your Internet Speed</a><br>
<br>
<center><b><a href="videosarchive.php">Video Archive</a></b>
<br>
<br>
<?php
sectionDisplay('videos');
?>
</center>
<br>
<br>


<a name="audio"></a>
<hr>
<center><h2>Audio</h2></center>
To stream audio, it is recommended that you have at least a medium-speed connection (at least 200kbps/25KBps download speed.)  
You can always download audio files through links on the audio pages.  <br>
<a href="http://www.gilmannews.com/specials/speedtest/index.php">Test Your Internet Speed</a><br>
<br>
<center><b><a href="audioarchive.php">Audio Archive</a></b>
<br>
<br>
<?php
sectionDisplay('audio');
?>
</center>

<?php include("/home/gnews/public_html/process/footer.php");?>






<?php
//FUNCTIONS START HERE

//Displays links to the videos
//Depends on function videoSection() to run
//Input: Which section (table) to display
//Output: HTML displayed to the user
function sectionDisplay($table){
	while ($newsection!='ALLFINISHED'){//Keep on asking subSectionMaker to find new sections until there aren't any
		$newsection = subSectionMaker($sectionNames, $table);
		$sectionNames[sizeof($sectionNames)]=$newsection;
	}
	$numSections=sizeOf($sectionNames);
	$sectionNumber=0;
	while($numSections>$sectionNumber+1){// +1 is because last entry is "ALLFINISHED"
		echo '<div class="photos_sections">';
		echo '<h3>'.$sectionNames[$sectionNumber].'</h3>';
		echo '<ul>';
		$query = "SELECT * FROM $table WHERE section='$sectionNames[$sectionNumber]'";
		$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($result)){//Reads table and displays links from it
			if($table=='videos' && $row['archive']!='1')echo '<li><a href="videos.php?videoId='.$row['id'].'">'.$row['browsertitle'].'</a></li>';
			if($table=='audio' && $row['archive']!='1')echo '<li><a href="audio.php?id='.$row['id'].'">'.$row['browsertitle'].'</a></li>';
			if($table=='photos' && $row['archive']!='1')echo '<li><a href="'.$row['filelocation'].'">'.$row['title'].'</a></li>';
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
function subSectionMaker($sectionNames, $table){
	$query = "SELECT * FROM $table";
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
		if($sectionNamesUsed==false && $row['archive']!='1'){//If table entry is not in the array, send it back
			return $row['section'];
		}
		
	}
	return 'ALLFINISHED';//If all table sections and array sections match, then send back a default flag
}

?>
