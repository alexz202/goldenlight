<div class="width100P vis"></div>
<div class="width100P bg">
	<div class="width_site">
		<div class="touzi_title"><a href="/index">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;项目列表</div>
		<div class="touzi_list">
			<ul>
				<li>
					<div class="touzi_list_fl">发展状态</div>
					<div class="touzi_list_fr"><a href='/Invest?project_type={{project_type}}'><span>全部</span></a><a href="/Invest?project_type={{project_type}}&project_grow_up=0">种子期</a><a href="/Invest?project_type={{project_type}}&project_grow_up=1">成长期</a><a href="/Invest?project_type={{project_type}}&project_grow_up=2">再融资</a></div>
				</li>
				<li>
					<div class="touzi_list_fl">投资行业</div>
					<div class="touzi_list_fr"><span>全部</span>
					{%for key,value in type_list%}
					 <a href="/Invest?product_type={{key}}&project_grow_up={{project_grow_up}}"><span>{{value['name']}}</span></a>
						{%for type in value['children']%}
						  <a href="/Invest?product_type={{type['type_id']}}&project_grow_up={{project_grow_up}}">{{type['name']}}</a>
					 	{%endfor%}
					 	<br/>
					{%endfor%}


					</div>
				</li>



				<!--
				<li>
					<div class="touzi_list_fl">所在地区</div>
					<div class="touzi_list_fr"><span>全部</span><a href="">上海</a><a href="touzi_cent.html">安徽</a><a href="touzi_cent.html">江苏</a></div>
				</li>
				-->
			</ul>
		</div>
	</div>
{% if page.items is defined %}
	<div class="width_site touzi_main">
		<ul>
            {% for dtb_raise_project_basic in page.items %}
			<li><div style=" position:absolute"><div class="img_logo_touzi"><img src="/images/img_logo.jpg" /></div></div>
				<img src="/images/img.jpg" />
				<h3><a href="/invest/pjCenter?raise_id={{dtb_raise_project_basic.getRaiseId()}}">{{ dtb_raise_project_basic.getProjectName() }}</a></h3>
				<h4><a href="/invest/pjCenter?raise_id={{dtb_raise_project_basic.getRaiseId()}}">{{ dtb_raise_project_basic.getProjectDesc() }}</a>……</h4>
				<div class="touzi_main_canshuo">
					<span class="line_right">融资额<br /><font>{{ dtb_raise_project_basic.DtbRaiseProjectWheel.getAimMoney() }}万元</font></span>
					<span class="line_right">出让股份 <br /><font>{{ dtb_raise_project_basic.DtbRaiseProjectWheel.getAimEquityOffered() }}%</font></span>
					<span class="line_right">起投额<br /><font>{{ dtb_raise_project_basic.DtbRaiseProjectWheel.getAlreadyMoney() }}万元</font></span>
					<span>剩余时间<br /><font>{{ dtb_raise_project_basic.DtbRaiseProjectWheel.getEndTs() }}天</font></span>
				</div>
				<div class="jindutiao01"></div>
				<div class="ren">创始人{{ dtb_raise_project_basic.DtbUserBasic.getNickname()}}<img alt="王先生" src="/images/ren.jpg" /> </div>
			</li>
   {% endfor %}
		</ul>
	</div>
 {% endif %}
		<div class="width_site">
			<div class="main_page">
			<?php
			if($page_split['total_split']>0){
					$url_pix="/invest?project_type=".$project_type.'&project_grow_up='.$project_grow_up;
				 if($page_split['now_split']>1){
				 $prev=$page_split['start']-1;
							echo "<a class='page_tag' href='$url_pix&page=$prev'><</a>";
							}

				for($i=$page_split['start'];$i<=$page_split['end'];$i++){
				if($i==intval($page->current))
				echo "<a href='javascript:;' class='current_page_tag'>".$i."</a>";
				else
				echo "<a href='$url_pix&page=$i'>".$i."</a>";
				}
				if($page_split['now_split']<$page_split['total_split']){
				$next=$page_split['end']+1;
				echo "<a class='page_tag' href='$url_pix&page=$next'>&gt;</a>";
				}
            }

			?>

			</div>
		</div>
</div>