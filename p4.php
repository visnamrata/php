<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<label>ENTER STRING:</label>
		<input type="text" name="string" required=""><br>
		<input type="submit" name="sub" value="reverse">
	</form>
	<?php
	if (isset($_POST['sub'])) {
	 	$a=$_POST['string'];

	  echo 	strrev($a);
	 } 
	 ?>

</body>
</html>