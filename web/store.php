<?php
session_start();

require('smartyHeader.php');

$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$role = $_POST["role"];
$phone = $_POST["phonenumber"];
$agency = $_POST["agency"];


$insert = "insert into users (username,email,password,role,agency,phno)
values ('$username','$email','$password','$role','$agency','$phone')";

if (mysqli_query($mysqli, $insert)) {
    echo "Registration Successful\n";
    echo "click <a href=\"index.php\">here</a> to login";
} else {
    //echo "Error: " . mysqli_error($mysqli);
    echo "Please enter a valid username<br>";
    echo "click <a href=\"signup.php\">here</a> to go back";
}

?>
