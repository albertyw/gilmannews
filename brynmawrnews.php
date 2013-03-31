<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~ Bryn Mawr News
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/BRYNMAWRNEWS.PHP
STATUS:		FINISHED -- COULD USE A BETTER RSS READER
LAST MODIFIED:	JUNE 7, 2008 BY ALBERT WANG '08
DESCRIPTION:	USES A RSS READER TO DISPLAY NEWS FROM BRYN MAWR CALENDAR
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$header=true;
$footer=true;
//End Nifty Corners Cube Javascript Calls
?>

<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<center><h1>Bryn Mawr School News</h1></center><br>
News from our sister school.  
<script src="http://gmodules.com/ig/ifr?url=http://jack.sankey.googlepages.com/RSSfilter_current.xml&up_gadgetlabel=Bryn%20Mawr%20RSS&up_title_contains=&up_exclusions=&up_rss_url=http%3A%2F%2Fwww.brynmawrschool.org%2Frss.aspx&up_email=gilmannews%40supportsociety.com&up_number=10&up_fontsize=%2B2&up_fancy_controls=at%20the%20bottom&up_linktarget=1&up_label_email=1&synd=open&w=956&h=382&title=Bryn+Mawr+RSS&border=http%3A%2F%2Fgmodules.com%2Fig%2Fimages%2F&output=js"></script>
<i>Courtesy of Bryn Mawr and Jack Sankey</i>
</center>

<?php include("/home/gnews/public_html/process/footer.php");?>

