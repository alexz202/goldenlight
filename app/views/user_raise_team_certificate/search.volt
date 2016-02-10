
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_team_certificate/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_team_certificate/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tmmember</th>
            <th>Organization</th>
            <th>Certificate Of Name</th>
            <th>Reward Of Ts</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_team_certificate in page.items %}
        <tr>
            <td>{{ dtb_raise_project_team_certificate.getId() }}</td>
            <td>{{ dtb_raise_project_team_certificate.getTmmemberId() }}</td>
            <td>{{ dtb_raise_project_team_certificate.getOrganization() }}</td>
            <td>{{ dtb_raise_project_team_certificate.getCertificateName() }}</td>
            <td>{{ dtb_raise_project_team_certificate.getRewardTs() }}</td>
            <td>{{ link_to("dtb_raise_project_team_certificate/edit/"~dtb_raise_project_team_certificate.getId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_team_certificate/delete/"~dtb_raise_project_team_certificate.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_team_certificate/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_certificate/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_certificate/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_team_certificate/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
