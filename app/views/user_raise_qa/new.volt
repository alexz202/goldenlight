
{{ form("dtb_raise_project_qa/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("dtb_raise_project_qa", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create dtb_raise_project_qa</h1>
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
            <label for="msg">Msg</label>
        </td>
        <td align="left">
            {{ text_field("msg", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="remsg">Remsg</label>
        </td>
        <td align="left">
            {{ text_field("remsg", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="msg_ts">Msg Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("msg_ts", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="remsg_ts">Remsg Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("remsg_ts", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="user_id">User</label>
        </td>
        <td align="left">
            {{ text_field("user_id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="company_admin_id">Company Of Admin</label>
        </td>
        <td align="left">
            {{ text_field("company_admin_id", "type" : "numeric") }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
