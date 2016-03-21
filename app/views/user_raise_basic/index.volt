{{ content() }}
<div class="width100P bg">
	<div class="user_nav">
		{{ partial("public/user_nav")}}
	</div>
	<div class="user">
		<ul>
		{{ partial("public/project_nav")}}
		</ul>
		<form action="" method="get">
		<table width="100%" border="0" cellspacing="0" cellpadding="30">
		  <tr>
			<td>&nbsp;</td>
		  </tr>
		  {%if status ==0%}
		  <tr>
			<td align="center"><span style="font-size:24px; color:#FF0000">系统正在审核……</span></td>
		  </tr>
		{%elseif status==1%}
		<tr>
			<td align="center"><span style="font-size:24px; color:#FF0000">审核通过</span></td>
		</tr>
		{%elseif status==2%}
		<tr>
			<td align="center"><span style="font-size:24px; color:#FF0000">审核未通过</span></td>
	  	</tr>
		{%endif%}
		  <tr>
			<td>&nbsp;</td>
		  </tr>
		</table>

		
		</form>
	</div>
</div>