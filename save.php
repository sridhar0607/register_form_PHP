<?php

include "config.php";

$regno=$_POST['regno'];
$sname=$_POST['sname'];
$gen=$_POST['gen'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$addr=$_POST['addr'];
$query="insert into std values('$regno','$sname','$gen','$email','$pass','$phone','$dept','$addr')";
if(isset($_POST['submit']))
{
	if($res=mysqli_query($con,$query))
	{
		echo "data saved";

	}
	else
	{
		echo "data error";
	}
}
?>
