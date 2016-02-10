
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_team_work_info/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_team_work_info/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tmmember</th>
            <th>Company</th>
            <th>Position</th>
            <th>Start Of Ts</th>
            <th>End Of Ts</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_team_work_info in page.items %}
        <tr>
            <td>{{ dtb_raise_project_team_work_info.getId() }}</td>
            <td>{{ dtb_raise_project_team_work_info.getTmmemberId() }}</td>
            <td>{{ dtb_raise_project_team_work_info.getCompany() }}</td>
            <td>{{ dtb_raise_project_team_work_info.getPosition() }}</td>
            <td>{{ dtb_raise_project_team_work_info.getStartTs() }}</td>
            <td>{{ dtb_raise_project_team_work_info.getEndTs() }}</td>
            <td>{{ link_to("dtb_raise_project_team_work_info/edit/"~dtb_raise_project_team_work_info.getId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_team_work_info/delete/"~dtb_raise_project_team_work_info.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_team_work_info/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_work_info/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_work_info/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_work_info/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
