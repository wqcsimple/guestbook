<html>
<head>
	<title>前台 - <!--{$title}--></title>

<link rel="stylesheet" href="<!--{base_url('static/css')}-->/bootstrap.css">
</head>


<body>
<div class="container" >
	<div class="row">
		<h1>留 言 板</h1>
	</div>
	<div class="row col-md-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">我要留言</h3>
		</div>
		<div class="panel-body">
		<form role="form" method="post" action="<!--{site_url('message/do_insert')}-->">
			<div class="form-group">
				<label for="title">标题</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="content">内容</label>
				<input type="text" name="content" class="form-control">
			</div>
			<div class="form-group">
				<label for="author">发布人</label>
				<input type="text" name="author" class="form-control">
			</div>
			<input type="submit" class="btn btn-primary" value="发布留言">

		</form>	
		</div>	
	</div>
	</div>
	<div class="row col-md-7 col-md-offset-1">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">留言内容</h3>
			</div>
			<div class="panel-body">
				<!--{foreach $messlist as $mess}-->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">用户：<!--{$mess['author']}-->   &nbsp;
						<p class="label text-right">[留言时间：<!--{$mess['c_time']|date_format:'Y-m-d H:i:s'}-->]</p></h3>
					</div>
					<div class="panel-body">
						<h4>标题：<!--{$mess['title']}--> </h4>
						<p><!--{$mess['content']}--></p>
					</div>
					<!--{if isset($mess['reply'])}-->
					<div class="form-group">
						 <div class="alert alert-info" role="alert">
                                                <h5>回复：</h5>
						<p> <!--{$mess['reply']}--> &nbsp;[回复时间： <!--{$mess['r_time']|date_format:'Y-m-d H:i:s'}-->] </p> 
						 </div>
							
					</div>
					<!--{/if}-->
				</div>
				<!--{/foreach}-->
				
			</div>
		</div>	
	</div>
</div>

</body>
</html>
