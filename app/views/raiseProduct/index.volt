<div class="width100P bg">

{% if page.items is defined %}
  <div class="width_site touzi_main">
		<ul>
		  {% for dtb_product in page.items %}
			<li>
				<img src="{{dtb_product.getProductImg()}}" />
					<h3><a href="sc_cent.html">{{dtb_product.getProductName()}}</a></h3>
				<div class="sc_price"><font size="+1" class="font_f60 fl">￥{{dtb_product.getPrice()}}</font><font class="fr">库存：{{dtb_product.getExistNum()}}</font></div>
		 	</li>
 			{% endfor%}
		</ul>
	</div>

		<div class="width_site">
			<div class="main_page">
						<?php
            			if($page_split['total_split']>0){
            					$url_pix="/raiseProduct";
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
 {% endif %}
</div>