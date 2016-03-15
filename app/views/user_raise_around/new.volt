{{ content() }}
<div class="width100P bg">
	<div class="user_nav">
{{ partial("public/project_type")}}
	</div>
	<div class="user">
			{{ partial("public/project_nav")}}

        	    {% if raise_id is defined %}
            		{{ form("user_raise_around/create", "method":"post","id":"add_form") }}
            		 {{ hidden_field("raise_id", "size" : 30,"value": raise_id) }}
            		{% else%}
                    {% endif %}
		<table width="100%" border="0" cellspacing="0" cellpadding="30">
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="10">


              <tr>
               <td align="right">保荐人和简介</td>
               <td>  {{ text_area("bj_person", "cols":80,"class":"user_input01","placeholder":"介绍至少30字") }}</td>
             </tr>

              <tr>
                <td align="right">领头人和简介</td>
                <td>  {{ text_area("invest_leader", "cols":80,"class":"user_input01","placeholder":"介绍至少30字") }}</td>
              </tr>
             <tr>
             <td align="right">朋友圈链接</td>
                    <td>  {{ text_field("friend_link", "cols":80,"class":"user_input01","placeholder":"介绍至少30字") }}</td>
              </tr>



            </table></td>
		  </tr>

		  <tr>
			<td align="center">
			<span class="bnt_xiugai" id='save_around' style='cursor:pointer;'>保存</span>
			</td>
		  </tr>
		</table>


		</form>
	</div>
</div>

  {{javascript_include('js/project.js')}}
