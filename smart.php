<?php
$con=mysqli_connect("localhost","root","","test1") or die(mysqli_error());
?>


<?php
error_reporting(0);
session_start();
if(isset($_POST['signIn']))
{
if($_POST['id']=="" || $_POST['pwd']=="")	
{
	$err="fill your id and password first";
}
else
{
$d=mysqli_query($con,"SELECT * FROM userinfo where user_name='{$_POST['id']}'");
$row=mysqli_fetch_object($d);
$fid=$row->user_name;
$fpass=$row->password;
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{
$_SESSION['sid']=$_POST['id'];
header('location:HomePage.php');
}
else
{
$err="invalid id or pass";
}
}
}
?>




<form method="post">
<table width="323" border="1">
  <tr>

  
  <font color="#FF0000" size="+2"><?php echo $err; ?></font>
    <th width="171" scope="row">Enter your id </th>
    <td width="136">
    <input type="text" name="id" />
  </td>
  </tr>
  <tr>
    <th scope="row">Enter your password </th>
    <td>
<input type="password" name="pwd"/>
  </td>
  </tr>
  <tr>
    <th colspan="2" scope="row">
  <input type="submit" value="SignIn" name="signIn"/>
  <a href="signup.php">SignUp</a>
  </th>
  </tr>
</table>
</form>