<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>支出金额总览</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="http://localhost/DAYCOST/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/font-awesome.min.css" />

		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/select2.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/bootstrap-editable.css" />



		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/ace-skins.min.css" />

		<script src="http://localhost/DAYCOST/Public/js/Chart.js"></script>
		<script src="http://localhost/DAYCOST/Public/assets/js/ace-extra.min.js"></script>
		<style>
			canvas{
			}
		</style>

	</head>

	<body>
		﻿<div class="navbar navbar-default" id="navbar" style="margin-top: -20px;">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							DAYCOST 
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="" class="btn btn-info dropdown-toggle" type="button">
								<img class="nav-user-photo" src="http://localhost/DAYCOST/Public/assets/avatars/profile-pic.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo ($uname); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="/DAYCOST/index.php/Home/User/index">
										<i class="icon-user"></i>
										个人信息
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="/DAYCOST/index.php/Home/User/logout">
										<i class="icon-off"></i>
										注销
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					
					<ul class="nav nav-list">
						<li  class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li>
							<a href="/DAYCOST/index.php/Home/User/personal">
								<i class="icon-user"></i>
								<span class="menu-text"> 个人信息</span>
							</a>
						</li>

						<li class="active">
							<a href="/DAYCOST/index.php/Home/User/monall" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 金额总览 </span>

								
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-rss"></i>
								<span class="menu-text"> 空间动态 </span>

								
							</a>
						</li>	
						

						<li  class="active open">
							<a href="#" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> 更多操作 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="active">
									<a href="/DAYCOST/index.php/Home/User/xall">
										<i class="icon-double-angle-right"></i>
										本月收入与支出总览
									</a>
								</li>

								<li>
									<a href="/DAYCOST/index.php/Home/User/xzmon">
										<i class="icon-double-angle-right"></i>
										新增收入
									</a>
								</li>

								<li>
									<a href="/DAYCOST/index.php/Home/User/xjmon">
										<i class="icon-double-angle-right"></i>
										支出
									</a>
								</li>

								

								

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										消息中心
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									其他功能
									<span class="badge badge-primary ">5</span>
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							
						</li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="/DAYCOST/index.php/Home/User/index">主页</a>
							</li>
							<li class="active"><a href="/DAYCOST/index.php/Home/User/monall">金额总览</a></li>
							<li class="active"><a href="/DAYCOST/index.php/Home/User/xsall">收入金额总览</a></li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								私人小金库
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12" style="">
								<!-- PAGE CONTENT BEGINS -->
								<table class="table table-striped table-hover table-bordered" style="font-size: 16px; text-align: center;">
									<thead>
									<tr>
										<td>支出金额</td>
										<td>时间</td>
										<td>说明</td>
										
									</tr>
									</thead>
									<tbody>
										<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
												<td><?php echo ($vo['Money']); ?></td>
												<td><?php echo ($vo['Time']); ?></td>
												<td><?php echo ($vo["Remarks"]); ?></td>
											</tr><?php endforeach; endif; ?>
									</tbody>
								</table>
							</div>
						</div>

										
					</div>
				</div>

								
											

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='http://localhost/DAYCOST/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='http://localhost/DAYCOST/Public/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='http://localhost/DAYCOST/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="http://localhost/DAYCOST/Public/assets/js/bootstrap.min.js"></script>
		
		
</html>