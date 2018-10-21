<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("information",$con);

$sql="SELECT * FROM student";
$query=mysql_query($sql,$con);


?>

<html>

<body>

<center>

	<h1>STUDENT INFORMATION</h1>
	<table border="3">
		<tr>
			<th>mainid_id</th>
			<th>name</th>
			<th>age</th>
			<th>password</th>
			
		</tr>
		<?php
		while($row=mysql_fetch_array($query))
		{
		$ID=$row[0];
			echo "<tr>";
				echo "<td>".$row['mainid_id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['password']."</td>";
				
				
				
			echo "</tr>";
		}
	?>
	
	<tr>
		<td colspan="6"> <a href='page1.html'>LOGOUT</a></td>
	</tr>
	</table>
</center>

</body>

</html>