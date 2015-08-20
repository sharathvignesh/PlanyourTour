
<?php
session_start();
$flag=0;
$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if
$rate = $_POST['rating'];
$name = $_POST['name'];
$result = $mysqli->query("select * from users where username='$name' and role='agent'");
$row = $result->fetch_array();
$cur = $row['rating'];
if($rate==""){
		echo $cur;
}
else{
 if($cur!=0)
	$new = ($rate+$cur)/2;
else 
	$new=$rate;
$update = "update users set rating='$new' where username='$name' and role='agent'";
mysqli_query($mysqli, $update);
echo $new;
}
?>