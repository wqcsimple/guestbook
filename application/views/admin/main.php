<div class="container">
	<div class="page-header"></div>

	<div class="row" >
		<div class="col-md-6">
			<div class="panel panel-default " role="alert">
		
            <div class="panel-heading">
              <h3 class="panel-title"><b>当前用户信息</b></h3>
            </div>
            
            <div class="panel-body">
              <table class="table table-striped table-bordered">
              	<tbody>
	              	<tr>
	              		<th>用户身份</th><td></td>
	              	</tr>
	              	<tr>
	              		<th>上次登录时间</th><td></td>
	              	</tr>
	              	<tr>
	              		<th>上次登录IP</th><td> </td>
	              	</tr>
	              	<tr>
	              		<th>浏览器类型</th><td></td>
	              	</tr>
	              	<tr>
	              		<th>当前登录IP</th><td><?=$this->input->ip_address()?></td>
	              	</tr>
	              
              	</tbody>
              </table>
            </div>
        	</div>		
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><b>系统信息</b></h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered">
              	<tbody>
              		<tr>
              			<th>服务器主机名:IP</th><td><?=$this->input->server('SERVER_NAME').':'.$this->input->server('SERVER_ADDR')?> </td>
              		</tr>
	              	<tr>
	              		<th>操作系统</th><td><?=php_uname('s')?></td>
	              	</tr>
	              	<tr>
	              		<th>服务器版本</th><td><?=$this->input->server('SERVER_SOFTWARE')?></td>
	              	</tr>
	              	<tr>
	              		<th>Mysql版本</th><td><?=mysql_get_server_info()?></td>
	              	</tr>
	              	<tr>
	              		<th>文件上传</th><td><?php if(ini_get('file_uploads')==1):?>开启<?php else: ?>关闭<?php endif;?></td>
	              	</tr>
	              	<tr>
	              		<th>文件上传最大大小</th><td><?=ini_get("upload_max_filesize")?></td>
	              	</tr>
	              	<tr>
	              		<th>时区设置</th><td><?=date_default_timezone_get()?></td>
	              	</tr>
              	</tbody>
              </table>
            </div>
        	</div>
		</div>
	</div>	

</div>
