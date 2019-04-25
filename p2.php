<!DOCTYPE html>
<html>
<head>
	<title>factorial</title>
</head>
<body>

	<?php
	function fact($a)
	{
		$f=1;
		for ($i=1; $i <=$a ; $i++) { 
			
			$f=$f*$i;
		}
		 echo "factorial of $a is $f";
	}
  echo "<form method='post'>
  <label>ENTER NUMBER:</label><input type='number' name='num'><br>
 
  <input type='submit' name='sub' value='factorial'></form>";
  if (isset($_POST["sub"])) {
  

  	$a=$_POST['num'];
  	
   fact($a);
  }
 ?>

</body>
</html>