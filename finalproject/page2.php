<?php 
$connect=mysql_connect("localhost", "root", "");

if(!$connect)
{
	
	die("could not connect to database");
	
}

else
{
	
	echo "successfully connected";
}
/*
//creating database

$sql=mysql_query("CREATE DATABASE information",$connect);
if(!$sql)
{
 echo"could not create database";
 
}
else
{
 echo"successfully created";
}
*/
//creating table
/*
mysql_select_db("information",$connect);
$table="CREATE TABLE student(
mainid_id int,
name varchar(20),
age int,
password varchar(20),
primary key(mainid_id)

)";
$sql=mysql_query($table,$connect);
if(!$sql)
{
 echo"could not create table";
 
}
else
{
 echo"successfully created table";
}

*/

/*
mysql_select_db("information",$connect);
$table1="insert into student(mainid_id,name,age,password)
VALUES('$_POST[mainid_id]','$_POST[name]','$_POST[age]','$_POST[password]')";
$sql=mysql_query($table1,$connect);
if(!$sql)
{
 echo"could not create table";
 
}
else
{
 echo"successfully created table";
}

mysql_close($connect);

*/

?>

<tr>
		<td colspan="6"> <a href='page3.php'>Student Data</a></td>
</tr>