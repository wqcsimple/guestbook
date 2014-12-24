<html>
<head>
	<title>登录 </title>
	<link rel="stylesheet" href="<!--{base_url('static/css')}-->/bootstrap.css">
</head>

<body>
<div class="container">
<form role="form" method="post" action="<!--{site_url('login/do_login')}-->">
	<div class="col-md-4 col-md-offset-4">
		<h1>LOGIN</h1>
		<div class="form-group">
			<input type="text" class="form-control" name="username" placeholder="username">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="password">
		</div>
		<input class="btn btn-primary form-control" type="submit" value="登录">
	</div>
</form>
</div>

</body>
</html>
