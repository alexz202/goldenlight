
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_around/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_around/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Raise</th>
            <th>Bj Of Person</th>
            <th>Invest Of Leader</th>
            <th>Monitor Of System</th>
            <th>Friend Of Link</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_around in page.items %}
        <tr>
            <td>{{ dtb_raise_project_around.getRaiseId() }}</td>
            <td>{{ dtb_raise_project_around.getBjPerson() }}</td>
            <td>{{ dtb_raise_project_around.getInvestLeader() }}</td>
            <td>{{ dtb_raise_project_around.getMonitorSystem() }}</td>
            <td>{{ dtb_raise_project_around.getFriendLink() }}</td>
            <td>{{ link_to("dtb_raise_project_around/edit/"~dtb_raise_project_around.getRaiseId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_around/delete/"~dtb_raise_project_around.getRaiseId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_around/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_around/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_around/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_around/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
