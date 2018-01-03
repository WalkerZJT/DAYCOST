<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="maximum-scale=1,user-scale=1, width=device-width, initial-scale=1 ">

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/DAYCOST/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/DAYCOST/Public/css/index.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/DAYCOST/Public/css/title.css">
    <link rel="icon" href="http://localhost/DAYCOST/Public/images/icon1.png" type="image/x-icon"/>
    <style type="text/css"> 
        body{
            background: #EEEEEE;
        }
        .nav-1{
            background: rgba(10,10,10,.7);}
    </style>
    <script type="text/javascript">
        
    

    </script>
</head>
<body class="lead">
	
   <!--- <nav class="navbar navbar-default navbar-home move-to-top nav-1">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="icon-logo1"  href="http://localhost/DAYCOST/Home/Index/index">
					<i ></i>
				</a>
				<a class="navbar-brand" id="icon-logo2"  href="http://localhost/DAYCOST/Home/Index/index">
					<i ></i>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="btn btn-one" href="http://localhost/DAYCOST/Home/User/sign"><strong>Sign in</strong></a>
					</li>
					<li>
						<a class="btn btn-two" href="http://localhost/DAYCOST/Home/User/log"><strong>LOGIN</strong></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>---->
	<div class="container theme-showcase col-md-6 col-md-offset-3" role="main" style="height:600px;">
        <div class="row">
            <div class="col col-md-8 col-md-offset-2" style="height: 100px;"></div>
        </div>
        <div class="row">
            <div style="background: #3EABB8;height:150px;" class="col col-md-6 col-md-offset-3">
                <p>
                    <h3 style="margin-top: 100px;color: #FFF;">Log in</h3>
                </p>
            </div>
            <div style="background: #FFF;height:350px;" class="col col-md-6 col-md-offset-3">
                <form action="/DAYCOST/index.php/Home/User/dolog" method="post">
                    <div class="form-group">
                       
                        <label for="exampleInputEmail1"><h3>User name</h3></label>
                        <input type="text" maxlength="20" class="form-control" id="exampleInputEmail1" placeholder="name" name="name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><h3>Password</h3></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="required">
                    </div>
                       
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember the password
                        </label>
                    </div>
                    </br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
	
	<script src="http://localhost/DAYCOST/bootstrap/js/jquery.min.js"></script>
	<script src="http://localhost/DAYCOST/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>