<?php include("/home/gnews/public_html/process/headeropen.php");?>
Gilman News Online ~~ Application for Editorship 2008-2009
<?php include("/home/gnews/public_html/process/headermiddle.php");?>
<?php include("/home/gnews/public_html/process/header.php");?>

<?php
$name = $_POST['name'];
$date = $_POST['date'];
$email = $_POST['email'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
?>

<center><h2>Aplication for Editorship 2008-2009</h2></center>
<b>Thank you for submitting your application.  Your application has been sent by email to you and to Mr. Perkins.  
If you did not receive a copy of your application in your email, print this page and put it in Mr. Perkins' mailbox.  
Here is a copy of the application for you:</b><br>
<br>
<br>
<br>
<br>
<br>
<br>
Dear Prospective Editors:  Here is ....<br>
The Gilman News Application Form.<br>
Please return to Will Perkins' mailbox or email wperkins (at) gilman.edu.  <br>
Download: <a href="EditorApp2008.doc">Microsoft Word</a> <a href="EditorApp2008.pdf">PDF</a><br>
<br>
Or just fill out this form below.<br>
<?php
echo '1. Name: '.$name.'<br>';
echo 'Date: '.$date.'<br>';
echo 'E-mail: '.$email.'<br>';
echo '<br><br>';


echo '2. List articles you have written for the News. Please start with most recent pieces and work backwards to earlier issues.<br>';
echo $question2;
echo '<br><br><br>';


echo '3. List other areas in which you have contributed to the publication.<br>';
echo $question3;
echo '<br><br><br>';


echo '4. Detail changes you would like to see in the News for next year.<br>';
echo $question4;
echo '<br><br><br>';


echo '5. Please state which role or roles you might like to fill in the News for next year. Explain why you think you are the man for the job.<br>';
echo $question5;
echo '<br><br><br>';
?>

<i>People interested in becoming online editors should talk directly to Albert Wang '08.  </i><br>

<?php
//Send email to wperkins@gilman.edu
$to = 'wperkins@gilman.edu';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: admin@gilmannews.com' . "\r\n" .
    'Reply-To: admin@gilmannews.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = 'Editorship 2008-2009 Application -- '.$date;
$body = '1. Name: '.$name.'<br>'.'
Date: '.$date.'<br>'.'
E-mail: '.$email.'<br>'.'
<br><br>'.'
2. List articles you have written for the News. Please start with most recent pieces and work backwards to earlier issues.<br>'.
$question2.'
<br><br><br>'.'
3. List other areas in which you have contributed to the publication.<br>'.
$question3.'
<br><br><br>'.'
4. Detail changes you would like to see in the News for next year.<br>'.
$question4.'
<br><br><br>'.'
5. Please state which role or roles you might like to fill in the News for next year. Explain why you think you are the man for the job.<br>'.
$question5.'
<br><br><br>';
if(mail($to,$subject,$body, $headers)){
	echo 'Application sent successfully to wperkins (at) gilman.edu<br>';
}else{
	echo 'Error in sending application.  Please print this page and put it in Mr. Perkins mailbox.<br>';
}
$to = $email;
if(mail($to,$subject,$body, $headers)){
	echo 'Copy of Application sent successfully to your email<br>';
}else{
	echo 'Error in sending application.  Please print this page if you want.<br>';
}
//Send email to $email



?>


<?php include("/home/gnews/public_html/process/footer.php");?>

