<!DOCTYPE html>
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
      
      <script src="js/jquery.js"></script>
      <script src="js/dashboard.js"></script>
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
	<script>
		function call(){
			var xml=new XMLHttpRequest();
			xml.onreadystatechange=function gen(){
				if(xml.readyState==4 && xml.status==200){
					$("#tb_div").html(xml.responseText);						
				}					
			}
			xml.open("post","comment.php",true);
			xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xml.send("name=&comm=admin");
		}
	</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
            <li><a href="#">Username</a></li>
            <li><a href="#">Role</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li id="admin_button"><a href="#">Admin<span class="sr-only">(current)</span></a></li>
           <!-- <li id="user_button"><a href="#">User</a></li>-->
          </ul>
        </div>
        <div class="admin">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
		  <div id="tb_div"></div><br/><br/><br/>
		  <div id="del_b" onclick="update()">Delete Comment</div>
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
