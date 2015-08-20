<?php
require('smartyHeader.php');

$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if


$username = $_POST["username"];
$pass = $_POST["password"];
$role = $_POST["role"];
$phno = $_POST["phonenumber"];
$email = $_POST["email"];
$agency = $_POST["agency"];

$sql = "update users set username='$username',password='$pass',phno='$phno',email='$email',role='$role',agency='$agency' where username='$username'";

if (mysqli_query($mysqli, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($mysqli);
}


?>