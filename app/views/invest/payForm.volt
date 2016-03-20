
{{ content() }}
<div class="width100P bg">
  <div class="dl">
  	<div class="dl_title">
		<div class="blank"></div>
		<div class="blank"></div>
  	  <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">1、提交订单</td>
          <td align="center">2、选择支付方式</td>
          <td align="center"><span class="font_touzi_jindu">3、支付成功</span></td>
        </tr>
        <tr>
          <td colspan="3">
		  	<div class="touzi_jindu_bg">
				<span class="touzi_jindu"></span>
				<span class="touzi_jindu"></span>
			</div>
		  </td>
        </tr>
      </table>
  	</div>
	<div class="dl_cent">
	  <form action="" method="get">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><span style="padding:5px 10px 5px 10px; line-height:30px; background-color:#71AB24; color:#FFF; font-size:16px">网银支付</span>&nbsp;&nbsp;&nbsp;<a href="#">线下支付</a></td>
            <td align="right">支付金额：<font class="font_f60">￥{{real_pay_fee}}万元</font></td>
          </tr>
          <tr>
            <td colspan="2"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#71AB24">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="8">
                  <tr>
                    <td width="25%"><img style="border:#71AB24 solid 1px;" src="/images/img_yinhang.gif" width="160" height="52" /></td>
                    <td width="25%"><img src="/images/img_yinhang.gif" width="160" height="52" /></td>
                    <td width="25%"><img src="/images/img_yinhang.gif" width="160" height="52" /></td>
                    <td width="25%"><img src="/images/img_yinhang.gif" width="160" height="52" /></td>
                    <td width="25%"><img src="/images/img_yinhang.gif" width="160" height="52" /></td>
                  </tr>
                  <tr>
                    <td><img src="/images/img_yinhang.gif" width="160" height="52" /></td>
                    <td><img src="/images/img_yinhang.gif" width="160" height="52" /></td>
                    <td><img src="/images/img_yinhang.gif" width="160" height="52" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>

          <tr>
            <td colspan="2" align="center"><br />
            <span class="bnt_zc"><a href="/invest/payCallback/{{order_id}}" >确认</a></span></td>
          </tr>
        </table>
	  </form>
	</div>
  </div>
</div>