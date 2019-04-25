<!DOCTYPE html>
<html>
<head>
	<title>odd number sum</title>
</head>
<body>
<?php 

  echo "<form method='post'>
  <input type='number' name='num'>
  <input type='submit' name='sub' value='even'></form>";
  if (isset($_POST['sub'])) {
  	$num=$_POST['num'];
  sum($num);
  }

  function sum($n)
{   
	echo"First $n even numbers:<br>";
		for ($i=1; $i <=$n ; $i++) { 
		if ($i%2==0) {
			echo $i." ";
		}
	}
}
?>
</body>
</html>