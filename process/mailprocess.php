<?php
echo '<html>';
echo '<body>';

$subject=$_POST['subject'];
$message=$_POST['message'];
$list=$_POST['list'];
$password=$_POST['password'];
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


if($password!=""){
	die("WRONG PASSWORD");
}

echo $subject.'<br><br><br>';
echo stripslashes($message).'<br><br><br>';
echo $list.'<br><br>';


if($list=='test'){
	$to  = 'aywang31@gmail.com';
	// Additional headers
	$headers .= 'To: Albert Wang <aywang31@gmail.com>' . "\r\n";
	$headers .= 'From: The Gilman News Online <mailman@gilmannews.com>' . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();
	// Mail it
	mail($to, $subject, $message, $headers);
	
	$to  = 'admin@supportsociety.com';
	// Additional headers
	$headers .= 'To: Albert Wang <admin@supportsociety.com>' . "\r\n";
	$headers .= 'From: The Gilman News Online <mailman@gilmannews.com>' . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();
	// Mail it
	mail($to, $subject, $message, $headers);
	
}
if($list=='New Issue' || $list =='Top'){
	if($list=='New Issue')
		$table='newissuemaillist';
	if($list=='Top')
		$table='managementmaillist';
	$query = "SELECT * FROM $table";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		if($row['newissue']==1){
			$name=$row['name'];
			$to=$row['email'];
			// Additional headers
			$headers .= 'To: '.$name.' <'.$to.'>' . "\r\n";
			$headers .= 'From: The Gilman News Online <mailman@gilmannews.com>' . "\r\n";
			$headers .= 'X-Mailer: PHP/' . phpversion();
			// Mail it
			mail($to, $subject, stripslashes($message), $headers);
			echo $name.'<br>'.$to.'<br><br><br>';
			sleep(25);
		}
	}
}
/*
// multiple recipients
$to  = 'aywang31@gmail.com';

// Additional headers
$headers .= 'To: '.$name.' <'.$email.'>' . "\r\n";
$headers .= 'From: The Gilman News Online <mailman@gilmannews.com>' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
*/


echo '</body>';
echo '</html>';
?>
