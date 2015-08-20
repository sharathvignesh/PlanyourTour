<?php
session_start();
require('./smartyHeader.php');
$smarty->assign('username',$_SESSION["username"]);
$smarty->assign('role',$_SESSION["role"]);
$smarty->display('home.tpl');

?>