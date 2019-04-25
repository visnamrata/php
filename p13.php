<?php


function pattern($n)
{
	for ($i=0; $i <=$n ; $i++) { 
		for ($j=0; $j <$i ; $j++) { 
			echo "*";
		}
		echo "<br>";
	}
}


echo "<form method='post'>
  <input type='number' name='num'><br>
  <input type='submit' name='sub' value='submit'></form>";
if (isset($_POST['sub'])) {
	$num=$_POST['num'];
	echo pattern($num);

}

?>