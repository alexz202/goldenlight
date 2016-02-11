<div class="width100P vis"></div>
<div class="width100P bg">
	<div class="width_site">
		<div class="touzi_title"><a href="index.html">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="touzi.html">项目列表</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{{dtb_raise_project_basic.project_name}}</div>
	  <div class="touzi_part01">
	  	<div class="touzi_p01_img"><img src="/images/img.jpg" /></div>
		<div class="touzi_p01_cent">
			<h3><span class="fl">{{dtb_raise_project_basic.project_name}}</span><span style="font-size:12px" class="fr"><img src="/images/ic07.png" width="9" height="12" />&nbsp;上海&nbsp;&nbsp;&nbsp;<img src="/images/ic08.png" width="12" height="12" />&nbsp;其它类目</span></h3>
			{{dtb_raise_project_basic.project_desc}}……【<a href="#">查看更多</a>】		<br />
			<span class="font_f60">计划筹资：{{dtb_raise_project_basic.aim_money}}万&nbsp;&nbsp;股份：{{dtb_raise_project_basic.aim_equity_offered}}%&nbsp;&nbsp;实际筹资和股份：{{dtb_raise_project_basic.already_money}}万&nbsp;&nbsp;公司估值：{{dtb_raise_project_basic.valuation}}万</span><br />
				创使人<img src="/images/ren.jpg" />&nbsp;&nbsp;领投人&nbsp;&nbsp;虚位以待
			</div>
			<div class="touzi_p01_bnt"><a href="#">我要投资</a></div>
		</div>
		<div class="touzi_part02">
			<div class="touzi_p02_fl"><img width="320" src="/images/img02.jpg"/></div>
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
							<h3>公司简介</h3>
							 {{dtb_raise_project_basic.DtbRaiseProjectIdea.getIdeaInfo()}}
							  <h3>公司简介</h3>
							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;东莞市彤光科技有限公司是一家高新术企业，多年来研发团队致力于液晶显示器测试技术和视觉自动化技术的研发，公司产品及解决方案主要应用于液晶显示器行业，提供从背光模组、液晶显示模组和触摸屏面板的视觉检测方案，同时也为客户提供视觉检测及装配等自动化设备的定制。公司属于精密质检仪器制造行业。
                     </div>
                      <!-- market -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="market">..2.</div>
                      <!-- team -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="team">.3..</div>
                      <!-- update -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="update">.2..</div>
                      <!-- qa -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="qa">.2..</div>
                      <!-- investors -->
                     <div role="tabpanel" class="tab-pane touzi_p02_fr" id="investors">.2..</div>
                   </div>
	</div>


			</div>
		</div>
	  
	</div>
</div>



{{javascript_include('js/bootstrap/bootstrap.min.js')}}
{{javascript_include('js/show.js')}}