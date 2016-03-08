<div class="width100P bg">
	<div class="user">
		{{ partial("public/project_nav")}}
		{{ form("user_raise_basic/create", "method":"post","id":"add_form","enctype":"multipart/form-data" ) }}

		{% if raise_id is defined %}
		{{ form("dtb_raise_project_basic/save", "method":"post") }}
		 {{ hidden_field("raise_id", "size" : 30,"value": raise_id) }}
		{% else%}
		{{ form("dtb_raise_project_basic/create", "method":"post") }}
        {% endif %}

          {{ hidden_field("user_id","value":user_id) }}
		<table width="100%" border="0" cellspacing="0" cellpadding="30">
		<!--logo-->
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="46%" class="font_18">LOGO</td>
                <td width="54%" align="right"></td>
              </tr>
              <tr>
                <td colspan="2">
              {{ file_field('company_logo', 'size': "30", 'class': "") }}
                  </td>
              </tr>
            </table>
            </td>
		  </tr>

    <!--logo-->
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="46%" class="font_18">名称</td>
                <td width="54%" align="right"></td>
              </tr>
              <tr>
                <td colspan="2">
                            {{ text_field("project_name", "size" : 30,"class":"user_input") }}
                        </</td>
              </tr>
            </table></td>
		  </tr>
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="46%" class="font_18">介绍</td>
                <td width="54%" align="right"></td>
              </tr>
              <tr>
                <td colspan="2">
                  {{ text_area("project_desc", "size" : 30,"class":"user_input","placeholder":"介绍至少30字") }}
                </td>
              </tr>
            </table></td>
		  </tr>

<!--tr -->
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="46%" class="font_18">币种</td>
                <td width="54%" align="right"></td>
              </tr>
              <tr>
                <td colspan="2">
                  <?php
                            echo  $this->tag->selectStatic(array('currency',"class" => "form-control"),array(
                                1 => "人民币",
                                2 => "美元",
                                3 => "欧元",
                                4 => "港币",
                                5 => "日元",
                              ))
                                ?>
                </td>
              </tr>
            </table></td>
		  </tr>
<!--tr -->
		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="46%" class="font_18">最低预计筹资额</td>
                <td width="54%" align="right"></td>
              </tr>
              <tr>
                <td colspan="2">
                   {{ numeric_field("aim_money", "type" : "numeric","class":"user_input") }}
                </td>
              </tr>
            </table></td>
		  </tr>

		  <tr>
			<td><table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr>
                <td width="46%" class="font_18">优先优惠折扣</td>
                <td width="54%" align="right"></td>
              </tr>
              <tr>
                 <td colspan="2">
                   {{ numeric_field("next_discount", "type" : "numeric","class":"user_input","value":'-1') }}
                </td>
              </tr>
            </table></td>
		  </tr>

          <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td width="46%" class="font_18">项目状态</td>
                      <td width="54%" align="right"></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <?php
                                  echo  $this->tag->selectStatic(array('project_grow_up',"class" => "form-control"),array(
                                      0 => "种子期",
                                      1 => "成熟期",
                                      2 => "再融资",
                                    ))
                                      ?>
                      </td>
                    </tr>
                  </table></td>
              </tr>
<!--tr -->
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td width="46%" class="font_18">行业分类</td>
                        <td width="54%" align="right"></td>
                      </tr>
                      <tr>
                        <td colspan="2">

                        <select name='search_type_1' id='search_type_1' class=''>
                         <option value='0'>请选择</option>
                        {%for key,item in type_list%}
                        <option value='{{key}}'>{{item['name']}}</option>
                        {%endfor%}
                        </select>

                            <select name='invested_num' id='search_type_2' class=''>

                                                </select>
                        </td>
                      </tr>
                    </table></td>
                </tr>

                  <tr>
                    <td align="center">
                    <span class="bnt_xiugai" id='save_basic' style='cursor:pointer;'>保存</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
		</table>
		</form>
	</div>
</div>
  {{javascript_include('js/project.js')}}