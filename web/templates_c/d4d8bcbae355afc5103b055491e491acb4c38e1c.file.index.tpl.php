<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 06:36:31
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8564551a405e7c7713-00918815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4d8bcbae355afc5103b055491e491acb4c38e1c' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1427382432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8564551a405e7c7713-00918815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551a405e7f6ea3_85211014',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a405e7f6ea3_85211014')) {function content_551a405e7f6ea3_85211014($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan Your Tour</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/try.js"><?php echo '</script'; ?>
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

  <body>

    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-lg-push-5">
          <h1 id="tra_head" style="color:whitesmoke;">Plan Your Tour</h1>
          </div>
        </div>
      <div class="row" style="margin-top:141px">
          
          <div class="col-md-12">
      <form class="form-signin" action="authenticate.php" method="post">
        
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label style="color:whitesmoke;">
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <div class="row">
        <div class="col-md-6">
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #1abc9c; border-color:#9099A2;">Sign in</button>
        </div>                    
            <div class="col-md-6">
              <a href="sign.php" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #1abc9c; border-color:#9099A2;">Sign up</a>
        </div>
            </div>
          <div class="row" style="margin-top: 65px;border: 2px white solid;background: transparent;">
            <div class="col-md-12">
            <a href="guest.php" style="font-size: 25px;color: black;">Continue as a Guest User</a>
            </div>
              </div>
          
      </form>
        </div>
      </div>

    </div> <!-- /container -->
    <?php echo '<script'; ?>
>
     $(window).load(function() {
     $("#tra_head").effect("slide",1200);
     $("#logo").effect("bounce",800); 
     });  
    <?php echo '</script'; ?>
>
       

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
