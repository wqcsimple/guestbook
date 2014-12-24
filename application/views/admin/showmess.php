<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th><th>标题</th><th>留言内容</th><th>回复内容</th><th>留言人</th><th>留言时间</th><th>操作</th>
			</tr>
		</thead>
		<tbody>
			
			<!--{foreach $message as $item}-->
			<tr>
				<td><!--{$item->id}--> </td>
				<td><!--{$item->title}--></td>
				<td><!--{$item->content|truncate:20:'...'}--></td>
				<td>
				<!--{if !isset($item->reply)}-->
				<a href="<!--{site_url('showmess/reply')}-->/<!--{$item->id}-->">未回复</a>
				<!--{else}-->	
				<!--{$item->reply|truncate:20:'...'}-->
				<!--{/if}-->
				</td>
				<td><!--{$item->author}--></td>
				<td><!--{$item->c_time|date_format:'Y-m-d H:i:s'}--></td>
				<td><a href="<!--{site_url('showmess/reply/')}-->/<!--{$item->id}-->">回复</a> <a href="<!--{site_url('showmess/do_del/')}-->/<!--{$item->id}-->">删除</a></td>
			</tr>		
			<!--{/foreach}-->
				
		</tbody>
		<thead>
                        <tr>   
                                <th>ID</th><th>标题</th><th>留言内容</th><th>回复内容</th><th>留言人</th><th>留言时间</th><th>操作</th>
                        </tr>
                </thead>

	</table>
	
	<!--{$links}-->

</div>
