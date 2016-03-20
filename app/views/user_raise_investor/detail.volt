
{{ content() }}



<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>

	
		<div class="user"><br />
    	  <table width="84%" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="8%" align="center"><span class="ren"><img alt="王先生" src="{{dtb_raise_project_investor.DtbUserBasic.getAvatarUrl()}}" /></span></td>
              <td width="92%">姓名：{{dtb_raise_project_investor.DtbUserBasic.getNickname()}}<br />
              投资金额：<span class="font_f60">￥{{dtb_raise_project_investor.getInvestMoney()}}</span>元</td>
            </tr>
            <tr>
              <td colspan="2" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="5">
{%for item in dtb_project_invest_order%}
                <tr>
                  <td bgcolor="#FAFAFA" class="line_bottom">[{{item.getUpdateTs()}}]投<span class="font_f60">￥{{item.getInvestMoney()}}元</span>到果木电商</td>
                </tr>
 {%endfor%}
              </table></td>
            </tr>
          </table>
    	  <br />
    	  <br />
      </div>

</div>

  {{javascript_include('js/project.js')}}