
{{ content() }}
<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>
<div class="user">
		<ul>
			<li class="user_cent_navbg"><a href="javascirpt:;"><font color="#FFFFFF">筹资情况</font></a></li>
			<li><a href="/user_raise_basic/remain">筹资提醒和支付</a></li>
		</ul>
		<form action="" method="get">
		<br />
		<br />
		<table width="580" border="0" align="center" cellpadding="10" cellspacing="0">

		  <tr>
		    <td width="460" align="center">预计筹资额<br />
	        <span class="font_18 font_f60">￥{{dtb_wheel_info.getAimMoney()}}</span></td>
	        <td width="460" align="center">预计股份<br />
            <span class="font_18 font_f60">{{dtb_wheel_info.getAimEquityOffered()}}%</span></td>
		  </tr>
		  <tr>
			<td colspan="2" align="left"><div class="jindut_line">
				<div class="jindut" style='width:{{complete_percent}}'>{{complete_percent}}</div>
			</div></td>
		  </tr>
		  <tr>
			<td align="center">实际筹资额<br />
                <span class="font_18 font_f60">￥{{dtb_wheel_info.getAlreadyMoney()}}</span>		    </td>
		    <td align="center">公司估值<br />
              <span class="font_18 font_f60">￥{{valuation}}</span></td>
		  </tr>
		</table>


		<br />
		<br />
		</form>
	</div>
</div>