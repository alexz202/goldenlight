
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_updates/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_updates/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Raise</th>
            <th>Title</th>
            <th>Content</th>
            <th>Create Of Ts</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_update in page.items %}
        <tr>
            <td>{{ dtb_raise_project_update.getId() }}</td>
            <td>{{ dtb_raise_project_update.getRaiseId() }}</td>
            <td>{{ dtb_raise_project_update.getTitle() }}</td>
            <td>{{ dtb_raise_project_update.getContent() }}</td>
            <td>{{ dtb_raise_project_update.getCreateTs() }}</td>
            <td>{{ link_to("dtb_raise_project_updates/edit/"~dtb_raise_project_update.getId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_updates/delete/"~dtb_raise_project_update.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_updates/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_updates/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_updates/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_updates/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
