
{{ content() }}

<div align="right">
    {{ link_to("dtb_raise_project_team_work_info/new", "Create dtb_raise_project_team_work_info") }}
</div>

{{ form("dtb_raise_project_team_work_info/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search dtb_raise_project_team_work_info</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="id">Id</label>
        </td>
        <td align="left">
            {{ text_field("id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="tmmember_id">Tmmember</label>
        </td>
        <td align="left">
            {{ text_field("tmmember_id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="company">Company</label>
        </td>
        <td align="left">
            {{ text_field("company", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="position">Position</label>
        </td>
        <td align="left">
            {{ text_field("position", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="start_ts">Start Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("start_ts", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="end_ts">End Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("end_ts", "type" : "numeric") }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
