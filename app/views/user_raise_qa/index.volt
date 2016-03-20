
{{ content() }}

<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>

<div class="user">
		<ul>
			<li><a href="/user_raise_qa/indexQa">更新</a></li>
			<li class="user_cent_navbg"><a href="/user_raise_qa/index"><font color="#FFFFFF">常见问题</font></a></li>
		</ul>

        <table width="96%" border="0" align="center" cellpadding="10" cellspacing="0">

{%for item in dtb_raise_qa%}

           <tr>
                      <td class="line_bottom"><table width="100%" border="0" cellspacing="0" cellpadding="10">
                        <tr>
                          <td><font class="font_18 font_f60">问</font></td>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="92%"><font color="#0E4D9C">{{item.DtbUserBasic.getNickname()}}</font>&nbsp;<font style="font-family:Arial; color:#999999">{{item.getMsgTs()}}</font><br />
       {{item.getMsg()}}</td>
                              <td width="8%">
                              {%if item.DtbRaiseProjectQaRemsg%}
                              <a href="javascript:remsg({{raise_id}},{{item.getMsgId()}});"><span style="color:#FFF; background-color:#71ab24; padding:3px 5px 3px 5px;">我来回复</span></a>
                              {%endif%}&nbsp;
                              </td>
                            </tr>
                          </table></td>
                        </tr>
                   {%if item.DtbRaiseProjectQaRemsg %}
                        <tr>
                          <td width="4%" align="center" bgcolor="#F5F5F5"><font class="font_18 font_f60">答</font></td>
                          <td width="96%" bgcolor="#F5F5F5"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                              <td class="line_bottom"><font color="#0E4D9C"> {{item.DtbRaiseProjectQaRemsg.DtbUserBasic.getNickname()}}</font>&nbsp;<font style="font-family:Arial; color:#999999"> {{item.DtbRaiseProjectQaRemsg.getRemsgTs()}}</font><br />
          {{item.DtbRaiseProjectQaRemsg.getRemsg()}}</td>
                            </tr>
                          </table>

                           </td>
                        </tr>
                        {%else%}

                          <tr>
                                                  <td width="4%" align="center" bgcolor="#F5F5F5"><font class="font_18 font_f60">答</font></td>
                                                  <td width="96%" bgcolor="#F5F5F5">
                                                   </td>
                                                </tr>
                {%endif %}



                      </table></td>
                    </tr>
{%endfor%}

          <tr>
            <td width="90%" class="line_bottom">&nbsp;</td>
          </tr>
        </table>
        <br />
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">回复</h4>
      </div>
      <div class="modal-body">
        <p>{{ text_area("remsg", "cols":60,"class":"","placeholder":"回答") }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary resmg_submit">提交</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  {{javascript_include('js/project.js')}}