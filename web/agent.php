<?php

$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if
$value=$_GET['value'];

$result = $mysqli->query("select * from users WHERE username='$value'");

while($row = $result->fetch_assoc())
{
 $phno=$row['phno'];
 }
?>