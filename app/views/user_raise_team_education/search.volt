
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_team_education/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_team_education/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tmmember</th>
            <th>Organization</th>
            <th>Major</th>
            <th>Education</th>
            <th>Reward Of Ts</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_team_education in page.items %}
        <tr>
            <td>{{ dtb_raise_project_team_education.getId() }}</td>
            <td>{{ dtb_raise_project_team_education.getTmmemberId() }}</td>
            <td>{{ dtb_raise_project_team_education.getOrganization() }}</td>
            <td>{{ dtb_raise_project_team_education.getMajor() }}</td>
            <td>{{ dtb_raise_project_team_education.getEducation() }}</td>
            <td>{{ dtb_raise_project_team_education.getRewardTs() }}</td>
            <td>{{ link_to("dtb_raise_project_team_education/edit/"~dtb_raise_project_team_education.getId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_team_education/delete/"~dtb_raise_project_team_education.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_team_education/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_education/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_education/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_education/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
