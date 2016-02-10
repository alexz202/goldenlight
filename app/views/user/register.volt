<div class="width100P bg">
  <div class="dl">
  	<div class="dl_title">
		<h1>注册成为投资人或创业者</h1>
		<h2><span class="font_f60">创建者</span>可创建项目，开始融资<span class="font_f60">投资人</span>可申请，获取投资项目的权限</h2>
	</div>
	<div class="dl_cent">
		<div class="dl_cent_left">
			<div class="dl_nav"><a href="javascript:" id='but_show_mobile'><span class="dl_nav_f60">手&nbsp;机&nbsp;注&nbsp;册</span></a><a href="javascript:" id='but_show_email'>&nbsp;<span class="dl_nav_line">邮&nbsp;箱&nbsp;注&nbsp;册</span></a></div>
			<form action="/user/registerSubmit" method="post" id='register_form'>
			  <table width="100%" border="0" cellspacing="0" cellpadding="5" id='tb_mobile'>
                  <tr>
                    <td width="17%" align="right">手机号码</td>
                    <td colspan="2"><label>
                      <input name="type" type="hidden" id='type' value='1' />
                      <input name="mobile" type="number" class="dl_input" size="48" id='mobile'/>
                    </label></td>
                  </tr>
                  <tr>
                    <td align="right">设置密码</td>
                    <td colspan="2"><input name="password" type="password" class="dl_input" size="48" id='password'/></td>
                  </tr>
                  <tr>
                    <td align="right">真实姓名</td>
                    <td colspan="2"><input name="nickname" type="text" class="dl_input" size="48" id='nickname'/></td>
                  </tr>
                  <tr>
                    <td align="right">图片认证</td>
                    <td width="46%"><input name="img_verity" type="text" class="dl_input_200" size="48" id='img_verity' /></td>
                    <td>图形认证图片</td>
                  </tr>
                  <tr>
                    <td align="right">验证码</td>
                    <td><input name="mobile_code" type="text" class="dl_input_200" size="48" /></td>
                    <td><span class="bnt_duanxin"><a href="#">发送短信验证码</a></span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><input id='check_service' name="checkbox"  type="checkbox" style="list-style:none" value="checkbox" checked="checked" />
                    我已认真阅读并同意《<a href="#">金色光用户服务协议</a>》</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><span class="bnt_zc" id='register_btn_submit'><a href="javascript:;">创建您的帐号</a></span></td>
                  </tr>
                </table>
                 <table width="100%" border="0" cellspacing="0" cellpadding="5" id='tb_email' style='display:none;' >
                                  <tr>
                                    <td width="17%" align="right">邮箱地址</td>
                                    <td colspan="2"><label>
                                      <input name="type" type="hidden" id='type' value='2' />
                                      <input name="email" type="text" class="dl_input" size="48" id='email'/>
                                    </label></td>
                                  </tr>
                                  <tr>
                                    <td align="right">设置密码</td>
                                    <td colspan="2"><input name="password" type="password" class="dl_input" size="48" id='password'/></td>
                                  </tr>
                                  <tr>
                                    <td align="right">真实姓名</td>
                                    <td colspan="2"><input name="nickname" type="text" class="dl_input" size="48" id='nickname'/></td>
                                  </tr>
                                  <tr>
                                    <td align="right">图片认证</td>
                                    <td width="46%"><input name="img_verity" type="text" class="dl_input_200" size="48" id='img_verity' /></td>
                                    <td>图形认证图片</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="2"><input id='check_service' name="checkbox"  type="checkbox" style="list-style:none" value="checkbox" checked="checked" />
                                    我已认真阅读并同意《<a href="#">金色光用户服务协议</a>》</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="2"><span class="bnt_zc" id='register_btn_submit'><a href="javascript:;">创建您的帐号</a></span></td>
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
  {{javascript_include('js/register.js')}}