
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_idea/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_idea/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Raise</th>
            <th>Idea Of Info</th>
            <th>Purpose</th>
            <th>Livestock</th>
            <th>Useform</th>
            <th>Technical</th>
            <th>Update Of Ts</th>
            <th>Market Of Info</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_idea in page.items %}
        <tr>
            <td>{{ dtb_raise_project_idea.raise_id }}</td>
            <td>{{ dtb_raise_project_idea.idea_info }}</td>
            <td>{{ dtb_raise_project_idea.purpose }}</td>
            <td>{{ dtb_raise_project_idea.livestock }}</td>
            <td>{{ dtb_raise_project_idea.useform }}</td>
            <td>{{ dtb_raise_project_idea.technical }}</td>
            <td>{{ dtb_raise_project_idea.update_ts }}</td>
            <td>{{ dtb_raise_project_idea.market_info }}</td>
            <td>{{ link_to("dtb_raise_project_idea/edit/"~dtb_raise_project_idea.raise_id, "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_idea/delete/"~dtb_raise_project_idea.raise_id, "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_idea/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_idea/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_idea/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_idea/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
