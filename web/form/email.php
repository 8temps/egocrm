<?php
	$msgEmail = ($_GET['status'] == '1') ? 'Mensaje enviado correctamente' : 'Error de mensaje';
	$r = (1 == $v) ? 'Yes' : 'No'; // $r is set to 'Yes'
	echo $msgEmail;
?>
<form name="email" method="post" action="sendemail.php">
  First name:<br>
  <input type="text" name="first_name" value=""><br>
  Last name:<br>
  <input type="text" name="last_name" value=""><br>
  Email:<br>
  <input type="text" name="email" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
