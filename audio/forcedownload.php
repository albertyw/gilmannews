<?php

// grab the requested file's name
$id = $_GET['id'];

$dbh=mysql_connect("localhost", "gnews_gilman","") or die(mysql_error());
mysql_select_db ("gnews_gilmannews") or die(mysql_error());

$query = "SELECT * FROM audio WHERE id='$id'";
$result= mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$file_name=$row['filelocation'];
$file_name_local=str_replace("http://www.gilmannews.com/", "/home/gnews/public_html/", $filename);
$downloads=$row['downloads']+1;

$result = mysql_query("UPDATE audio SET downloads='$downloads' WHERE id='$id'")
or die(mysql_error());


// required for IE
if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off');	}

header('Pragma: public'); 	// required
header('Expires: 0');		// no cache
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private',false);
header('Content-Type: application/force-download');
header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.filesize($file_name_local));	// provide file size
set_time_limit(0);
@readfile("$file_name") or die("File not found.");		// push it out	

?>
