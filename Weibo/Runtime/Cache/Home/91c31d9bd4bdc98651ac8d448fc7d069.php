<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="maximum-scale=1,user-scale=1, width=device-width, initial-scale=1 ">

	<title>Sign up</title>
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
        
        function validate() {
            var pw1 = document.getElementById("pw1").value;
            var pw2 = document.getElementById("pw2").value;
            if(pw1 == pw2) {
                document.getElementById("tishi").innerHTML="<font color='green'></font>";
                document.getElementById("submit").disabled = false;
            }
            else {
               document.getElementById("tishi").innerHTML="<font color='red'>两次密码不相同</font>";
                document.getElementById("submit").disabled = true;
            }
        }

    

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
	<div class="container theme-showcase col-md-8 col-md-offset-2" role="main" style="height:600px;">
        <div class="row" style="height: 50px; ">
            
        </div>
        <div class="row" style="height:150px;background: #3EABB8;">
            <p><h4 style="margin-top: 100px;margin-left: 15px;">Sign up</h4></p>
        </div>
        <div class="row">
            <div class="col col-md-7" style="height:400px; background: #FFF; color: #676262;border-right: 1px solid #EEEEEE;">
                <div class="row" style="height:30px;"></div>
                <p><h4>Welcome to DAYCOST</h4></p></br>
                <p>
                    <h5>NOTE:</h5>
                    <h6 style="line-height: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DAYCOST is a software to manage your personal property,and it is still in the development stage.So there are some loopholes,and it's function is also a corresponding improvement and development,so please look forward to our new products</h6>
                    <h6>Already have an account? <a href="/DAYCOST/index.php/Home/User/log"> Log in with existing account.</a></h6>
                </p>
            </div>
            <div class="col col-md-5" style="height:400px; background: #FFF;">
                </br>
                <form class="form-signin" method="post"   action='/DAYCOST/index.php/Home/User/doreg' name="myForm">
                   
                    
                    <input type="text" maxlength="20" class="form-control" placeholder="用户名" name="name" required autofocus></br>
                    
                    <input type="password" maxlength="20" class="form-control" placeholder="密码" name="password" id="pw1" required></br>
                    
                    <input type="password" maxlength="20" class="form-control" placeholder="确定密码" name="epassword" onKeyUp="validate()" id="pw2" required></br><span id="tishi"></span></input>
                    <input type="email" maxlength="20" class="form-control" placeholder="邮箱地址" name="email" required></br>
                    <input type="text" maxlength="20" class="form-control" placeholder="联系方式" name="phone" required></br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
	
	<script src="http://localhost/DAYCOST/bootstrap/js/jquery.min.js"></script>
	<script src="http://localhost/DAYCOST/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>