
{{ content() }}
<div class="width100P bg">
  <div class="dl">
  	<div class="dl_title">
		<div class="blank"></div>
		<div class="blank"></div>
  	  <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">1、提交订单</td>
          <td align="center"><span class="font_touzi_jindu">2、选择支付方式</span></td>
          <td align="center"><span class="font_touzi_jindu">3、支付成功</span></td>
        </tr>
        <tr>
          <td colspan="3">
		  	<div class="touzi_jindu_bg">
				<span class="touzi_jindu"></span>
			</div>
		  </td>
        </tr>
      </table>
  	</div>
	<div class="dl_cent">
	  <form action="/invest/submitOrder/{{raise_id}}" method="post" id='add_form' >
        <table width="78%" border="0" align="center" cellpadding="15" cellspacing="0">
          <tr>
            <td width="24%" align="right">投资金额</td>
            <td width="76%">
              <input name="invest_money" type="text" class="dl_input_200" id='invest_money'/>
 万            </td>
          </tr>
          <tr>
            <td align="right">占股比例</td>
            <td class='equit_percent'>%</td>
          </tr>
          <tr>
            <td align="right">需支付服务费用</td>
            <td><font color="#71AB24">+</font>￥0元</td>
          </tr>
          <tr>
            <td align="right">支付保证金</td>
            <td><span class="font_f60">-</span>￥200元</td>
          </tr>
          <tr>
            <td align="right">实际支付</td>
            <td><span class="font_f60 real_fee">￥万元</span></td>
          </tr>
          <tr>
            <td align="right">邀请码（可选）</td>
            <td><input name="invest_code" type="text" class="dl_input_200" />
              <a href="#"><font class="font_f60">邀请码使用规则</font></a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="bnt_zc"><a href="javascript:;" id='create_order'>提交订单</a></span></td>
          </tr>
        </table>
      </form>
	</div>
  </div>
</div>

  {{javascript_include('js/invest.js')}}