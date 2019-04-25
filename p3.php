<!DOCTYPE html>
<html>
<head>
	<title>prime number</title>
</head>
<body>
<?php
	function prime($a)
	{
		if ($a<0) {
			return -1;
		}
		for ($i=2; $i <$a; $i++) { 
			if ($a%$i==0) {
				return 0;
			}
		}
	return 1;
	}
  echo "<form method='post'>
  <label>ENTER NUMBER:</label><input type='number' name='num'><br>
 
  <input type='submit' name='sub' value='prime'></form>";
  if (isset($_POST["sub"])) {
  

  	$a=$_POST['num'];
  	
   $ans=prime($a);
   if ($ans==-1)
    {
   	echo "number is negative...NOT VALID!";
   }
  else if ($ans==0) 
   {
   	echo "this is not a prime number....<br>";
   }
   else
   {
   	echo "this is a prime number.....<br>";
   }
  }
 ?>


</body>
</html>