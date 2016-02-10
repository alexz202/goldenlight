<div class="top width_100P">
	<div class="width_site">
	  <div class="logo fl"><a href="index.html"><img src="/images/LOGO.jpg" width="170" height="67" border="0" /></a></div>
	  <div class="nav fr">
			<ul>
				<li><a href="/index">首页</a></li>
				<li><a href="">投资</a></li>
				<li><a href="">筹资</a></li>
				<li><a href="">网上商城</a></li>
				<li><a href="">转让</a></li>
				<li><a href="">更多</a></li>
				<li>
                 {%if isLogin==1 %}
				 <a href="/user/loginout"><span class="dl">登&nbsp;出</span></a>欢迎你
                 {%else%}
                 <a href="/user/login"><span class="dl">登&nbsp;录</span></a>    <a href="/user/register"><span class="zc">注&nbsp;册</span></a>
                 {% endif  %}

				</li>
			</ul>
	  </div>
	</div>
</div>