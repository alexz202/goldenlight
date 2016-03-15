{{ content() }}
<div class="width100P bg">
	<div class="user_nav">
	{{ partial("public/user_nav")}}
	</div>
	<div class="user">
			{{ partial("public/project_nav")}}

        	    {% if raise_id is defined %}
            		{{ form("user_raise_market/save", "method":"post","enctype":"multipart/form-data","id":"add_form") }}
            		 {{ hidden_field("raise_id", "size" : 30,"value": raise_id) }}
 {{ hidden_field("project_type", "size" : 30,"value": project_type) }}
            		{% else%}
                    {% endif %}

		<table width="100%" border="0" cellspacing="0" cellpadding="30">
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="10">


              <tr>
               <td align="right">目标市场</td>
               <td>  {{ text_area("aim_market", "cols":80,"class":"user_input01","placeholder":"介绍至少30字") }}</td>
             </tr>

              <tr>
                <td align="right">市场描述</td>
                <td>  {{ text_area("aim_market_feaure", "cols":80,"class":"user_input01","placeholder":"介绍至少30字") }}</td>
              </tr>


               <tr>
               <td align="right">竞争策略</td>
                      <td>  {{ text_area("competitive_strategy", "cols":80,"class":"user_input01","placeholder":"介绍至少30字") }}</td>
                </tr>

            </table></td>
		  </tr>

		  <tr>
			<td align="center">
			<span class="bnt_xiugai" id='save_market' style='cursor:pointer;'>保存</span>
			</td>
		  </tr>
		</table>


		</form>
	</div>
</div>

  {{javascript_include('js/project.js')}}
