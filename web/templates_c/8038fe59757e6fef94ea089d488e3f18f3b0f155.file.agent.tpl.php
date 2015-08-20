<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 10:20:07
         compiled from ".\templates\agent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148375515a521d64179-46974080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8038fe59757e6fef94ea089d488e3f18f3b0f155' => 
    array (
      0 => '.\\templates\\agent.tpl',
      1 => 1427489284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148375515a521d64179-46974080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a521d97de1_62154095',
  'variables' => 
  array (
    'img' => 0,
    'name' => 0,
    'phno' => 0,
    'email' => 0,
    'agency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515a521d97de1_62154095')) {function content_5515a521d97de1_62154095($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>nowD</title>
    <link rel="shortcut icon" href="images/Logos/nLogo.png">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="assets/js/modernizr.custom.js"><?php echo '</script'; ?>
>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <style>
    #headerwrap{
    	font-family: 'Raleway';
    	color:#333;
    }
    </style>
  </head>
  <header id="header" class="header-1 light-header">

	<!-- Logo -->
        <div id="logo">
            <a href="guest.php"><h2>PlanyourTour</h2></a>
        </div>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu"><i class="icon-menu2"></i></button>
        
        <!-- Navigation Menu -->
        <div id="nav-menu" class="nav-menu collapse navbar-collapse">
        	<ul>
            	<li><a href="guest.php">Home</a></li>
                <li><a href="guest.php#about">About</a></li>
                <li><a href="guest.php#portfolio">Locations</a></li>
                <li  class="active"><a href="guest.php#agents">Agents</a></li>
                <li><a href="guest.php#team">Team</a></li>
                <li><a href="guest.php#contact">Contact</a></li>
            </ul>
        </div>
		
		</header>

<div class="container" id="team" name="team">
		<br>
			<div class="row white centered">
				<h1 class="centered">About the Agent</h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-12 centered">
					<img class="img img-circle" src=<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
 height="120px" width="120px" alt="">
					<br>
					
					<a href="#" class="icon icon-twitter"></a>
					<a href="#" class="icon icon-facebook"></a>
					<a href="#" class="icon icon-flickr"></a>
					<h3>Name : <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3><br>
                    <h3>Contact number : <?php echo $_smarty_tpl->tpl_vars['phno']->value;?>
</h3><br>
                    <h3>email id : <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h3><br>
                    <h3>agency : <?php echo $_smarty_tpl->tpl_vars['agency']->value;?>
</h3>
				</div><!-- col-lg-3 -->
				
				
			</div><!-- row -->
		</div><?php }} ?>
