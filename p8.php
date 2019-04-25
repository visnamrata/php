<!DOCTYPE html>
<html>
<head>
	<title>Remove whitespaces</title>
</head>
<body>
	<form method="post">
		<label>ENTER STRING:</label>
		<input type="text" name="string" required=""><br>
		<input type="submit" name="sub" value="remove whitespaces">
	</form>
	<?php
	if(isset($_POST['sub']))
	{
		$a=$_POST['string'];
		$b=str_replace(' ', '', $a);
		echo "New string is $b";
	}
	?>

</body>
</html>