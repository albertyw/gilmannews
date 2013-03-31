<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Old Editions of the News
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/OLD.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 29, 2008 BY ALBERT WANG '08
DESCRIPTION:	ARCHIVE OF PAST ISSUES
USAGE:		PUBLIC
*/
//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<center><h1>News Archive</h1></center>
Print Versions of the Archives require a PDF reader.  Get it here:<a href="http://www.adobe.com/products/acrobat/readstep2.html"><img src="img/web/getacro.gif" alt="Get Adobe Acrobat Reader" border="0"></a><br>
<center><h3>This Year's Newspapers</h3></center>


<div class="old_newspapers">
<table><tr><td colspan="2">

<?php/*At the end of the year, cut the table below and paste it to the Past Issues table below*/?>
<span>2008-2009</span>
</td></tr>
<tr><td>
<table>
<?php
findArticles('2008');
?>
</table>
</td><td>
<table>
<tr><th>Editors-in-Chief</th><td>Connor Lounsbury, Trevor Hoffberger</td></tr>
<tr><th>Managing Editor</th><td>Christian Moscardi</td></tr>
<tr><th>Sports Editor</th><td>Jack Owens</td></tr>
<tr><th>Political Editor</th><td>Ryan Gisriel</td></tr>
<tr><th>Features Editor</th><td>Dara Bakar</td></tr>
<tr><th>Photo Editor</th><td>Ned Whitman</td></tr>
<tr><th>Sports Columnist</th><td>Matt Berger</td></tr>
</table>
<?php /*Cut until here, and post below */?>
</td></tr></table>
<br><br>



<center><h3>Past Years</h3></center>

<table>

<?php/* Paste old years' issues here*/?>
<tr><td colspan="2">
<span>2007-2008</span>
</td></tr>
<tr><td>
<table>
<?php
findArticles('2007');
?>
</table>
</td><td>
<table>
<tr><th>Editor-in-Chief</th><td>Ed Wiese</td></tr>
<tr><th>Managing Editors</th><td>Alex Hormozi, Kevin Niparko</td></tr>
<tr><th>Sports Editor</th><td>David Jiang</td></tr>
<tr><th>Layout Editor</th><td>Jun Lee</td></tr>
<tr><th>Business Editor</th><td>Trevor Hoffberger</td></tr>
<tr><th>Political Editor</th><td>John Sanders</td></tr>
<tr><th>Online Editor</th><td>Albert Wang</td></tr>
<tr><th>Arts Editor</th><td>Connor Lounsbury</td></tr>
<tr><th>Photo Editor</th><td>Keech Turner</td></tr>
<tr><th>Sports Columnist</th><td>Neill Hessinger</td></tr>
</table>
</td>
</tr>

<tr><td colspan="2">
<br><br>
<span>2006-2007</span>
</td></tr>
<tr><td>
<table>
<tr><th>September 19, 2006</th><td><a href="2006-2007/GNewsSept_19_2006Issue.pdf">PDF (Print Version)</a></td></tr>
<tr><th>October 26, 2006</th><td><a href="2006-2007/GNewsOct_26_2006Issue.pdf">PDF (Print Version)</a></td><td><a href="index.php?table=2006octoberarticles">Online Version</a></td></tr>
<tr><th>November 22, 2006</th><td><a href="2006-2007/GNewsNov_22_2006.pdf">PDF (Print Version)</a></td><td><a href="index.php?table=2006novemberarticles">Online Version</a></td></tr>
<tr><th>December 19, 2006</th><td><a href="2006-2007/GNewsDec_19_06.pdf">PDF (Print Version)</a></td><td><a href="index.php?table=2006decemberarticles">Online Version</a></td></tr>
<tr><th>February 15, 2007</th><td><a href="2006-2007/GNewsFeb_15_2007Issue.pdf">PDF (Print Version)</a></td><td><a href="index.php?table=2007februaryarticles">Online Version</a></td></tr>
<tr><th>May 3, 2007</th><td><a href="2006-2007/GNewsMay_3_2007Issue.pdf">PDF (Print Version)</a></td><td><a href="index.php?table=2007mayarticles">Online Version</a></td></tr>
<tr><th>June 11, 2007</th><td><a href="2006-2007/GNewsJune_11_2007Issue.pdf">PDF (Print Version)</a></td><td><a href="index.php?table=2007junearticles">Online Version</a></td></tr>
</table>
<a href="specials/election2007/index.php">2007-2008 School President Election Speeches</a><br>
</td><td>
<table>
<tr><th>Editor-in-Chief</th><td>David Fine</td></tr>
<tr><th>Managing Editors</th><td>Zach Gorn, James Griffin</td></tr>
<tr><th>Sports Editor</th><td>Ed Wiese</td></tr>
<tr><th>Business Editor</th><td>Kevin Niparko</td></tr>
<tr><th>Copy Editor</th><td>Chris Flint</td></tr>
<tr><th>Online Editor</th><td>Albert Wang</td></tr>
<tr><th>Circulation Editor</th><td>Alex Hormozi</td></tr>
</table>
</td>
</tr>

<tr><td colspan="2">
<br><br>
<span>2005-2006</span>
</td></tr>
<tr><td>
<table>
<tr><td><a href="2005-2006/GNewsSept_07_2005Issue.pdf">September 7, 2005</a></td></tr>
<tr><td><a href="2005-2006/GNewsOct_05_2005Issue.pdf">October 5, 2005</a></td></tr>
<tr><td><a href="2005-2006/GNewsNov_09_2005Issue.pdf">November 9, 2005</a></td></tr>
<tr><td><a href="2005-2006/GNewsNov_23_2005Issue.pdf">November 23, 2005</a></td></tr>
<tr><td><a href="2005-2006/GNewsJan_13_2006Issue.pdf">January 13, 2006</a></td></tr>
<tr><td><a href="2005-2006/GNewsMarch_01_2006Issue.pdf">March 1, 2006</a></td></tr>
<tr><td><a href="2005-2006/GNewsApril_12_2006Issue.pdf">April 12, 2006</a></td></tr>
<tr><td><a href="2005-2006/GNewsJune_12_2006Issue.pdf">June 12, 2006</a></td></tr>
<tr><td><a href="specials/election2006/index.php">2006-2007 School President Election Speeches</a></td></tr>
</table>
</td><td>
<table>
<tr><th>Editor-in-Chief</th><td>Christian Flow</td></tr>
<tr><th>Managing Editor</th><td>David Fine</td></tr>
<tr><th>World News Editor</th><td>Brandon Hammer</td></tr>
<tr><th>Community Editor</th><td>Zahir Rahman</td></tr>
<tr><th>Layout Editor</th><td>Tommy Park</td></tr>
<tr><th>Sports Editor</th><td>Sam Novey</td></tr>
<tr><th>Features Editor</th><td>James Griffin</td></tr>
<tr><th>Arts Editor</th><td>Georgios Gittis</td></tr>
<tr><th>Business Editor</th><td>Robert Wiese</td></tr>
<tr><th>Circulation Editor</th><td>Keun Hee Oh</td></tr>
</table>
</td></tr>

<tr><td colspan="2">
<br><br>
<span>2004-2005</span>
</td></tr>
<tr><td>
<table>
<tr><td><a href="2004-2005/GNewsSept_01_2004Issue.pdf">September 1, 2004</a></td></tr>
<tr><td><a href="2004-2005/GNewsOct_07_2004Issue.pdf">October 7, 2004</a></td></tr>
<tr><td><a href="2004-2005/GNewsOct_28_2004Issue.pdf">October 28, 2004</a></td></tr>
<tr><td><a href="2004-2005/GNewsNov_19_2004Issue.pdf">November 19, 2004</a></td></tr>
<tr><td><a href="2004-2005/GNewsDec_17_2004Issue.pdf">December 17, 2004</a></td></tr>
<tr><td><a href="2004-2005/GNewsFeb_07_2005Issue.pdf">February 7, 2005</a></td></tr>
<tr><td><a href="2004-2005/GNewsMarch_15_2005Issue.pdf">March 15, 2005</a></td></tr>
<tr><td><a href="2004-2005/GNewsMay_03_2005Issue.pdf">May 3, 2005</a></td></tr>
<tr><td><a href="2004-2005/GNewsJune_06_2005Issue.pdf">June 6, 2005</a></td></tr>
</table>
</td><td>
<table>
<tr><th>Editors-in-Chief</th><td> Matt Youn, Christian Flow</td></tr>
<tr><th>Managing Editors</th><td> Keun Hee Oh, Ben Small</td></tr>
<tr><th>Community Editors</th><td> Michael Eisenstein, Zahir Rahman</td></tr>
<tr><th>Layout Editors</th><td> Georgios Gittis, Tommy Park</td></tr>
<tr><th>Sports Editors</th><td> David Fine, Jordan Tucker</td></tr>
<tr><th>Arts Editors</th><td> James Griffin, Chris Hong</td></tr>
<tr><th>Business Editor</th><td> Jeremy Batoff</td></tr>
<tr><th>Circulation Editor</th><td> Teddy Davidson</td></tr>
</table>
</td></tr>

<tr><td colspan="2">
<br><br>
<span>2003-2004</span>
</td></tr>
<tr><td>
<table>
<tr><td><a href="2003-2004/GNewsSept_04_2003Issue.pdf">September 04, 2003</a></td></tr>
<tr><td><a href="2003-2004/GNewsSept_29_2003Issue.pdf">September 29, 2003</a></td></tr>
<tr><td><a href="2003-2004/GNewsOct_24_2003Issue.pdf">October 24, 2003</a></td></tr>
<tr><td><a href="2003-2004/GNewsNov_14_2003Issue.pdf">November 14, 2003</a></td></tr>
<tr><td><a href="2003-2004/GNewsDec_16_2003Issue.pdf">December 16, 2003</a></td></tr>
<tr><td><a href="2003-2004/GNewsFeb_11_2004Issue.pdf">February 11, 2004</a></td></tr>
<tr><td><a href="2003-2004/GNewsMarch_04_2004Issue.pdf">March 4, 2004</a></td></tr>
<tr><td><a href="2003-2004/GNewsApril_02_2004Issue.pdf">April 2, 2004</a></td></tr>
<tr><td><a href="2003-2004/GNewsApril_23_2004Issue.pdf">April 23, 2004</a></td></tr>
<tr><td><a href="2003-2004/GNewsJune_07_2004Issue.pdf">June 7, 2004</a></td></tr>
<tr><td><a href="specials/election2004/index.php">2004-2005 School President Election Speeches</a></td></tr>
</table>
</td><td>
<table>
<tr><th>Editor-in-Chief</th><td> Tom Miller</td></tr>
<tr><th>Managing Editor</th><td> Michael Silicano</td></tr>
<tr><th>Community Editors</th><td> Siman Landau, Josh Sweren</td></tr>
<tr><th>Sports Editors</th><td> Jordan Tucker, Matt Youn</td></tr>
<tr><th>Arts Editor</th><td> Christian Flow</td></tr>
<tr><th>Business Editor</th><td> Jeremy Batoff</td></tr>
<tr><th>Photo Editor</th><td> Pat Hudson</td></tr>
<tr><th>Archives Editor</th><td> Peter Jarow</td></tr>
</table>
</td></tr>

<tr><td colspan="2">
<br><br>
<span>2002-2003</span>
</td></tr>
<tr><td>
<table>
<tr><td><a href="2002-2003/GNewsSept_09_2002Issue.pdf">September 9, 2002</a></td></tr>
<tr><td><a href="2002-2003/GNewsSept_24_2002Issue.pdf">September 24, 2002</a></td></tr>
<tr><td><a href="2002-2003/GNewsOct_16_2002Issue.pdf">October 16, 2002</a></td></tr>
<tr><td><a href="2002-2003/GNewsNov_08_2002Issue.pdf">November 8, 2002</a></td></tr>
<tr><td><a href="2002-2003/GNewsNov_26_2002Issue.pdf">November 26, 2002</a></td></tr>
<tr><td><a href="2002-2003/GNewsDec_18_2002Issue.pdf">December 18, 2002</a></td></tr>
<tr><td><a href="2002-2003/GNewsFeb_07_2003Issue.pdf">February 7, 2003</a></td></tr>
<tr><td><a href="2002-2003/GNewsMarch_06_2003Issue.pdf">March 6, 2003</a></td></tr>
<tr><td><a href="2002-2003/GNewsApril_04_2003Issue.pdf">April 4, 2003</a></td></tr>
<tr><td><a href="2002-2003/GNewsApril_24_2003Issue.pdf">April 24, 2003</a></td></tr>
<tr><td><a href="2002-2003/GNewsMay_16_2003Issue.pdf">May 16, 2003</a></td></tr>
<tr><td><a href="2002-2003/GNewsJune_09_2003Issue.pdf">June 9, 2003</a></td></tr>
</table>
</td><td>
<table>
<tr><th>Editor-in-Chief</th><td>Tom Miller</td></tr>
<tr><th>Managing Editor</th><td>Justin Batoff</td></tr>
<tr><th>Features Editor</th><td>Michael Silicano</td></tr>
<tr><th>World News</th><td>Andy Wu</td></tr>
<tr><th>Sports Editor</th><td>Simon Landau</td></tr>
<tr><th>Arts Editor</th><td>John Davisson</td></tr>
<tr><th>News Editor</th><td>Josh Sweren</td></tr>
<tr><th>Online Editor</th><td>Scott Kidder</td></tr>
<tr><th>Business Editor</th><td>Jeremy Batoff</td></tr>
<tr><th>Photo Editor</th><td>Peter Brockmeyer</td></tr>
<tr><th>Archives Editor</th><td>Peter Jarow</td></tr>
</table>
</td></tr>

<tr><td colspan="2">
<br><br>
<span>2001-2002</span>
</td></tr>
<tr><td>
<table>
<tr><td><a href="2001-2002/10_05_01.pdf">October 5, 2001</a></td></tr>
<tr><td><a href="2001-2002/10_25_01.pdf">October 25, 2001</a></td></tr>
<tr><td><a href="2001-2002/11_7_01.pdf">November 7, 2001</a></td></tr>
<tr><td><a href="2001-2002/11_29_01.pdf">November 29, 2001</a></td></tr>
<tr><td><a href="2001-2002/12_20_01.pdf">December 20, 2001</a></td></tr>
<tr><td><a href="2001-2002/2_7_02.pdf">February 7, 2002</a></td></tr>
<tr><td><a href="2001-2002/3_1_02.pdf">March 1, 2002</a></td></tr>
<tr><td><a href="2001-2002/4_16_02.pdf">April 16, 2002</a></td></tr>
<tr><td><a href="2001-2002/6_10_02.pdf">June 10, 2002</a></td></tr>
</table>
</td><td>
<table>
<tr><th>Editor-in-Chief</th><td>Jeffrey Friedman</td></tr>
<tr><th>Managing Editor</th><td>Drew Todd</td></tr>
<tr><th>Features Editor</th><td>Edward Douglas</td></tr>
<tr><th>World News</th><td>Jake Himmelrich</td></tr>
<tr><th>Sports Editor</th><td>Jason Gant</td></tr>
<tr><th>Opinion Editor</th><td>Tom Miller</td></tr>
<tr><th>Arts Editor</th><td>Derrick Wang</td></tr>
<tr><th>News Editor</th><td>Justin Batoff</td></tr>
<tr><th>Online Editor</th><td>Scott Kidder</td></tr>
<tr><th>Business Editor</th><td>Justin Batoff</td></tr>
<tr><th>Copy Editor</th><td>Alex Helfand</td></tr>
<tr><th>Photo Editor</th><td>John Miller</td></tr>
</table>
</td></tr>

<tr><td colspan="2">
<br><br>
<span>2000-2001</span>
</td></tr>
<tr><td>
<table>
<tr><td><a href="2000-2001/GNewsSept_21_2000_Issue.pdf">September 21, 2000</a></td></tr>
<tr><td><a href="2000-2001/GNewsNov_14_2000_Issue.pdf">November 14, 2000</a></td></tr>
<tr><td><a href="2000-2001/GNewsDec_05_2000_Issue.pdf">December 5, 2000</a></td></tr>
<tr><td><a href="2000-2001/GNewsDec_19_2000_Issue.pdf">December 19, 2000</a></td></tr>
<tr><td><a href="2000-2001/GNewsFeb_23_2001_Issue.pdf">February 23, 2001</a></td></tr>
<tr><td><a href="2000-2001/GNewsApril_27_2001_Issue.pdf">April 27, 2001</a></td></tr>
<tr><td><a href="2000-2001/GNewsJune_11_2001_Issue.pdf">June 11, 2001</a></td></tr>
</table>
</td><td>
<table>
<tr><th>Editors-in-Chief</th><td>Ben Priven, Thomas Markham</td></tr>
<tr><th>Managing Editor</th><td>Mike Jesada</td></tr>
<tr><th>Features Editor</th><td>Drew Todd</td></tr>
<tr><th>World News</th><td>Colin Weiner</td></tr>
<tr><th>Sports Editor</th><td>Jeff Friedman</td></tr>
<tr><th>Opinion Editor</th><td>Andre Christie</td></tr>
<tr><th>Arts Editor</th><td>Derrick Wang</td></tr>
<tr><th>Online Editor</th><td>Marty Taylor</td></tr>
<tr><th>Copy Editor</th><td>Bryce Becker</td></tr>
<tr><th>Business Editor</th><td>Justin Batoff</td></tr>
<tr><th>Circulation Editor</th><td>Shahjahan Noor</td></tr>
</table>
</td></tr>

</table>
</div>



<b>Before 2000</b><br>
<a href="1990before/11_11_1901.pdf">November 1901</a><br>
<a href="1990before/2_10_1902.pdf">February 1902</a><br>
<br>
<br>
<center><h3>Gilman Sports News</h3></center>
<a href="2004-2005/9-22-04sports.pdf">September 22, 2004 Sports News</a><br>
<a href="2005-2006/11-9-05sports.pdf">November 9, 2005 Sports News</a><br>
<a href="2004-2005/2-10-05sports.pdf">February 10, 2005 Sports News</a><br>
<a href="2004-2005/10-26-04sports.pdf">October 26, 2006 Sports News</a><br>
<br>
<br>
<center><h3>Gilman Cynosure (Yearbook)</h3></center>
<a href="specials/2004cyno/">Cynosure 2004</a><br>
</div>
<br>
<br>
<?php include("/home/gnews/public_html/process/footer.php");?>




<?php
//FUNCTIONS BEGIN HERE
function findArticles($selectyear){
	//Inputs $selectyear.  The starting year of the start of school.  
	//To display the 2007-2008 school year, $selectyear would be 2007
	$query = "SELECT * FROM issuelist";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		//Selected Year, Fall
		if($row['year']==$selectyear && $row['month']>7)
			$displayIssue=true;
		//Next Selected Year, Spring
		if($row['year']==$selectyear+1 && $row['month']<=7)
			$displayIssue=true;
		//Display Row
		if($displayIssue){
			echo '<tr><th>'.$row['date'];
			echo '</th><td><a href="'.$row['pdf'];
			echo '">PDF (Print Version)</a></td><td><a href="index.php?table='.$row['issuetable'];
			echo '">Online Version</a></td></tr>';
		}
		$displayIssue=false;
	}
}

?>
