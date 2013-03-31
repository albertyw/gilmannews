<?php
//CHECK ADMIN CREDENTIALS
session_start();
if(!isset($_SESSION['login'])){//IF LOGIN IS INCORRECT, REDIRECT TO LOGIN PAGE
	echo '<script type="text/javascript">
	<!--
	window.location = "http://www.gilmannews.com/admin/login.php"
	//-->
	</script>';
	echo 'Bad Login<br>';
	echo '<a href="http://www.gilmannews.com/admin/login.php">';
	die();
}//REMEMBER LOGIN
$login=$_SESSION['login'];
?>

<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Administration Panel
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/ADMIN/PHOTOS.PHP
STATUS:		FINISHED
LAST MODIFIED:	AUGUST 2, 2008 BY ALBERT WANG '08
DESCRIPTION:	INFORMATION ABOUT ADDING PHOTO GALLERIES; ADDING PHOTO GALLERIES TO DATABASES
USAGE:		PASSWORDED
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<center><h1>Administration Panel</h1>
<h2>Adding Photo Galleries</h2>
</center>

Whenever an issue comes out or when a large set of photos comes in, a photo gallery should be created.  
Due to the fact that adding photos to the website is much more time consuming than issues, articles, video, and audio files,
photo galleries will be created using Microsoft's "HTML Slide Show Wizard" which can be downloaded: 
<a href="http://www.microsoft.com/windowsxp/downloads/powertoys/xppowertoys.mspx">Here</a>.  <br><br>
The Gilman News website, however, will treat each gallery as an entry in the "photos" table.  
The directions below will help you create the galleries and add them to the Gilman Website.  
<i>Note: Creating slideshows will require a Windows Computer</i><br><br><br>

<h3>Creating the slideshow.</h3>
<ol>
<li>Put all the photos into a folder.</li>
<li>Launch the Slideshow Wizard and press "Next."</li>
<li>Click "Add Folder" and select the folder with the images you want.</li>
<li>Check the photo previews to make sure that the Slideshow wizard can read them.  You may have to delete some extraneous files</li>
<li>Click Next</li>
<li>Enter an appropriate Slide Show Name and Author (photographer).  If the photographers are anonymous or unknown, put "The Gilman News."</li>
<li>Select a folder that you will remember (e.g. Desktop) to save the slideshow.</li>
<li>Select "Advanced" for Slide Show Type</li>
<li>Click Next then Finish and create your slideshow</li>
<li>Find the folder that you selected in Step 7 and rename the slideshow's folder's name to a web-friendly format: no spaces or special characters.  
Use a keyword then the year.  (e.g., winterconcert2007)</li>
<li>Open the folder and open default.htm in a text editor</li>
<li>Find and delete the two "&lt;a href="http://go.microsoft.com/fwlink/?LinkId=4448"&gt;&lt;img border=0 src="images/branding.gif"&gt;&lt;/a&gt;"  (Go Apples)</li>
<li>If you want, you can modify the titles/photographers to add dates, subtitles, etc.  Search for the &lt;h1&gt; and &lt;h2&gt; and add it there.  Again, you have to add it twice.  (Stupid Microsoft)</li>
<li>Save and close</li>
<li>Open the images folder and delete "branding.gif"</li>
</ol>
<br><br>


<h3>Uploading the slideshow</h3>
<ol>
<li>Move the whole slideshow folder to "Newspaper/img/galleries/"</li>
<li>Upload the whole folder to the mirror location on the Gilman News website via FTP</li>
<li>Fill out the below form.  Use the absolute URL address for default.htm.  If you're creating a custom photo gallery then use the start page.</li>
</ol>
<form action="photosaddprocess.php" method="POST">
Name/Title: <input type="text" name="title" size="100"><br>
Section: <input type="text" name="section" size="100"><br>
Archive: <input type="checkbox" name="archive"><br>
Photographer: <input type="text" name="photographer" size="100"><br>
Date: <input type="text" name="date" size="100"><br>
Location: <input type="text" name="filelocation" size="100" value="http://www.gilmannews.com/img/galleries/CHANGETHIS/default.htm"><br>
<input type="submit" value="Add">
</form>
<br><br>


<h3>Modifying/Archiving/Deleting Galleries</h3>
<?php
echo '<table border="1">';
echo '<tr><td>ID</td><td>Section</td><td>Title</td><td>Archive</td><td>Photographer</td><td>Date</td></tr>';
$query = "SELECT * FROM photos";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result)){
	echo '<tr><td>';
	$id = $row['id'];
	echo $row['id'];
	echo '</td><td>';
	echo $row['section'];
	echo '</td><td>';
	echo '<a href="'.$row['filelocation'].'">'.$row['title'].'</a>';
	echo '</td><td>';
	echo $row['archive'];
	echo '</td><td>';
	echo $row['photographer'];
	echo '</td><td>';
	echo $row['date'];
	echo '</td><td>';
	echo '<a href="photosmodify.php?id='.$id.'">Modify/Archive</a>';
	echo '</td><td>';
	echo '<a href="photosdelete.php?id='.$id.'">Delete</a>';
	echo '</td></tr>';
}
echo '</table>';
?>
<br><br>
<a href="admin.php">Back to the Administrator Panel</a><br>
<?php include("/home/gnews/public_html/process/footer.php");?>
