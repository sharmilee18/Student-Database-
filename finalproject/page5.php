<?php
session_start();
$mainid_id=$_POST['mainid_id'];
$password=$_POST['password'];

$connection=mysql_connect("localhost","root","");
$db=mysql_select_db("information",$connection);

$sql="SELECT * FROM student WHERE mainid_id='$mainid_id' AND password='$password'";

$resultt=mysql_query($sql,$connection);

$count=1;
if($count==1)
{	
	
	$_SESSION['mainid_id']=$mainid_id;
	$_SESSION['password']=$password;
	echo "Login successfull";
	header("location:page7.php");	
}
else
	echo "User does not exist";
mysql_close($connection);





?>