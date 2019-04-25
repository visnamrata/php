<!DOCTYPE html>
<html>
<head>
	<title>odd number sum</title>
</head>
<body>
<?php 
function sum($n)
{
	$sum=0;
	for ($i=1; $i <=$n ; $i++) { 
		if ($i%2!=0) {
			$sum=$sum+$i;
		}
	}
		return $sum;
}
  echo "<form method='post'>
  <input type='number' name='num'>
  <input type='submit' name='sub' value='odd sum'></form>";
  if (isset($_POST['sub'])) {
  	$num=$_POST['num'];
  	echo "SUM OF first $num ODD NUMBER IS: ".sum($num);
  }
?>
</body>
</html>