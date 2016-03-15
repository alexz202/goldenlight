	<ul>
	{%if iscreate is defined %}
			<li class="user_nav_line"><a href="/user_raise_basic/new?type=0">
			{%if project_type==0%}
			<span class="font_f60">种子期</span>
         	 {%else%}
          	<span class="">种子期</span>
         	 {%endif%}
			</a></li>
			<li class="user_nav_line">

			<a href="/user_raise_basic/new?type=1">
			{%if project_type==1%}
			<span class="font_f60">成长期</span>
			 {%else%}
			<span class="">成长期</span>
			 {%endif%}

			</a></li>
			<li class="user_nav_line"><a href="/user_raise_basic/new?type=2">
			{%if project_type==2%}
			<span class="font_f60">再融资</span>
			 {%else%}
			<span class="">再融资</span>
			 {%endif%}
			</a></li>
		{%else%}
					<li class="user_nav_line"><a href="javascript:;">
                			{%if project_type==0%}
                			<span class="font_f60">种子期</span>
                         	 {%else%}
                          	<span class="">种子期</span>
                         	 {%endif%}
                			</a></li>
                			<li class="user_nav_line">

                			<a href="javascript:;">
                			{%if project_type==1%}
                			<span class="font_f60">成长期</span>
                			 {%else%}
                			<span class="">成长期</span>
                			 {%endif%}

                			</a></li>
                			<li class="user_nav_line"><a href="javascript:;">
                			{%if project_type==2%}
                			<span class="font_f60">再融资</span>
                			 {%else%}
                			<span class="">再融资</span>
                			 {%endif%}
                			</a></li>
		{%endif%}
		</ul>