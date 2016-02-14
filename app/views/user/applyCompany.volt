<div class="width100P bg">
  <div class="dl">
  	<div class="dl_title">
		<h1>机构认证</h1>
		<h2><span class="font_f60">创建者</span>可创建项目，开始融资<span class="font_f60">投资人</span>可申请，获取投资项目的权限</h2>
	</div>
	<div class="dl_cent">
		<div class="dl_cent_center">
			<form action="/user/applyCompanySubmit" method="post" id='apply_form'>
			  <table width="100%" border="0" cellspacing="0" cellpadding="5" id='tb_mobile'>
                  <tr>
                    <td width="17%" align="right">法人姓名</td>
                    <td colspan="2"><label>
                      <input name="user_id" type="hidden" id='user_id' value='{{user_id}}' />
                      <input name="legal_name" type="legal_name" class="dl_input" size="48" id='legal_name'/>
                    </label></td>
                  </tr>
                  <tr>
                    <td align="right">法人身份证号</td>
                    <td colspan="2">
                    <input name="legal_identity_card" type="text" class="dl_input" size="48" id='legal_identity_card'/></td>
                  </tr>

                  <tr>
                    <td align="right">法人身份证正面</td>
                     <td  colspan="2">
    {{ file_field('legal_idc_img1', 'size': "30", 'class': "") }}

                                        </td>
                  </tr>
                   <tr>
                  <td align="right">法人身份证反面</td>
                  <td  colspan="2">
                                    {{ file_field('legal_idc_img2', 'size': "30", 'class': "") }}

                                     </td>
                  </tr>
                  <tr>
                  <td width="17%" align="right">联系人</td>
                  <td colspan="2"><label>
                    <input name="contact_name" type="contact_name" class="dl_input" size="48" id='contact_name'/>
                  </label></td>
                  </tr>

                    <tr>
                                       <td align="right" >所在地区</td>
                                       <td colspan="2" id="city_select"><select class="prov" name='prov'></select>
                                                           	<select class="city" disabled="disabled" name='city'></select>
                                                               <select class="dist" disabled="disabled" name='dist'></select><input name="address" type="text" class="dl_input_setting" size="30" id='address'/></td>
                                     </tr>
                  <tr>
                    <td align="right">营业执照号</td>
                    <td colspan="2"><input name="business_licence" type="text" class="dl_input business_licence" size="10" id='business_licence'/></td>
                  </tr>
                   <tr>
                                    <td align="right">营业执照复印件</td>
                                    <td>
                                    {{ file_field('bul_img', 'size': "30", 'class': "",'style':'line_height:80px;') }}
                                    </td>
                                    <td></td>
                                  </tr>
                 <tr>
                  <td align="right">企业名称</td>
                  <td><input name="company" type="text" class="dl_input company" size="48" /></td>
                  <td></td>
                </tr>

                 <tr>
                                  <td align="right">资金规模</td>
                                  <td colspan="2"><input name="person_fund" type="number" class="dl_input_setting" size="4" style="width:60px;"/>万元
                                           &nbsp;&nbsp;&nbsp;&nbsp; 单项目投资金额<input name="singel_invest_range_start" type="number" class="dl_input_setting" size="4" style="width:80px;"/>万元--
                                            <input name="singel_invest_range_end" type="number" class="dl_input_setting" size="4" style="width:80px;"/>万元

                                  </td>


                    <tr>
                                                      <td align="right">关注方向</td>
                                                      <td><input name="attention_direct" type="text" class="dl_input_200" size="48" /></td>
                                                      <td></td>
                                                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">以下选项申请领投人必填，机构认证选填&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='tag_leader_show' tabindex="0" class="" role="button" data-toggle="popover" data-trigger="focus" title="领投人审核规则" data-placement="left" data-content="{{tag_leader_show}}">查看领投人审核规则</a></td>
                  </tr>

                    <tr>
                    <td align="right">投资理念</td>
                    <td colspan="2"><input name="invest_idea" type="text" class="dl_input invest_idea" size="48" id='invest_idea'/></td>
                  </tr>
                  <tr>
                    <td align="right">可提供附加价值</td>
                    <td colspan="2"><input name="available_extra_price" type="text" class="dl_input available_extra_price" size="48" id='available_extra_price'/></td>
                  </tr>
                   <tr>
                                      <td align="right">投资案例</td>
                                      <td colspan="2"></td>
                                    </tr>

                  <tr>
                    <td align="right"></td>
                    <td colspan="2" id='show_project'>
                                            <table class='project'>
                                            <tr><td>


{{ file_field('project_logo', 'size': "30", 'class': "project_logo",'name': "project_logo[]") }}
                                            </td></tr>
                                            <tr><td><input name="project_name[]" type="text" class="dl_input project_name" size="48" id='project_name' placeholder='项目名称'/></td></tr>
                                            <tr><td><input name="web_url[]" type="text" class="dl_input web_url" size="48" id='web_url' placeholder='网站地址'/></td></tr>
                                             <tr><td><input name="project_desc[]" type="text" class="dl_input project_desc" size="48" id='project_desc' placeholder='项目介绍'/></td></tr>
                                            </table>
                                       </td>
                  </tr>
                      <tr>
                                                          <td>&nbsp;</td>
                                                           <td colspan="2"><a href='javascript:;' id='add_new_project'>添加投资案例</a></td>
                                                         </tr>
                    <tr>
                      <td>&nbsp;</td>
                       <td colspan="2"><input id='check_leader' name="check_leader"  type="checkbox" style="list-style:none" value="checkbox" />
                      同时申请领投人认证</td>
                     </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><span class="bnt_zc" id='apply_company_btn_submit'><a href="javascript:;">提交认证</a></span></td>
                  </tr>
                </table>

			</form>

			  <table class='project' id='project_model' style='display:none;'>
                                                 <tr><td>
                                                 <div style='float:left;margin:0px 10px 0px 0px' data-item='1'> {{ file_field( 'size': "30", 'class': "model_img") }}</div>
                                                                                                                   <div style='float:left'> <input type='hidden' name='project_logo[]'  class='model_img_value'/><span id='project_logo_tag'></span></div>
                                                 {{ file_field('size': "30", 'class': "project_logo") }}

                                                 </td></tr>
                                                 <tr><td><input name="project_name[]" type="text" class="dl_input project_name" size="48" id='project_name' placeholder='项目名称'/></td></tr>
                                                 <tr><td><input name="web_url[]" type="text" class="dl_input web_url" size="48" id='web_url' placeholder='网站地址'/></td></tr>
                                                  <tr><td><input name="project_desc[]" type="text" class="dl_input project_desc" size="48" id='project_desc' placeholder='项目介绍'/></td></tr>
                          </table>
		</div>
	</div>
  </div>
</div>
 {{javascript_include('js/cityselect/jquery.cityselect.js')}}
    {{javascript_include('js/register.js')}}
     {{javascript_include('js/apply.js')}}
    {{javascript_include('js/uploadify/jquery.uploadify.min.js')}}
    {{javascript_include('js/bootstrap/bootstrap.min.js')}}
<script type="text/javascript">
$('#tag_leader_show').popover({html:true,
content:function(){
return "{{tag_leader_show}}";
}
});

    </script>
