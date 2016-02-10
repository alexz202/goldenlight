
{{ content() }}

<div align="right">
    {{ link_to("dtb_raise_project_team_education/new", "Create dtb_raise_project_team_education") }}
</div>

{{ form("dtb_raise_project_team_education/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search dtb_raise_project_team_education</h1>
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
            <label for="organization">Organization</label>
        </td>
        <td align="left">
            {{ text_field("organization", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="major">Major</label>
        </td>
        <td align="left">
            {{ text_field("major", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="education">Education</label>
        </td>
        <td align="left">
            {{ text_field("education", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="reward_ts">Reward Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("reward_ts", "size" : 30) }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
