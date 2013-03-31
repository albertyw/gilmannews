<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Search the Gilman News
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/SEARCH.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 7, 2008 BY ALBERT WANG '08
DESCRIPTION:	EMBEDS GOOGLE SEARCH
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>
<br>
<br>
<center>
<h1>Search</h1>
Powered by Google
<!-- Google CSE Search Box Begins -->
  <form id="searchbox_000174466731557046549:l3ce0ia6h9m" action="http://www.gilmannews.com/search.php">
    <input type="hidden" name="cx" value="000174466731557046549:l3ce0ia6h9m" />
    <input type="hidden" name="cof" value="FORID:9" />
    <input name="q" type="text" size="40" />
    <input type="submit" name="sa" value="Search" />
    <img src="http://www.google.com/coop/images/google_custom_search_smnar.gif" alt="Google Custom Search" />
  </form>
<!-- Google CSE Search Box Ends -->
<!-- Google Search Result Snippet Begins -->
<div id="results_000174466731557046549:l3ce0ia6h9m"></div>
<script type="text/javascript">
  var googleSearchIframeName = "results_000174466731557046549:l3ce0ia6h9m";
  var googleSearchFormName = "searchbox_000174466731557046549:l3ce0ia6h9m";
  var googleSearchFrameWidth = 600;
  var googleSearchFrameborder = 0;
  var googleSearchDomain = "google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
<!-- Google Search Result Snippet Ends -->
</center>
<br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>
