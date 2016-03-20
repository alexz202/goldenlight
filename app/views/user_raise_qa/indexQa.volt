
{{ content() }}



<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>


	<div class="user">
    		<ul>
    			<li class="user_cent_navbg"><a href="/user_raise_qa/indexQa"><font color="#FFFFFF">更新</font></a></li>
    			<li><a href="/user_raise_qa/index">常见问题</a></li>
    		</ul>
    		{{ form("user_raise_updates/create", "method":"post","enctype":"multipart/form-data","id":"add_form") }}
    		  <table width="100%" border="0" cellspacing="0" cellpadding="30">
                <tr>
                  <td><textarea name="content" rows="5" class="user_input" id='content'>
                  {%if dtb_raise_project_update%}
                  {{dtb_raise_project_update.getContent()}}
                  {%endif%}
                  </textarea>
                  <input type='hidden' id='raise_id' name='raise_id' value='{{raise_id}}'/>
                  <input type='hidden' id='title' name='title' value=''/>
                <tr>


                  <td align="center"><span class="bnt_xiugai" id='save_update'>提交</span></td>
                </tr>
              </table>
    		</form>

      </div>

</div>

  {{javascript_include('js/project.js')}}