
{{ content() }}
<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>
<div class="user">
		<ul>
			<li><a href="/user_raise_basic/status">筹资情况</a></li>
			<li class="user_cent_navbg"><a href="javascript:;"><font color="#FFFFFF">筹资提醒和支付</font></a></li>
		</ul>
		<form action="" method="get">
		<br />
		<br />
		<table width="580" border="0" align="center" cellpadding="10" cellspacing="0">

		  <tr>
		    <td align="center">&nbsp;</td>
          </tr>
		  <tr>
			<td align="left">筹资工作已完成，筹资款已经打入公司指定的帐户中。筹资总额<span class="font_f60">{{dtb_wheel_info.getAlreadyMoney()}}万元</span>，并且扣除<span class="font_f60">7.5%</span>的手续费<span class="font_f60">3.75万元</span>，将<span class="font_f60">46.25万元</span>打入公司指定用户当中。</td>
		  </tr>
		  <tr>
			<td align="center">&nbsp;</td>
	      </tr>
		</table>


		<br />
		<br />
		</form>
	</div>
</div>