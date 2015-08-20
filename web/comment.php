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
<?php
session_start();
$flag=0;
$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if
$name=$_POST['name'];
$comm=$_POST['comm'];
$id=$_SESSION["username"];
if($name=="del"){
	$sql = "DELETE FROM comment WHERE comm='$comm'";
	mysqli_query($mysqli, $sql);
	$flag=3;
	$result = $mysqli->query("select * from comment"); 
	?><table>
	<tr><th>Username</th>
	<th>Comment</th>
	</tr>
	</table><?php
	while($row = $result->fetch_array()){
		?>
			<input type="checkbox" name="com" onclick="del(this)" value="<?php echo $row["id"];?>+<?php echo $row["comm"];?>"/>&emsp;<?php echo $row["id"];?>&emsp;&emsp;&emsp;<?php echo $row["comm"];?>
		<br/>
		
		<?php
	}
}
if($comm=="admin"){
	$first=0;
	$flag=2;
	$result = $mysqli->query("select * from comment"); 
	?><table>
	<tr><th>Username</th>
	<th>Comment</th>
	</tr>
	</table>
	<?php
		while($row = $result->fetch_array()){
		?>
			<input type="checkbox" name="com" onclick="del(this)" value="<?php echo $row["id"];?>+<?php echo $row["comm"];?>"/>&emsp;<?php echo $row["id"];?>&emsp;&emsp;&emsp;<?php echo $row["comm"];?>
		<br/>
		
		<?php
	}
}
else if($comm==""){
?><h3>Comments about the Agent:</h3><?php
	$flag=1;
}
else if($flag==0)
{
?><h3>Comments about the Agent:</h3><?php
	$insert = "insert into comment values ('$name','$id','$comm')";
	mysqli_query($mysqli, $insert);
}
	if($flag==1||$flag==0){
	$result = $mysqli->query("select * from comment where name='$name'"); 
	while($row = $result->fetch_array()){
?>
<p><span style="font-weight:bold;"><?php echo $row["id"];?>:</span><?php echo $row["comm"];?></p>
<br/>
<?php
	}
}
?>
</body>
</html>
