
{{ content() }}
<div class="width100P bg">
	<div class="user_nav">
    		{{ partial("public/user_nav")}}
    	</div>
	<div class="user">
				{{ partial("public/project_nav")}}

        	    {% if raise_id is defined %}
            		{{ form("user_raise_basic/saveCompany", "method":"post","id":"add_form") }}
            		 {{ hidden_field("raise_id", "size" : 30,"value": raise_id) }}
            		{% else%}
                    {% endif %}
                     {{ hidden_field("act_type", "size" : 30,"value": 1) }}
		<table width="100%" border="0" cellspacing="0" cellpadding="30">
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
                <td align="right">国家</td>
                <td><label>
                    <?php
                                              echo  $this->tag->selectStatic(array('country'),array(
                                                  1 => "中国",
                                                  2 => "美国",
                                                  3 => "德国",
                                                  4 => "香港",
                                                  5 => "日本",
                                                  6 =>"英国",
                                                  7 =>"法国",
                                                ))
                                                  ?>
                </label></td>
              </tr>

              <tr>
                <td align="right">地址1</td>
                <td><label>
                     {{ text_field("address1", "size" : 60,"class":"user_input01") }}
                </label></td>
              </tr>
              <tr>
                <td align="right">地址2</td>
                <td>  {{ text_field("address2", "size" : 60,"class":"user_input01") }} </td>
              </tr>
              <tr>
                <td align="right">邮编</td>
                <td><label>
                   {{ numeric_field("post_card", "type" : "numeric", "size" : 60,"class":"user_input01") }}
                </label></td>
              </tr>

              <tr>
                <td align="right">城市</td>
                <td>  {{ text_field("city", "type" : "text", "size" : 60,"class":"user_input01") }}
                  </td>
              </tr>
{%if project_type==0%}

		        <tr>
                                        <td align="right">工资</td>
                                        <td>
                        {{ numeric_field("next_two_y_total_wage", "type" : "numeric", "size" : 60,"class":"user_input01") }}
                                        </td>
                                      </tr>
{%endif%}

                      </table></td>
          		  </tr>

{%if project_type>0%}

	  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="10">

              <tr>
                <td align="left" colspan=2>公司详细信息</td>
              </tr>
              <tr>
                <td align="right">公司注册号码</td>
                <td>  {{ text_field("company_number", "size" : 60,"class":"user_input01") }} </td>
              </tr>
              <tr>
                <td align="right">公司注册日期</td>
                <td><label>
                 <input name="company_register_ts" type="date" id='company_register_ts' value='{{company_register_ts}}'/>
                </label></td>
              </tr>

              <tr>
                <td align="right">直接贷款</td>
                <td>  {{ numeric_field("immediate_loan", "type" : "numeric", "size" : 60,"class":"user_input01","value":'0') }}
                  </td>
              </tr>

               <tr>
                              <td align="right">未来2年的工资总额</td>
                              <td>
              {{ numeric_field("next_two_y_total_wage", "type" : "numeric", "size" : 60,"class":"user_input01") }}
                              </td>
                            </tr>
            </table>
            </td>
		  </tr>


{%endif%}
		  <tr>
			<td align="center">
			<span class="bnt_xiugai" id='save_company' style='cursor:pointer;'>保存</span>
			</td>
		  </tr>
		</table>


		</form>
	</div>
</div>

  {{javascript_include('js/project.js')}}