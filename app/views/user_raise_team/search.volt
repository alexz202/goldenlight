
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_team/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_team/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Tmmember</th>
            <th>Raise</th>
            <th>User Of Name</th>
            <th>Avatar</th>
            <th>Position</th>
            <th>Commitment</th>
            <th>Ownership</th>
            <th>Nationality</th>
            <th>Role</th>
            <th>Birthday</th>
            <th>Country</th>
            <th>City</th>
            <th>Address</th>
            <th>Update Of Ts</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_team in page.items %}
        <tr>
            <td>{{ dtb_raise_project_team.getTmmemberId() }}</td>
            <td>{{ dtb_raise_project_team.getRaiseId() }}</td>
            <td>{{ dtb_raise_project_team.getUserName() }}</td>
            <td>{{ dtb_raise_project_team.getAvatar() }}</td>
            <td>{{ dtb_raise_project_team.getPosition() }}</td>
            <td>{{ dtb_raise_project_team.getCommitment() }}</td>
            <td>{{ dtb_raise_project_team.getOwnership() }}</td>
            <td>{{ dtb_raise_project_team.getNationality() }}</td>
            <td>{{ dtb_raise_project_team.getRole() }}</td>
            <td>{{ dtb_raise_project_team.getBirthday() }}</td>
            <td>{{ dtb_raise_project_team.getCountry() }}</td>
            <td>{{ dtb_raise_project_team.getCity() }}</td>
            <td>{{ dtb_raise_project_team.getAddress() }}</td>
            <td>{{ dtb_raise_project_team.getUpdateTs() }}</td>
            <td>{{ link_to("dtb_raise_project_team/edit/"~dtb_raise_project_team.getTmmemberId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_team/delete/"~dtb_raise_project_team.getTmmemberId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_team/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_team/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_team/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_team/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
