<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Specials ~~ Gilman Honor Code -- Senior Survey
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/SPECIALS/HONORCODESURVEY/INDEX.PHP
STATUS:		FINISHED
LAST MODIFIED:	JUNE 13, 2008 BY ALBERT WANG '08
DESCRIPTION:	2008 STUDENT HONOR CODE SURVEY QUESTIONS
USAGE:		PUBLIC
*/
//Nifty Cube Corners Javascript Calls
$header=true;
$footer=true;
//End Nifty Cube

?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include ("/home/gnews/public_html/process/header.php");
?>

<form action="surveyprocess.php" method="POST">
<center><h1>Gilman Honor Code -- Student Survey</h1>
<font color="red">The 2008 Honor Code Student Survey Has Ended.<br>
The results are being reviewed by the Gilman Honor Committee.<br>
If you have any questions or comments, please contact Dr. Harris<br></font></center>

This survey is designed to gather information about student attitudes toward the Honor Code at Gilman.  
Based on the results of the survey, the Honor Code Review Committee may make recommendations about revising the Honor Code and the way in which it is implemented.<br>
<br>
<br>
<b>This survey is anonymous.  Please take this survey seriously.  You are on your honor to only take this survey only ONCE.</b><br>
<br>
Class of:<br>
<input type="radio" name="gradelevel" value="2008"> 2008<br>
<input type="radio" name="gradelevel" value="2009"> 2009<br>
<input type="radio" name="gradelevel" value="2010"> 2010<br>
<input type="radio" name="gradelevel" value="2011"> 2011<br>
<br>
<br>
<b>1. </b>I believe that the following are Honor Code violations – <i>add any of your own at the end of the list.  
(Check all that apply)</i>:<br>
<input type="checkbox" name="stealing"> Stealing<br>
<input type="checkbox" name="lyingteachers"> Lying to teachers<br>
<input type="checkbox" name="lyingstudents"> Lying to students<br>
<input type="checkbox" name="copying"> Copying homework from another student<br>
<input type="checkbox" name="usingunauthorized"> Using unauthorized materials to assist you during a quiz or test<br>
<input type="checkbox" name="leaving"> Leaving campus without permission<br>
<input type="checkbox" name="nottaking"> Not taking action when you witness an honor violation<br>
<input type="checkbox" name="giving"> Giving or receiving information about a quiz or test before taking it<br>
<input type="checkbox" name="plagiarizing"> Plagiarizing from a book, website, or other source<br>
<input type="checkbox" name="receiving"> Receiving help on a quiz or test by looking at another student's paper<br>
Others?<br>
<textarea cols="60" rows="5" name="q1others"></textarea><br>
<br>
<br>
<b>2.  </b>I believe that when Gilman students usually cheat, it’s because of <i>(check all that apply)</i>:<br>
<input type="checkbox" name="excessive"> Excessive academic demands<br>
<input type="checkbox" name="parental"> Parental pressure to succeed<br>
<input type="checkbox" name="poor"> Poor time management<br>
<input type="checkbox" name="insufficient"> Insufficient time in schedule to get stuff done<br>
<input type="checkbox" name="laziness"> Laziness<br>
<input type="checkbox" name="procrastination"> Procrastination<br>
<input type="checkbox" name="peer"> Peer pressure<br>
<input type="checkbox" name="bullying"> Bullying<br>
<input type="checkbox" name="thedesire"> The desire to help a friend<br>
Other reasons?<br>
<textarea cols="60" rows="5" name="q2others"></textarea><br>
<br>
<br>
<br>
Please read carefully each of the following statements.  
Then select the number between 1 and 5 that best expresses how you feel about each statement, where <br>
<br>
<table border="1">
<tr><th></th><th>Strongly Disagree</th><th>Disagree</th><th>No Preference</th><th>Agree</th><th>Strongly Agree</th></tr>
<tr><td><b>3.  </b>Gilman's Upper School is a safe and trusting place.</td>
<td><input type="radio" name="Q3" value="1"></td>
<td><input type="radio" name="Q3" value="2"></td>
<td><input type="radio" name="Q3" value="3"></td>
<td><input type="radio" name="Q3" value="4"></td>
<td><input type="radio" name="Q3" value="5"></td></tr>
<tr><td><b>4.  </b>At Gilman, students trust each other.</td>
<td><input type="radio" name="Q4" value="1"></td>
<td><input type="radio" name="Q4" value="2"></td>
<td><input type="radio" name="Q4" value="3"></td>
<td><input type="radio" name="Q4" value="4"></td>
<td><input type="radio" name="Q4" value="5"></td></tr>
<tr><td><b>5.  </b>I can leave my belongings unattended without fear of having them stolen.</td>
<td><input type="radio" name="Q5" value="1"></td>
<td><input type="radio" name="Q5" value="2"></td>
<td><input type="radio" name="Q5" value="3"></td>
<td><input type="radio" name="Q5" value="4"></td>
<td><input type="radio" name="Q5" value="5"></td></tr>
<tr><td><b>6.  </b>Cheating at Gilman is widespread.</td>
<td><input type="radio" name="Q6" value="1"></td>
<td><input type="radio" name="Q6" value="2"></td>
<td><input type="radio" name="Q6" value="3"></td>
<td><input type="radio" name="Q6" value="4"></td>
<td><input type="radio" name="Q6" value="5"></td></tr>
<tr><td><b>7.  </b>All Honor Code violations should be treated equally.</td>
<td><input type="radio" name="Q7" value="1"></td>
<td><input type="radio" name="Q7" value="2"></td>
<td><input type="radio" name="Q7" value="3"></td>
<td><input type="radio" name="Q7" value="4"></td>
<td><input type="radio" name="Q7" value="5"></td></tr>
<tr><td><b>8.  </b>The Honor Code affects my decision-making and helps me to act honorably.</td>
<td><input type="radio" name="Q8" value="1"></td>
<td><input type="radio" name="Q8" value="2"></td>
<td><input type="radio" name="Q8" value="3"></td>
<td><input type="radio" name="Q8" value="4"></td>
<td><input type="radio" name="Q8" value="5"></td></tr>
<tr><td><b>9.  </b>The existence of an Honor Code helps prevent cheating.</td>
<td><input type="radio" name="Q9" value="1"></td>
<td><input type="radio" name="Q9" value="2"></td>
<td><input type="radio" name="Q9" value="3"></td>
<td><input type="radio" name="Q9" value="4"></td>
<td><input type="radio" name="Q9" value="5"></td></tr>
<tr><td><b>10.  </b>The Honor Code can only work properly if all members of the Gilman community report alleged Honor violations when they witness them.</td>
<td><input type="radio" name="Q10" value="1"></td>
<td><input type="radio" name="Q10" value="2"></td>
<td><input type="radio" name="Q10" value="3"></td>
<td><input type="radio" name="Q10" value="4"></td>
<td><input type="radio" name="Q10" value="5"></td></tr>
<tr><td><b>11.  </b>All students accused of an Honor violation receive a fair hearing.</td>
<td><input type="radio" name="Q11" value="1"></td>
<td><input type="radio" name="Q11" value="2"></td>
<td><input type="radio" name="Q11" value="3"></td>
<td><input type="radio" name="Q11" value="4"></td>
<td><input type="radio" name="Q11" value="5"></td></tr>
<tr><td><b>12.  </b>All students found guilty of committing an Honor Code violation should be punished in some way.</td>
<td><input type="radio" name="Q12" value="1"></td>
<td><input type="radio" name="Q12" value="2"></td>
<td><input type="radio" name="Q12" value="3"></td>
<td><input type="radio" name="Q12" value="4"></td>
<td><input type="radio" name="Q12" value="5"></td></tr>
<tr><td><b>13.  </b>All students found guilty of committing an Honor Code violation should receive a suspension.</td>
<td><input type="radio" name="Q13" value="1"></td>
<td><input type="radio" name="Q13" value="2"></td>
<td><input type="radio" name="Q13" value="3"></td>
<td><input type="radio" name="Q13" value="4"></td>
<td><input type="radio" name="Q13" value="5"></td></tr>
<tr><td><b>14.  </b>The Honor Committee should be made up of both teachers and students.</td>
<td><input type="radio" name="Q14" value="1"></td>
<td><input type="radio" name="Q14" value="2"></td>
<td><input type="radio" name="Q14" value="3"></td>
<td><input type="radio" name="Q14" value="4"></td>
<td><input type="radio" name="Q14" value="5"></td></tr>
<tr><td><b>15.  </b>The Honor Committee should be made up only of students.</td>
<td><input type="radio" name="Q15" value="1"></td>
<td><input type="radio" name="Q15" value="2"></td>
<td><input type="radio" name="Q15" value="3"></td>
<td><input type="radio" name="Q15" value="4"></td>
<td><input type="radio" name="Q15" value="5"></td></tr>
<tr><td><b>16.  </b>Teachers should monitor quizzes and tests more closely.</td>
<td><input type="radio" name="Q16" value="1"></td>
<td><input type="radio" name="Q16" value="2"></td>
<td><input type="radio" name="Q16" value="3"></td>
<td><input type="radio" name="Q16" value="4"></td>
<td><input type="radio" name="Q16" value="5"></td></tr>
<tr><td><b>17.  </b>Signing the Honor Pledge on all written work is an essential component of the Honor Code.</td>
<td><input type="radio" name="Q17" value="1"></td>
<td><input type="radio" name="Q17" value="2"></td>
<td><input type="radio" name="Q17" value="3"></td>
<td><input type="radio" name="Q17" value="4"></td>
<td><input type="radio" name="Q17" value="5"></td></tr>
<tr><td><b>18.  </b>The Honor Code is enforced consistently by all Gilman Upper School teachers.</td>
<td><input type="radio" name="Q18" value="1"></td>
<td><input type="radio" name="Q18" value="2"></td>
<td><input type="radio" name="Q18" value="3"></td>
<td><input type="radio" name="Q18" value="4"></td>
<td><input type="radio" name="Q18" value="5"></td></tr>
<tr><td><b>19.  </b>My teachers at Gilman trust me.</td>
<td><input type="radio" name="Q19" value="1"></td>
<td><input type="radio" name="Q19" value="2"></td>
<td><input type="radio" name="Q19" value="3"></td>
<td><input type="radio" name="Q19" value="4"></td>
<td><input type="radio" name="Q19" value="5"></td></tr>
<tr><td><b>20.  </b>I sign the entire Gilman Pledge on all assignments.</td>
<td><input type="radio" name="Q20" value="1"></td>
<td><input type="radio" name="Q20" value="2"></td>
<td><input type="radio" name="Q20" value="3"></td>
<td><input type="radio" name="Q20" value="4"></td>
<td><input type="radio" name="Q20" value="5"></td></tr>
</table>
<br>
<br>
<br>
<b>21.  </b>What do you value most about Gilman's honor code?<br>
<textarea cols="60" rows="5" name="q21"></textarea><br>
<br>
<br>
<b>22.  </b>What aspects of Gilman's honor code would you change if you could?<br>
<textarea cols="60" rows="5" name="q22"></textarea><br>
<br>
<br>
<b>23.  </b>Is there anything else you'd like to communicate to us about Honor or the Honor Code at Gilman?<br>
<textarea cols="60" rows="5" name="q23"></textarea><br>

<br><br>
<!--<input type="submit" value="Submit">!-->

</form>
<h5><i>Web Programming by Albert Wang '08</i></h5>

<?php include("/home/gnews/public_html/process/footer.php");?>
