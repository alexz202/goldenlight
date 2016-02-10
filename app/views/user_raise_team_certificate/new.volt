
{{ form("dtb_raise_project_team_certificate/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("dtb_raise_project_team_certificate", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create dtb_raise_project_team_certificate</h1>
</div>

<table>
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
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
