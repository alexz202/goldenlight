
<div class="width100P bg">
	<div class="width100P bg">
    	<div class="blank"></div>
      <div class="user">
    	 {{ partial("public/user_basic_nav")}}
    		 {{ form('user/changePassword', 'class': 'form-inline') }}
    		<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
    		  <tr>
    			<td><table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="46%" class="font_18">修改邮箱</td>
                    <td width="54%" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2">
                    <table width="100%" border="0" cellspacing="0" cellpadding="10">


                      <tr>
                        <td align="right">原密码</td>
                        <td><label>
                          {{ hidden_field('user_id', 'size': "30", 'class': "input-xlarge",'value':25) }}
                                                    {{ text_field('email', 'size': "30", 'class': "input-xlarge") }}
                        </label></td>
                      </tr>



                    </table></td>
                  </tr>
                </table></td>
    		  </tr>

    		  <tr>
    			<td height="80" align="center"><span class="bnt_xiugai">提交</span></td>
    		  </tr>
    		</table>


    		</form>
    	</div>
    </div>
</div>