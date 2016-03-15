
{{ content() }}
<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>
	<div class="user">
			{{ partial("public/project_nav")}}

        	    {% if raise_id is defined %}
            		{{ form("user_raise_basic/save", "method":"post","enctype":"multipart/form-data","id":"add_form") }}
            		 {{ hidden_field("raise_id", "size" : 30,"value": raise_id) }}
            		{% else%}
            		{{ form("user_raise_basic/create", "method":"post","enctype":"multipart/form-data","id":"add_form") }}
                    {% endif %}
		<table width="100%" border="0" cellspacing="0" cellpadding="30">
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td width="19%" align="right">LOGO</td>
                <td width="81%"><img style="border:#CCC solid 1px;" src="/images/img_logo_user.gif" width="100" height="100" /><br />
                   {{ file_field('company_logo', 'size': "30", 'class': "") }}

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
                <td align="right">公司名称</td>
                <td><label>
                     {{ text_field("project_name", "size" : 60,"class":"user_input01") }}
                </label></td>
              </tr>
              <tr>
                <td align="right">公司简介</td>
                <td>  {{ text_area("project_desc", "cols":80,"class":"user_input01","placeholder":"介绍至少30字") }}</td>
              </tr>
              <tr>
                <td align="right">币种</td>
                <td>
                    <?php
                                              echo  $this->tag->selectStatic(array('currency'),array(

                                                  1 => "人民币",
                                                  2 => "美元",
                                                  3 => "欧元",
                                                  4 => "港币",
                                                  5 => "日元",
                                                ))
                                                  ?>
                </td>
              </tr>
              <tr>
                <td align="right"><p >最低预计筹资额</p></td>
                <td> {{ numeric_field("aim_money", "type" : "numeric", "size" : 60,"class":"user_input01") }}
                  元</td>
              </tr>
              <tr>
                <td align="right">优先优惠折扣</td>
                <td>  {{ numeric_field("next_discount", "type" : "numeric", "size" : 60,"class":"user_input01") }}
                  %</td>
              </tr>

               <tr>
                              <td align="right">类型</td>
                              <td>
                                <?php
                                                                echo  $this->tag->selectStatic(array('project_grow_up'),array(
                                                                    0 => "种子期",
                                                                    1 => "成熟期",
                                                                    2 => "再融资",
                                                                  ))
                                                                    ?>
                              </td>
                            </tr>


                <tr>
                              <td align="right">行业分类</td>
                              <td>
                               <select name='search_type_1' id='search_type_1' class=''>
                                                                     <option value='0'>请选择</option>
                                                                    {%for key,item in type_list%}
                                                                    {%if key==pid%}
                                                                    <option value='{{key}}' selected>{{item['name']}}</option>
                                                                    {%else%}
                                                                    <option value='{{key}}'>{{item['name']}}</option>
                                                                    {%endif%}
                                                                    {%endfor%}
                                                                    </select>

                                                                        <select name='project_type' id='search_type_2' class=''>
                                                                    {%for key,item in type_list[pid]['children']%}
                                                                     {%if item['type_id']==project_type%}
                                                                     <option value='{{item['type_id']}}' selected>{{item['name']}}</option>
                                                                     {%else%}
                                                                     <option value='{{item['type_id']}}'>{{item['name']}}</option>
                                                                     {%endif%}
                                                                     {%endfor%}
                                                                                            </select>
                              </td>
                            </tr>



            </table></td>
		  </tr>



		  <tr>
			<td align="center">
			<span class="bnt_xiugai" id='save_basic' style='cursor:pointer;'>保存</span>
			</td>
		  </tr>
		</table>


		</form>
	</div>
</div>

  {{javascript_include('js/project.js')}}