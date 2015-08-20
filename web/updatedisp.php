<?php
session_start();
$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if
$name=$_SESSION["username"];
$result = $mysqli->query("select * from users WHERE username='$name'");

while($row = $result->fetch_assoc())
{
 $name=$row['username'];
 $phno=$row['phno'];
 $email=$row['email'];
 $agency=$row['agency'];
$pass=$row['password'];
 }

require '../libs/Smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign('name',$name);
$smarty->assign('phno',$phno);
$smarty->assign('agency',$agency);
$smarty->assign('email',$email);
$smarty->assign('pass',$pass);
$smarty->display('agentprofile.tpl');
?>
