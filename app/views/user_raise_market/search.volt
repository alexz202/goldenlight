
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_market/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_market/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Raise</th>
            <th>Aim Of Market</th>
            <th>Aim Of Market Of Feaure</th>
            <th>Competitive Of Strategy</th>
            <th>Update Of Ts</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_market in page.items %}
        <tr>
            <td>{{ dtb_raise_project_market.getRaiseId() }}</td>
            <td>{{ dtb_raise_project_market.getAimMarket() }}</td>
            <td>{{ dtb_raise_project_market.getAimMarketFeaure() }}</td>
            <td>{{ dtb_raise_project_market.getCompetitiveStrategy() }}</td>
            <td>{{ dtb_raise_project_market.getUpdateTs() }}</td>
            <td>{{ link_to("dtb_raise_project_market/edit/"~dtb_raise_project_market.getRaiseId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_market/delete/"~dtb_raise_project_market.getRaiseId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_market/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_market/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_market/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_market/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
