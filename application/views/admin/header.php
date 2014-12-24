<html>
<head>
<title>后台 - <!--{$title}--></title>
<link rel="stylesheet" href="<!--{base_url('static/css')}-->/bootstrap.css">
</head>


<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav navbar-nav">
				<li><a href="<!--{site_url('admin/index')}-->">主页</a></li>
				<li><a href="<!--{site_url('user/index')}-->">用户管理</a></li>
				<li><a href="<!--{site_url('showmess/index')}-->">查看留言</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a>用户: <!--{$admin}--></a></li>	
				<li><a href="<!--{site_url('login/logout')}-->">退出</a></li>
				<li><a href="<!--{site_url()}-->" target="__blank">返回首页</a></li>
			</ul>
		</div>
	</div>
</div>



