<!DOCTYPE html>
<html>
<head>
	<title>larger number</title>
</head>
<body>
	<?php
	function maximum($a,$b,$c)
	{
		if ($a>$b&&$a>$c) {

			echo "$a is larger of three numbers";
		}
		else
			if ($b>$a&&$b>$c) {
				echo " $b is larger of three numbers";
			}
			else
				echo "$c is larger of three numbers";
	}
  echo "<form method='post'>
  <label>NUMBER1:</label><input type='number' name='n1' required=''><br>
  <label>NUMBER1:</label><input type='number' name='n2'required=''><br>
  <label>NUMBER1:</label><input type='number' name='n3'required=''><br>
 
  <input type='submit' name='sub' value='click'></form>";
  if (isset($_POST['sub'])) {

  	$a=$_POST['n1'];
  	$b=$_POST['n2'];
  	$c=$_POST['n3'];
  	echo maximum($a,$b,$c);
  }
 ?>

</body>
</html>