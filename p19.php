<!DOCTYPE html>
<html>
<head>
	<title>replace this that</title>
</head>
<body>
<form method="post">
		<label>ENTER STRING:</label>
		<input type="text" name="string" required=""><br>
		<input type="submit" name="sub" value="replace">
	</form>
	<?php
	if(isset($_POST['sub']))
	{
		$a=$_POST['string'];
        $b=strstr("the","That", $a);
        echo "New string is $b";
    }
    ?>

</body>
</html>