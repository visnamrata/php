<!DOCTYPE html>
<html>
<head>
	<title>string within string</title>
</head>
<body>
<?php
  echo "<form method='post'>
  ENTER STRING:<input type='text' name='text'><br>
 
  <input type='submit' name='sub' value='click'></form>";
  if (isset($_POST['text'])) {

  	$ar=$_POST['text'];
  	
  	echo stripos($ar, "find");
  }
 ?>
</body>
</html>