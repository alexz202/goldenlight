<div class="width100P bg">
  <div class="dl">
  	<div class="dl_title">
		<h1>登陆金色光账号</h1>
{{ss}}
	</div>
	<div class="dl_cent">
		<div class="dl_cent_left">
			<div class="dl_nav"><span class="dl_nav_f60">&nbsp;登&nbsp;陆</span></div>
			<form action="/user/login" method="post" id='login_form'>
			  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="17%" align="right">您的账号</td>
                    <td colspan="2"><label>
                      <input type="text" name="account_id" class="dl_input" size="48"  placeholder='请输入手机号码或邮箱' id='account_id'/>
                    </label></td>
                  </tr>
                  <tr>
                    <td align="right">您的密码</td>
                    <td colspan="2"><input type="password" type="text" class="dl_input" size="48" id='password' name='password'  /></td>
                  </tr>
                  <tr>
                    <td align="right">图片认证</td>
                    <td width="46%"><input name="img_verity" type="text" class="dl_input_200" size="48"  id='img_verity'/></td>
                    <td>图形认证图片</td>
                  </tr>
                <!--  <tr>
                    <td align="right">验证码</td>
                    <td><input name="textfield42" type="text" class="dl_input_200" size="48" /></td>
                    <td><span class="bnt_duanxin"><a href="#">发送短信验证码</a></span></td>
                  </tr>
                  -->
                  <tr>
                      <td>&nbsp;</td>
                      <td >忘记密码？</td>
                      <td ><?php echo $this->tag->linkTo(array("/user/register", "立即注册")) ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><span class="bnt_zc" id='login_btn_submit'><a href="javascript:;">登陆您的帐号</a></span></td>
                  </tr>
                </table>
			</form>
		</div>
		<div class="dl_cent_right">
			<h1>第三方帐号登录</h1>
			<a href="#"><span><img src="/images/weixin_ic.png" />&nbsp;&nbsp;微信登录</span></a>
			<a href="#"><span><img src="/images/qq.png" />&nbsp;&nbsp;QQ登录</span></a>
			<a href="#"><span><img src="/images/weibo_ic.png" />&nbsp;&nbsp;微博登录</span></a>
		</div>
	</div>
  </div>
</div>

  {{javascript_include('js/login.js')}}