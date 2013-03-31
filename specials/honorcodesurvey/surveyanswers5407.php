<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Specials ~~ Gilman Honor Code -- Senior Survey
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/SPECIALS/HONORCODESURVEY/SURVEYANSWERS5407.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 13, 2008 BY ALBERT WANG '08
DESCRIPTION:	2008 STUDENT HONOR CODE SURVEY ANSWERS
USAGE:		PRIVATE
*/
//Nifty Cube Corners Javascript Calls
$footer=true;
$header=true;
//End Nifty Cube
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include ("/home/gnews/public_html/process/header.php");
?>

<?php
echo '<center><h1>Gilman Honor Code -- Student Survey</h1>';
echo '<a href="index.php">Suvey Questions</a></center><br>';

$query = "SELECT * FROM specialshonorsurvey";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	if($row['gradelevel']=='2008') $numseniors++;
	if($row['gradelevel']=='2009') $numjuniors++;
	if($row['gradelevel']=='2010') $numsophomores++;
	if($row['gradelevel']=='2011') $numfreshmen++;
}
echo 'Number of people who have taken this survey:<br>';
echo "Seniors: $numseniors<br>";
echo "Juniors: $numjuniors<br>";
echo "Sophomores: $numsophomores<br>";
echo "Freshmen: $numfreshmen<br>";
$totalsurveys=$numseniors+$numjuniors+$numsophomores+$numfreshmen;
echo 'Total: '.$totalsurveys.'<br>';
echo '<br><br>';


$query = "SELECT * FROM specialshonorsurvey";
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	if($row['gradelevel']=='2008'){
		if($row['stealing']=='1') $stealing2008++;
		if($row['lyingteachers']=='1') $lyingteachers2008++;
		if($row['lyingstudents']=='1') $lyingstudents2008++;
		if($row['copying']=='1') $copying2008++;
		if($row['usingunauthorized']=='1') $usingunauthorized2008++;
		if($row['leaving']=='1') $leaving2008++;
		if($row['nottaking']=='1') $nottaking2008++;
		if($row['giving']=='1') $giving2008++;
		if($row['plagiarizing']=='1') $plagiarizing2008++;
		if($row['receiving']=='1') $receiving2008++;
		if($row['excessive']=='1') $excessive2008++;
		if($row['parental']=='1') $parental2008++;
		if($row['poor']=='1') $poor2008++;
		if($row['insufficient']=='1') $insufficient2008++;
		if($row['laziness']=='1') $laziness2008++;
		if($row['procrastination']=='1') $procrastination2008++;
		if($row['peer']=='1') $peer2008++;
		if($row['bullying']=='1') $bullying2008++;
		if($row['thedesire']=='1') $thedesire2008++;
		if($row['Q3']=='1') $Q3_1_2008++;
		if($row['Q3']=='2') $Q3_2_2008++;
		if($row['Q3']=='3') $Q3_3_2008++;
		if($row['Q3']=='4') $Q3_4_2008++;
		if($row['Q3']=='5') $Q3_5_2008++;
		if($row['Q4']=='1') $Q4_1_2008++;
		if($row['Q4']=='2') $Q4_2_2008++;
		if($row['Q4']=='3') $Q4_3_2008++;
		if($row['Q4']=='4') $Q4_4_2008++;
		if($row['Q4']=='5') $Q4_5_2008++;
		if($row['Q5']=='1') $Q5_1_2008++;
		if($row['Q5']=='2') $Q5_2_2008++;
		if($row['Q5']=='3') $Q5_3_2008++;
		if($row['Q5']=='4') $Q5_4_2008++;
		if($row['Q5']=='5') $Q5_5_2008++;
		if($row['Q6']=='1') $Q6_1_2008++;
		if($row['Q6']=='2') $Q6_2_2008++;
		if($row['Q6']=='3') $Q6_3_2008++;
		if($row['Q6']=='4') $Q6_4_2008++;
		if($row['Q6']=='5') $Q6_5_2008++;
		if($row['Q7']=='1') $Q7_1_2008++;
		if($row['Q7']=='2') $Q7_2_2008++;
		if($row['Q7']=='3') $Q7_3_2008++;
		if($row['Q7']=='4') $Q7_4_2008++;
		if($row['Q7']=='5') $Q7_5_2008++;
		if($row['Q8']=='1') $Q8_1_2008++;
		if($row['Q8']=='2') $Q8_2_2008++;
		if($row['Q8']=='3') $Q8_3_2008++;
		if($row['Q8']=='4') $Q8_4_2008++;
		if($row['Q8']=='5') $Q8_5_2008++;
		if($row['Q9']=='1') $Q9_1_2008++;
		if($row['Q9']=='2') $Q9_2_2008++;
		if($row['Q9']=='3') $Q9_3_2008++;
		if($row['Q9']=='4') $Q9_4_2008++;
		if($row['Q9']=='5') $Q9_5_2008++;
		if($row['Q10']=='1') $Q10_1_2008++;
		if($row['Q10']=='2') $Q10_2_2008++;
		if($row['Q10']=='3') $Q10_3_2008++;
		if($row['Q10']=='4') $Q10_4_2008++;
		if($row['Q10']=='5') $Q10_5_2008++;
		if($row['Q11']=='1') $Q11_1_2008++;
		if($row['Q11']=='2') $Q11_2_2008++;
		if($row['Q11']=='3') $Q11_3_2008++;
		if($row['Q11']=='4') $Q11_4_2008++;
		if($row['Q11']=='5') $Q11_5_2008++;
		if($row['Q12']=='1') $Q12_1_2008++;
		if($row['Q12']=='2') $Q12_2_2008++;
		if($row['Q12']=='3') $Q12_3_2008++;
		if($row['Q12']=='4') $Q12_4_2008++;
		if($row['Q12']=='5') $Q12_5_2008++;
		if($row['Q13']=='1') $Q13_1_2008++;
		if($row['Q13']=='2') $Q13_2_2008++;
		if($row['Q13']=='3') $Q13_3_2008++;
		if($row['Q13']=='4') $Q13_4_2008++;
		if($row['Q13']=='5') $Q13_5_2008++;
		if($row['Q14']=='1') $Q14_1_2008++;
		if($row['Q14']=='2') $Q14_2_2008++;
		if($row['Q14']=='3') $Q14_3_2008++;
		if($row['Q14']=='4') $Q14_4_2008++;
		if($row['Q14']=='5') $Q14_5_2008++;
		if($row['Q15']=='1') $Q15_1_2008++;
		if($row['Q15']=='2') $Q15_2_2008++;
		if($row['Q15']=='3') $Q15_3_2008++;
		if($row['Q15']=='4') $Q15_4_2008++;
		if($row['Q15']=='5') $Q15_5_2008++;
		if($row['Q16']=='1') $Q16_1_2008++;
		if($row['Q16']=='2') $Q16_2_2008++;
		if($row['Q16']=='3') $Q16_3_2008++;
		if($row['Q16']=='4') $Q16_4_2008++;
		if($row['Q16']=='5') $Q16_5_2008++;
		if($row['Q17']=='1') $Q17_1_2008++;
		if($row['Q17']=='2') $Q17_2_2008++;
		if($row['Q17']=='3') $Q17_3_2008++;
		if($row['Q17']=='4') $Q17_4_2008++;
		if($row['Q17']=='5') $Q17_5_2008++;
		if($row['Q18']=='1') $Q18_1_2008++;
		if($row['Q18']=='2') $Q18_2_2008++;
		if($row['Q18']=='3') $Q18_3_2008++;
		if($row['Q18']=='4') $Q18_4_2008++;
		if($row['Q18']=='5') $Q18_5_2008++;
		if($row['Q19']=='1') $Q19_1_2008++;
		if($row['Q19']=='2') $Q19_2_2008++;
		if($row['Q19']=='3') $Q19_3_2008++;
		if($row['Q19']=='4') $Q19_4_2008++;
		if($row['Q19']=='5') $Q19_5_2008++;
		if($row['Q20']=='1') $Q20_1_2008++;
		if($row['Q20']=='2') $Q20_2_2008++;
		if($row['Q20']=='3') $Q20_3_2008++;
		if($row['Q20']=='4') $Q20_4_2008++;
		if($row['Q20']=='5') $Q20_5_2008++;
	}
	if($row['gradelevel']=='2009'){
		if($row['stealing']=='1') $stealing2009++;
		if($row['lyingteachers']=='1') $lyingteachers2009++;
		if($row['lyingstudents']=='1') $lyingstudents2009++;
		if($row['copying']=='1') $copying2009++;
		if($row['usingunauthorized']=='1') $usingunauthorized2009++;
		if($row['leaving']=='1') $leaving2009++;
		if($row['nottaking']=='1') $nottaking2009++;
		if($row['giving']=='1') $giving2009++;
		if($row['plagiarizing']=='1') $plagiarizing2009++;
		if($row['receiving']=='1') $receiving2009++;
		if($row['excessive']=='1') $excessive2009++;
		if($row['parental']=='1') $parental2009++;
		if($row['poor']=='1') $poor2009++;
		if($row['insufficient']=='1') $insufficient2009++;
		if($row['laziness']=='1') $laziness2009++;
		if($row['procrastination']=='1') $procrastination2009++;
		if($row['peer']=='1') $peer2009++;
		if($row['bullying']=='1') $bullying2009++;
		if($row['thedesire']=='1') $thedesire2009++;
		if($row['Q3']=='1') $Q3_1_2009++;
		if($row['Q3']=='2') $Q3_2_2009++;
		if($row['Q3']=='3') $Q3_3_2009++;
		if($row['Q3']=='4') $Q3_4_2009++;
		if($row['Q3']=='5') $Q3_5_2009++;
		if($row['Q4']=='1') $Q4_1_2009++;
		if($row['Q4']=='2') $Q4_2_2009++;
		if($row['Q4']=='3') $Q4_3_2009++;
		if($row['Q4']=='4') $Q4_4_2009++;
		if($row['Q4']=='5') $Q4_5_2009++;
		if($row['Q5']=='1') $Q5_1_2009++;
		if($row['Q5']=='2') $Q5_2_2009++;
		if($row['Q5']=='3') $Q5_3_2009++;
		if($row['Q5']=='4') $Q5_4_2009++;
		if($row['Q5']=='5') $Q5_5_2009++;
		if($row['Q6']=='1') $Q6_1_2009++;
		if($row['Q6']=='2') $Q6_2_2009++;
		if($row['Q6']=='3') $Q6_3_2009++;
		if($row['Q6']=='4') $Q6_4_2009++;
		if($row['Q6']=='5') $Q6_5_2009++;
		if($row['Q7']=='1') $Q7_1_2009++;
		if($row['Q7']=='2') $Q7_2_2009++;
		if($row['Q7']=='3') $Q7_3_2009++;
		if($row['Q7']=='4') $Q7_4_2009++;
		if($row['Q7']=='5') $Q7_5_2009++;
		if($row['Q8']=='1') $Q8_1_2009++;
		if($row['Q8']=='2') $Q8_2_2009++;
		if($row['Q8']=='3') $Q8_3_2009++;
		if($row['Q8']=='4') $Q8_4_2009++;
		if($row['Q8']=='5') $Q8_5_2009++;
		if($row['Q9']=='1') $Q9_1_2009++;
		if($row['Q9']=='2') $Q9_2_2009++;
		if($row['Q9']=='3') $Q9_3_2009++;
		if($row['Q9']=='4') $Q9_4_2009++;
		if($row['Q9']=='5') $Q9_5_2009++;
		if($row['Q10']=='1') $Q10_1_2009++;
		if($row['Q10']=='2') $Q10_2_2009++;
		if($row['Q10']=='3') $Q10_3_2009++;
		if($row['Q10']=='4') $Q10_4_2009++;
		if($row['Q10']=='5') $Q10_5_2009++;
		if($row['Q11']=='1') $Q11_1_2009++;
		if($row['Q11']=='2') $Q11_2_2009++;
		if($row['Q11']=='3') $Q11_3_2009++;
		if($row['Q11']=='4') $Q11_4_2009++;
		if($row['Q11']=='5') $Q11_5_2009++;
		if($row['Q12']=='1') $Q12_1_2009++;
		if($row['Q12']=='2') $Q12_2_2009++;
		if($row['Q12']=='3') $Q12_3_2009++;
		if($row['Q12']=='4') $Q12_4_2009++;
		if($row['Q12']=='5') $Q12_5_2009++;
		if($row['Q13']=='1') $Q13_1_2009++;
		if($row['Q13']=='2') $Q13_2_2009++;
		if($row['Q13']=='3') $Q13_3_2009++;
		if($row['Q13']=='4') $Q13_4_2009++;
		if($row['Q13']=='5') $Q13_5_2009++;
		if($row['Q14']=='1') $Q14_1_2009++;
		if($row['Q14']=='2') $Q14_2_2009++;
		if($row['Q14']=='3') $Q14_3_2009++;
		if($row['Q14']=='4') $Q14_4_2009++;
		if($row['Q14']=='5') $Q14_5_2009++;
		if($row['Q15']=='1') $Q15_1_2009++;
		if($row['Q15']=='2') $Q15_2_2009++;
		if($row['Q15']=='3') $Q15_3_2009++;
		if($row['Q15']=='4') $Q15_4_2009++;
		if($row['Q15']=='5') $Q15_5_2009++;
		if($row['Q16']=='1') $Q16_1_2009++;
		if($row['Q16']=='2') $Q16_2_2009++;
		if($row['Q16']=='3') $Q16_3_2009++;
		if($row['Q16']=='4') $Q16_4_2009++;
		if($row['Q16']=='5') $Q16_5_2009++;
		if($row['Q17']=='1') $Q17_1_2009++;
		if($row['Q17']=='2') $Q17_2_2009++;
		if($row['Q17']=='3') $Q17_3_2009++;
		if($row['Q17']=='4') $Q17_4_2009++;
		if($row['Q17']=='5') $Q17_5_2009++;
		if($row['Q18']=='1') $Q18_1_2009++;
		if($row['Q18']=='2') $Q18_2_2009++;
		if($row['Q18']=='3') $Q18_3_2009++;
		if($row['Q18']=='4') $Q18_4_2009++;
		if($row['Q18']=='5') $Q18_5_2009++;
		if($row['Q19']=='1') $Q19_1_2009++;
		if($row['Q19']=='2') $Q19_2_2009++;
		if($row['Q19']=='3') $Q19_3_2009++;
		if($row['Q19']=='4') $Q19_4_2009++;
		if($row['Q19']=='5') $Q19_5_2009++;
		if($row['Q20']=='1') $Q20_1_2009++;
		if($row['Q20']=='2') $Q20_2_2009++;
		if($row['Q20']=='3') $Q20_3_2009++;
		if($row['Q20']=='4') $Q20_4_2009++;
		if($row['Q20']=='5') $Q20_5_2009++;
	}
	if($row['gradelevel']=='2010'){
		if($row['stealing']=='1') $stealing2010++;
		if($row['lyingteachers']=='1') $lyingteachers2010++;
		if($row['lyingstudents']=='1') $lyingstudents2010++;
		if($row['copying']=='1') $copying2010++;
		if($row['usingunauthorized']=='1') $usingunauthorized2010++;
		if($row['leaving']=='1') $leaving2010++;
		if($row['nottaking']=='1') $nottaking2010++;
		if($row['giving']=='1') $giving2010++;
		if($row['plagiarizing']=='1') $plagiarizing2010++;
		if($row['receiving']=='1') $receiving2010++;
		if($row['excessive']=='1') $excessive2010++;
		if($row['parental']=='1') $parental2010++;
		if($row['poor']=='1') $poor2010++;
		if($row['insufficient']=='1') $insufficient2010++;
		if($row['laziness']=='1') $laziness2010++;
		if($row['procrastination']=='1') $procrastination2010++;
		if($row['peer']=='1') $peer2010++;
		if($row['bullying']=='1') $bullying2010++;
		if($row['thedesire']=='1') $thedesire2010++;
		if($row['Q3']=='1') $Q3_1_2010++;
		if($row['Q3']=='2') $Q3_2_2010++;
		if($row['Q3']=='3') $Q3_3_2010++;
		if($row['Q3']=='4') $Q3_4_2010++;
		if($row['Q3']=='5') $Q3_5_2010++;
		if($row['Q4']=='1') $Q4_1_2010++;
		if($row['Q4']=='2') $Q4_2_2010++;
		if($row['Q4']=='3') $Q4_3_2010++;
		if($row['Q4']=='4') $Q4_4_2010++;
		if($row['Q4']=='5') $Q4_5_2010++;
		if($row['Q5']=='1') $Q5_1_2010++;
		if($row['Q5']=='2') $Q5_2_2010++;
		if($row['Q5']=='3') $Q5_3_2010++;
		if($row['Q5']=='4') $Q5_4_2010++;
		if($row['Q5']=='5') $Q5_5_2010++;
		if($row['Q6']=='1') $Q6_1_2010++;
		if($row['Q6']=='2') $Q6_2_2010++;
		if($row['Q6']=='3') $Q6_3_2010++;
		if($row['Q6']=='4') $Q6_4_2010++;
		if($row['Q6']=='5') $Q6_5_2010++;
		if($row['Q7']=='1') $Q7_1_2010++;
		if($row['Q7']=='2') $Q7_2_2010++;
		if($row['Q7']=='3') $Q7_3_2010++;
		if($row['Q7']=='4') $Q7_4_2010++;
		if($row['Q7']=='5') $Q7_5_2010++;
		if($row['Q8']=='1') $Q8_1_2010++;
		if($row['Q8']=='2') $Q8_2_2010++;
		if($row['Q8']=='3') $Q8_3_2010++;
		if($row['Q8']=='4') $Q8_4_2010++;
		if($row['Q8']=='5') $Q8_5_2010++;
		if($row['Q9']=='1') $Q9_1_2010++;
		if($row['Q9']=='2') $Q9_2_2010++;
		if($row['Q9']=='3') $Q9_3_2010++;
		if($row['Q9']=='4') $Q9_4_2010++;
		if($row['Q9']=='5') $Q9_5_2010++;
		if($row['Q10']=='1') $Q10_1_2010++;
		if($row['Q10']=='2') $Q10_2_2010++;
		if($row['Q10']=='3') $Q10_3_2010++;
		if($row['Q10']=='4') $Q10_4_2010++;
		if($row['Q10']=='5') $Q10_5_2010++;
		if($row['Q11']=='1') $Q11_1_2010++;
		if($row['Q11']=='2') $Q11_2_2010++;
		if($row['Q11']=='3') $Q11_3_2010++;
		if($row['Q11']=='4') $Q11_4_2010++;
		if($row['Q11']=='5') $Q11_5_2010++;
		if($row['Q12']=='1') $Q12_1_2010++;
		if($row['Q12']=='2') $Q12_2_2010++;
		if($row['Q12']=='3') $Q12_3_2010++;
		if($row['Q12']=='4') $Q12_4_2010++;
		if($row['Q12']=='5') $Q12_5_2010++;
		if($row['Q13']=='1') $Q13_1_2010++;
		if($row['Q13']=='2') $Q13_2_2010++;
		if($row['Q13']=='3') $Q13_3_2010++;
		if($row['Q13']=='4') $Q13_4_2010++;
		if($row['Q13']=='5') $Q13_5_2010++;
		if($row['Q14']=='1') $Q14_1_2010++;
		if($row['Q14']=='2') $Q14_2_2010++;
		if($row['Q14']=='3') $Q14_3_2010++;
		if($row['Q14']=='4') $Q14_4_2010++;
		if($row['Q14']=='5') $Q14_5_2010++;
		if($row['Q15']=='1') $Q15_1_2010++;
		if($row['Q15']=='2') $Q15_2_2010++;
		if($row['Q15']=='3') $Q15_3_2010++;
		if($row['Q15']=='4') $Q15_4_2010++;
		if($row['Q15']=='5') $Q15_5_2010++;
		if($row['Q16']=='1') $Q16_1_2010++;
		if($row['Q16']=='2') $Q16_2_2010++;
		if($row['Q16']=='3') $Q16_3_2010++;
		if($row['Q16']=='4') $Q16_4_2010++;
		if($row['Q16']=='5') $Q16_5_2010++;
		if($row['Q17']=='1') $Q17_1_2010++;
		if($row['Q17']=='2') $Q17_2_2010++;
		if($row['Q17']=='3') $Q17_3_2010++;
		if($row['Q17']=='4') $Q17_4_2010++;
		if($row['Q17']=='5') $Q17_5_2010++;
		if($row['Q18']=='1') $Q18_1_2010++;
		if($row['Q18']=='2') $Q18_2_2010++;
		if($row['Q18']=='3') $Q18_3_2010++;
		if($row['Q18']=='4') $Q18_4_2010++;
		if($row['Q18']=='5') $Q18_5_2010++;
		if($row['Q19']=='1') $Q19_1_2010++;
		if($row['Q19']=='2') $Q19_2_2010++;
		if($row['Q19']=='3') $Q19_3_2010++;
		if($row['Q19']=='4') $Q19_4_2010++;
		if($row['Q19']=='5') $Q19_5_2010++;
		if($row['Q20']=='1') $Q20_1_2010++;
		if($row['Q20']=='2') $Q20_2_2010++;
		if($row['Q20']=='3') $Q20_3_2010++;
		if($row['Q20']=='4') $Q20_4_2010++;
		if($row['Q20']=='5') $Q20_5_2010++;
	}
	if($row['gradelevel']=='2011'){
		if($row['stealing']=='1') $stealing2011++;
		if($row['lyingteachers']=='1') $lyingteachers2011++;
		if($row['lyingstudents']=='1') $lyingstudents2011++;
		if($row['copying']=='1') $copying2011++;
		if($row['usingunauthorized']=='1') $usingunauthorized2011++;
		if($row['leaving']=='1') $leaving2011++;
		if($row['nottaking']=='1') $nottaking2011++;
		if($row['giving']=='1') $giving2011++;
		if($row['plagiarizing']=='1') $plagiarizing2011++;
		if($row['receiving']=='1') $receiving2011++;
		if($row['excessive']=='1') $excessive2011++;
		if($row['parental']=='1') $parental2011++;
		if($row['poor']=='1') $poor2011++;
		if($row['insufficient']=='1') $insufficient2011++;
		if($row['laziness']=='1') $laziness2011++;
		if($row['procrastination']=='1') $procrastination2011++;
		if($row['peer']=='1') $peer2011++;
		if($row['bullying']=='1') $bullying2011++;
		if($row['thedesire']=='1') $thedesire2011++;
		if($row['Q3']=='1') $Q3_1_2011++;
		if($row['Q3']=='2') $Q3_2_2011++;
		if($row['Q3']=='3') $Q3_3_2011++;
		if($row['Q3']=='4') $Q3_4_2011++;
		if($row['Q3']=='5') $Q3_5_2011++;
		if($row['Q4']=='1') $Q4_1_2011++;
		if($row['Q4']=='2') $Q4_2_2011++;
		if($row['Q4']=='3') $Q4_3_2011++;
		if($row['Q4']=='4') $Q4_4_2011++;
		if($row['Q4']=='5') $Q4_5_2011++;
		if($row['Q5']=='1') $Q5_1_2011++;
		if($row['Q5']=='2') $Q5_2_2011++;
		if($row['Q5']=='3') $Q5_3_2011++;
		if($row['Q5']=='4') $Q5_4_2011++;
		if($row['Q5']=='5') $Q5_5_2011++;
		if($row['Q6']=='1') $Q6_1_2011++;
		if($row['Q6']=='2') $Q6_2_2011++;
		if($row['Q6']=='3') $Q6_3_2011++;
		if($row['Q6']=='4') $Q6_4_2011++;
		if($row['Q6']=='5') $Q6_5_2011++;
		if($row['Q7']=='1') $Q7_1_2011++;
		if($row['Q7']=='2') $Q7_2_2011++;
		if($row['Q7']=='3') $Q7_3_2011++;
		if($row['Q7']=='4') $Q7_4_2011++;
		if($row['Q7']=='5') $Q7_5_2011++;
		if($row['Q8']=='1') $Q8_1_2011++;
		if($row['Q8']=='2') $Q8_2_2011++;
		if($row['Q8']=='3') $Q8_3_2011++;
		if($row['Q8']=='4') $Q8_4_2011++;
		if($row['Q8']=='5') $Q8_5_2011++;
		if($row['Q9']=='1') $Q9_1_2011++;
		if($row['Q9']=='2') $Q9_2_2011++;
		if($row['Q9']=='3') $Q9_3_2011++;
		if($row['Q9']=='4') $Q9_4_2011++;
		if($row['Q9']=='5') $Q9_5_2011++;
		if($row['Q10']=='1') $Q10_1_2011++;
		if($row['Q10']=='2') $Q10_2_2011++;
		if($row['Q10']=='3') $Q10_3_2011++;
		if($row['Q10']=='4') $Q10_4_2011++;
		if($row['Q10']=='5') $Q10_5_2011++;
		if($row['Q11']=='1') $Q11_1_2011++;
		if($row['Q11']=='2') $Q11_2_2011++;
		if($row['Q11']=='3') $Q11_3_2011++;
		if($row['Q11']=='4') $Q11_4_2011++;
		if($row['Q11']=='5') $Q11_5_2011++;
		if($row['Q12']=='1') $Q12_1_2011++;
		if($row['Q12']=='2') $Q12_2_2011++;
		if($row['Q12']=='3') $Q12_3_2011++;
		if($row['Q12']=='4') $Q12_4_2011++;
		if($row['Q12']=='5') $Q12_5_2011++;
		if($row['Q13']=='1') $Q13_1_2011++;
		if($row['Q13']=='2') $Q13_2_2011++;
		if($row['Q13']=='3') $Q13_3_2011++;
		if($row['Q13']=='4') $Q13_4_2011++;
		if($row['Q13']=='5') $Q13_5_2011++;
		if($row['Q14']=='1') $Q14_1_2011++;
		if($row['Q14']=='2') $Q14_2_2011++;
		if($row['Q14']=='3') $Q14_3_2011++;
		if($row['Q14']=='4') $Q14_4_2011++;
		if($row['Q14']=='5') $Q14_5_2011++;
		if($row['Q15']=='1') $Q15_1_2011++;
		if($row['Q15']=='2') $Q15_2_2011++;
		if($row['Q15']=='3') $Q15_3_2011++;
		if($row['Q15']=='4') $Q15_4_2011++;
		if($row['Q15']=='5') $Q15_5_2011++;
		if($row['Q16']=='1') $Q16_1_2011++;
		if($row['Q16']=='2') $Q16_2_2011++;
		if($row['Q16']=='3') $Q16_3_2011++;
		if($row['Q16']=='4') $Q16_4_2011++;
		if($row['Q16']=='5') $Q16_5_2011++;
		if($row['Q17']=='1') $Q17_1_2011++;
		if($row['Q17']=='2') $Q17_2_2011++;
		if($row['Q17']=='3') $Q17_3_2011++;
		if($row['Q17']=='4') $Q17_4_2011++;
		if($row['Q17']=='5') $Q17_5_2011++;
		if($row['Q18']=='1') $Q18_1_2011++;
		if($row['Q18']=='2') $Q18_2_2011++;
		if($row['Q18']=='3') $Q18_3_2011++;
		if($row['Q18']=='4') $Q18_4_2011++;
		if($row['Q18']=='5') $Q18_5_2011++;
		if($row['Q19']=='1') $Q19_1_2011++;
		if($row['Q19']=='2') $Q19_2_2011++;
		if($row['Q19']=='3') $Q19_3_2011++;
		if($row['Q19']=='4') $Q19_4_2011++;
		if($row['Q19']=='5') $Q19_5_2011++;
		if($row['Q20']=='1') $Q20_1_2011++;
		if($row['Q20']=='2') $Q20_2_2011++;
		if($row['Q20']=='3') $Q20_3_2011++;
		if($row['Q20']=='4') $Q20_4_2011++;
		if($row['Q20']=='5') $Q20_5_2011++;
	}
}


echo '<center><h3>Yes/No Section</h3></center>';


echo '<b>1. </b>I believe that the following are Honor Code violations<br>';
echo '<table border="1"><tr><td></td><td>Freshmen</td><td>Sophomores</td><td>Juniors</td><td>Seniors</td></tr>';
echo "<tr><td>Stealing</td><td>$stealing2011</td><td>$stealing2010</td><td>$stealing2009</td><td>$stealing2008</td></tr>";
echo "<tr><td>Lying to Teachers</td><td>$lyingteachers2011</td><td>$lyingteachers2010</td><td>$lyingteachers2009</td><td>$lyingteachers2008</td></tr>";
echo "<tr><td>Lying to students</td><td>$lyingstudents2011</td><td>$lyingstudents2010</td><td>$lyingstudents2009</td><td>$lyingstudents2008</td></tr>";
echo "<tr><td>Copying homework from another student</td><td>$copying2011</td><td>$copying2010</td><td>$copying2009</td><td>$copying2008</td></tr>";
echo "<tr><td>Using unauthorized materials to assist you during a quiz or test</td><td>$usingunauthorized2011</td><td>$usingunauthorized2010</td><td>$usingunauthorized2009</td><td>$usingunauthorized2008</td></tr>";
echo "<tr><td>Leaving campus without permission</td><td>$leaving2011</td><td>$leaving2010</td><td>$leaving2009</td><td>$leaving2008</td></tr>";
echo "<tr><td>Not taking action when you witness an honor violation</td><td>$nottaking2011</td><td>$nottaking2010</td><td>$nottaking2009</td><td>$nottaking2008</td></tr>";
echo "<tr><td>Giving or receiving information about a quiz or test before taking it</td><td>$giving2011</td><td>$giving2010</td><td>$giving2009</td><td>$giving2008</td></tr>";
echo "<tr><td>Plagiarizing from a book, website, or other source</td><td>$plagiarizing2011</td><td>$plagiarizing2010</td><td>$plagiarizing2009</td><td>$plagiarizing2008</td></tr>";
echo "<tr><td>Receiving help on a quiz or test by looking at another student's paper</td><td>$receiving2011</td><td>$receiving2010</td><td>$receiving2009</td><td>$receiving2008</td></tr>";
echo '</table>';

echo '<br><br><br>';
echo '<b>2.  </b>I believe that when Gilman students usually cheat, it’s because of <i>(check all that apply)</i>:<br>';
echo '<table border="1"><tr><td></td><td>Freshmen</td><td>Sophomores</td><td>Juniors</td><td>Seniors</td></tr>';
echo "<tr><td>Excessive academic demands</td><td>$excessive2011</td><td>$excessive2010</td><td>$excessive2009</td><td>$excessive2008</td></tr>";
echo "<tr><td>Parental pressure to succeed</td><td>$parental2011</td><td>$parental2010</td><td>$parental2009</td><td>$parental2008</td></tr>";
echo "<tr><td>Poor time management</td><td>$poor2011</td><td>$poor2010</td><td>$poor2009</td><td>$poor2008</td></tr>";
echo "<tr><td>Insufficient time in schedule</td><td>$insufficient2011</td><td>$insufficient2010</td><td>$insufficient2009</td><td>$insufficient2008</td></tr>";
echo "<tr><td>Laziness</td><td>$laziness2011</td><td>$laziness2010</td><td>$laziness2009</td><td>$laziness2008</td></tr>";
echo "<tr><td>Procrastination</td><td>$procrastination2011</td><td>$procrastination2010</td><td>$procrastination2009</td><td>$procrastination2008</td></tr>";
echo "<tr><td>Peer pressure</td><td>$peer2011</td><td>$peer2010</td><td>$peer2009</td><td>$peer2008</td></tr>";
echo "<tr><td>Bullying</td><td>$bullying2011</td><td>$bullying2010</td><td>$bullying2009</td><td>$bullying2008</td></tr>";
echo "<tr><td>The desire to help a friend</td><td>$thedesire2011</td><td>$thedesire2010</td><td>$thedesire2009</td><td>$thedesire2008</td></tr>";
echo '</table>';
echo '<br><br>';
echo '<hr>';


echo '<center><h3>Agree/Disagree Section</h3></center>';


echo '<br><br>';
echo '<i>Empty table cells mean nobody selected the answer</i><br>';
echo '<b>Class of 2008 Seniors</b>';
echo "
<table border=1>
<tr><th></th><th>Strongly Disagree</th><th>Disagree</th><th>No Preference</th><th>Agree</th><th>Strongly Agree</th></tr>
<tr><td><b>3.  </b>Gilman's Upper School is a safe and trusting place.</td>
<td>$Q3_1_2008</td><td>$Q3_2_2008</td><td>$Q3_3_2008</td><td>$Q3_4_2008</td><td>$Q3_5_2008</td></tr>
<tr><td><b>4.  </b>At Gilman, students trust each other.</td>
<td>$Q4_1_2008</td><td>$Q4_2_2008</td><td>$Q4_3_2008</td><td>$Q4_4_2008</td><td>$Q4_5_2008</td></tr>
<tr><td><b>5.  </b>I can leave my belongings unattended without fear of having them stolen.</td>
<td>$Q5_1_2008</td><td>$Q5_2_2008</td><td>$Q5_3_2008</td><td>$Q5_4_2008</td><td>$Q5_5_2008</td></tr>
<tr><td><b>6.  </b>Cheating at Gilman is widespread.</td>
<td>$Q6_1_2008</td><td>$Q6_2_2008</td><td>$Q6_3_2008</td><td>$Q6_4_2008</td><td>$Q6_5_2008</td></tr>
<tr><td><b>7.  </b>All Honor Code violations should be treated equally.</td>
<td>$Q7_1_2008</td><td>$Q7_2_2008</td><td>$Q7_3_2008</td><td>$Q7_4_2008</td><td>$Q7_5_2008</td></tr>
<tr><td><b>8.  </b>The Honor Code affects my decision-making and helps me to act honorably.</td>
<td>$Q8_1_2008</td><td>$Q8_2_2008</td><td>$Q8_3_2008</td><td>$Q8_4_2008</td><td>$Q8_5_2008</td></tr>
<tr><td><b>9.  </b>The existence of an Honor Code helps prevent cheating.</td>
<td>$Q9_1_2008</td><td>$Q9_2_2008</td><td>$Q9_3_2008</td><td>$Q9_4_2008</td><td>$Q9_5_2008</td></tr>
<tr><td><b>10.  </b>The Honor Code can only work properly if all members of the Gilman community report alleged Honor violations when they witness them.</td>
<td>$Q10_1_2008</td><td>$Q10_2_2008</td><td>$Q10_3_2008</td><td>$Q10_4_2008</td><td>$Q10_5_2008</td></tr>
<tr><td><b>11.  </b>All students accused of an Honor violation receive a fair hearing.</td>
<td>$Q11_1_2008</td><td>$Q11_2_2008</td><td>$Q11_3_2008</td><td>$Q11_4_2008</td><td>$Q11_5_2008</td></tr>
<tr><td><b>12.  </b>All students found guilty of committing an Honor Code violation should be punished in some way.</td>
<td>$Q12_1_2008</td><td>$Q12_2_2008</td><td>$Q12_3_2008</td><td>$Q12_4_2008</td><td>$Q12_5_2008</td></tr>
<tr><td><b>13.  </b>All students found guilty of committing an Honor Code violation should receive a suspension.</td>
<td>$Q13_1_2008</td><td>$Q13_2_2008</td><td>$Q13_3_2008</td><td>$Q13_4_2008</td><td>$Q13_5_2008</td></tr>
<tr><td><b>14.  </b>The Honor Committee should be made up of both teachers and students.</td>
<td>$Q14_1_2008</td><td>$Q14_2_2008</td><td>$Q14_3_2008</td><td>$Q14_4_2008</td><td>$Q14_5_2008</td></tr>
<tr><td><b>15.  </b>The Honor Committee should be made up only of students.</td>
<td>$Q15_1_2008</td><td>$Q15_2_2008</td><td>$Q15_3_2008</td><td>$Q15_4_2008</td><td>$Q15_5_2008</td></tr>
<tr><td><b>16.  </b>Teachers should monitor quizzes and tests more closely.</td>
<td>$Q16_1_2008</td><td>$Q16_2_2008</td><td>$Q16_3_2008</td><td>$Q16_4_2008</td><td>$Q16_5_2008</td></tr>
<tr><td><b>17.  </b>Signing the Honor Pledge on all written work is an essential component of the Honor Code.</td>
<td>$Q17_1_2008</td><td>$Q17_2_2008</td><td>$Q17_3_2008</td><td>$Q17_4_2008</td><td>$Q17_5_2008</td></tr>
<tr><td><b>18.  </b>The Honor Code is enforced consistently by all Gilman Upper School teachers.</td>
<td>$Q18_1_2008</td><td>$Q18_2_2008</td><td>$Q18_3_2008</td><td>$Q18_4_2008</td><td>$Q18_5_2008</td></tr>
<tr><td><b>19.  </b>My teachers at Gilman trust me.</td>
<td>$Q19_1_2008</td><td>$Q19_2_2008</td><td>$Q19_3_2008</td><td>$Q19_4_2008</td><td>$Q19_5_2008</td></tr>
<tr><td><b>20.  </b>I sign the entire Gilman Pledge on all assignments.</td>
<td>$Q20_1_2008</td><td>$Q20_2_2008</td><td>$Q20_3_2008</td><td>$Q20_4_2008</td><td>$Q20_5_2008</td></tr>
</table>
";
echo '<br><br>';
echo '<b>Class of 2009 Juniors</b>';
echo "
<table border=1>
<tr><th></th><th>Strongly Disagree</th><th>Disagree</th><th>No Preference</th><th>Agree</th><th>Strongly Agree</th></tr>
<tr><td><b>3.  </b>Gilman's Upper School is a safe and trusting place.</td>
<td>$Q3_1_2009</td><td>$Q3_2_2009</td><td>$Q3_3_2009</td><td>$Q3_4_2009</td><td>$Q3_5_2009</td></tr>
<tr><td><b>4.  </b>At Gilman, students trust each other.</td>
<td>$Q4_1_2009</td><td>$Q4_2_2009</td><td>$Q4_3_2009</td><td>$Q4_4_2009</td><td>$Q4_5_2009</td></tr>
<tr><td><b>5.  </b>I can leave my belongings unattended without fear of having them stolen.</td>
<td>$Q5_1_2009</td><td>$Q5_2_2009</td><td>$Q5_3_2009</td><td>$Q5_4_2009</td><td>$Q5_5_2009</td></tr>
<tr><td><b>6.  </b>Cheating at Gilman is widespread.</td>
<td>$Q6_1_2009</td><td>$Q6_2_2009</td><td>$Q6_3_2009</td><td>$Q6_4_2009</td><td>$Q6_5_2009</td></tr>
<tr><td><b>7.  </b>All Honor Code violations should be treated equally.</td>
<td>$Q7_1_2009</td><td>$Q7_2_2009</td><td>$Q7_3_2009</td><td>$Q7_4_2009</td><td>$Q7_5_2009</td></tr>
<tr><td><b>8.  </b>The Honor Code affects my decision-making and helps me to act honorably.</td>
<td>$Q8_1_2009</td><td>$Q8_2_2009</td><td>$Q8_3_2009</td><td>$Q8_4_2009</td><td>$Q8_5_2009</td></tr>
<tr><td><b>9.  </b>The existence of an Honor Code helps prevent cheating.</td>
<td>$Q9_1_2009</td><td>$Q9_2_2009</td><td>$Q9_3_2009</td><td>$Q9_4_2009</td><td>$Q9_5_2009</td></tr>
<tr><td><b>10.  </b>The Honor Code can only work properly if all members of the Gilman community report alleged Honor violations when they witness them.</td>
<td>$Q10_1_2009</td><td>$Q10_2_2009</td><td>$Q10_3_2009</td><td>$Q10_4_2009</td><td>$Q10_5_2009</td></tr>
<tr><td><b>11.  </b>All students accused of an Honor violation receive a fair hearing.</td>
<td>$Q11_1_2009</td><td>$Q11_2_2009</td><td>$Q11_3_2009</td><td>$Q11_4_2009</td><td>$Q11_5_2009</td></tr>
<tr><td><b>12.  </b>All students found guilty of committing an Honor Code violation should be punished in some way.</td>
<td>$Q12_1_2009</td><td>$Q12_2_2009</td><td>$Q12_3_2009</td><td>$Q12_4_2009</td><td>$Q12_5_2009</td></tr>
<tr><td><b>13.  </b>All students found guilty of committing an Honor Code violation should receive a suspension.</td>
<td>$Q13_1_2009</td><td>$Q13_2_2009</td><td>$Q13_3_2009</td><td>$Q13_4_2009</td><td>$Q13_5_2009</td></tr>
<tr><td><b>14.  </b>The Honor Committee should be made up of both teachers and students.</td>
<td>$Q14_1_2009</td><td>$Q14_2_2009</td><td>$Q14_3_2009</td><td>$Q14_4_2009</td><td>$Q14_5_2009</td></tr>
<tr><td><b>15.  </b>The Honor Committee should be made up only of students.</td>
<td>$Q15_1_2009</td><td>$Q15_2_2009</td><td>$Q15_3_2009</td><td>$Q15_4_2009</td><td>$Q15_5_2009</td></tr>
<tr><td><b>16.  </b>Teachers should monitor quizzes and tests more closely.</td>
<td>$Q16_1_2009</td><td>$Q16_2_2009</td><td>$Q16_3_2009</td><td>$Q16_4_2009</td><td>$Q16_5_2009</td></tr>
<tr><td><b>17.  </b>Signing the Honor Pledge on all written work is an essential component of the Honor Code.</td>
<td>$Q17_1_2009</td><td>$Q17_2_2009</td><td>$Q17_3_2009</td><td>$Q17_4_2009</td><td>$Q17_5_2009</td></tr>
<tr><td><b>18.  </b>The Honor Code is enforced consistently by all Gilman Upper School teachers.</td>
<td>$Q18_1_2009</td><td>$Q18_2_2009</td><td>$Q18_3_2009</td><td>$Q18_4_2009</td><td>$Q18_5_2009</td></tr>
<tr><td><b>19.  </b>My teachers at Gilman trust me.</td>
<td>$Q19_1_2009</td><td>$Q19_2_2009</td><td>$Q19_3_2009</td><td>$Q19_4_2009</td><td>$Q19_5_2009</td></tr>
<tr><td><b>20.  </b>I sign the entire Gilman Pledge on all assignments.</td>
<td>$Q20_1_2009</td><td>$Q20_2_2009</td><td>$Q20_3_2009</td><td>$Q20_4_2009</td><td>$Q20_5_2009</td></tr>
</table>
";
echo '<br><br>';
echo '<b>Class of 2010 Sophomore</b>';
echo "
<table border=1>
<tr><th></th><th>Strongly Disagree</th><th>Disagree</th><th>No Preference</th><th>Agree</th><th>Strongly Agree</th></tr>
<tr><td><b>3.  </b>Gilman's Upper School is a safe and trusting place.</td>
<td>$Q3_1_2010</td><td>$Q3_2_2010</td><td>$Q3_3_2010</td><td>$Q3_4_2010</td><td>$Q3_5_2010</td></tr>
<tr><td><b>4.  </b>At Gilman, students trust each other.</td>
<td>$Q4_1_2010</td><td>$Q4_2_2010</td><td>$Q4_3_2010</td><td>$Q4_4_2010</td><td>$Q4_5_2010</td></tr>
<tr><td><b>5.  </b>I can leave my belongings unattended without fear of having them stolen.</td>
<td>$Q5_1_2010</td><td>$Q5_2_2010</td><td>$Q5_3_2010</td><td>$Q5_4_2010</td><td>$Q5_5_2010</td></tr>
<tr><td><b>6.  </b>Cheating at Gilman is widespread.</td>
<td>$Q6_1_2010</td><td>$Q6_2_2010</td><td>$Q6_3_2010</td><td>$Q6_4_2010</td><td>$Q6_5_2010</td></tr>
<tr><td><b>7.  </b>All Honor Code violations should be treated equally.</td>
<td>$Q7_1_2010</td><td>$Q7_2_2010</td><td>$Q7_3_2010</td><td>$Q7_4_2010</td><td>$Q7_5_2010</td></tr>
<tr><td><b>8.  </b>The Honor Code affects my decision-making and helps me to act honorably.</td>
<td>$Q8_1_2010</td><td>$Q8_2_2010</td><td>$Q8_3_2010</td><td>$Q8_4_2010</td><td>$Q8_5_2010</td></tr>
<tr><td><b>9.  </b>The existence of an Honor Code helps prevent cheating.</td>
<td>$Q9_1_2010</td><td>$Q9_2_2010</td><td>$Q9_3_2010</td><td>$Q9_4_2010</td><td>$Q9_5_2010</td></tr>
<tr><td><b>10.  </b>The Honor Code can only work properly if all members of the Gilman community report alleged Honor violations when they witness them.</td>
<td>$Q10_1_2010</td><td>$Q10_2_2010</td><td>$Q10_3_2010</td><td>$Q10_4_2010</td><td>$Q10_5_2010</td></tr>
<tr><td><b>11.  </b>All students accused of an Honor violation receive a fair hearing.</td>
<td>$Q11_1_2010</td><td>$Q11_2_2010</td><td>$Q11_3_2010</td><td>$Q11_4_2010</td><td>$Q11_5_2010</td></tr>
<tr><td><b>12.  </b>All students found guilty of committing an Honor Code violation should be punished in some way.</td>
<td>$Q12_1_2010</td><td>$Q12_2_2010</td><td>$Q12_3_2010</td><td>$Q12_4_2010</td><td>$Q12_5_2010</td></tr>
<tr><td><b>13.  </b>All students found guilty of committing an Honor Code violation should receive a suspension.</td>
<td>$Q13_1_2010</td><td>$Q13_2_2010</td><td>$Q13_3_2010</td><td>$Q13_4_2010</td><td>$Q13_5_2010</td></tr>
<tr><td><b>14.  </b>The Honor Committee should be made up of both teachers and students.</td>
<td>$Q14_1_2010</td><td>$Q14_2_2010</td><td>$Q14_3_2010</td><td>$Q14_4_2010</td><td>$Q14_5_2010</td></tr>
<tr><td><b>15.  </b>The Honor Committee should be made up only of students.</td>
<td>$Q15_1_2010</td><td>$Q15_2_2010</td><td>$Q15_3_2010</td><td>$Q15_4_2010</td><td>$Q15_5_2010</td></tr>
<tr><td><b>16.  </b>Teachers should monitor quizzes and tests more closely.</td>
<td>$Q16_1_2010</td><td>$Q16_2_2010</td><td>$Q16_3_2010</td><td>$Q16_4_2010</td><td>$Q16_5_2010</td></tr>
<tr><td><b>17.  </b>Signing the Honor Pledge on all written work is an essential component of the Honor Code.</td>
<td>$Q17_1_2010</td><td>$Q17_2_2010</td><td>$Q17_3_2010</td><td>$Q17_4_2010</td><td>$Q17_5_2010</td></tr>
<tr><td><b>18.  </b>The Honor Code is enforced consistently by all Gilman Upper School teachers.</td>
<td>$Q18_1_2010</td><td>$Q18_2_2010</td><td>$Q18_3_2010</td><td>$Q18_4_2010</td><td>$Q18_5_2010</td></tr>
<tr><td><b>19.  </b>My teachers at Gilman trust me.</td>
<td>$Q19_1_2010</td><td>$Q19_2_2010</td><td>$Q19_3_2010</td><td>$Q19_4_2010</td><td>$Q19_5_2010</td></tr>
<tr><td><b>20.  </b>I sign the entire Gilman Pledge on all assignments.</td>
<td>$Q20_1_2010</td><td>$Q20_2_2010</td><td>$Q20_3_2010</td><td>$Q20_4_2010</td><td>$Q20_5_2010</td></tr>
</table>
";
echo '<br><br>';
echo '<b>Class of 2011 Freshman</b>';
echo "
<table border=1>
<tr><th></th><th>Strongly Disagree</th><th>Disagree</th><th>No Preference</th><th>Agree</th><th>Strongly Agree</th></tr>
<tr><td><b>3.  </b>Gilman's Upper School is a safe and trusting place.</td>
<td>$Q3_1_2011</td><td>$Q3_2_2011</td><td>$Q3_3_2011</td><td>$Q3_4_2011</td><td>$Q3_5_2011</td></tr>
<tr><td><b>4.  </b>At Gilman, students trust each other.</td>
<td>$Q4_1_2011</td><td>$Q4_2_2011</td><td>$Q4_3_2011</td><td>$Q4_4_2011</td><td>$Q4_5_2011</td></tr>
<tr><td><b>5.  </b>I can leave my belongings unattended without fear of having them stolen.</td>
<td>$Q5_1_2011</td><td>$Q5_2_2011</td><td>$Q5_3_2011</td><td>$Q5_4_2011</td><td>$Q5_5_2011</td></tr>
<tr><td><b>6.  </b>Cheating at Gilman is widespread.</td>
<td>$Q6_1_2011</td><td>$Q6_2_2011</td><td>$Q6_3_2011</td><td>$Q6_4_2011</td><td>$Q6_5_2011</td></tr>
<tr><td><b>7.  </b>All Honor Code violations should be treated equally.</td>
<td>$Q7_1_2011</td><td>$Q7_2_2011</td><td>$Q7_3_2011</td><td>$Q7_4_2011</td><td>$Q7_5_2011</td></tr>
<tr><td><b>8.  </b>The Honor Code affects my decision-making and helps me to act honorably.</td>
<td>$Q8_1_2011</td><td>$Q8_2_2011</td><td>$Q8_3_2011</td><td>$Q8_4_2011</td><td>$Q8_5_2011</td></tr>
<tr><td><b>9.  </b>The existence of an Honor Code helps prevent cheating.</td>
<td>$Q9_1_2011</td><td>$Q9_2_2011</td><td>$Q9_3_2011</td><td>$Q9_4_2011</td><td>$Q9_5_2011</td></tr>
<tr><td><b>10.  </b>The Honor Code can only work properly if all members of the Gilman community report alleged Honor violations when they witness them.</td>
<td>$Q10_1_2011</td><td>$Q10_2_2011</td><td>$Q10_3_2011</td><td>$Q10_4_2011</td><td>$Q10_5_2011</td></tr>
<tr><td><b>11.  </b>All students accused of an Honor violation receive a fair hearing.</td>
<td>$Q11_1_2011</td><td>$Q11_2_2011</td><td>$Q11_3_2011</td><td>$Q11_4_2011</td><td>$Q11_5_2011</td></tr>
<tr><td><b>12.  </b>All students found guilty of committing an Honor Code violation should be punished in some way.</td>
<td>$Q12_1_2011</td><td>$Q12_2_2011</td><td>$Q12_3_2011</td><td>$Q12_4_2011</td><td>$Q12_5_2011</td></tr>
<tr><td><b>13.  </b>All students found guilty of committing an Honor Code violation should receive a suspension.</td>
<td>$Q13_1_2011</td><td>$Q13_2_2011</td><td>$Q13_3_2011</td><td>$Q13_4_2011</td><td>$Q13_5_2011</td></tr>
<tr><td><b>14.  </b>The Honor Committee should be made up of both teachers and students.</td>
<td>$Q14_1_2011</td><td>$Q14_2_2011</td><td>$Q14_3_2011</td><td>$Q14_4_2011</td><td>$Q14_5_2011</td></tr>
<tr><td><b>15.  </b>The Honor Committee should be made up only of students.</td>
<td>$Q15_1_2011</td><td>$Q15_2_2011</td><td>$Q15_3_2011</td><td>$Q15_4_2011</td><td>$Q15_5_2011</td></tr>
<tr><td><b>16.  </b>Teachers should monitor quizzes and tests more closely.</td>
<td>$Q16_1_2011</td><td>$Q16_2_2011</td><td>$Q16_3_2011</td><td>$Q16_4_2011</td><td>$Q16_5_2011</td></tr>
<tr><td><b>17.  </b>Signing the Honor Pledge on all written work is an essential component of the Honor Code.</td>
<td>$Q17_1_2011</td><td>$Q17_2_2011</td><td>$Q17_3_2011</td><td>$Q17_4_2011</td><td>$Q17_5_2011</td></tr>
<tr><td><b>18.  </b>The Honor Code is enforced consistently by all Gilman Upper School teachers.</td>
<td>$Q18_1_2011</td><td>$Q18_2_2011</td><td>$Q18_3_2011</td><td>$Q18_4_2011</td><td>$Q18_5_2011</td></tr>
<tr><td><b>19.  </b>My teachers at Gilman trust me.</td>
<td>$Q19_1_2011</td><td>$Q19_2_2011</td><td>$Q19_3_2011</td><td>$Q19_4_2011</td><td>$Q19_5_2011</td></tr>
<tr><td><b>20.  </b>I sign the entire Gilman Pledge on all assignments.</td>
<td>$Q20_1_2011</td><td>$Q20_2_2011</td><td>$Q20_3_2011</td><td>$Q20_4_2011</td><td>$Q20_5_2011</td></tr>
</table>
";
echo '<br><br>';
echo '<hr>';
echo '<br><br>';


echo '<center><h3>Free Response Section</h3></center>';
echo '<h3>Question 1: Any other Honor Code Violations:</h3><br>';
$query = "SELECT * FROM specialshonorsurvey";
$result = mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result)){
	if($row['q1others']!='' && $row['q1others']!=null){
		echo '<b>Class of '.$row['gradelevel'].'</b><br>';
		echo $row['q1others'].'<br><br>';
	}
}
echo '<br><br><br>';
echo '<h3>Question 2: Other reasons why Gilman students cheat:</h3><br>';
$query = "SELECT * FROM specialshonorsurvey";
$result = mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result)){
	if($row['q2others']!='' && $row['q2others']!=null){
		echo '<b>Class of '.$row['gradelevel'].'</b><br>';
		echo $row['q2others'].'<br><br>';
	}
}
echo '<br><br><br>';
echo '<h3>Question 21: What do you value most about Gilman\'s honor code?</h3><br>';
$query = "SELECT * FROM specialshonorsurvey";
$result = mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result)){
	if($row['q21']!='' && $row['q21']!=null){
		echo '<b>Class of '.$row['gradelevel'].'</b><br>';
		echo $row['q21'].'<br><br>';
	}
}
echo '<br><br><br>';
echo '<h3>Question 22: What aspects of Gilman\'s honor code would you change if you could?</h3><br>';
$query = "SELECT * FROM specialshonorsurvey";
$result = mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result)){
	if($row['q22']!='' && $row['q22']!=null){
		echo '<b>Class of '.$row['gradelevel'].'</b><br>';
		echo $row['q22'].'<br><br>';
	}
}
echo '<br><br><br>';
echo '<h3>Question 23: Is there anything else you\'d like to communicate to us about Honor or the Honor Code at Gilman?</h3><br>';
$query = "SELECT * FROM specialshonorsurvey";
$result = mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_array($result)){
	if($row['q23']!='' && $row['q23']!=null){
		echo '<b>Class of '.$row['gradelevel'].'</b><br>';
		echo $row['q23'].'<br><br>';
	}
}
?>




<center><h2><i>Created by Albert Wang '08</i></h2></center>
<?php include("/home/gnews/public_html/process/footer.php");?>
