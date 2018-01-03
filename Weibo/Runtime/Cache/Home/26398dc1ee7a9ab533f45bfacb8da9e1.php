<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>个人中心</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="http://localhost/DAYCOST/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/font-awesome.min.css" />

		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/select2.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/bootstrap-editable.css" />


		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="http://localhost/DAYCOST/Public/assets/css/ace-skins.min.css" />


		<script src="http://localhost/DAYCOST/Public/assets/js/ace-extra.min.js"></script>
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
						<li >
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li class="active">
							<a href="/DAYCOST/index.php/Home/User/personal">
								<i class="icon-user"></i>
								<span class="menu-text"> 个人信息</span>
							</a>
						</li>

						<li>
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
							<li class="active"><a href="/DAYCOST/index.php/Home/User/personal">个人中心</a></li>
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
								个人信息中心
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								

								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="http://localhost/DAYCOST/Public/assets/avatars/profile-pic.jpg" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													点击图片进行修改
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
												

												<div class="space-6"></div>

												<div class="profile-social-links center">
													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
														<i class="middle icon-facebook-sign icon-2x blue"></i>
													</a>

													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
														<i class="middle icon-twitter-sign icon-2x light-blue"></i>
													</a>

													<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
														<i class="middle icon-pinterest-sign icon-2x red"></i>
													</a>
												</div>
											</div>

											
											

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											

										<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
											<form action="/DAYCOST/index.php/Home/User/domodify" method="post">
											<?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="profile-info-row">
													<div class="profile-info-name"> 用户名 </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><input type="text" name="name" required="required" maxlength="20" value="<?php echo ($vo["UserID"]); ?>"></input></span>
													</div>
												</div>

												

												

												<div class="profile-info-row">
													<div class="profile-info-name"> 联系方式</div>

													<div class="profile-info-value">
														<span class="editable" id="about"><input type="text" name="phone" required="required" maxlength="20" value="<?php echo ($vo["phone"]); ?>"></input></span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> 邮箱地址</div>

													<div class="profile-info-value">
														<span class="editable" id="about"><input type="text" name="email" required="required" maxlength="20" value="<?php echo ($vo["email"]); ?>"></input></span>
													</div>
												</div>
												

												<div class="profile-info-row">
													<div class="profile-info-name"> 座右铭 </div>

													<div class="profile-info-value">
														<span class="editable" id="about"><input type="text" name="motto" required="required" maxlength="50" value="<?php echo ($vo["motto"]); ?>"></input></span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> 地址 </div>

													<div class="profile-info-value">
														
													
														<span class="editable" id="country"><input type="text" name="pro" required="required" maxlength="20" value="<?php echo ($vo["pro"]); ?>"></input></span>
														<span class="editable" id="city"><input type="text" name="city" required="required" maxlength="20" value="<?php echo ($vo["city"]); ?>"></input></span>
														<i class="icon-map-marker light-orange bigger-110"></i>
													</div>
												</div>
											</div>

											<div class="space-20"></div>

											
											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>

											<div class="center">
												<button  type="submit" class="btn btn-sm btn-primary">
													<i class="icon-check bigger-150 middle"></i>
													<span class="bigger-110">提交修改</span>

													<i class="icon-on-right icon-arrow-right"></i>
												</button>
											</div><?php endforeach; endif; ?>
											</form>
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
		<script src="http://localhost/DAYCOST/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="http://localhost/DAYCOST/Public/assets/js/excanvas.min.js"></script>
		<![endif]-->

		

		<!-- inline scripts related to this page -->

	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>