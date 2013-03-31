<?php
echo '<html>';
echo '<body>';

echo '<h1><center>Mail List</center></h1>';
echo '<form method="POST" action="mailprocess.php">';
echo 'Subject: <input type="text" size="50" name="subject"><br>';;
echo 'Message: <textarea cols="100" rows="20" name="message">'.$sample.'</textarea><br>';
echo 'List<br>';
echo '<input type="radio" name="list" value="Test">Test<br>';
echo '<input type="radio" name="list" value="New Issue">New Issue<br>';
echo '<input type="radio" name="list" value="Top">Management<br>';
echo 'Password <input type="password" size="20" name="password"><br>';
echo '<input type="submit" value="SUBMIT">';
echo '</form>';

echo '</body>';
echo '</html>';
?>
