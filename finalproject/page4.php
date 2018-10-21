<?php
$mainid_id=$_POST['mainid_id'];
$name=$_POST['name'];
$age=$_POST['age'];
$password=$_POST['password'];


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("information",$con);

$sql="INSERT INTO student(mainid_id,name,age,password) VALUES('$mainid_id','$name','$age','$password')";

$query=mysql_query($sql,$con);

if($query)
{
	header("Location:page3.php");
}
else
{
	echo "Can not insert";
}




?>
<tr>
		<td colspan="6"> <a href='page7.php'>LOGIN</a></td>
</tr>