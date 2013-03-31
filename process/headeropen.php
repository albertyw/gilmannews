<?php
//Put First Header Stuff In This File
//First include() file
//Beginning of page

//headeropen.php
//"document text"
//headermiddle.php
//header.php
//"document"
//footer.php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>

<?php
connectmysql();//All pages will be connected to MySQL Database


//-------------GLOBAL (SITEWIDE) FUNCTIONS-------------
/*Modifying these functions may make other pages not work
Modify only when you know what you are doing */


//Connects to MySQL Database
//Needed wherever databases are needed
//Input: null
//Output: null
function connectmysql(){
	$dbh=mysql_connect("localhost", "gnews_gilman","") or die(mysql_error());
	mysql_select_db ("gnews_gilmannews") or die(mysql_error());
}

//Finds and returns the latest table
//If inputed $table variable is already filled, then function returns the same variable
//otherwise function looks in issuelist table and finds the latest table.  
//The returned variable is the latest mysql table of news articles
//Input:  $table
//Output: $row['issuetable'] OR $table
function findLatestTable($table){
	//Called near header includes, returns user-selected table (newspaper issue) or returns latest table
	if ($table!='' || $table!=null){//User has already specified the table
		return $table;
	}else{//User has not specified the table and table needs to be found
		$query = "SELECT MAX(id) AS id FROM issuelist";//Find latest issue
		$maxId = mysql_query($query) or die(mysql_error());
		$maxId = mysql_fetch_array($maxId);
		$maxId=$maxId['id'];//Find issue id
		$foundtable = false;
		while($foundtable == false){
			$query = "SELECT * FROM issuelist WHERE id='$maxId'";//Find issue info
			$result = mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_array($result);
			$foundtable = true;
			//If the row doesn't have a table name listed, skip it
			if($row['issuetable']=='' || $row['issuetable']==null || $row['issuetable']=='null'){
				$foundtable = false;
			}
		}
		return $row['issuetable'];//return table name
	}
}

//Displays a link for the user to download a pdf
//Auto-checks with function findLatestTable($table) in case $table==null
//Input: $table
//Output: '<a href="http://www.gilmannews.com/2007-2008/GNewsDec_20_2007Issue.pdf">December 20, 2007</a>';

function downloadissuelink($table){

	$query = "SELECT * FROM issuelist WHERE issuetable='$table'";//Find table info
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	echo '<a href="';//Start outputing the link
	echo $row['pdf'];
	echo '">';
	echo $row['date'];
	echo '</a>';
}


//--------------END GLOBAL FUNCTIONS------------------


//Title Text then headermiddle.php after this file


?>
