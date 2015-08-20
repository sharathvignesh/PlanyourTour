<!DOCTYPE html>
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
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <style>
    #headerwrap{
    	font-family: 'Raleway';
    	color:#333;
    }
	#box{
		position:absolute;
		top:350px;
		left:-50px;
	}
	#comm{
		width:70px;
		height:40px;
		position:absolute;
		top:450px;
		font-size:15px;
		left:200px;
	}
	#com_box{
		position:absolute;
		top:520px;
		font-size:20px;
		left:-50px;
		max-width:100%;
	}
	#vertical{
		position:absolute;
		top:360px;
		left:600px;
		width:2px;
		background-color:grey;
		height:100%;
	}
	#rating{
		position:absolute;
		top:350px;
		font-size:20px;
		right:100px;
		max-width:100%;
	}
	#rateit{
		padding:10px;
		font-size:15px;
	}
    </style>
	<script>
		$(document).ready(function(){
				var op=0,rating=0;
				$("#comm").click(function(){
					if($("#box").val()!="")
						update();
				});
				
				$(".rate").click(function(){
					op=1;
					rating=this.value;	
				});
				$("#rateit").click(function(){
					if(op==1){
						rateagent();
					}
				});
				function rateagent(){
					var xml=new XMLHttpRequest();
					xml.onreadystatechange=function gen(){
						if(xml.readyState==4 && xml.status==200){		
							$("#rating_text").html("Rating:"+xml.responseText);
						}					
					}
					xml.open("post","rating.php",true);
					xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xml.send("name={$name}&rating="+rating);
				}
				
				function update(){
					var xml=new XMLHttpRequest();
					xml.onreadystatechange=function gen(){
						if(xml.readyState==4 && xml.status==200){
							$("#com_box").html(xml.responseText);	
							document.getElementById("box").value="";
						}					
					}
					xml.open("post","comment.php",true);
					xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xml.send("name={$name}&comm="+$("#box").val());
				}
		
		});
		function call2(){
			
			var xml=new XMLHttpRequest();
			xml.onreadystatechange=function gen(){
				if(xml.readyState==4 && xml.status==200){
					$("#rating_text").html("Rating:"+xml.responseText);
				}					
			}
			xml.open("post","rating.php",true);
			xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xml.send("name={$name}&rating=");
		}
		function call(){
			
			var xml=new XMLHttpRequest();
			xml.onreadystatechange=function gen(){
				if(xml.readyState==4 && xml.status==200){
					$("#com_box").html(xml.responseText);	
					call2();
				}					
			}
			xml.open("post","comment.php",true);
			xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xml.send("name={$name}&comm=");
		}
	</script>
  </head>
  <header id="header" class="header-1 light-header">
<body onload="call()">
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
					<img class="img img-circle" src={$img} height="120px" width="120px" alt="">
					<br>
					
					<a href="#" class="icon icon-twitter"></a>
					<a href="#" class="icon icon-facebook"></a>
					<a href="#" class="icon icon-flickr"></a>
					<h3>Name : {$name}</h3><br>
                    <h3>Contact number : {$phno}</h3><br>
                    <h3>email id : {$email}</h3><br>
                    <h3>agency : {$agency}</h3><br>
					<h3 id="rating_text"></h3>
					<hr/>
					<textarea id="box" rows="3" cols="10" style="min-width:50%;" placeholder="Enter your comment..."></textarea>
					<button id="comm">Post</button>
					<div id="com_box"></div>
					<br><br><br>
					<div id="vertical"></div>
					<div id="rating"><h2>Rate the Agent</h2><br/>
						<input type="radio" class="rate" name="rate" value="1"/>Poor<br/><br/>
						<input type="radio" class="rate" name="rate" value="2"/>Better<br/><br/>
						<input type="radio" class="rate" name="rate" value="3"/>Good<br/><br/>
						<input type="radio" class="rate" name="rate" value="4"/>Best<br/><br/>
						<input type="radio" class="rate" name="rate" value="5"/>Awesome<br/><br/>
						<button id="rateit">Rate</button>
					</div>
				</div><!-- col-lg-3 -->
				
				
			</div><!-- row -->
		</div>
	</body>
	