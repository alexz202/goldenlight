
{{ content() }}

<div align="right">
    {{ link_to("dtb_raise_project_around/new", "Create dtb_raise_project_around") }}
</div>

{{ form("dtb_raise_project_around/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search dtb_raise_project_around</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="raise_id">Raise</label>
        </td>
        <td align="left">
            {{ text_field("raise_id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="bj_person">Bj Of Person</label>
        </td>
        <td align="left">
            {{ text_field("bj_person", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="invest_leader">Invest Of Leader</label>
        </td>
        <td align="left">
            {{ text_field("invest_leader", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="monitor_system">Monitor Of System</label>
        </td>
        <td align="left">
            {{ text_field("monitor_system", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="friend_link">Friend Of Link</label>
        </td>
        <td align="left">
            {{ text_field("friend_link", "size" : 30) }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
