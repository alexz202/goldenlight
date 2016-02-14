<div class="width100P bg">
  <div class="dl">
  	<div class="dl_title">
		<h1>认证投资人</h1>
		<h2><span class="font_f60">创建者</span>可创建项目，开始融资<span class="font_f60">投资人</span>可申请，获取投资项目的权限</h2>
	</div>
	<div class="dl_cent">
		<div class="dl_cent_center">
			<form action="/user/applyPersonSubmit" method="post" id='apply_form'  enctype='multipart/form-data'>
			  <table width="100%" border="0" cellspacing="0" cellpadding="5" id='tb_mobile'>
                  <tr>
                    <td width="17%" align="right">姓名</td>
                    <td colspan="2"><label>
                      <input name="user_id" type="hidden" id='user_id' value='{{user_id}}' />
                      <input name="real_name" type="real_name" class="dl_input" size="48" id='real_name'/>
                    </label></td>
                  </tr>
                  <tr>
                    <td align="right">身份证号</td>
                    <td colspan="2"><input name="identity_card" type="text" class="dl_input" size="48" id='identity_card'/></td>
                  </tr>
                  <tr>
                    <td align="right" >所在地区</td>
                    <td colspan="2" id="city_select"><select class="prov" name='prov'></select>
                                        	<select class="city" disabled="disabled" name='city'></select>
                                            <select class="dist" disabled="disabled" name='dist'></select><input name="address" type="text" class="dl_input_setting" size="30" id='address'/></td>
                  </tr>
                  <tr>
                    <td align="right">身份证正面</td>
                    <td  colspan="2">
                 <!--  <div style='float:left;margin:0px 10px 0px 0px'> {{ file_field('idc_img1_upload', 'size': "30", 'class': "") }}</div>
                    <div style='float:left'> <input type='hidden' name='idc_img1' id='idc_img1' /><span id='idc_img1_tag'></span></div>
              -->
              {{ file_field('idc_img1', 'size': "30", 'class': "") }}

                    </td>
                  </tr>
                   <tr>
                  <td align="right">身份证反面</td>
                  <td  colspan="2">
                   <!--     <div style='float:left;margin:0px 10px 0px 0px'>{{ file_field('idc_img2_upload', 'size': "30", 'class': "") }} </div>

                      <div style='float:left'><input type='hidden' name='idc_img2' id='idc_img2' /> <span id='idc_img2_tag'></span></div>
                -->
                 {{ file_field('idc_img2', 'size': "30", 'class': "") }}
                 </td>
                  </tr>
                  <tr>
                    <td align="right">年收入</td>
                    <td colspan="2"><input name="income_y" type="number" class="dl_input income_y" size="10" />万元</td>

                  </tr>
                 <tr>
                  <td align="right">所在企业</td>
                  <td><input name="company" type="text" class="dl_input company" size="48" /></td>
                  <td>所在公司或机构</td>
                </tr>
                <tr>
                  <td align="right">职务</td>
                  <td><input name="position" type="text" class="dl_input position" size="48" /></td>
                  <td>所在公司或机构担任职务</td>
                </tr>
                 <tr>
                                  <td align="right">个人资产</td>
                                  <td colspan="2"><input name="person_fund" type="number" class="dl_input_setting" size="4" style="width:60px;"/>万元
                                           &nbsp;&nbsp;&nbsp;&nbsp; 单项目投资金额<input name="singel_invest_range_start" type="number" class="dl_input_setting" size="4" style="width:80px;"/>万元--
                                            <input name="singel_invest_range_end" type="number" class="dl_input_setting" size="4" style="width:80px;"/>万元

                                  </td>

                                </tr>
                  <tr><td align="right">投资经验</td>
                  <td>
                            <input type='checkbox' name='invest_exp[]' id='checkbox_invesrt_exp' value='1'/>PE/VC&nbsp;&nbsp;
                            <input type='checkbox' name='invest_exp[]' id='checkbox_invesrt_exp' value='2'/>天使投资&nbsp;&nbsp;<br/>
                            <input type='checkbox' name='invest_exp[]' id='checkbox_invesrt_exp' value='3'/>股票期权&nbsp;&nbsp;
                            <input type='checkbox' name='invest_exp[]' id='checkbox_invesrt_exp' value='4'/>P2P&nbsp;&nbsp;
                            <input type='checkbox' name='invest_exp[]' id='checkbox_invesrt_exp' value='5'/>其它&nbsp;&nbsp;
                  </td>
                  </tr>
                    <tr>
                                                      <td align="right">关注方向</td>
                                                      <td><input name="attention_direct" type="text" class="dl_input_200" size="48" /></td>
                                                      <td></td>
                                                    </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">以下选项申请领投人必填，个人认证投资人选填&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='tag_leader_show' tabindex="0" class="" role="button" data-toggle="popover" data-trigger="focus" title="领投人审核规则" data-placement="left" >查看领投人审核规则</a></td>
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
                         <tr><td> {{ file_field('project_logo', 'size': "30", 'class': "project_logo",'name':"project_logo[]") }} </td></tr>
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
                       <td colspan="2"><input id='check_leader' name="check_leader"  type="checkbox" style="list-style:none" value="1" />
                      同时申请领投人认证</td>
                     </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><span class="bnt_zc" id='apply_person_btn_submit'><a href="javascript:;">提交认证</a></span></td>
                  </tr>
                </table>

			</form>

			  <table class='project' id='project_model' style='display:none;'>
                                     <tr><td> {{ file_field('_project_logo', 'size': "30", 'class': "project_logo",'name': "project_logo[]") }} </td></tr>
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
    {{javascript_include('js/uploadify/jquery.uploadify.min.js')}}
<script type="text/javascript">
$('#tag_leader_show').popover({html:true,
content:function(){
return "{{tag_leader_show}}";
}
});
/*
        //上传图片
        /* 初始化上传插件 */
        $("#idc_img1_upload").uploadify({
                       "height"          : 30,
                       "swf"             : "/js/uploadify/uploadify.swf",
                       "fileObjName"     : "idc_img1",
                       "buttonText"      : "上传图片",
                       "uploader"        : "/file/upload",
                       "width"           : 120,
                       'removeTimeout'	  : 1,
                       'fileTypeExts'	  : '*.jpg; *.png; *.gif;',
                       "onUploadSuccess" : uploadPicture,
                       'onFallback' : function() {
                           alert('未检测到兼容版本的Flash.');
                       }
                   });
       $("#idc_img2_upload").uploadify({
                   "height"          : 30,
                   "swf"             : "/js/uploadify/uploadify.swf",
                   "fileObjName"     : "idc_img2",
                   "buttonText"      : "上传图片",
                   "uploader"        : "/file/upload",
                   "width"           : 120,
                   'removeTimeout'	  : 1,
                   'fileTypeExts'	  : '*.jpg; *.png; *.gif;',
                   "onUploadSuccess" : uploadPicture,
                   'onFallback' : function() {
                       alert('未检测到兼容版本的Flash.');
                   }
               });
        $(".project_logo").uploadify({
                           "height"          : 30,
                           "swf"             : "/js/uploadify/uploadify.swf",
                           "fileObjName"     : "project_logo",
                           "buttonText"      : "上传图片",
                           "uploader"        : "/file/upload",
                           "width"           : 120,
                           'removeTimeout'	  : 1,
                           'fileTypeExts'	  : '*.jpg; *.png; *.gif;',
                           "onUploadSuccess" : uploadPicture,
                           'onFallback' : function() {
                               alert('未检测到兼容版本的Flash.');
                           }
                       });

        function uploadPicture(file, data){
                 var data= eval('('+data+')');
                 var key=data['key'];
                 var new_name=data['new_name'];
                 if(key!='project_logo'){
                 $('#'+key).val(new_name);
                 var img_str="<img src='/files/"+new_name+"'/>";
                 var str="<a class='tt' role=\"button\" data-toggle='popover' data-trigger='focus'  data-placement='right'>"+new_name+"</a>";
                $('#'+key+'_tag').html(str);
                $('.tt').click(function(){
                $(this).popover({
                html : true,
                content:function(){
                return img_str;
                },
                delay: { "show": 500, "hide": 100 }
                }).popover('toggle');
                })

                 }else{



                 }
        }
*/
    </script>