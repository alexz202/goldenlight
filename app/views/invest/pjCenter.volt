<div class="width100P vis"></div>
<div class="width100P bg">
	<div class="width_site">
		<div class="touzi_title"><a href="index.html">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="touzi.html">项目列表</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{{dtb_raise_project_basic.project_name}}</div>
	  <div class="touzi_part01">
	  	<div class="touzi_p01_img"><img src="/images/img.jpg" /></div>
		<div class="touzi_p01_cent">
			<h3><span class="fl">{{dtb_raise_project_basic.project_name}}</span><span style="font-size:12px" class="fr"><img src="/images/ic07.png" width="9" height="12" />&nbsp;上海&nbsp;&nbsp;&nbsp;<img src="/images/ic08.png" width="12" height="12" />&nbsp;其它类目</span></h3>
			{{dtb_raise_project_basic.project_desc}}……【<a href="#">查看更多</a>】		<br />
			<span class="font_f60">计划筹资：{{dtb_raise_project_basic.DtbRaiseProjectWheel.getAimMoney()}}万&nbsp;&nbsp;股份：{{dtb_raise_project_basic.DtbRaiseProjectWheel.aim_equity_offered}}%&nbsp;&nbsp;实际筹资和股份：{{dtb_raise_project_basic.DtbRaiseProjectWheel.already_money}}万&nbsp;&nbsp;公司估值：{{dtb_raise_project_basic.valuation}}万</span><br />
				创使人<img src="/images/ren.jpg" />&nbsp;&nbsp;领投人&nbsp;&nbsp;虚位以待
			</div>
			<div class="touzi_p01_bnt"><a href="#">我要投资</a></div>
		</div>
		<div class="touzi_part02">
			<div class="touzi_p02_fl"><embed src="http://player.youku.com/player.php/Type/Folder/Fid/26692687/Ob/1/sid/XMTQ2OTQwNzYzMg==/v.swf" width="320" height="260"></embed></div>
			<div class="fr " >
            <div class='show_detail'>
				  <!-- Nav tabs -->
                   <ul class="nav nav-tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#idea" aria-controls="idea" role="tab" data-toggle="tab">概念</a></li>
                     <li role="presentation"><a href="#market" aria-controls="market" role="tab" data-toggle="tab">市场</a></li>
                     <li role="presentation"><a href="#team" aria-controls="team" role="tab" data-toggle="tab">团队</a></li>
                     <li role="presentation"><a href="#update" aria-controls="update" role="tab" data-toggle="tab">更新</a></li>
                      <li role="presentation"><a href="#qa" aria-controls="qa" role="tab" data-toggle="tab">常见问题</a></li>
                       <li role="presentation"><a href="#investors" aria-controls="investors" role="tab" data-toggle="tab">投资者</a></li>
                   </ul>

                   <!-- Tab panes -->
                   <div class="tab-content">
                    <!-- idea -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr active " id="idea">
							<img src="/images/img01.jpg" width="751" /><br />
							<h3>简介</h3>
							 {{dtb_raise_project_basic.DtbRaiseProjectIdea.getIdeaInfo()}}
							  <h3>宗旨</h3>
							 {{dtb_raise_project_basic.DtbRaiseProjectIdea.getPurpose()}}
                              <h3>目前取得的成就</h3>
                             {{dtb_raise_project_basic.DtbRaiseProjectIdea.getLivestock()}}
                               <h3>useform</h3>
                              {{dtb_raise_project_basic.DtbRaiseProjectIdea.getUseform()}}
                              <h3>筹资策略</h3>
                            {{dtb_raise_project_basic.DtbRaiseProjectIdea.getTechnical()}}
                     </div>
                      <!-- market -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="market">
                            <h3>目标市场</h3>
							 {{dtb_raise_project_basic.DtbRaiseProjectMarket.getAimMarket()}}
							  <h3>目标市场的特征</h3>
							 {{dtb_raise_project_basic.DtbRaiseProjectMarket.getAimMarketFeaure()}}
                              <h3>竞争力</h3>
                             {{dtb_raise_project_basic.DtbRaiseProjectMarket.getCompetitiveStrategy()}}
                     </div>
                      <!-- team -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="team">
                      <h3>团队成员</h3>
                     {%for item in dtb_raise_project_basic.DtbRaiseProjectTeam%}
                        {{item.getUserName()}}
                        <img src='{{item.getAvatar()}}'/>

                     {%endfor%}

                     </div>
                      <!-- update -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="update">

                       {%for item in dtb_raise_project_basic.DtbRaiseProjectUpdates%}
                                 <h3>       {{item.getTitle()}}</h3>
                                                               <p> {{item.getContent()}}</p>
                      {%endfor%}
                     </div>
                      <!-- qa -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="qa">

                     {%for item in dtb_raise_project_basic.DtbRaiseProjectQa%}

                                  <h3>       {{item.getMsg()}}</h3>
                                         <p> {{item.DtbUserBasic.getNickname()}}</p>
                                  <h3>       {{item.getReMsg()}}</h3>
                     {%endfor%}


                     </div>
                      <!-- investors -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="investors">

                     {%for item in dtb_raise_project_basic.DtbRaiseProjectInvestor%}
                                         <p> {{item.DtbUserBasic.getNickname()}}</p>
                                          <p><img src='{{item.DtbUserBasic.getAvatarUrl()}}'/></p>
                                          <h3>       {{item.getInvestMoney()}}</h3>
                     {%endfor%}


                     </div>
                   </div>
	</div>


			</div>
		</div>
	  
	</div>
</div>


{{javascript_include('js/show.js')}}