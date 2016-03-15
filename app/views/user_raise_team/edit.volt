{{ content() }}

<div class="width100P bg">
	<div class="user_nav">
	{{ partial("public/user_nav")}}
	</div>
	<div class="user">
			{{ partial("public/project_nav")}}

        	    {% if raise_id is defined and tmmember_id is defined %}
            		{{ form("user_raise_team/save", "method":"post","enctype":"multipart/form-data","id":"add_form") }}
            		 {{ hidden_field("raise_id", "size" : 30,"value": raise_id) }}
            		 {{ hidden_field("tmmember_id", "size" : 30,"value": tmmember_id) }}
                    {% endif %}
		<table width="100%" border="0" cellspacing="0" cellpadding="30">
		   <tr>
                            <td width="46%" class="font_18">个人详细信息</td>
                            <td width="54%" align="right"><a href="#"></a></td>
                          </tr>
		  <tr>
			<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="10">


              <tr>
                <td width="19%" align="right">照片</td>
                <td width="81%"><img style="border:#CCC solid 1px;" src="/images/img_logo_user.gif" width="100" height="100" /><br />
                   {{ file_field('avatar', 'size': "30", 'class': "") }}

                 <!-- <a href="#"><span class="bnt_shangchuan">上传LOGO</span></a>-->
                 </td>
              </tr>
           <!--   <tr>
                <td align="right">公司图像</td>
                <td><img style="border:#CCC solid 1px;" src="images/img_gongsi.gif" width="400" height="200" /><br />
                <a href="#"><span class="bnt_shangchuan">上传公司图像</span></a></td>
              </tr>
              -->
              <tr>
                <td align="right">姓名</td>
                <td><label>
                     {{ text_field("user_name", "size" : 60,"class":"user_input01") }}
                </label></td>
              </tr>
              <tr>
                <td align="right">国籍</td>
                <td>    {{ text_field("nationality", "size" : 60,"class":"user_input01") }}</td>
              </tr>
              <tr>
				  <td align="right">国家</td>
				  <td>    {{ text_field("country", "size" : 60,"class":"user_input01") }}</td>
				</tr>

				<tr>
				  <td align="right">城市</td>
				  <td>   {{ text_field("city", "size" : 60,"class":"user_input01") }}</td>
				</tr>
            </table>
            </td>
		  </tr>
		  <tr><td>
				<table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td width="46%" class="font_18">参与</td>
                    <td width="54%" align="right"><a href="#"></a></td>
                  </tr>
                  <tr>
                    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="10">

                    	<tr>
						  <td align="right">角色</td>
						  <td>    {{ text_field("role", "size" : 60,"class":"user_input01") }}</td>
						</tr>

					  <tr>
						<td align="right"><p >现有股份</p></td>
						<td> {{ numeric_field("ownership", "type" : "numeric", "size" : 60,"class":"user_input01") }}
						  </td>
					  </tr>
					  <tr>
						<td align="right">全职或兼职</td>
						<td>
						 <?php
                                                                      echo  $this->tag->selectStatic(array('commitment'),array(
                                                                          0 => "兼职",
                                                                          1 => "全职",
                                                                        ))
                                                                          ?>
						  </td>
					  </tr>





                    </table></td>
                  </tr>


                 <tr><td>
                				<table width="100%" border="0" cellspacing="0" cellpadding="5">
                                  <tr>
                                    <td width="46%" class="font_18">教育背景</td>
                                    <td width="54%" align="right"><a href="#"></a></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="10">

                                    	<tr>
                						  <td align="right">专业</td>
                						  <td>    {{ text_field("major", "size" : 60,"class":"user_input01") }}</td>
                						</tr>

                					  <tr>
                						<td align="right"><p >学历</p></td>
                						<td> {{ text_field("education", "type" : "numeric", "size" : 60,"class":"user_input01") }}
                						  </td>
                					  </tr>
                					  <tr>
                						<td align="right">学历获取时间</td>
                						<td>

                						                  <input name="reward_ts" type="date" id='reward_ts' value='{{reward_ts	}}'/>
                						  </td>
                					  </tr>





                                    </table></td>
                                  </tr>



  <tr><td>
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
		  <tr>
			<td width="46%" class="font_18">工作状况</td>
			<td width="54%" align="right"><a href="#"></a></td>
		  </tr>
		  <tr>
			<td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="10">

				<tr>
				  <td align="right">公司名称</td>
				  <td>    {{ text_field("company", "size" : 60,"class":"user_input01") }}</td>
				</tr>

			  <tr>
				<td align="right"><p >职务</p></td>
				<td> {{ text_field("position", "type" : "numeric", "size" : 60,"class":"user_input01") }}
				  </td>
			  </tr>
			  <tr>
				<td align="right">开始时间</td>
				<td>

               <input name="start_ts" type="date" id='start_ts' value='{{start_ts}}'/>
				 </td>
			  </tr>

			   <tr>
				<td align="right">结束时间</td>
				<td>
				<input name="end_ts" type="date" id='reward_ts' value='{{end_ts}}'/>
				  </td>
			  </tr>

			</table></td>
          </tr>


  <tr><td>
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
		  <tr>
			<td width="46%" class="font_18">职业证书</td>
			<td width="54%" align="right"><a href="#"></a></td>
		  </tr>
		  <tr>
			<td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="10">

				<tr>
				  <td align="right">机构</td>
				  <td>    {{ text_field("organization", "size" : 60,"class":"user_input01") }}</td>
				</tr>

			  <tr>
				<td align="right"><p >证书名称</p></td>
				<td> {{ text_field("certificate_name", "type" : "numeric", "size" : 60,"class":"user_input01") }}
				  </td>
			  </tr>
			  <tr>
				<td align="right">证书授予时间</td>
				<td>
					<input name="reward_ts" type="date" id='reward_ts' value='{{reward_ts}}'/>
				  </td>
			  </tr>
			</table></td>
          </tr>

		  <tr>
			<td align="center">
			<span class="bnt_xiugai" id='save_team' style='cursor:pointer;'>保存</span>
			</td>
		  </tr>
		</table>


		</form>
	</div>
</div>

  {{javascript_include('js/project.js')}}