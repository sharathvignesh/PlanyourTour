<?php
session_start();
require('./smartyHeader.php');
error_reporting(0);
$smarty->assign('username',"welcomeguest");
$smarty->display('home.tpl');

?>