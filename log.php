<?php
$db=mysqli_connect("localhost","root","");
$logindata=mysqli_select_db($db,"logindata");
if(isset($_POST["submit"]))
{
	$a=$_POST["Username"];
	$b=$_POST["password"];
	$sql="insert into logindata1(Username,password)values('$a','$b')";
	if(mysqli_query($db,$sql))
	{
		echo"successfully send";
	}
}
?>