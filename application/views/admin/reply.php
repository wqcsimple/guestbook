<div class="container">
	<form role="form" method="post" action="<!--{site_url('showmess/do_reply/')}-->/<!--{$message['id']}-->">
	 <div class="panel panel-primary">
					<input type="hidden" name="mid" value="<!--{$message['id']}-->">
                                        <div class="panel-heading">
                                                <h3 class="panel-title">用户: <!--{$message['title']}-->   &nbsp;
                                                <p class="label text-right">[留言时间：<!--{$message['c_time']|date_format:'Y-m-d H:i:s'}-->]</p></h3>
                                        </div>
                                        <div class="panel-body">
                                                <h4>标题：<!--{$message['title']}--> </h4>
                                                <p><!--{$message['content']}--></p>
					<div class="form-group">
						<input type="text" name="reply" class="form-control" value="<!--{$message['reply']}-->" placeholder="回复留言" >
					</div>
                                      	<input type="submit" class="btn btn-primary" value="回复留言">
					 </div>

          </div>
	</form>


</div>
