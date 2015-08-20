<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 06:47:59
         compiled from ".\templates\adash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14366551a42c2850d41-58746567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa44a1f670ebdbb14592adf902da6c89ddb1846' => 
    array (
      0 => '.\\templates\\adash.tpl',
      1 => 1427738866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14366551a42c2850d41-58746567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551a42c2898ac0_53458614',
  'variables' => 
  array (
    'id' => 0,
    'username' => 0,
    'name' => 0,
    'phno' => 0,
    'agency' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a42c2898ac0_53458614')) {function content_551a42c2898ac0_53458614($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
      
      <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/dashboard.js"><?php echo '</script'; ?>
>
	  <style>
		#del_b{
			border:2px solid black;
			width:100px;
			height:50px;
			text-align:center;
			border-radius:4px;
			color:white;
			background-color:black;
			cursor:pointer;
		}
		
	  </style>
	<?php echo '<script'; ?>
>
		function call(){
			var xml=new XMLHttpRequest();
			xml.onreadystatechange=function gen(){
				if(xml.readyState==4 && xml.status==200){
					$("#tb_div").html(xml.responseText);						
				}					
			}
			xml.open("post","agentcomment.php",true);
			xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xml.send("name=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
");
		}
	<?php echo '</script'; ?>
>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>

  <body onload="call()">
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/photo.jpg"/ style="height:38px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li id="admin_button"><a href="#">Agent<span class="sr-only">(current)</span></a></li>
           <!-- <li id="user_button"><a href="#">User</a></li>-->
          </ul>
        </div>
        <div class="admin">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
            <a href="updatedisp.php"> <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Update
            </button></a><br><br>
            <h2 style="display:inline;">Name :</h2><h4 style="display:inline;margin-left: 50px;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4><br><br><br><br>
            <h2 style="display:inline;">Phone Number :</h2><h4 style="display:inline;margin-left: 50px;"><?php echo $_smarty_tpl->tpl_vars['phno']->value;?>
</h4><br><br><br><br>
            <h2 style="display:inline;">Agency :</h2><h4 style="display:inline;margin-left: 50px;"><?php echo $_smarty_tpl->tpl_vars['agency']->value;?>
</h4><br><br><br><br>
            <h2 style="display:inline;">Email-id :</h2><h4 style="display:inline;margin-left: 50px;"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h4><br><br><br><br>
            
		  <div id="tb_div"></div><br/><br/><br/>
          <!--<h2 class="sub-header">Admins</h2>
            
            <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Admin
            </button>
            <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete User
            </button>
        </div>
        </div>-->
         </div>
    </div>

   <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright ©2015 PlanYourTour | All Rights Reserved</p>
      </div>
   </footer>
  </body>
</html>
<?php }} ?>
