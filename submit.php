<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Submit Letters to the Editor, Comments, etc.
<?php
/*
ADDRESS:	HTTP://WWW.GILMANNEWS.COM/SUBMIT.PHP
STATUS:		FINISHED
LAST MODIFIED:	JULY 22, 2008 BY ALBERT WANG '08
DESCRIPTION:	INVITES PEOPLE TO CONTRIBUTE LETTERS TO THE EDITOR, PHOTOS, COMMUNICATIONS TO THE GILMAN NEWS
USAGE:		PUBLIC
*/

//Nifty Corners Cube Javascript Calls
$footer=true;
$header=true;
//End Nifty Corners Cube Javascript Calls
?>
<?php include("/home/gnews/public_html/process/headermiddle.php");
include("/home/gnews/public_html/process/header.php");?>

<center><h1>Submit To The Gilman News</h1></center>

<b>The Gilman News welcomes letters to the editor, columns, and artwork from Gilman students, teachers, faculty, alumni, and from the community-
at-large. The News reserves the right to edit all articles for length and grammar.</b><br>
<br>
<br>
You can submit your questions, comments, or letter to the editor (all submissions will be screened by the Gilman News Staff before posting).  <br>
1.) They must not single out one particular individual.<br>
<br>
2.) They must be appropriate. This one is ambiguous. All I can say is to avoid expletives. Beyond that, you really have to use your best judgement. If you have any questions about what might be an appropriate approach to a letter, you can always find me and we can discuss it.<br>
<br>
Connor Lounsbury '10 and Trevor Hoffberger '09<br>
Editors-in-Chief<br>
<br>
<br>
<br>
You can submit letters in the following ways:<br>
<br>
<b>Postal Mail:</b> <br>
The Gilman News<br>
Gilman School<br>
5407 Roland Avenue<br>
Baltimore, Maryland<br>
<br>
<b>Drop Off:</b> <br>
The Gilman Publications Room<br>
Terrace Level near the Senior Room and Art Department<br>
<br>
<br>
<b>Web Form:</b> <br>
<form action="process/submitprocess.php" method="post">
Your name: <input type="text" name="name"><br>
Your e-mail: <input type="text" name="email"> (Will only be displayed to Gilman News Staff)<br>
Message: <br>
<textarea name="message" cols=80 rows=20></textarea><br>
<?php
require_once('process/recaptchalib.php');//ReCAPTCHA
$publickey = "6LdqOQAAAAAAANyeh6IlS-WNbARnGbWGcQM0j7YX";
echo recaptcha_get_html($publickey);
?>
<input type="submit" value="Submit">
<input type="reset" value="Clear">
</form>

<?php include("/home/gnews/public_html/process/footer.php");?>
