<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-30 20:01:02
         compiled from ".\templates\agentprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2675555198ceac800f9-21459752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26334bd743b097666ac767441ff5f31d2a73a96f' => 
    array (
      0 => '.\\templates\\agentprofile.tpl',
      1 => 1427737946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2675555198ceac800f9-21459752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55198ceacbfa43_31350244',
  'variables' => 
  array (
    'name' => 0,
    'pass' => 0,
    'phno' => 0,
    'email' => 0,
    'agency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55198ceacbfa43_31350244')) {function content_55198ceacbfa43_31350244($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Agent & Student Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
      <link href="css/admin_reg.css" rel="stylesheet">
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
    <?php echo '<script'; ?>
 src="js/adminreg.js"><?php echo '</script'; ?>
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
          <div class="col-lg-8 col-lg-offset-4 col-xs-12 heading">
           <h1 class="admin_heading" style="color:rgb(0,0,0); font-size: 50px; font-weight: 800;">Register Here</h1>
          </div>
         </div>
            <br>
            <form action="update.php" method="post">
            <div class="row" style="margin-top: 88px;">
             <div class="col-lg-3 col-lg-push-3">
             <pre style="font-size:22px;">User Name</pre>
             </div>
            <div class="col-lg-6 col-lg-push-3">    
            <input type="text" name="username" required="required" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 placeholder="" class="form-control" style="width:43%;">
            </div>
            </div>
            <div class="row">
             <div class="col-lg-3 col-lg-push-3">
             <pre style="font-size:22px;">Password</pre>
             </div>
            <div class="col-lg-6 col-lg-push-3">    
            <input type="password" name="password" required="required" value=<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
 placeholder="" class="form-control" style="width:43%;">
            </div>
            </div>
            <div class="row">
             <div class="col-lg-3 col-lg-push-3">
             <pre style="font-size:22px;">Role</pre>
             </div>
            <div class="col-lg-6 col-lg-push-3">    
            <input type="radio" name="role" value="student">Student 
            <input type="radio" name="role" value="agent" checked="checked">Agent
            </div>
            </div>
            <br>
            <div class="row">
             <div class="col-lg-3 col-lg-push-3">
             <pre style="font-size:22px;">Phone Number</pre>
             </div>
            <div class="col-lg-6 col-lg-push-3">    
            <input type="text" name="phonenumber" required="required" value=<?php echo $_smarty_tpl->tpl_vars['phno']->value;?>
 placeholder="" class="form-control" style="width:43%;">
            </div>
            </div>
            <div class="row">
             <div class="col-lg-3 col-lg-push-3">
             <pre style="font-size:22px;">Email-id</pre>
             </div>
            <div class="col-lg-6 col-lg-push-3">    
            <input type="text" name="email" required="required" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 placeholder="" class="form-control" style="width:43%;">
            </div>
            </div>
            <div class="row">
             <div class="col-lg-3 col-lg-push-3">
             <pre style="font-size:22px;">Agency</pre>
             </div>
            <div class="col-lg-6 col-lg-push-3">    
            <input type="text" name="agency" placeholder="" value=<?php echo $_smarty_tpl->tpl_vars['agency']->value;?>
 class="form-control" style="width:43%;">
            </div><span style="font-size: 20px;color: rgb(255, 0, 51);">*only for agents</span>
            </div>
            <div class="row" style="margin-top: 36px;">
                <div class="col-md-6 col-md-push-5">
                 <button type="submit" class="btn btn-info">UPDATE</button>
                </div>
                <div class="col-md-6">
                <button type="button" class="btn btn-info">CANCEL</button>
                </div>
            </div>
            </form>
        </div>
 

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
