<?php
session_start();

$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if

$role = "";
$_SESSION["username"] = $_POST["username"];
$userName = $_POST["username"];
$password = $_POST["password"];

$result = $mysqli->query("select * from users"); 

while($row = $result->fetch_array()){
    if($row["username"] == $userName){
        if($row["password"] == $password){
            $_SESSION["role"] = $row["role"];
            break;
            //now $row contains the logged in username
        }//password check if
    }//username check if 
}//while

if($_SESSION["role"] == "admin"){
    header("Location: agentdash.php");
}
else
if($_SESSION["role"] == "student"){
    header("Location: admin.php");
}
else
if($_SESSION["role"] == "agent"){
    header("Location: agdash.php");
}
else{
    header("Location: guest.php");
}

    
    
