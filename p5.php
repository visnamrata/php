<!DOCTYPE html>
<html>
<head>
	<title>All lower</title>
</head>
<body>
	<form method="post">
		<label>ENTER STRING:</label>
		<input type="text" name="string" required=""><br>
		<input type="submit" name="sub" value="check lower">
	</form>
	<?php
	if(isset($_POST['sub']))
	{
		$a=$_POST['string'];
		if(ctype_lower($a))
		{
			echo "The string '$a' consists all lower case";
		}
		else
		{
			echo "The string $a dose not consists of all lowecase";
		}
	}
	?>

</body>
</html>