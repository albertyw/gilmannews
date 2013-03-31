<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Specials ~~ Gilman Honor Code -- Senior Survey
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/SPECIALS/HONORCODESURVEY/SURVEYPROCESS.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 13, 2008 BY ALBERT WANG '08
DESCRIPTION:	2008 STUDENT HONOR CODE SURVEY PROCESSING
USAGE:		SERVER
*/
//Nifty Cube Corners Javascript Calls
$header=true;
$footer=true;
//End Nifty Cube

?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include ("/home/gnews/public_html/process/header.php");
?>

<?php
//READ ANSWERS
/*
SURVEY ENDED.
ALL ANSWER PROCESSING IS COMMENTED OUT


$gradelevel = $_POST['gradelevel'];
if(isset($_POST['stealing'])){ $stealing=true;}else{ $stealing = false;}
if(isset($_POST['lyingteachers'])){ $lyingteachers=true;}else{ $lyingteachers = false;}
if(isset($_POST['lyingstudents'])){ $lyingstudents=true;}else{ $lyingstudents = false;}
if(isset($_POST['copying'])){ $copying=true;}else{ $copying = false;}
if(isset($_POST['usingunauthorized'])){ $usingunauthorized=true;}else{ $usingunauthorized = false;}
if(isset($_POST['leaving'])){ $leaving=true;}else{ $leaving = false;}
if(isset($_POST['nottaking'])){ $nottaking=true;}else{ $nottaking = false;}
if(isset($_POST['giving'])){ $giving=true;}else{ $giving = false;}
if(isset($_POST['plagiarizing'])){ $plagiarizing=true;}else{ $plagiarizing = false;}
if(isset($_POST['receiving'])){ $receiving=true;}else{ $receiving = false;}
$q1others = $_POST['q1others'];
if(isset($_POST['excessive'])){ $excessive=true;}else{ $excessive = false;}
if(isset($_POST['parental'])){ $parental=true;}else{ $parental = false;}
if(isset($_POST['poor'])){ $poor=true;}else{ $poor = false;}
if(isset($_POST['insufficient'])){ $insufficient=true;}else{ $insufficient = false;}
if(isset($_POST['laziness'])){ $laziness=true;}else{ $laziness = false;}
if(isset($_POST['procrastination'])){ $procrastination=true;}else{ $procrastination = false;}
if(isset($_POST['peer'])){ $peer=true;}else{ $peer = false;}
if(isset($_POST['bullying'])){ $bullying=true;}else{ $bullying = false;}
if(isset($_POST['thedesire'])){ $thedesire=true;}else{ $thedesire = false;}
$q2others = $_POST['q2others'];
$q3 = $_POST['Q3'];
$q4 = $_POST['Q4'];
$q5 = $_POST['Q5'];
$q6 = $_POST['Q6'];
$q7 = $_POST['Q7'];
$q8 = $_POST['Q8'];
$q9 = $_POST['Q9'];
$q10 = $_POST['Q10'];
$q11 = $_POST['Q11'];
$q12 = $_POST['Q12'];
$q13 = $_POST['Q13'];
$q14 = $_POST['Q14'];
$q15 = $_POST['Q15'];
$q16 = $_POST['Q16'];
$q17 = $_POST['Q17'];
$q18 = $_POST['Q18'];
$q19 = $_POST['Q19'];
$q20 = $_POST['Q20'];
$q21 = $_POST['q21'];
$q22 = $_POST['q22'];
$q23 = $_POST['q23'];
//END READ ANSWERS


//ADD ANSWERS TO DATABASE

mysql_query("INSERT INTO specialshonorsurvey
(gradelevel, 
stealing, 
lyingteachers, 
lyingstudents, 
copying, 
usingunauthorized, 
leaving, 
nottaking, 
giving,
plagiarizing, 
receiving, 
q1others, 
excessive, 
parental, poor, insufficient, 
laziness, procrastination, peer, 
bullying, thedesire,
q2others, 
Q3, Q4, Q5, Q6, Q7, Q8,
Q9, Q10, Q11, Q12, Q13, Q14,
Q15, Q16, Q17, Q18, Q19, Q20,
q21, 
q22, 
q23) 
VALUES
('$gradelevel', 
'$stealing', '$lyingteachers', '$lyingstudents', 
'$copying', '$usingunauthorized', '$leaving', '$nottaking', '$giving', 
'$plagiarizing', '$receiving', 
'$q1others', 
'$excessive', '$parental', '$poor','$insufficient', 
'$laziness', '$procrastination', '$peer', 
'$bullying', '$thedesire', 
'$q2others', 
'$q3', '$q4', '$q5', '$q6', '$q7', '$q8',
'$q9', '$q10', '$q11', '$q12', '$q13', '$q14',
'$q15', '$q16', '$q17', '$q18', '$q19', '$q20',
'$q21',
'$q22',
'$q23') ") or die(mysql_error());  


//END ADD ANSWERS TO DATABASE
*/
?>



<center><h1>Gilman Honor Code -- Student Survey</h1></center>
<br>
Thank you for submitting the Honor Code Survey.  <br>
<br>
<b>Please do NOT submit this survey again.  </b>


<?php include("/home/gnews/public_html/process/footer.php");?>
