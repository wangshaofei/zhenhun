


<div class="footer">
    
        <ul>
            <li><a href="#">友情链接</a></li>
            <li><a href="#">友情链接</a></li>
            <li><a href="#">友情链接</a></li>
        </ul>
   
	<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->
</div>
<div class="login_form">
	<form action="<?php echo base_url();?>index.php/login/loginAction" method='post'  target="loginIframe">
		<table>
			<tr>
				<td>用户名：</td>
				<td>
					<input type="text" name="username" placeholder="用户名">
				</td>
			</tr>
			<tr>
				<td>密码：</td>
				<td>
					<input type="password" name="password" placeholder="密码">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="登陆">
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="bg_model transparent"></div>
<iframe src="<?php echo base_url(); ?>/iframes/login.php" frameborder="0" name="loginIframe" class="hide"></iframe>