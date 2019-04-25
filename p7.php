<!DOCTYPE html>
<html>
<head>
	<title>sort array</title>
</head>
<body>
	<form method="post">
		<label>ENTER STRING:</label>
		<input type="text" name="string" required=""><br>
		<input type="submit" name="sub" value="check palindrome">
	</form>
	<?php
	if(isset($_POST['sub']))
	{
		$a=$_POST['string'];
		if(strrev($a)==$a)
		{
			echo "$a is a palindrome";
		}
		else {
			echo "$a is not a palindrome";
		}
	}
	?>	
</body>
</html>