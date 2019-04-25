<?php
error_reporting(0);
echo "<form method='post'>
<input type= 'email' name='email'>
</form>";
$email=$_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>
?>