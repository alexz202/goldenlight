
{{ content() }}

<div align="right">
    {{ link_to("dtb_raise_project_team_certificate/new", "Create dtb_raise_project_team_certificate") }}
</div>

{{ form("dtb_raise_project_team_certificate/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search dtb_raise_project_team_certificate</h1>
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
            <label for="certificate_name">Certificate Of Name</label>
        </td>
        <td align="left">
            {{ text_field("certificate_name", "size" : 30) }}
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
