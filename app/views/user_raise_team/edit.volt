{{ content() }}
{{ form("dtb_raise_project_team/save", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("dtb_raise_project_team", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

<div align="center">
    <h1>Edit dtb_raise_project_team</h1>
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
            <label for="user_name">User Of Name</label>
        </td>
        <td align="left">
            {{ text_field("user_name", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="avatar">Avatar</label>
        </td>
        <td align="left">
            {{ text_field("avatar", "size" : 30) }}
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
            <label for="commitment">Commitment</label>
        </td>
        <td align="left">
            {{ text_field("commitment", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="ownership">Ownership</label>
        </td>
        <td align="left">
            {{ text_field("ownership", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="nationality">Nationality</label>
        </td>
        <td align="left">
            {{ text_field("nationality", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="role">Role</label>
        </td>
        <td align="left">
            {{ text_field("role", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="birthday">Birthday</label>
        </td>
        <td align="left">
            {{ text_field("birthday", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="country">Country</label>
        </td>
        <td align="left">
            {{ text_field("country", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="city">City</label>
        </td>
        <td align="left">
            {{ text_field("city", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="address">Address</label>
        </td>
        <td align="left">
            {{ text_field("address", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="update_ts">Update Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("update_ts", "type" : "numeric") }}
        </td>
    </tr>

    <tr>
        <td>{{ hidden_field("id") }}</td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
