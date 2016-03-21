
{%if isusercenter is defined%}

		<ul>
        			<li {%if is_current==1%} class="user_cent_navbg" {%endif%}><a href="/user_raise_basic/edit/{{raise_id}}">概况</a></li>
        			<li {%if is_current==2%} class="user_cent_navbg" {%endif%}><a href="/user_raise_basic/editcompany/{{raise_id}}">公司</a></li>
        			<li {%if is_current==3%} class="user_cent_navbg" {%endif%}><a href="/user_raise_idea/edit/{{raise_id}}">概念</a></li>
        			<li {%if is_current==4%} class="user_cent_navbg" {%endif%}><a href="/user_raise_market/edit/{{raise_id}}">市场</a></li>
        			<li {%if is_current==5%} class="user_cent_navbg" {%endif%}><a href="/user_raise_team/edit/{{raise_id}}">团队</a></li>
        			<li {%if is_current==6%} class="user_cent_navbg" {%endif%}><a href="/user_raise_around/edit/{{raise_id}}">生态环境</a></li>
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