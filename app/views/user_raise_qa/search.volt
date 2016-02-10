
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_qa/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_qa/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Raise</th>
            <th>Msg</th>
            <th>Remsg</th>
            <th>Msg Of Ts</th>
            <th>Remsg Of Ts</th>
            <th>User</th>
            <th>Company Of Admin</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_qa in page.items %}
        <tr>
            <td>{{ dtb_raise_project_qa.getId() }}</td>
            <td>{{ dtb_raise_project_qa.getRaiseId() }}</td>
            <td>{{ dtb_raise_project_qa.getMsg() }}</td>
            <td>{{ dtb_raise_project_qa.getRemsg() }}</td>
            <td>{{ dtb_raise_project_qa.getMsgTs() }}</td>
            <td>{{ dtb_raise_project_qa.getRemsgTs() }}</td>
            <td>{{ dtb_raise_project_qa.getUserId() }}</td>
            <td>{{ dtb_raise_project_qa.getCompanyAdminId() }}</td>
            <td>{{ link_to("dtb_raise_project_qa/edit/"~dtb_raise_project_qa.getId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_qa/delete/"~dtb_raise_project_qa.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_qa/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_qa/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_qa/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_qa/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
