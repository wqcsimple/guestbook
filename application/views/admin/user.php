<div class="container">
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th><th>用户名</th><th>昵称</th><th>邮箱</th><th>注册时间</th><th>操作</th>
				</tr>	
			</thead>	
			
			<tbody>
				<!--{foreach $userlist as $value}-->
				<tr>
					<td><!--{$value.id}--></td>
					<td><!--{$value['username']}--></td>
					<td><!--{$value['name']}--></td>
					<td><!--{$value['email']}--></td>
					<td><!--{$value['c_time']|date_format:'Y-m-d H:i:s'}--></td>
					<td><a href="<!--{site_url('user/update')}-->/<!--{$value.id}-->">修改</a> <a href="<!--{site_url('user/do_delete')}-->/<!--{$value.id}-->">删除</a></td>
				</tr>

				<!--{/foreach}-->
		
			</tbody>
			<thead>
                                <tr>   
                                        <th>ID</th><th>用户名</th><th>昵称</th><th>邮箱</th><th>注册时间</th><th>操作</th>
                                </tr>
                        </thead>

		</table>
	</div>



</div>
