<html lang="en">
<head>
	<title>
		Sign in
	</title>
<style>
    @media (min-width: 768px) {
    .omb_row-sm-offset-3 div:first-child[class*="col-"] {
        margin-left: 25%;
    }
}

.omb_login .omb_authTitle {
    text-align: center;
	line-height: 300%;
}
	
.omb_login .omb_socialButtons a {
	color: white; 
	/*// In yourUse @body-bg */
	opacity:0.9;
}
.omb_login .omb_socialButtons a:hover {
    color: white;
	opacity:1;    	
}

/*.omb_login .omb_socialButtons .omb_btn-facebook {background: #3b5998;}
.omb_login .omb_socialButtons .omb_btn-instagram {background: #0ced;}
.omb_login .omb_socialButtons .omb_btn-linkedin {background: #c32f10;}*/


.omb_login .omb_loginOr {
	position: relative;
	font-size: 1.5em;
	color: #aaa;
	margin-top: 1em;
	margin-bottom: 1em;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
}
.omb_login .omb_loginOr .omb_hrOr {
	background-color: #cdcdcd;
	height: 1px;
	margin-top: 0px !important;
	margin-bottom: 0px !important;
}
.omb_login .omb_loginOr .omb_spanOr {
	display: block;
	position: absolute;
	left: 50%;
	top: -0.6em;
	margin-left: -1.5em;
	background-color: white;
	width: 3em;
	text-align: center;
}			

.omb_login .omb_loginForm .input-group.i {
	width: 2em;
}
.omb_login .omb_loginForm  .help-block {
    color: red;
}

	
@media (min-width: 768px) {
    .omb_login .omb_forgotPwd {
        text-align: right;
		margin-top:10px;
 	}		
}
/******/
/*** Icons ****/

.azm-social {
	margin: 0;
	padding: 0;
	display: inline-block;
	color: #fff;
	text-align: center;
	-moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
	-o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}
.azm-social:hover, .azm-social:focus, .azm-social:active { outline: 0; opacity: 0.8; color: #fff; }

.azm-size-32 {
	width: 32px;
	height: 32px;
	margin: 5px;
	padding-top: 8px;
	font-size: 14px;
	line-height: 14px;
}

.azm-size-48 {
	width: 48px;
	height: 48px;
	margin: 8px;
	padding-top: 13px;
	font-size: 21px;
	line-height: 21px;
}

.azm-size-64 {
	width: 64px;
	height: 64px;
	margin: 10px;
	padding-top: 16px;
	font-size: 28px;
	line-height: 28px;
}

.azm-r-square {
	-moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}

.azm-circle {
	-moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;
}

.azm-btn {
	height: 48px;
	margin: 8px;
	padding: 13px 17px;
	font-size: 14px;
	line-height: 21px;
	font-weight: 300;
	-moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.azm-btn i { padding-right: 27px; font-size: 21px; line-height: 21px; vertical-align: top; }

.azm-btn i:after {
	content: "";
	position: absolute;
	top: -8px;
	left: 70%;
	width: 1px;
	height: 36px;
	background: #ccc;
	background: rgba(255, 255, 255, 0.3);
}

.azm-border-bottom {
	padding-top: 12px;
	border-bottom: 4px solid rgba(0, 0, 0, 0.1);
}

.azm-pill {
	-moz-border-radius: 400px; -webkit-border-radius: 400px; border-radius: 400px;
}

.azm-gradient {
	position: relative;
	overflow: hidden;
}

.azm-gradient:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: -moz-linear-gradient(top,  rgba(255,255,255,0.4) 0%, rgba(255,255,255,0) 100%); /* FF3.6+ */
	/*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.4)), color-stop(100%,rgba(255,255,255,0))); Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(255,255,255,0.4) 0%,rgba(255,255,255,0) 100%); /* W3C */
}

.azm-shadow-left {
	position: relative;
	overflow: hidden;
}

.azm-shadow-left:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 50%;
	height: 100%;
	background: rgba(0, 0, 0, 0.1);
}

.azm-shadow-bottom {
	position: relative;
	overflow: hidden;
}

.azm-shadow-bottom:before {
	content: "";
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
	height: 50%;
	background: rgba(0, 0, 0, 0.1);
}


.azm-facebook { background: #4862a3; }
.azm-github { background: #999; }
.azm-google { background: #3f85f4; }
.azm-google-plus { background: #dd4b39; }
.azm-twitter { background: #55acee; }

/* long shadows */
.azm-long-shadow {
	overflow: hidden;
}

</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>
 </head>   

<body>


	<nav id="nav">
		<ul class="main-menu nav navbar-nav navbar-right">
			<li><a href="home.php">Home</a></li>
			<!--<li><a href="about.html">About</a></li>
				<li><a href="courses.html">Courses</a></li>
				 <li><a href="blog.html">Blog</a></li> -->
			<!-- <li><a href="contact.html">Contact</a></li>
			<li><a href="signin.html">Sign in</a></li> -->
		</ul>
	</nav>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    

    <div class="omb_login">
    	<h3 class="omb_authTitle"><b>Sign In Page</b></h3>
		<!--<div class="row omb_row-sm-offset-3 col-sm-offset-4 omb_socialButtons">
    	    <a routerLink="/auth/github"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-github"><i class="fa fa-github"></i></a>
            <a routerLink="/auth/twitter"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-twitter"><i class="fa fa-twitter"></i></a>
            <a routerLink="/auth/facebook"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-facebook"><i class="fa fa-facebook"></i></a>
            <a routerLink="/auth/google"  class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-google-plus"><i class="fa fa-google-plus"></i></a>

		</div>-->

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>
       

		

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			    <form class="omb_loginForm" novalidate [formGroup]="loginForm" (ngSubmit)="onSubmit()" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" maxlength="50" placeholder="Enter your Email"  name="email">
					</div>
					<span class="help-block"></span>
										
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" maxlength="50"  placeholder="Enter Password" name="password">
					</div>
                    <!-- <span class="help-block">Password error</span> -->

					<a href="chatbot.php"><button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button></a>
					
				</form>
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">remember-me
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					 <a  style="font-size:larger;"  routerLink="/signup" href="signup.php" <span class="fa fa-user-plus"></span> create new account</a>
				</p>
			</div>
		</div>	    	
	</div>



        </div>
		<?php

include('conn.php');

if(isset($_POST['signin']))
{

$email = $_POST['email'];
$password = $_POST['password'];

// Using prepared statements to prevent SQL injection
$sql = "SELECT * FROM user WHERE Email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Redirect to chatbot.php if email and password match
	echo '<script>window.location.href = "chatbot.php";</script>';

   // exit(); // Make sure to exit after the header redirect
} else {
    // Show a message if email and password do not match
    echo "Invalid email or password.";
}
}


		


?>

       
    
</body>
</html>
