
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_investor/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_investor/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Raise</th>
            <th>User</th>
            <th>Invest Of Money</th>
            <th>Update Of Ts</th>
            <th>Is Of Show</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_investor in page.items %}
        <tr>
            <td>{{ dtb_raise_project_investor.getRaiseId() }}</td>
            <td>{{ dtb_raise_project_investor.getUserId() }}</td>
            <td>{{ dtb_raise_project_investor.getInvestMoney() }}</td>
            <td>{{ dtb_raise_project_investor.getUpdateTs() }}</td>
            <td>{{ dtb_raise_project_investor.getIsShow() }}</td>
            <td>{{ link_to("dtb_raise_project_investor/edit/"~dtb_raise_project_investor.getRaiseId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_investor/delete/"~dtb_raise_project_investor.getRaiseId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_investor/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_investor/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_investor/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_investor/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
