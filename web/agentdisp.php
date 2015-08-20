<?php
$mysqli = new mysqli("127.0.0.1","root","toor","ooad",3306);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}//mysqli if
$value=$_GET['name'];

$result = $mysqli->query("select * from users WHERE username='$value'");

while($row = $result->fetch_assoc())
{
 $name=$row['username'];
 $phno=$row['phno'];
 $img=$row['image'];
 $email=$row['email'];
 $agency=$row['agency'];
 }

require '../libs/Smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign('name',$name);
$smarty->assign('phno',$phno);
$smarty->assign('img',$img);
$smarty->assign('agency',$agency);
$smarty->assign('email',$email);
$smarty->display('agent.tpl');
?>
