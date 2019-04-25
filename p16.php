<!DOCTYPE html>
<html>
<head>
	<title>Printing list using array</title>
</head>
<body>
<?php 
$ar = array('red','green','blue' );
for ($i=0; $i <3; $i++) 
{ 
	echo $ar[$i]. "<br>";
}
sort($ar);
echo "<ul>";
for ($i=0; $i <3; $i++) { 
	echo "<li>".$ar[$i]."<br></li>";
}
echo "</ul>";
 ?>
</body>
</html>