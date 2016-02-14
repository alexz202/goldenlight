<div class="width100P vis"></div>
<div class="blank"></div>
<div class="width_site blank part01">
	<ul>
		<li class="line_right"><img src="/images/ic01.png" /><br />累计筹资额<br /><span>{{shareTotal['all_money']}}<font size="2">万</font></span></li>
		<li class="line_right"><img src="/images/ic02.png" /><br />融资项目总数<br /><span>{{shareTotal['all_project']}}<font size="2">个</font></span></li>
		<li class="line_right"><img src="/images/ic03.png" /><br />已交易投资人<br /><span>{{shareTotal['all_user']}}<font size="2">人</font></span></li>
		<li class="line_right"><img src="/images/ic04.png" /><br />创投机构共建<br /><span>{{shareTotal['all_orgaization']}}<font size="2">家</font></span></li>
		<li class="line_right"><img src="/images/ic05.png" /><br />18个月获得下轮投资比例<br /><span>{{shareTotal['last_percent']}}%</span></li>
		<li><img src="/images/ic06.png" /><br />项目综合回报率<br /><span>{{shareTotal['return_value']}}%</span></li>

	</ul>
</div>
<div class="width100P bg">
	<div class="width_site part02">
		<h1>在金色光投资的九大理由</h1>
		<ul>
			<li>
				<h2><span>01</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>02</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>03</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>04</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>05</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>06</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>07</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>08</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
			<li>
				<h2><span>09</span>&nbsp;&nbsp;在金色光投资理由</h2>
				中国创业率低和天使投资人数量有限以及投资活跃度低有一定的关联性，因为数量有限，天使资金需求者多而天使投资人有限的情况下 。
			</li>
		</ul>
	</div>
</div>
<div class="width_site part03">
	<h1>成功案例<span style="font-size:12px;">&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">查看更多</a></span></h1>
	<ul>

	{%for item in raise_success_list%}
		<li><div style=" position:absolute"><div class="img_logo"><img src="{{item.company_logo}}" /></div></div>
			<a href="#"><img src="{{item.company_logo}}" />
			<div class="left_line part03_cont">{{item.project_name}}<br /><font>￥</font><span>{{item.already_money}}</span><font>万</font><br />投资者<font>{{item.wheel_invested_num}}</font>人
			</div></a>
		</li>
	{%endfor%}

	</ul>
</div>
<div class="width100P bg">
	<div class="width_site part04">
		<h1>明星领投人<span style="font-size:12px;">&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">查看更多</a></span></h1>
		<ul>
			<li><img src="/images/img.jpg" /></li>

	{%for item in leaders_list%}
		<li><img src="item.DtbRaiseProjectBasic.getAvatarUrl()" /></li>
	{%endfor%}

		</ul>
	</div>
</div>
<div class="width100P footer_nav">
	<div class="width_site">
		<ul>
			<li>
				<h3>联系我们</h3>
				全国统一热线：<br /><font style="font-size:16px">18133787824</font>(9:00-21:00)<br />邮箱：<br /><font style="font-size:16px">nana19880312@163.com</font>
			</li>
		 	<li>
				<h3>公司介绍</h3>
			  <span><a href="about.html">关于我们息</a></span>
			  <span><a href="about.html">我们的团队</a></span>
			  <span><a href="about.html">招聘信</a></span>
			 </li>
		 	<li>
				<h3>帮助中心</h3>
			  <span><a href="about.html">成功案例</a></span>
			  <span><a href="about.html">投融资指导</a></span>
			  <span><a href="about.html">常见问题</a></span>
			  <span><a href="about.html">术语</a></span>
			 </li>
		 	<li>
				<h3>法律信息</h3>
			  <span><a href="about.html">风险提示</a></span>
			  <span><a href="about.html">隐私保护</a></span>
			  <span><a href="about.html">服务条款</a></span>
			  <span><a href="about.html">推荐费用条款</a></span>
			 </li>
		</ul>
	</div>
</div>