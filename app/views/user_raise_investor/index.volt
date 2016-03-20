
{{ content() }}



<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>


	<div class="user"><br />
    		<table width="98%" border="0" align="center" cellpadding="10" cellspacing="0">


 {%for item in dtb_raise_project_basic.DtbRaiseProjectInvestor%}
      <tr>
        <td align="center" class="line_bottom"><table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="5%"><span class="ren"><img alt="王先生" src="{{item.DtbUserBasic.getAvatarUrl()}}" /></span></td>
            <td width="86%">姓名：{{item.DtbUserBasic.getNickname()}}<br />
              投资金额：<span class="font_f60">￥{{item.getInvestMoney()}}</span>元</td>
            <td width="9%" align="center"><a href="/user_raise_investor/detail/{{item.getRaiseId()}}/{{item.DtbUserBasic.getUserId()}}"><span style="color:#FFF; background-color:#71ab24; padding:3px 5px 3px 5px;">更多信息</span></a></td>
          </tr>
        </table></td>
      </tr>
 {%endfor%}

    <tr>
            <td class="line_bottom"><table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td><font class="font_18 font_f60">问</font></td>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="92%"><font color="#0E4D9C">张娜娜</font>&nbsp;<font style="font-family:Arial; color:#999999">2016-02-12</font><br />
                        我想请问一下金色光的客服，投资的时候会不会遇到诈骗的，如果钱被骗了，该如果解决呢？</td>
                      <td width="8%"><a href="user3_cont.html"><span style="color:#FFF; background-color:#71ab24; padding:3px 5px 3px 5px;">我来回复</span></a></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td width="4%" align="center" bgcolor="#F5F5F5"><font class="font_18 font_f60">答</font></td>
                <td width="96%" bgcolor="#F5F5F5" class="line_bottom"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td class="line_bottom"><font color="#0E4D9C">王小布</font>&nbsp;<font style="font-family:Arial; color:#999999">2016-02-12</font><br />
                      如果您的钱被骗了，我们公司将双倍奉上，用该网站尽可放心！</td>
                  </tr>
                </table></td>
              </tr>


            </table></td>
          </tr>

    </table>

            <br />
      </div>

</div>

  {{javascript_include('js/project.js')}}