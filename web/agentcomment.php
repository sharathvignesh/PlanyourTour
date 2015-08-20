<html>
<head>
	<style>
		#line{
			min-width:250%;
			width:100px;
		}
		table, th, td {
			border: 2px solid black;
			padding:15px;
}
	</style>
</head>
<body>
	<table>
	<tr><th>Username</th>
	<th>Comment</th>
	</tr>
	</table>
<?php
session_start();
$flag=0;
$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if
$name=$_POST['name'];
$result = $mysqli->query("select * from comment where name='$name'"); 
	while($row = $result->fetch_array()){
?>
<p>&emsp;<?php echo $row["id"];?>&emsp;&emsp;&emsp;&emsp;<?php echo $row["comm"];?></p>
<br/>
<?php
	}

?>
</body>
</html>