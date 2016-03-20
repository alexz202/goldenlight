
{%if isusercenter is defined%}

		<ul>
        			<li {%if is_current==1%} class="user_cent_navbg" {%endif%}><a href="user_raise_basic/edit/2">概况</a></li>
        			<li {%if is_current==2%} class="user_cent_navbg" {%endif%}><a href="user1_02.html">公司</a></li>
        			<li {%if is_current==3%} class="user_cent_navbg" {%endif%}><a href="user1_03.html">概念</a></li>
        			<li {%if is_current==4%} class="user_cent_navbg" {%endif%}><a href="user1_04.html">市场</a></li>
        			<li {%if is_current==5%} class="user_cent_navbg" {%endif%}><a href="user1_05.html">团队</a></li>
        			<li {%if is_current==6%} class="user_cent_navbg" {%endif%}><a href="user1_06.html">生态环境</a></li>
        			<li {%if is_current==7%} class="user_cent_navbg" {%endif%}><a href="/user_raise_basic/index">审核情况</a></li>
        		</ul>
{%else%}


        		<ul>
                			<li {%if is_current==1%} class="user_cent_navbg" {%endif%}>概况</li>
                			<li {%if is_current==2%} class="user_cent_navbg" {%endif%}>公司</li>
                			<li {%if is_current==3%} class="user_cent_navbg" {%endif%}>概念</li>
                			<li {%if is_current==4%} class="user_cent_navbg" {%endif%}>市场</li>
                			<li {%if is_current==5%} class="user_cent_navbg" {%endif%}>团队</li>
                            <li {%if is_current==6%} class="user_cent_navbg" {%endif%}>生态环境</li>
                		</ul>
        		{%endif %}